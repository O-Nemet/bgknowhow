<?php
include_once('../header.php');
?>
    <!--    <script>-->
    <!--        async function readJSON() {-->
    <!--            const requestURL = '/bgjson/output/bg_minions_all.json';-->
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
        This page is providing curated and condensed Hearthstone Battlegrounds data in different data collections and file types.<br>
        Feel free to use this as a starting point for your own projects and content creation (code examples below).<br>
        <br>
        These datasets have several advantages over the data available from the Blizzard API or the Hearthstone JSON files:<br>
        For example <em>nameShort</em> attaches the short name the community uses to reference the entity (e.g. '<a class="hoverimage" href='/bgstrategy/minion/?id=424'>Eliza</a>' instead of '<a class="hoverimage" href='/bgstrategy/minion/?id=424'>Admiral Eliza Goreblade</a>'), <em>pictureSmall</em> references a webp version up to ten times smaller than the original image, while <em>websites</em> includes an array of links to the entity representation on the biggest HS community hubs.
        For minions, <em>abilities</em> includes an array of boolean key/value pairs, indicating keywords like Battlecry or Taunt, and for heroes the <em>armor</em> values for low and high MMR as well as the <em>picturePortrait</em> are part of the data collection.<br>
        <br>
        At least every 4 hours fresh files will be generated from the database. Official updates and hotfixes will be integrated as soon as possible.
        <br>
        If you have any suggestion for additional properties that could/should be implemented, just drop me a message.
    </p>

    <br><br>

    <table class="format-table">
        <thead>
        <tr>
            <th colspan="4">JSON format (active only)</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td colspan="4"><a href="/bgjson/output/bg_entities_active.json"><i class="bi bi-file-earmark-arrow-down-fill"></i> Active Battlegrounds Entities</a></td>
        </tr>
        <tr>
            <td><a href="/bgjson/output/bg_heroes_active.json"><i class="bi bi-file-earmark-arrow-down"></i> Active Heroes</a></td>
            <td><a href="/bgjson/output/bg_minions_active.json"><i class="bi bi-file-earmark-arrow-down"></i> Active Minions</a></td>
            <td><a href="/bgjson/output/bg_spells_active.json"><i class="bi bi-file-earmark-arrow-down"></i> Active Spells</a></td>
            <!--            <td><a href="/bgjson/output/bg_buddies_active.json"><i class="bi bi-file-earmark-arrow-down"></i> Active Buddies</a></td>-->
            <!--            <td><a href="/bgjson/output/bg_quests_active.json"><i class="bi bi-file-earmark-arrow-down"></i> Active Quests</a></td>-->
            <!--            <td><a href="/bgjson/output/bg_rewards_active.json"><i class="bi bi-file-earmark-arrow-down"></i> Active Rewards</a></td>-->
            <td><a href="/bgjson/output/bg_anomalies_active.json"><i class="bi bi-file-earmark-arrow-down"></i> Active Anomalies</a></td>
            <!--            <td><a href="/bgjson/output/bg_trinkets_active.json"><i class="bi bi-file-earmark-arrow-down"></i> Active Trinkets</a></td>-->
        </tr>
        </tbody>
    </table>
    <span class="small_info">Last update: <?= date("F d, Y H:i:s", filemtime('output/bg_heroes_active.json')); ?></span>

    <br><br>

    <table class="format-table">
        <thead>
        <tr>
            <th colspan="8">JSON format (all)</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td colspan="8"><a href="/bgjson/output/bg_entities_all.json"><i class="bi bi-file-earmark-arrow-down-fill"></i> All Battlegrounds Entities</a></td>
        </tr>
        <tr>
            <td><a href="/bgjson/output/bg_heroes_all.json"><i class="bi bi-file-earmark-arrow-down"></i> All Heroes</a></td>
            <td><a href="/bgjson/output/bg_minions_all.json"><i class="bi bi-file-earmark-arrow-down"></i> All Minions</a></td>
            <td><a href="/bgjson/output/bg_spells_all.json"><i class="bi bi-file-earmark-arrow-down"></i> All Spells</a></td>
            <td><a href="/bgjson/output/bg_buddies_all.json"><i class="bi bi-file-earmark-arrow-down"></i> All Buddies</a></td>
            <td><a href="/bgjson/output/bg_quests_all.json"><i class="bi bi-file-earmark-arrow-down"></i> All Quests</a></td>
            <td><a href="/bgjson/output/bg_rewards_all.json"><i class="bi bi-file-earmark-arrow-down"></i> All Rewards</a></td>
            <td><a href="/bgjson/output/bg_anomalies_all.json"><i class="bi bi-file-earmark-arrow-down"></i> All Anomalies</a></td>
            <td><a href="/bgjson/output/bg_trinkets_all.json"><i class="bi bi-file-earmark-arrow-down"></i> All Trinkets</a></td>
        </tr>
        </tbody>
    </table>
    <span class="small_info">Last update: <?= date("F d, Y H:i:s", filemtime('output/bg_heroes_all.json')); ?></span>

    <br><br>

    <table class="format-table">
        <thead>
        <tr>
            <th colspan="4">CSV format (active only)</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="/bgjson/output/bg_heroes_active.csv"><i class="bi bi-file-earmark-arrow-down"></i> Active Heroes</a></td>
            <td><a href="/bgjson/output/bg_minions_active.csv"><i class="bi bi-file-earmark-arrow-down"></i> Active Minions</a></td>
            <td><a href="/bgjson/output/bg_spells_active.csv"><i class="bi bi-file-earmark-arrow-down"></i> Active Spells</a></td>
            <!--            <td><a href="/bgjson/output/bg_buddies_active.csv"><i class="bi bi-file-earmark-arrow-down"></i> Active Buddies</a></td>-->
            <!--            <td><a href="/bgjson/output/bg_quests_active.csv"><i class="bi bi-file-earmark-arrow-down"></i> Active Quests</a></td>-->
            <!--            <td><a href="/bgjson/output/bg_rewards_active.csv"><i class="bi bi-file-earmark-arrow-down"></i> Active Rewards</a></td>-->
            <td><a href="/bgjson/output/bg_anomalies_active.csv"><i class="bi bi-file-earmark-arrow-down"></i> Active Anomalies</a></td>
            <!--            <td><a href="/bgjson/output/bg_trinkets_active.csv"><i class="bi bi-file-earmark-arrow-down"></i> Active Trinkets</a></td>-->
        </tr>
        </tbody>
    </table>
    <span class="small_info">Last update: <?= date("F d, Y H:i:s", filemtime('output/bg_heroes_active.csv')); ?></span>

    <br><br>

    <table class="format-table">
        <thead>
        <tr>
            <th colspan="8">CSV format (all)</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="/bgjson/output/bg_heroes_all.csv"><i class="bi bi-file-earmark-arrow-down"></i> All Heroes</a></td>
            <td><a href="/bgjson/output/bg_minions_all.csv"><i class="bi bi-file-earmark-arrow-down"></i> All Minions</a></td>
            <td><a href="/bgjson/output/bg_spells_all.csv"><i class="bi bi-file-earmark-arrow-down"></i> All Spells</a></td>
            <td><a href="/bgjson/output/bg_buddies_all.csv"><i class="bi bi-file-earmark-arrow-down"></i> All Buddies</a></td>
            <td><a href="/bgjson/output/bg_quests_all.csv"><i class="bi bi-file-earmark-arrow-down"></i> All Quests</a></td>
            <td><a href="/bgjson/output/bg_rewards_all.csv"><i class="bi bi-file-earmark-arrow-down"></i> All Rewards</a></td>
            <td><a href="/bgjson/output/bg_anomalies_all.csv"><i class="bi bi-file-earmark-arrow-down"></i> All Anomalies</a></td>
            <td><a href="/bgjson/output/bg_trinkets_all.csv"><i class="bi bi-file-earmark-arrow-down"></i> All Trinkets</a></td>
        </tr>
        </tbody>
    </table>
    <span class="small_info">Last update: <?= date("F d, Y H:i:s", filemtime('output/bg_heroes_all.csv')); ?></span>

    <br><br>

    <p class="caption"><u>Latest Changes:</u></p>
    <br>
    <ul id="latest_changes">
        <li>28.02.2025 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/24180850/31-6-2-patch-notes" target="_blank">31.6.2</a> patch notes.</li>
        <li>22.02.2025 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/24179332" target="_blank">31.6.0</a> patch notes.</li>
        <li>04.02.2025 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/24173976/31-4-2-patch-notes" target="_blank">31.2.4</a> patch notes.</li>
        <li>18.12.2024 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/24167660/31-2-2-patch-notes" target="_blank">31.2.2</a> patch notes.</li>
        <li>05.12.2024 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/24163459/31-2-patch-notes" target="_blank">31.2.0</a> patch notes.</li>
        <li>21.11.2024 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/24161533/31-0-3-patch-notes" target="_blank">31.0.3</a> patch notes.</li>
        <li>03.11.2024 - Added BG changes from the <a href="https://us.forums.blizzard.com/en/hearthstone/t/3101-patch-notes/137048" target="_blank">31.0.1</a> patch notes.</li>
        <li>24.10.2024 - Added BG changes from the <a href="https://us.forums.blizzard.com/en/hearthstone/t/3063-patch-notes/136635" target="_blank">30.6.3</a> patch notes.</li>
        <li>20.10.2024 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/24149104" target="_blank">30.6.2</a> patch notes.</li>
        <li>17.10.2024 - Added BG changes from the <a href="https://us.forums.blizzard.com/en/hearthstone/t/3061-patch-notes/136290" target="_blank">30.6.1</a> patch notes.</li>
        <li>10.10.2024 - Added all new trinkets, minions and updates from the <a href="https://hearthstone.blizzard.com/en-us/news/24143781" target="_blank">30.6.0</a> patch notes.</li>
        <li>27.09.2024 - Added BG changes from the <a href="https://news.blizzard.com/en-us/hearthstone/24128997/30-4-3-patch-notes" target="_blank">30.4.3</a> patch notes.</li>
        <li>15.09.2024 - Added BG changes from the <a href="https://us.forums.blizzard.com/en/hearthstone/t/3041-patch-notes/135070" target="_blank">30.4.1</a> patch notes.</li>
        <li>09.09.2024 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/24135706" target="_blank">30.4.0</a> patch notes.</li>
        <li>05.09.2024 - Added BG changes from the <a href="https://us.forums.blizzard.com/en/hearthstone/t/3023-patch-notes/134666" target="_blank">30.2.3</a> patch notes.</li>
        <li>29.08.2024 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/24134638/30-2-2-patch-notes" target="_blank">30.2.2</a> patch notes.</li>
        <li>23.08.2024 - Added BG changes from the <a href="https://us.forums.blizzard.com/en/hearthstone/t/3021-patch-notes/133884" target="_blank">30.2.1</a> patch notes.</li>
        <li>20.08.2024 - Added all new minions and updates from the <a href="https://hearthstone.blizzard.com/en-us/news/24122902/30-2-patch-notes" target="_blank">30.2.0</a> patch notes.</li>
        <li>20.08.2024 - Added trinkets as a new BG entity and inserted all 116 trinkets from the <a href="https://hearthstone.blizzard.com/en-us/news/24122902/30-2-patch-notes" target="_blank">30.2.0</a> patch notes</li>
        <li>09.08.2024 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/24125212/30-0-3-patch-notes" target="_blank">30.0.3</a> patch notes.</li>
        <li>23.07.2024 - Added BG changes from the <a href="https://us.forums.blizzard.com/en/hearthstone/t/3001-hotfix-patch/131943" target="_blank">30.0.1</a> patch notes.</li>
        <li>27.06.2024 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/24108515/29-6-2-patch-notes" target="_blank">29.6.2</a> patch notes.</li>
        <li>21.06.2024 - Added BG armor changes from the <a href="https://us.forums.blizzard.com/en/hearthstone/t/2961-patch-notes/130456" target="_blank">29.6.1</a> patch notes.</li>
        <li>18.06.2024 - Added flag isDuosOnly to the buddy dataset.</li>
        <li>17.06.2024 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/24061012/buddies-are-coming-back" target="_blank">29.6.0</a> patch notes (or rather the patch preview).</li>
        <li>24.05.2024 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/24077480/29-4-2-patch-notes" target="_blank">29.4.2</a> patch notes.</li>
        <li>17.05.2024 - Added BG changes from the <a href="https://us.forums.blizzard.com/en/hearthstone/t/2941-patch-notes/128613" target="_blank">29.4.1</a> patch notes.</li>
        <li>17.05.2024 - Updated all "websites -> fandom" properties to "websites -> wiki" and updated the base link to the new HS Wiki</li>
        <li>06.05.2024 - Added "notes" property to the hero dataset. Official notes from Blizzard, like <i>"Illidan Stormrage is banned from Dragons games across all Battlegrounds"</i>, will be listed here for the time being, separated by semicolons.</li>
        <li>03.05.2024 - Added BG changes from the <a href="https://us.forums.blizzard.com/en/hearthstone/t/2923-patch-notes/127552" target="_blank">29.2.3</a> patch notes. Added "armorDuos" property to the hero dataset.</li>
        <li>25.04.2024 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/24087317/29-2-2-patch-notes" target="_blank">29.2.2</a> patch notes.</li>
        <li>22.04.2024 - Added BG armor changes from the <a href="https://us.forums.blizzard.com/en/hearthstone/t/2921-patch-notes/126400" target="_blank">29.2.1</a> patch notes.</li>
        <li>16.04.2024 - Added new heroes, minions, spells and BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/24077473/29-2-patch-notes" target="_blank">29.2.0</a> patch notes.</li>
        <li>15.04.2024 - Added flag isDuosOnly to the hero, minion and spell datasets.</li>
        <li>28.03.2024 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/24064739/29-0-3-patch-notes" target="_blank">29.0.3</a> patch notes.</li>
        <li>22.03.2024 - Added BG armor changes from the <a href="https://us.forums.blizzard.com/en/hearthstone/t/2902-patch-notes/123384" target="_blank">29.0.2</a> patch notes.</li>
        <li>11.03.2024 - Added BG changes from the <a href="https://news.blizzard.com/en-us/hearthstone/24064735/29-0-patch-notes" target="_blank">29.0.0</a> patch notes.</li>
        <li>29.02.2024 - Added BG changes from the <a href="https://us.forums.blizzard.com/en/hearthstone/t/2863-patch-notes/121812" target="_blank">28.6.3</a> patch notes.</li>
        <li>22.02.2024 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/24056185" target="_blank">28.6.2</a> patch notes.</li>
        <li>17.02.2024 - Added BG changes from the <a href="https://us.forums.blizzard.com/en/hearthstone/t/2861-patch-notes/121011" target="_blank">28.6.1</a> patch notes.</li>
        <li>14.02.2024 - Added new minions, new spells and BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/24056184/28-6-patch-notes" target="_blank">28.6.0</a> patch notes.</li>
        <li>29.01.2024 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/24046220/28-4-1-patch-notes" target="_blank">28.4.1</a> patch notes.</li>
        <li>19.12.2023 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/24033779/28-2-3-patch-notes" target="_blank">28.2.3</a> patch notes.</li>
        <li>12.12.2023 - Added BG armor changes from the <a href="https://us.forums.blizzard.com/en/hearthstone/t/2822-patch-notes/117872" target="_blank">28.2.2</a> patch notes.</li>
        <li>05.12.2023 - Added all new minions and updates from the <a href="https://hearthstone.blizzard.com/en-us/news/24008697/28-2-patch-notes" target="_blank">28.2.0</a> patch notes.</li>
        <li>05.12.2023 - Added spells as a new BG entity and inserted all 42 spells from the <a href="https://hearthstone.blizzard.com/en-us/news/24008697/28-2-patch-notes" target="_blank">28.2.0</a> patch notes.</li>
        <li>28.11.2023 - Added BG changes from the <a href="https://news.blizzard.com/en-us/hearthstone/24033781/28-0-3-patch-notes" target="_blank">28.0.3</a> patch notes.</li>
        <li>26.10.2023 - Added BG changes from the <a href="https://us.forums.blizzard.com/en/hearthstone/t/2762-patch-notes/115062" target="_blank">27.6.2</a> patch notes.</li>
        <li>18.10.2023 - Added BG changes from the <a href="https://news.blizzard.com/en-us/hearthstone/23989479/27-6-patch-notes" target="_blank">27.6.0</a> patch notes.</li>
        <li>28.09.2023 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/23999072/27-4-2-patch-notes" target="_blank">27.4.2</a> patch notes.</li>
        <li>19.09.2023 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/23999071/27-4-patch-notes" target="_blank">27.4.0</a> patch notes.</li>
        <li>07.09.2023 - Added BG changes from the <a href="https://us.forums.blizzard.com/en/hearthstone/t/2723-patch-notes/113008" target="_blank">27.2.3</a> patch notes.</li>
        <li>30.08.2023 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/23987539/27-2-2-patch-notes" target="_blank">27.2.2</a> patch notes.</li>
        <li>25.08.2023 - Added BG and armor changes from the <a href="https://us.forums.blizzard.com/en/hearthstone/t/2721-patch-notes/112348" target="_blank">27.2.1</a> patch notes.</li>
        <li>22.08.2023 - Added all BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/23987537/27-2-patch-notes" target="_blank">27.2.0</a> patch notes.</li>
        <li>18.08.2023 - Added the first 20 anomalies and all new minions from the <a href="https://hearthstone.blizzard.com/en-us/news/23987537/27-2-patch-notes" target="_blank">27.2.0</a> patch notes (isActive = false, until patchday).</li>
        <li>04.08.2023 - Added armor changes from the <a href="https://us.forums.blizzard.com/en/hearthstone/t/2702-patch-notes/111231" target="_blank">27.0.2</a> patch notes.</li>
        <li>29.07.2023 - Added BG changes from the <a href="https://us.forums.blizzard.com/en/hearthstone/t/2701-patch-notes/110763" target="_blank">27.0.1</a> patch notes.</li>
        <li>25.07.2023 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/23973121/27-0-patch-notes" target="_blank">27.0.0</a> patch notes.</li>
        <li>11.07.2023 - Added and updated quests and rewards from the <a href="https://hearthstone.blizzard.com/en-us/news/23973118/quests-return-to-battlegrounds" target="_blank">26.6.3</a> patch notes.</li>
        <li>07.07.2023 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/23973117/26-6-2-patch-notes" target="_blank">26.6.2</a> patch notes.</li>
        <li>28.06.2023 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/23973115/26-6-patch-notes" target="_blank">26.6.0</a> patch notes.</li>
        <li>15.06.2023 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/23968055/26-4-3-patch-notes" target="_blank">26.4.3</a> patch notes.</li>
        <li>12.06.2023 - Added armor changes from the <a href="https://us.forums.blizzard.com/en/hearthstone/t/2642-patch-notes/108735" target="_blank">26.4.2</a> patch notes.</li>
        <li>30.05.2023 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/23957168/26-4-patch-notes" target="_blank">26.4.0</a> patch notes.</li>
        <li>25.05.2023 - Added armor changes from the <a href="https://us.forums.blizzard.com/en/hearthstone/t/2623-patch-notes/108059" target="_blank">26.2.3</a> patch notes.</li>
        <li>19.05.2023 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/23957164/26-2-2-patch-notes" target="_blank">26.2.2</a> patch notes.</li>
        <li>12.05.2023 - Added BG changes from the <a href="https://us.forums.blizzard.com/en/hearthstone/t/2621-patch-notes/107435" target="_blank">26.2.1</a> patch notes.</li>
        <li>09.05.2023 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/23935322/26-2-patch-notes" target="_blank">26.2.0</a> patch notes.</li>
        <li>09.05.2023 - Added hasVenomous and hasMagnetic to the minion dataset.</li>
        <li>27.04.2023 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/23935323/26-0-4-patch-notes" target="_blank">26.0.4</a> patch notes.</li>
        <li>20.04.2023 - Added armor changes from the <a href="https://us.forums.blizzard.com/en/hearthstone/t/2603-patch-notes/106272" target="_blank">26.0.3</a> patch notes.</li>
        <li>14.04.2023 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/23935319/26-0-2-patch-notes" target="_blank">26.0.2</a> patch notes.</li>
        <li>09.04.2023 - Added buddy/hero relation as "buddy" property to the heroes JSON/CSV and "hero" property to the buddies JSON/CSV.</li>
        <li>04.04.2023 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/23934449/26-0-patch-notes" target="_blank">26.0.0</a> patch notes.</li>
        <li>29.03.2023 - Added armor changes from the <a href="https://us.forums.blizzard.com/en/hearthstone/t/2563-patch-notes/104774" target="_blank">25.6.3</a> patch notes.</li>
        <li>23.03.2023 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/23921500/25-6-2-patch-notes" target="_blank">25.6.2</a> patch notes.</li>
        <li>18.03.2023 - Added armor changes from the <a href="https://us.forums.blizzard.com/en/hearthstone/t/2561-patch-notes/104261" target="_blank">25.6.1</a> patch notes.</li>
        <li>17.03.2023 - Added "armor" and "armorHighMMR" properties to, and removed "armorTier" property from the hero dataset.</li>
        <li>15.03.2023 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/23921496/25-6-patch-notes" target="_blank">25.6.0</a> patch notes.</li>
        <li>02.03.2023 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/23921492/25-4-3-patch-notes" target="_blank">25.4.3</a> patch notes.</li>
        <li>17.02.2023 - Added armor changes from the <a href="https://us.forums.blizzard.com/en/hearthstone/t/2541-patch-notes/102926" target="_blank">25.4.1</a> patch notes.</li>
        <li>13.02.2023 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/23913671/25-4-patch-notes" target="_blank">25.4.0</a> patch notes.</li>
        <li>03.02.2023 - Added "types" and "pools" properties to the JSON format in order to support dual type minions.</li>
        <li>26.01.2023 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/23892228/25-2-2-patch-notes" target="_blank">25.2.2</a> patch notes.</li>
        <li>22.01.2023 - Added BG changes from the <a href="https://us.forums.blizzard.com/en/hearthstone/t/2521-patch-notes/101487" target="_blank">25.2.1</a> patch notes.</li>
        <li>18.01.2023 - Temporarily deactivated Scabbs, Tess, Tamsin, Illidan and the minion Murozond (will be bugfixed by Blizzard).</li>
        <li>18.01.2023 - Added dual minion types/pool (Type2 and Pool2 for CSV format).</li>
        <li>17.01.2023 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/23892225/25-2-patch-notes" target="_blank">25.2.0</a> patch notes.</li>
        <li>15.01.2023 - Added new hero and new minions of the upcoming BG season 3 release (isActive = false, until patchday).</li>
        <li>19.12.2022 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/23892223/25-0-4-patch-notes" target="_blank">25.0.4</a> patch notes.</li>
        <li>29.11.2022 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/23882860/25-0-patch-notes" target="_blank">25.0.0</a> patch notes.</li>
        <li>19.11.2022 - Added quest and reward datasets (finally).</li>
        <li>14.11.2022 - Added pictureWhole to the hero dataset (a link to the complete hero picture, without cropping of the borders).</li>
        <li>11.11.2022 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/23874319/24-6-2-patch-notes" target="_blank">24.6.2</a> patch notes.</li>
        <li>03.11.2022 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/23852694/24-6-patch-notes" target="_blank">24.6.0</a> patch notes.</li>
        <li>14.10.2022 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/23852692/24-4-3-patch-notes" target="_blank">24.4.3</a> patch notes.</li>
        <li>15.09.2022 - Added BG changes from the <a href="https://us.forums.blizzard.com/en/hearthstone/t/patch-2423-patch-notes/94885" target="_blank">24.2.3</a> patch notes.</li>
        <li>09.09.2022 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/23852686/24-2-2-patch-notes" target="_blank">24.2.2</a> patch notes.</li>
        <li>03.09.2022 - Added BG hotfix changes (armor tier adjustments)</li>
        <li>30.08.2022 - Added BG changes from the <a href="https://hearthstone.blizzard.com/en-us/news/23831411/24-2-patch-notes" target="_blank">24.2.0</a> patch notes.</li>
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