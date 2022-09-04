<?php
include_once('../header.php');
?>
    <!--    <script>-->
    <!--        async function readJSON() {-->
    <!--            const requestURL = 'https://bgknowhow.com/bgjson/output/bg_minions_all.json';-->
    <!--            const request = new Request(requestURL);-->
    <!---->
    <!--            const response = await fetch(request);-->
    <!--            const minions = await response.json();-->
    <!---->
    <!--            // check the result-->
    <!--            console.table(minions.data);-->
    <!--        }-->
    <!---->
    <!--        let minions = readJSON();-->
    <!--    </script>-->

    <h2 class="page_title">BG JSON</h2>

    <br>
    <p class="bgjson_introduction">
        This page is providing curated and condensed Hearthstone Battleground data in different data collections and file types.<br>
        Feel free to use this as a starting point for your own projects and content creation (code examples below).<br>
        <br>
        These datasets have several advantages over the data available from the Blizzard API or the Hearthstone JSON files:<br>
        For example <em>nameShort</em> attaches the short name the community uses to reference the entity (e.g. 'Eliza' instead of 'Dread Admiral Eliza'), <em>pictureSmall</em> references a webp version up to ten times smaller than the original image, while <em>websites</em> includes an array of links to the entity representation on the biggest HS community hubs.
        For minions, <em>abilities</em> includes an array of boolean key/value pairs, indicating skills like Battlecry or Taunt, and for heroes the <em>armorTier</em> as well as the <em>picturePortrait</em> are part of the data collection.<br>
        <br>
        At least every 8 hours fresh files will be generated from the database.<br>
        Official updates and hotfixes will be integrated as soon as possible.<br>
        If you have any suggestion for additional properties that could/should be implemented, just drop me a message.
    </p>

    <br><br>

    <table class="format-table">
        <thead>
        <tr>
            <th colspan="3">JSON format (active only)</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td colspan="3"><a href="//bgknowhow.com/bgjson/output/bg_entities_active.json"><img src="//bgknowhow.com/images/icons/download_icon.png" alt="Download File"> Active BG Entities</a></td>
        </tr>
        <tr>
            <td><a href="//bgknowhow.com/bgjson/output/bg_heroes_active.json"><img src="//bgknowhow.com/images/icons/download_icon.png" alt="Download File"> Active BG Heroes</a></td>
            <td><a href="//bgknowhow.com/bgjson/output/bg_minions_active.json"><img src="//bgknowhow.com/images/icons/download_icon.png" alt="Download File"> Active BG Minions</a></td>
            <td>&nbsp;</td>
        </tr>
        </tbody>
    </table>
    <span class="bgjson_last_update">Last update: <?= date("F d, Y H:i:s", filemtime('output/bg_heroes_active.json')); ?></span>

    <br><br>

    <table class="format-table">
        <thead>
        <tr>
            <th colspan="3">JSON format (all)</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td colspan="3"><a href="//bgknowhow.com/bgjson/output/bg_entities_all.json"><img src="//bgknowhow.com/images/icons/download_icon.png" alt="Download File"> All BG Entities</a></td>
        </tr>
        <tr>
            <td><a href="//bgknowhow.com/bgjson/output/bg_heroes_all.json"><img src="//bgknowhow.com/images/icons/download_icon.png" alt="Download File"> All BG Heroes</a></td>
            <td><a href="//bgknowhow.com/bgjson/output/bg_minions_all.json"><img src="//bgknowhow.com/images/icons/download_icon.png" alt="Download File"> All BG Minions</a></td>
            <td><a href="//bgknowhow.com/bgjson/output/bg_buddies_all.json"><img src="//bgknowhow.com/images/icons/download_icon.png" alt="Download File"> All BG Buddies</a></td>
        </tr>
        </tbody>
    </table>
    <span class="bgjson_last_update">Last update: <?= date("F d, Y H:i:s", filemtime('output/bg_heroes_all.json')); ?></span>

    <br><br>

    <table class="format-table">
        <thead>
        <tr>
            <th colspan="3">CSV format (active only)</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="//bgknowhow.com/bgjson/output/bg_heroes_active.csv"><img src="//bgknowhow.com/images/icons/download_icon.png" alt="Download File"> Active BG Heroes</a></td>
            <td><a href="//bgknowhow.com/bgjson/output/bg_minions_active.csv"><img src="//bgknowhow.com/images/icons/download_icon.png" alt="Download File"> Active BG Minions</a></td>
            <td>&nbsp;</td>
        </tr>
        </tbody>
    </table>
    <span class="bgjson_last_update">Last update: <?= date("F d, Y H:i:s", filemtime('output/bg_heroes_active.csv')); ?></span>

    <br><br>

    <table class="format-table">
        <thead>
        <tr>
            <th colspan="3">CSV format (all)</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="//bgknowhow.com/bgjson/output/bg_heroes_all.csv"><img src="//bgknowhow.com/images/icons/download_icon.png" alt="Download File"> All BG Heroes</a></td>
            <td><a href="//bgknowhow.com/bgjson/output/bg_minions_all.csv"><img src="//bgknowhow.com/images/icons/download_icon.png" alt="Download File"> All BG Minions</a></td>
            <td><a href="//bgknowhow.com/bgjson/output/bg_buddies_all.csv"><img src="//bgknowhow.com/images/icons/download_icon.png" alt="Download File"> All BG Buddies</a></td>
        </tr>
        </tbody>
    </table>
    <span class="bgjson_last_update">Last update: <?= date("F d, Y H:i:s", filemtime('output/bg_heroes_all.csv')); ?></span>

    <br><br>

    <p class="caption"><u>Latest Changes:</u></p>
    <br>
    <ul id="latest_changes">
        <li>03.09.2022 - Added BG hotfix changes (armor tier adjustments)</li>
        <li>30.08.2022 - Added BG changes from the 24.2.0 patch notes.</li>
        <li>16.08.2022 - Added BG changes from the 24.0.3 patch notes.</li>
        <li>26.07.2022 - Added BG changes from the 24.0.0 patch notes.</li>
        <li>21.07.2022 - Added pool (i.e. "Naga" for "Queen Azshara") to the hero dataset.</li>
        <li>30.06.2022 - Added BG changes from the 23.6.1 patch notes.</li>
        <li>27.06.2022 - Added BG changes from the 23.6.0 patch notes.</li>
        <li>16.06.2022 - Added BG changes from the 23.4.3 patch notes.</li>
        <li>06.06.2022 - Added picturePortrait to the hero dataset.</li>
        <li>01.06.2022 - Added BG changes from the 23.4.0 patch notes.</li>
        <li>26.05.2022 - Added BG hotfix changes (Warden of Old in, Stormscale Siren out)</li>
        <li>19.05.2022 - Added BG changes from the 23.2.2 patch notes.</li>
        <li>15.05.2022 - Renamed/added pictureSmall property to all datasets (converted all images to 80% webp format).</li>
        <li>10.05.2022 - Added BG changes from the 23.2.0 patch notes.</li>
        <li>09.05.2022 - Added new hero and all new minions of the upcoming patch (isActive = false, until patchday).</li>
        <li>08.05.2022 - Changed blizzardId property name to id for all datasets.</li>
        <li>06.05.2022 - Updated the hearthpwn website links (correct IDs now) for the buddies json dataset.</li>
        <li>06.05.2022 - Updated the playhearthstone and hearthpwn website links (correct IDs now) for the heroes json dataset.</li>
        <li>03.05.2022 - Updated the playhearthstone and hearthpwn website links (correct IDs now) for the minion json dataset.</li>
        <li>02.05.2022 - Added nameShort property (i.e. "Faelin" for "Ambassador Faelin") to the hero datasets.</li>
        <li>02.05.2022 - Added summonId property (i.e. "CFM_315t" for Alleycat) to the minion datasets (1:1 relation to non-random tokens).</li>
        <li>26.04.2022 - Added BG changes from the 23.0.3 patch notes.</li>
        <li>24.04.2022 - Fixed the Hp-Blizzard-IDs for the newer heroes (a 'p' was missing at the end).</li>
        <li>22.04.2022 - Added the blizzardId as a separate property to the heroes/buddies/minions datasets.</li>
        <li>21.04.2022 - Switched the picture links for minions/buddies/heropowers to the correct BG images (whoopsie!).</li>
        <li>20.04.2022 - Fixed the Blizzard-IDs for Selfless, Spawn and Felfin Navigator.</li>
        <li>18.04.2022 - Added nameShort property (i.e. "Baron" for "Baron Rivendare") to the minion datasets.</li>
    </ul>

    <br><br>

    <p class="caption">Code Example (PHP):</p>
    <pre class="code_example"><code>
        // read the file and convert
        $tempMinions = json_decode(file_get_contents('https://bgknowhow.com/bgjson/output/bg_minions_all.json'));

        // build final array
        foreach ($tempMinions->data as $key => $object) {
            // only get non-token tier1 minions (optional)
            if ($object->tier === 1 && $object->isToken === false) {
            $minions[] = $object;
        }

        // check the result
        var_dump($minions);
    </code></pre>
    <br>
    <p class="caption">Code Example (Python via URL with requests module):</p>
    <pre class="code_example"><code>
        import requests, json

        # read the file and convert
        response = requests.get('https://bgknowhow.com/bgjson/output/bg_minions_all.json').text
        tempMinions = json.loads(response)['data']

        # build final array
        minions = []
        for minion in tempMinions:
          # only get non-token tier1 minions (optional)
          if minion['tier'] == 1 and minion['isToken'] == False:
            minions.append(minion);

        # check the result
        print(json.dumps(minions, indent=4))
    </code></pre>
    <br>
    <p class="caption">Code Example (JS via URL):</p>
    <pre class="code_example"><code>
        async function readJSON() {
            const requestURL = 'https://bgknowhow.com/bgjson/output/bg_minions_all.json';
            const request = new Request(requestURL);

            const response = await fetch(request);
            const minions = await response.json();

            // check the result
            console.table(minions.data);

            return minions.data;
        }

        // usage
        let minions = readJSON();
    </code></pre>
    <br>
    <p class="caption">Code Example (JS via local file):</p>
    <pre class="code_example"><code>
        function readTextFile(file, callback) {
            let rawFile = new XMLHttpRequest();
            rawFile.overrideMimeType("application/json");
            rawFile.open('GET', file, true);
            rawFile.onreadystatechange = function() {
                if (rawFile.readyState === 4 && rawFile.status === 200) {
                    callback(rawFile.responseText);
                }
            }
            rawFile.send(null);
        }

        // usage
        readTextFile('bg_minions_all.json', function(text) {
            let minions = JSON.parse(text.data);

            // check the result
            console.table(minions);
        });
    </code></pre>
    <br><br>

<?php
include_once('../footer.php');
?>