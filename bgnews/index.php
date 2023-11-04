<?php
include_once('../header.php');
?>
<h2 class="page_title">Battleground News</h2>
<div class="news">
    <h3 id="bgduos">04.11.2023 - Battlegrounds Duos announced at BlizzCon <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        Blizzard just revealed an upcoming two player coop mode for Battlegrounds, which will be released "early in 2024".
        The official announcement can be found on the <a href="https://hearthstone.blizzard.com/en-gb/news/24008691/introducing-battlegrounds-duos" target="_blank">Blizzard HS website</a> or you can view the <a href="https://www.twitch.tv/videos/1967600933?t=2h32m19s" target="_blank">live on stream reveal</a> (90 seconds) or the <a href="https://www.twitch.tv/videos/1967600933?t=7h14m54s" target="_blank">complete preview panel</a> (19 minutes).
    </p>
    <ul>
        <li>Each duo team will share a single HP/armor pool (HP will be 30, armor will be the combined hero armor values of both heroes)</li>
        <li>The buy phase is pretty much the same, but you can check out your partners tavern and board anytime, by clicking on a new portal animation on the right side of your screen</li>
        <li>Each player will have to level their tavern tier up by themselves</li>
        <li>Any card in your hand can be sent to your partner for 1 gold each, by moving it onto the new portal animation</li>
        <li>New overlay effects for the tavern have been added, clearly indicating that a minion in your tavern could make a triple for your partner</li>
        <li>The starting player for the combat phase will alternate between you and your partner every turn (indicated by the order of the player panel on the left side of the screen)</li>
        <li>The board of player#2 will spawn in combat after the board of player#1 has been wiped completely (including effects like Deathrattle)</li>
        <li>There is no direct interaction between you or your teammates board during the combat (e.g. a <a class='hoverimage'>Rot Hide Gnoll</a> on your partners board will not count minions which died while your board was active)</li>
        <li>If the board of player#1 is already enough to win against both boards of the enemy duo team, the empty slots on the board will be filled up with minions from player#2 after the combat has concluded (therefore increasing the damage the losing team takes)</li>
        <li>The duo mode will add at least 4 new mode-exclusive heroes:
            <ul>
                <li><strong>Cho'Gall</strong> featuring the HP "Double Trouble" (Passive. Whenever you play a Golden minion, both you and Gall get a triple reward). These are actually two heroes, but can only be played when picked together, so most likely only when queing up together with your teammate</li>
                <li><strong>Madame Goya</strong> featuring the HP "Efficient Exchange" (Pass a non-Golden minion.)</li>
                <li><strong>Flobbidinous Floop</strong> featuring the HP "Glorious Gloop" (Choose a friendly minion. Start of Combat: Transform it into your teammate's highest-Attack minion)</li>
                <li><strong>Nameless One</strong> featuring the HP "" (Passive. Start of Game: Copy your teammate's hero power)</li>
            </ul>
        </li>
        <li>The duo mode will add at least 6 new mode-exclusive minions, featuring special abilites designed for the mode:
            <ul>
                <li><strong>Passenger</strong> (Tier 1, Neutral) - Whenever your team Passes, gain +1/+1.</li>
                <li><strong>Fortune-Hunter Flo</strong> (Tier 2, Neutral) - Battlecry: Your teammate gets a Gold Coint.</li>
                <li><strong>Orc-estra Conductor</strong> (Tier 3, Neutral) - Battlecry: Give a minion +2/+1 (Upgraded for each Orc-estra Conductor your team has played.)</li>
                <li><strong>Electron</strong> (Tier 5, Mech) - At the end of your turn, give a minion in your teammate's warband Divine Shield.</li>
                <li><strong>Benefactor</strong> (Tier 5, Naga) - Spellcraft: Pass a different non-Golden minion.</li>
                <li><strong>Sandy</strong> (Tier 6, Neutral) - Start of Combat: Transform into a copy of your teammate's highest Health minion.</li>
            </ul>
        </li>
        <li>An icon-based ping system for minions and buttons (freeze, level, etc.) has been added to enable voiceless communication options between teammates. The icons available are a question mark, a green check, a red x and a portal symbol</li>
        <li>There will be seperate queues for traditional BG single player and BG duo teams (with the additional option to also join alone and get teamed up by the system)</li>
        <li>There seems to be a permanent damage cap of 15 at the moment</li>
        <li>Deadguy fight handling seems to be bugged at the moment, as you can fight a duo team again, right after killing it</li>
    </ul>
    <br>
    <p>
        If you want to see the new mode in action, several well-known streamers have teamed up and streamed from the BlizzCon floor, playing the current beta version (additional streams will be added when available):
    </p>
    <ul>
        <li><a href="https://www.twitch.tv/videos/1967772385?t=0h12m41s" target="_blank">Kripp and Bofur</a></li>
    </ul>
    <br>
    <p>
        Here are a few spoiler pictures of the new heroes and minions (additional images will be added when available):
        <br><br>
        <img src="<?= PICTURE_LOCAL ?>news/hero_cho_gall.webp">
        <img src="<?= PICTURE_LOCAL ?>news/hero_goya.webp">
        <img src="<?= PICTURE_LOCAL ?>news/hero_floop.webp">
        <img src="<?= PICTURE_LOCAL ?>news/hero_nameless.webp">
        <img src="<?= PICTURE_LOCAL ?>news/minion_passenger.webp">
        <img src="<?= PICTURE_LOCAL ?>news/minion_fortune.webp">
        <img src="<?= PICTURE_LOCAL ?>news/minion_orcestra.webp">
        <img src="<?= PICTURE_LOCAL ?>news/minion_electron.webp">
        <img src="<?= PICTURE_LOCAL ?>news/minion_benefactor.webp">
        <img src="<?= PICTURE_LOCAL ?>news/minion_sandy.webp">
    </p>
    <br>

    <h3 id="season5ending">03.11.2023 - Season of Anomalies coming to an end <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        Observant players have reported that the Blizzard launcher lists the current BG season pass available until the 4th of December. This is a pretty decent indicator that the next BG season will start on December 5th. At the moment it is still unknown if that season will start in vanilla mode or with the return of the Buddy or the Quest system. What is certain though is that everyone's MMR rating will be reset to 0 (your hidden MMR will still be there though) and you will have to purchase a new Battle Pass if you want to be able to select more than two heroes at the start of each match.
    </p>
    <br><br>
</div>

<?php
include_once('../footer.php');
?>

