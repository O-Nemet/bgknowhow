<?
include_once('../header.php');
?>

    <h2 class="page_title">BG JSON - Downloads</h2>

    <br>
    <p>
        This page is providing Hearthstone Battleground data in different data collections and file types.<br>
        Feel free to use this as a starting point for your own projects and content creation.<br>
        <br>
        At least every 8 hours fresh files will be generated from the database.<br>
        Official updates and hotfixes will be integrated as soon as possible.
    </p>

    <br><br>

    <table class="format-table">
        <thead>
        <tr>
            <th colspan="3">JSON format</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="bgjson/output/bg_heroes_all.json"><img src="//bgknowhow.com/images/icons/download_icon.png"> All BG Heroes</a></td>
            <td><a href="bgjson/output/bg_buddies_all.json"><img src="//bgknowhow.com/images/icons/download_icon.png"> All BG Buddies</a></td>
            <td><a href="bgjson/output/bg_minions_all.json"><img src="//bgknowhow.com/images/icons/download_icon.png"> All BG Minions</a></td>
        </tr>
        </tbody>
    </table>
    <i style="font-style: italic; font-size: 10px; margin-top: 5px; float: right;">Last updated: <? echo date("F d, Y H:i:s", filemtime('output/bg_heroes_all.json')); ?></i>

    <br><br>

    <table class="format-table">
        <thead>
        <tr>
            <th colspan="3">CSV format</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="bgjson/output/bg_heroes_all.csv"><img src="//bgknowhow.com/images/icons/download_icon.png"> All BG Heroes</a></td>
            <td><a href="bgjson/output/bg_buddies_all.csv"><img src="//bgknowhow.com/images/icons/download_icon.png"> All BG Buddies</a></td>
            <td><a href="bgjson/output/bg_minions_all.csv"><img src="//bgknowhow.com/images/icons/download_icon.png"> All BG Minions</a></td>
        </tr>
        </tbody>
    </table>
    <i style="font-style: italic; font-size: 10px; margin-top: 5px; float: right;">Last updated: <? echo date("F d, Y H:i:s", filemtime('output/bg_heroes_all.json')); ?></i>

    <br><br>

    <p><u>Latest Changes:</u></p>
    <p>20.04.2022 - Fixed the Blizzard-IDs for Selfless, Spawn and Felfin Navigator.</p>
    <p>18.04.2022 - Added nameShort (i.e. "Baron" for "Baron Rivendare") to both datasets.</p>

    <br><br>

    <p>Code Example (PHP):</p>
    <pre style="background-color: lightblue; border-radius: 10px;"><code>
        // read the file and convert
        $tempMinions = json_decode(file_get_contents('bg_minions_all.json'));
        // optional filtering condition (for example for tier1 minions)
        $needle = 1;

        // build final array
        foreach ($tempMinions->data as $key => $object) {
            // only get tier1 minions (optional)
            if ($object->tier === $needle) {
            $minions[] = $object;
        }

        // check the result
        var_dump($minions);
    </code></pre>
    <br>
    <p>Code Example (JS via URL):</p>
    <pre style="background-color: lightblue; border-radius: 10px;"><code>
        async function readJSON() {
            const requestURL = 'https://bgknowhow.com/bgjson/output/bg_minions_all.json';
            const request = new Request(requestURL);

            const response = await fetch(request);
            const minions = await response.json();

            // check the result
            console.log(minions.data);

            return minions.data;
        }

        // usage
        let minions = readJSON();
    </code></pre>
    <br>
    <p>Code Example (JS via local file):</p>
    <pre style="background-color: lightblue; border-radius: 10px;"><code>
        function readTextFile(file, callback) {
            var rawFile = new XMLHttpRequest();
            rawFile.overrideMimeType("application/json");
            rawFile.open('GET', file, true);
            rawFile.onreadystatechange = function() {
                if (rawFile.readyState === 4 && rawFile.status == '200') {
                    callback(rawFile.responseText);
                }
            }
            rawFile.send(null);
        }

        // usage:
        readTextFile('bg_minions_all.json', function(text) {
            var minions = JSON.parse(text.data);

            // check the result
            console.log(minions);
        });
    </code></pre>

    <br><br>
<?
include_once('../footer.php');
?>