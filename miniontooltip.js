// This script was taken from https://giventofly.github.io/MTG-Tooltip-Js/#examples and modified to display either
// minion or heropower pictures for Hearthstone Battlegrounds
// Original Copyright (c) 2018 José Moreira (original source code from https://github.com/giventofly/MTG-Tooltip-Js)

const bgTooltip = function (customSettings) {
    arguments.length ? this._settings = Object.assign({}, this._settings, customSettings) : null;
    console.log(this._settings);

    if (this._settings.log) console.log("bgTooltip loaded");
    console.log(hoverImages);
    this._settings.start ? this.start() : null;
};

bgTooltip.prototype = {
    //start this
    start: function () {
        //if on mobile, this is sketchy, but kind of works
        if (this._settings.mobile && window.innerWidth <= 600 && window.innerHeight <= 500) {
            if (this._settings.log) console.log("Possible Mobile mode detected, exiting...");
            return;
        }
        //start it
        this._alltogether();
        if (this._settings.log) console.log("bgTooltip started");

        const myclass = this._settings.myclass;
        const scope = document.querySelector(this._settings.element);
        this.mymousemove(scope);
        //add class loaded to load just one time, in case of multiple instances
        const mycards = scope.querySelectorAll('.' + myclass + ':not(.' + myclass + 'mtgloaded)');
        if (this._settings.log) console.log("found cards to create tooltip: ", mycards.length);
        //set pointer for cards
        mycards.forEach(element => {
            element.style.cursor = 'pointer';
            // get user element data
            //let options = element.dataset.options; // data-options
            let name = element.dataset.name; // data-name
            let shortname = element.dataset.shortname; // data-shortname
            let set = element.dataset.set; // data-set
            let multiverseid = element.dataset.multiverseid; // data-multiverseid
            let specialimg = element.dataset.specialimg; //data-special
            let contents = element.innerHTML; // Span contents (link text)
            // let params = "https://gatherer.wizards.com/Handlers/Image.ashx?type=card";

            let hoverId = '';
            let params = '';
            let param_img_suffix = '';
            hoverId = hoverImages.find(e => (e.name === contents || e.shortname === contents));

            if (typeof hoverId !== "undefined") {
                if (hoverId.type === 'H') {
                    params = "//bgknowhow.com/images/heropowers/"
                    param_img_suffix = "_render_80.webp";
                } else if (hoverId.type === 'A') {
                    params = "//bgknowhow.com/images/anomalies/"
                    param_img_suffix = "_render_80.webp";
                } else if (hoverId.type === 'S') {
                    params = "//bgknowhow.com/images/spells/"
                    param_img_suffix = "_render_80.webp";
                } else if (hoverId.type === 'M') {
                    params = "//bgknowhow.com/images/minions/"
                    param_img_suffix = "_render_80.webp";
                }
                hoverId = (hoverId ? hoverId.id : '');
                // console.log(hoverId);

                let cardName = "";
                let setName = "";
                let cardMultiverse = "";
                //auto create from name
                if (!multiverseid && !specialimg) {
                    //case of using forced name and/or set
                    if (typeof name != "undefined" && name.length > 0) {
                        cardName = '&name=' + encodeURI(name);
                    } else cardName = '&name=' + encodeURI(contents);
                    //set is equals to the wotc set code designation
                    if (typeof set != "undefined" && set.length > 0) {
                        setName = '&set=' + set;
                    }
                    // special land types
                    const landtype = (typeof name != "undefined" && name.length > 0) ? this.getSetLands(name) : this.getSetLands(contents);
                    if (landtype) {
                        setName = '&set=' + landtype;
                    }
                    //console.log("name", cardName, "set", setName, "landyset", landtype);
                }
                //use multiverse
                if (typeof multiverseid != "undefined" && multiverseid.length > 0) {
                    //console.log("multiverse", element);
                    cardMultiverse = '&multiverseid=' + multiverseid;
                }
                //use special ** important ** assumes no other option is used **
                if (typeof specialimg != "undefined" && specialimg.length > 0) {
                    params = this._settings.specialImage + specialimg;
                }
                // params += cardName + setName + cardMultiverse
                params += hoverId + param_img_suffix;
                // console.log(params);
                this.run(element, params);
            }
        });
        if (this._settings.log) console.log("Created cards tooltips divs, starting creating the tooltips pairs");
    },
    run: function (element, params) {
        const myclass = this._settings.myclass;
        let settingsID = this._settings.id;
        const scope = document.querySelector(this._settings.element);

        element.id = myclass + "_p" + settingsID;
        let tooltip = document.createElement('span');
        //class from hover = mycalss + hover
        tooltip.classList.add(myclass + 'hover');
        tooltip.id = myclass + "_c" + settingsID;
        //lazyload
        let lazyload = 'src';
        if (this._settings.lazyload) {
            lazyload = 'data-src';
        }
        //costumized wrappers
        const wrapIn = this._settings.wrap_in;
        const wrapOut = this._settings.wrap_out;
        tooltip.innerHTML = `${wrapIn}<img ${lazyload}="${params}" width="250" alt="tooltip image" >${wrapOut}`;

        element.dataset.tooltipid = settingsID;
        tooltip.dataset.tooltipid = settingsID;
        // don't wrap
        element.style.whiteSpace = 'nowrap';

        scope.appendChild(tooltip);
        tooltip.style.display = 'none';
        tooltip.style.opacity = '0';
        tooltip.classList.add(myclass + 'tooltipstarted')

        // increment ids for the next pair
        this._settings.id = settingsID + 1;
        let that = this;
        element.addEventListener('mouseover', function (target) {
            that.mouseenter(target);
        });
        element.addEventListener('mouseleave', function (target) {
            that.mouseleave(target);
            // setTimeout(that.mouseleave(target), 3000);
        });
    },
    mouseleave: function (element) {
        let childid = element.target.dataset.tooltipid;
        if (!childid) {
            return false;
        }
        const myclass = this._settings.myclass;
        const tooltip = document.getElementById(myclass + "_c" + childid);

        if (this._settings.log) console.log('Mouse leave: ', element);
        //create css transition to get animation
        if (this._settings.fadetime > 0) {
            let fade = this._settings.fadetime;
            tooltip.style.transition = 'all ' + fade + 'ms ease-out';
            tooltip.style.opacity = '0';
            setTimeout(() => {
                tooltip.style.display = 'none';
                tooltip.style.transition = '';
            }, fade);
        } else {
            tooltip.style.display = 'none';
        }
    },
    mouseenter: function (element) {
        let childid = element.target.dataset.tooltipid;
        if (!childid) {
            return false;
        }
        const myclass = this._settings.myclass;
        // let linkid = $(this).data("linkid");
        const tooltip = document.getElementById(myclass + "_c" + childid);
        //if lazyload
        if (this._settings.lazyload) {
            const tooltipimage = tooltip.querySelector('img');
            const linksrc = tooltipimage.dataset.src;
            tooltipimage.setAttribute('src', linksrc);
        }
        //set the element css
        tooltip.style.position = "absolute";
        tooltip.style.opacity = this._settings.opacity;
        //tooltip.offsetLeft = 0;
        //tooltip.offsetTop = 0;
        tooltip.style.display = 'inline-block';

        //get position params
        let p_top = element.pageY;
        let p_left = element.pageX;
        let w_width = window.innerWidth; // Window (viewport) width
        let w_height = window.innerHeight; // Window (viewport) height
        let v_scroll = window.scrollY; // Vertical scroll
        let h_scroll = window.scrollX; // Horizontal scroll

        let top = 0; // Tooltip top
        let left = 0; // Tooltip left
        // let width = 258; // Tooltip width (extra 25px)
        let width = 125; // Tooltip width (extra 25px)
        // let height = 346; // Tooltip height (extra 25px)
        let height = 170; // Tooltip height (extra 25px)

        // Position the tooltip left aligned, top aligned
        left = p_left;
        top = p_top + 25;
        // tooltip over right edge
        if (p_left + width > w_width + h_scroll) {
            left = h_scroll + w_width - width;
        }
        // tooltip over left (this never happens, I hope)
        // tooltip over the bottom
        if (top + height > w_height + v_scroll) {
            top = p_top - height;
        }
        // If tooltip over the top (this never happens too, I hope again, be positive :D)
        //if (top < v_scroll) { left = p_left + p_width; top = p_top; }

        // Lock in the final position:
        tooltip.style.left = left + 'px';
        tooltip.style.top = top + 'px';
    },
    mymousemove: function (scope) {
        const that = this;
        //get mouse position
        scope.addEventListener('mousemove', function (event) {
            that._settings.mousex = event.pageX;
            that._settings.mousey = event.pageY;
        });
    },
    //remove all instance
    kill: function () {
        let myclass = this._settings.myclass;
        const scope = document.querySelector(this._settings.element);
        const mycards = scope.querySelectorAll('.' + myclass);
        mycards.forEach(element => {
            element.removeEventListener('mouseover', function (target) {
                that.mouseenter(target);
            });
            element.removeEventListener('mouseleave', function (target) {
                that.mouseleave(target);
            });
            element.classList.remove(myclass);
            element.classList.remove('mtgloaded');
            let childid = element.dataset.tooltipid;
            const tooltip = document.getElementById(myclass + "_c" + childid);
            tooltip.parentNode.removeChild(tooltip);
            element.removeAttribute('data-tooltipid');
            element.removeAttribute('id');
        });
        if (this._settings.log) console.log(this._settings.name, "removed all instances of bgTooltips");
    },
    //configuration
    _settings: {
        name: "BG Tooltip JS",
        version: "1.0",
        element: "body",
        myclass: "hoverimage",
        //fixedelement: null, //show inside this only, todo: get elemnt pos, put elems there
        lazyload: true, //lazyload images on request
        fadetime: 300, // Duration of the fade animation in 100ms 1 = 100ms
        opacity: 1.0, // Default opacity of the tooltip
        mousex: 0,
        mousey: 0,
        id: 0,
        log: false, //for debug porpuses
        start: true, //autostart or not
        wrap_in: "", //wrappers in case for some special css/js reasons
        wrap_out: "", //wrappers out case for some special css/js reasons
        specialImage: "", //link to use customized image on request (probably used on multiverseid doesn't exist and want to load from another place)
        mobile: false, //disable on mobile, not perfect but should work 95% of the time
        basiclands: "ust", //default for basic lands, suggestions: UHG (unhinged),UST (Unstable) or UGL (unglued)
        shocklands: "exp", //add your favorite set for shocklands :)
        fetchlands: "exp", //defaults for fetchlands
        painlands: "exp", //defaults for painlands

    },
    getSetLands: function (name) {
        const card = name.toLowerCase();
        if (this._lands[card]) {
            const type = (this._lands[card].type).toLowerCase();
            const set = (this._settings[type]).toLowerCase();
            const option = this._lands[card][set];
            if (set && option) {
                return option.toUpperCase();
            } else {
                let avail = "";
                Object.values(this._lands[card]).forEach(elem => {
                    if (elem != type) {
                        avail += elem + " ";
                    }
                });
                console.log(`bgTooltip: ERROR: Incorrect option on ${type}!! options available are: ${avail}`);
            }
        }
        return null;
    },
    //define images for lands
    _shocklands: [{"blood crypt": {"type": "shocklands", "old": "dis", "new": "rtr", "exp": "exp"}}, {"breeding pool": {"type": "shocklands", "old": "dis", "new": "gtc", "exp": "exp"}}, {"godless shrine": {"type": "shocklands", "old": "gpt", "new": "gtc", "exp": "exp"}}, {"hallowed fountain": {"type": "shocklands", "old": "dis", "new": "rtr", "exp": "exp"}}, {"overgrown tomb": {"type": "shocklands", "old": "rav", "new": "rtr", "exp": "exp"}}, {"sacred foundry": {"type": "shocklands", "old": "rav", "new": "gtc", "exp": "exp"}}, {"steam vents": {"type": "shocklands", "old": "gpt", "new": "rtr", "exp": "exp"}}, {"stomping ground": {"type": "shocklands", "old": "gpt", "new": "gtc", "exp": "exp"}}, {"temple garden": {"type": "shocklands", "old": "rav", "new": "rtr", "exp": "exp"}}, {"watery grave": {"type": "shocklands", "old": "rav", "new": "gtc", "exp": "exp"}}],
    _fetchlands: [{"arid mesa": {"type": "fetchlands", "old": "zen", "new": "mm3", "exp": "exp"}}, {"bloodstained mire": {"type": "fetchlands", "old": "ons", "new": "ktk", "exp": "exp"}}, {"flooded strand": {"type": "fetchlands", "old": "ons", "new": "ktk", "exp": "exp"}}, {"marsh flats": {"type": "fetchlands", "old": "zen", "new": "mm3", "exp": "exp"}}, {"misty rainforest": {"type": "fetchlands", "old": "zen", "new": "mm3", "exp": "exp"}}, {"polluted delta": {"type": "fetchlands", "old": "ons", "new": "ktk", "exp": "exp"}}, {"scalding tarn": {"type": "fetchlands", "old": "zen", "new": "mm3", "exp": "exp"}}, {"verdant catacombs": {"type": "fetchlands", "old": "zen", "new": "mm3", "exp": "exp"}}, {"windswept heath": {"type": "fetchlands", "old": "ons", "new": "ktk", "exp": "exp"}}, {"wooded foothills": {"type": "fetchlands", "old": "ons", "new": "ktk", "exp": "exp"}}],
    _painlands: [{"adarkar wastes": {"type": "painlands", "old": "ie", "new": "10e", "exp": "6e"}}, {"battlefield forge": {"type": "painlands", "old": "ap", "new": "ori", "exp": "10e"}}, {"brushland": {"type": "painlands", "old": "ie", "new": "10e", "exp": "6e"}}, {"caves of koilos": {"type": "painlands", "old": "ap", "new": "ori", "exp": "10e"}}, {"karplusan forest": {"type": "painlands", "old": "ap", "new": "ori", "exp": "10e"}}, {"llanowar wastes": {"type": "painlands", "old": "ap", "new": "ori", "exp": "10e"}}, {"shivan reef": {"type": "painlands", "old": "ap", "new": "ori", "exp": "10e"}}, {"yavimaya coast": {"type": "painlands", "old": "ap", "new": "ori", "exp": "10e"}}, {"underground river": {"type": "painlands", "old": "ap", "new": "ori", "exp": "10e"}}, {"sulfurous springs": {"type": "painlands", "old": "ap", "new": "ori", "exp": "10e"}}],
    _basiclands: [{"mountain": {"type": "basiclands", "uhn": "unh", "ust": "ust", "ugl": "ug"}}, {"plains": {"type": "basiclands", "uhn": "unh", "ust": "ust", "ugl": "ug"}}, {"forest": {"type": "basiclands", "uhn": "unh", "ust": "ust", "ugl": "ug"}}, {"swamp": {"type": "basiclands", "uhn": "unh", "ust": "ust", "ugl": "ug"}}, {"island": {"type": "basiclands", "uhn": "unh", "ust": "ust", "ugl": "ug"}}],
    _alltogether: function () {
        //join all the landsets together
        const alltogether = [this._shocklands, this._fetchlands, this._painlands, this._basiclands];
        alltogether.forEach(elem => {
            elem.forEach((item, index) => {
                Object.assign(this._lands, elem[index]);
            });
        });
    },
    _lands: {},

}
