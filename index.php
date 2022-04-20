<?php
include_once('../header.php');
?>

    <h2 class="page_title">BG JSON - Downloads</h2>

    <p>
        This page is providing Hearthstone Battleground data in different data collections and file types.<br>
        Feel free to use this as a starting point for your own projects and content creation.<br>
        Every 8 hours fresh files will be generated from the database. Official updates and hotfixes will be entered as
        soon as possible.
    </p>

    <br>

    <table style="margin: 0 auto; margin-bottom: 5px;">
        <thead>
        <tr>
            <th colspan="3">JSON</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="output/bg_heroes_all.json">All BG heroes</a></td>
            <td><a href="output/bg_buddies_all.json">All BG buddies</a></td>
            <td><a href="output/bg_minions_all.json">All BG minions</a></td>
        </tr>
        </tbody>
    </table>
    <i style="font-style: italic; font-size: 10px;">Last
        updated: <?php echo date("F d, Y H:i:s", filemtime('output/bg_heroes_all.json')); ?></i>

    <br><br>

    <a href="output/bg_heroes_all.csv">All BG Heroes in CSV format</a>
    | <a href="output/bg_buddies_all.csv">All BG Heroes in CSV format</a>
    | <a href="output/bg_minions_all.csv">All BG Heroes in CSV format</a>
    <br>
    <i style="font-style: italic; font-size: 10px">Last
        updated: <?php echo date("F d, Y H:i:s", filemtime('output/bg_heroes_all.csv')); ?></i>

<?php
include_once('../footer.php');
?>