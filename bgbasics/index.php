<?php
include_once('../header.php');
?>
<h2 class="page_title">Basic Definitions</h2>
<div>
    <h3 id="attacks">Attacks</h3>
    <p>
        In the combat phase the left-most minion of one player will attack a random minion on the opponents board. On a full board that means your attacking minion has a 1:7 (or 14.29%) chance to attack a specific minion of your opponent. This luck-factor can become very relevant when 'sniping' a minion like <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=117">Mama Bear</a> or <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=256">Titus</a> will decide over the outcome of the match.
        <br><br>
        After the attack has concluded the left-most minion of the player who did not attack, will begin its attack. This loop will continue until all minions on one side of the board have been killed.
    </p>
    <h3 id="initiative">Initiative</h3>
    <p>
        Which player will attack first is decided by the number of minions on each side at the beginning of combat. If you control more minions than your opponent your left-most minion will attack first, followed by your opponents left-most minion, after your attack has concluded. If both players control the same amount of minions at the beginning of combat, a hidden coinflip will decide who gets to attack first. It is usually an advantage to attack first, but there are some corner cases where it could be beneficial to go down from 7 to 6 minions to force your opponent to attack first.
    </p>
    <h3 id="taunt">Taunt</h3>
    <p>
        As a defensive measure to protect your valuable creatures providing in-combat buffs (e.g. <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=117">Mama Bear</a>) you can play minions with taunt or buff any of your minions via <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=221">Sparring Partner</a> or <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=250">Vigilant Stoneborn</a>. A basic strategy is to position a big taunt minion to the right side of your board, so that it attacks as late as possible and will block most of your opponents minions.
        <br><br>
        Another thing to keep in mind with taunt minions occurs when facing minions with Cleave (e.g. <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=76">Cave Hydra</a>).
    </p>
    <h3 id="cleave">Cleave</h3>
    <p>
    </p>
    <h3 id="windfury">Windfury</h3>
    <p>
        A minion with Windfury will attack a second time, if it survived its first attack. Multiple instances of Windfury do not increase the number of attacks. Tripling a Windfury minion will upgrade it to Mega-Windfury, meaning it will attack four times in total (as long as it survives the previous attacks).
        <br><br>
        As Windfury is an offensive ability only, it is usually best to place a minion with Windfury to the left to increase the chance that it can attack twice before being killed by an attack itself. Also notice, that Windfury only provides value if the minion is able to survive its first attack. Therefore, the value of Windfury increases on minions with high health or a Divine Shield.
    </p>
    <h3>Divine Shield</h3>
    <p>
    </p>
    <h3>Deathrattle</h3>
    <p>
    </p>
    <h3>Reborn</h3>
    <p>
    </p>
    <h3>Avenge</h3>
    <p>
    </p>
    <h3>Cleave</h3>
    <p>
    </p>
    <h3>Battlecry</h3>
    <p>
    </p>
    <h3>Spellcraft</h3>
    <p>
    </p>
    <h3>Order of effects</h3>
    <p>
    </p>
    <h3>Damage Cap</h3>
    <p>
        The Damage Cap was implemented to avoid players from taking huge amounts of damage on early turns. It is indicated by a little shield symbol you can see while hovering over heroes on the left bar. The current Damage Cap is set to 15, meaning if a player would take more than 15 damage (e.g. 20) while the cap is active, the damage will be reduced to the maximum amount of 15.
        <br><br>
        The Damage Cap is in place until both a hero has died and the game has reached at least turn 8 (10 gold).
    </p>
    <h3>Fighting 'Deadguy'</h3>
    <p>
    </p>
    <h3>Game length</h3>
    <p>
    </p>
    <h3>Damage Output</h3>
    <p>
    </p>
    <h3>Scouting</h3>
    <p>
    </p>
    <h3>Disconnecting</h3>
    <p>
    </p>
    <h3>Conceding</h3>
    <p>
    </p>
    <h3 id="rating">Rating (BG MMR)</h3>
    <p>
        The rating shown after every game is your match making rating (MMR), a first place will normally net you around +100 points, whereas an 8th place will make you lose around -100 points. The actual values are based on a formula and depend on the MMR of every player in the lobby and your actual placement at the end of the game.
        <br><br>
        The higher your MMR gets, the harder it will be to further accumulate points (for example with an MMR of 10,000 a win will only provide like 70 points, while an 8th place will cost you ~115 points). At normal rating ranges, a singular 5th place and below will make you lose points, whereas a singular 4th place and above will make you gain points. If multiple players die on the same turn, the rating gain/loss will be 'split' between them.
        <br><br>
        The matchmaking algorithm will try to build lobbies where every player is roughly in the same MMR range. But after you reach a high rating (8000+ in the middle of the season) there is a chance to be matched with everyone, even the top 100 players of the <a href="https://hearthstone.blizzard.com/community/leaderboards?region=US&leaderboardId=battlegrounds" target="_blank">ladder</a>.
    </p>
    <h3 id="ratingfloor">Rating Floors</h3>
    <p>
        There are rating floors between 2000 and 6000 for your MMR. Your rating does not drop below each floor once it is above it. Currently, there is a floor every 500 rating points: 2000, 2500, 3000, 3500, 4000, 4500, 5000, 5500, 6000.
        <!--        (<a href=https://hearthstone.blizzard.com/en-us/news/23523064 target="_blank">source</a>)-->
    </p>
    <h3 id="ratinginternal">Internal rating</h3>
    <p>
        At the start of each BG season (roughly every 3 months) your shown/external MMR will be reset to zero. But Hearthstone saves your internal MMR (which at the end of a season will be very close to your external MMR) and will match-make you by your internal MMR.
        <br><br>
        A lobby win at that point in time will net you up to 300 points, allowing you to climb back to your 'real' MMR faster. This bonus for point gains will decrease the closer you'll get to your internal MMR (and will also be capped at ~8000 MMR, even if you had a very high rating like 10,000+ in the last season).
    </p>
    <br><br>
</div>

<?php
include_once('../footer.php');
?>
