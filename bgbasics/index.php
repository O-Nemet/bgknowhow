<?php
include_once('../header.php');
?>
<h2 class="page_title">Basic Definitions</h2>
<div>
    <h3 id="gamestart">Start of the game <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        At the beginning of each battleground game you will first have to select the hero you will be playing for the rest of the game. Heroes differ by their values for health (usually 30), for armor (between 0 and 20) and most importantly their unique hero power. There are nearly 100 different heroes, all of which you can check out on our <a href="https://bgknowhow.com/bgstrategy/?show=heroes">Heroes listing</a>.
        <br><br>
        Normally you get to choose from two different heroes, but if you buy the <a href="https://us.shop.battle.net/en-us/product/hearthstone-battlegrounds-season-pass">Battleground Season Pass</a> you will be offered a selection of four heroes until the end of the season (usually lasting 3-4 months).
        <br><br>
        A key part in influencing your decision for a hero is the availability of minion types in your BG lobby. While there are 10 different minion types (<a href="https://bgknowhow.com/bgstrategy/?show=minions&type=beast">Beast</a>, <a href="https://bgknowhow.com/bgstrategy/?show=minions&type=demon">Demons</a>, <a href="https://bgknowhow.com/bgstrategy/?show=minions&type=dragon">Dragons</a>, <a href="https://bgknowhow.com/bgstrategy/?show=minions&type=elemental">Elementals</a>, <a href="https://bgknowhow.com/bgstrategy/?show=minions&type=mech">Mechs</a>, <a href="https://bgknowhow.com/bgstrategy/?show=minions&type=murloc">Murlocs</a>, <a href="https://bgknowhow.com/bgstrategy/?show=minions&type=naga">Naga</a>, <a href="https://bgknowhow.com/bgstrategy/?show=minions&type=pirate">Pirates</a>, <a href="https://bgknowhow.com/bgstrategy/?show=minions&type=quilboar">Quilboars</a>, <a href="https://bgknowhow.com/bgstrategy/?show=minions&type=undead">Undeads</a> and <a
                href="https://bgknowhow.com/bgstrategy/?show=minions&type=none">Neutrals</a> which are in each game) only a random selection of 5 of them will be available for each game. Some heroes do perform better with a specific minion type or a combination of minion types due to synergies with their hero power. Also, some minion types have a huge effect on how the game will play out in general. For example with Murlocs in, players will have access to more Venomous minions than usual which means the value of high HP minions is reduced.
        <br><br>
        With 8 players in each game a maximum of 32 heroes will be offered to pick from. Some heroes are only offered in games featuring a specific minion type (e.g. <a href="https://bgknowhow.com/bgstrategy/hero/?id=42">Millificent Manastorm</a> only when Mechs are available). The heroes offered to you can not be picked by other players. With each new game you will get another random selection offered, therefore it is possible to not see a specific hero for a long time.
    </p>
    <h3 id="armor">Hero armor <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        The armor of a hero can be between 0 and 20 and is used as a balancing tool by Blizzard. Heroes which are weaker or need more time to get their game going will usually have higher armor values, whereas heroes which are more tempo oriented or better in the current meta will usually be given lower armor values. These armor values are constantly adjusted with every Hearthstone patch. In reality no ingame difference exists between health and armor regarding the survivability of your hero, it is just a means to keep all heroes at 30 health.
        <br><br>
        In the past there used to be an armor tier system, meaning that one hero had a range of armor (e.g. 7-10) instead of one set armor value. But nowadays, each hero has one specific armor value and only some heroes have a second armor value for higher MMR ranges (~6000+). On our <a href="https://bgknowhow.com/bgstrategy/hero/?id=72">hero pages</a> the regular armor value will be displayed with a gray background, whereas the high MMR value has a golden tinted background.
        <br><br>
        For a sorted list of all heroes and their armor values check out this <a href="https://bgknowhow.com/bgbasics/armor.php">page</a>.
    </p>
    <h3 id="tavern">Tavern phase <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
    </p>
    <h3 id="pool">Minion pool <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
    </p>
    <h3 id="attacks">Attacks <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        In the combat phase the left-most minion (with an attack > 0) of one player will attack a random minion on the opponents board. On a full board that means your attacking minion has a 1:7 (or 14.29%) chance to attack a specific minion of your opponent. This luck-factor can become very relevant when 'sniping' a minion like <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=117">Mama Bear</a> or <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=256">Titus</a> will decide over the outcome of the match.
        <br><br>
        After the attack has concluded the left-most minion of the player who did not attack, will begin its attack. This loop will continue until all minions on one side of the board have been killed.
        <br><br>
        Minions with zero attack power will be skipped and the next minion to the right (which has a positive attack value) will attack instead. If both players have only minions with zero attack power on the board the combat will end in a tie.
    </p>
    <h3 id="initiative">Initiative <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        Which player will attack first is decided by the number of minions on each side at the beginning of combat. If
        you control more minions than your opponent your left-most minion will attack first, followed by your opponents
        left-most minion, after your attack has concluded. If both players control the same amount of minions at the
        beginning of combat, a hidden coinflip will decide who gets to attack first. It is usually an advantage to
        attack first, but there are some corner cases where it could be beneficial to go down from 7 to 6 minions to
        force your opponent to attack first.
    </p>
    <h3 id="taunt">Taunt <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        As a defensive measure to protect your valuable creatures providing in-combat buffs (e.g. <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=117">Mama Bear</a>) you can play minions with taunt or buff any of your minions via <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=221">Sparring Partner</a> or <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=250">Vigilant Stoneborn</a>. A basic strategy is to position a big taunt minion to the right side of your board, so that it attacks as late as possible and will block most of your opponents minions.
        <br><br>
        Another thing to keep in mind with taunt minions occurs when facing minions with cleave (e.g. <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=327">Blade Collector</a>).
    </p>
    <h3 id="windfury">Windfury <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        A minion with Windfury will attack a second time, if it survived its first attack. Multiple instances of
        Windfury do not increase the number of attacks.
        <br><br>
        As Windfury is an offensive ability only, it is usually best to place a minion with Windfury to the left to
        increase the chance that it can attack twice before being killed by an attack itself. Also notice, that Windfury
        only provides value if the minion is able to survive its first attack. Therefore, the value of Windfury
        increases on minions with high health or a Divine Shield.
    </p>
    <h3 id="shield">Divine Shield <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        Minions with a divine shield will not get damaged the first time they are hit during each combat (the shield
        will refresh between combats). This provides the opportunity to trade 2 for 1 if the shielded minion is big
        enough or to protect a key minion from dying too early.
        <br><br>
        Out of the box only 9 minions in total come with shields but there a different means to buff any minion with a
        shield (primarily via <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=203">Glowscale</a>
        or <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=73">Annoy-o-Module</a>).
        <br><br>
        While usually the positioning of a DS minion is less important because the shield works on offense as well as on
        defense you should still try to position against what your opponent has. The best counter against a shielded
        minion is a <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=208">Leeroy</a>, as he will
        kill any minion in one hit, shield or no shield. But even a small taunt minion like a <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=272">Risen Rider</a> can be played as a blocker to waste your shield. If your opponent is featuring several shielded minions instead of just one huge one you should consider picking up a <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=266">Blaster</a> and putting it in first position.
    </p>
    <h3 id="deathrattle">Deathrattle <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        A minion with Deathrattle will trigger an action upon its own death, usually spawning one or more token minions (token minions are 1-star minions not buyable from the shop). The number of spawns is limited by the currently remaining board space (e.g. <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=62">Replicating Menace</a> will try to spawn 3 Microbot tokens, but if there are already 6 minions on the board only 1 Microbot will be created).
        <br><br>
        An example of a Deathrattle effect not spawning a minion is <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=35">Selfless Hero</a> which will gift a Divine Shield upon death instead.
        <br><br>
        Deathrattle triggers before Reborn. Please check out this <a href="https://bgknowhow.com/bgstrategy/?show=minions&ability=deathrattle">list of all Deathrattle minions</a> to know your options.
    </p>
    <h3 id="reborn">Reborn <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        A minion with Reborn will respawn upon its own death in its basic state (meaning as bought from the shop with no buffs applied later) but with only 1 health.
        <br><br>
        Reborn triggers after Deathrattle. Please check out this <a href="https://bgknowhow.com/bgstrategy/?show=minions&ability=reborn">list of all Reborn minions</a> to know your options.
    </p>
    <h3 id="cleave">Cleave <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        Cleave is short for the text "Also damages the minions next to whomever this attacks." and is featured on only
        two minions, namely <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=327">Blade Collector</a>
        and <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=133">Foe Reaper 4000</a>. There is
        also <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=224">Wildfire Elemental</a> (will
        only cleave when killing its target and only to one side until golden) as an honorable mention.
        <br><br>
        That is most likely because it is one of the strongest offensive abilities in the game, with the potential to
        trade your one minion for up to three of your opponent minions. Because cleave has no defensive benefit you
        usually want to position your cleave minions to the left, so they can attack before getting killed. This also
        means that the health of a cleave-minion is way less important than its attack.
        <br><br>
        A countermeasure to cleaving minions is clever positioning and taunted minions (for example if you place a
        minion with taunt on the outer right position, a cleaving attacker will only hit two of your minions). So be
        aware of lobbies featuring the above-mentioned minions and the picks or discoveries of your opponents.
    </p>
    <h3 id="venomous">Venomous <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        A minion with Venomous will kill any minion (without a Divine Shield) it hits regardless that minions health, once. Afterward the Venomous will fall off. Fighting a minion with 0 attack will make the minion lose Venomous, while fighting a minion with Divine Shield will not remove Venomous.
        <br><br>
        Please check out this <a href="https://bgknowhow.com/bgstrategy/?show=minions&ability=venomous">list of all Venomous minions</a> to know your options.
    </p>
    <h3 id="poisonous">Poisonous <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        A minion with Poisonous will kill any minion (without a Divine Shield) it hits regardless that minions health, once. Unlike Venomous, Poisonous will not be removed from the minion. This is a very strong ability, because in theory a poisonous minion with only 1 attack but enough health could kill an entire opponent's board.
        <br><br>
        Therefore, only very few active minions have this ability, namely <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=406">Tide Oracle Morgl</a> and <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=182">Emperor Cobra</a> (spawned from a secret).
    </p>
    <h3 id="avenge">Avenge <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        A minion with Avenge will count the number of minions dying on your side of the board during the combat and trigger their effect for each time the condition was met (e.g. <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=277">Ghoul of the Feast</a> with "Avenge (2)" will trigger the first time after 2 of your minions have died and then again after 4, 6, 8, etc. deaths).
        <br><br>
        Token minions spawned during combat will also be counted, but the Avenge minion will not count its own death. Avenge minions will usually be placed on the far right of the board to get as many triggers as possible before dying itself. The avenge counters do not carry over from combat to combat, but will reset to zero at the beginning of each new combat turn instead.
        <br><br>
        Please check out this <a href="https://bgknowhow.com/bgstrategy/?show=minions&ability=avenge">list of all Avenge minions</a> to know your options.
    </p>
    <h3 id="battlecry">Battlecry <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        Minions with this ability will trigger an effect when played from your hand. Many Battlecry effects will buff the minions on your board with permanent stats (e.g. <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=89">Menagerie Jug</a>) or permanent abilites (e.g. Taunt by <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=221">Sparring Partner</a>).
        <br><br>
        A key minion to utilize battlecries as a winning strategy is the neutral <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=109">Brann Bronzebeard</a> available in all games. Also <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=319">Rylak Metalhead</a> can trigger the battlecries from minions on your board during the combat phase (those buffs will vanish after combat, though).
        <br><br>
        Please check out this <a href="https://bgknowhow.com/bgstrategy/?show=minions&ability=battlecry">list of all Battlecry minions</a> to know your options.
    </p>
    <h3 id="magnetic">Magnetic <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        Since May 2023 (patch 26.2.0) it is possible to play magnetic minions even when you already have the maximum number of 7 minions on your board. Since July 2023 (patch 27.0.0) any magnetic minion which is magnetized to another minion will return to the shared minion pool.
        <br><br>
        Please check out this <a href="https://bgknowhow.com/bgstrategy/?show=minions&ability=magnetic">list of all Magnetic minions</a> to know your options.
    </p>
    <h3 id="spellcraft">Spellcraft <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        Please check out this <a href="https://bgknowhow.com/bgstrategy/?show=minions&ability=spellcraft">list of all Spellcraft minions</a> to know your options.
    </p>
    <h3 id="hand">Hand size and interactions <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        The maximum number of cards (minions, spells, effects, coins, gems, etc.) in your hand is 10. After that you first have to play a card to buy or receive another one. Cards which would added to your hand if you are at maximum hand size will be lost, except for Spellcraft cards, which will be newly generated when the space opens up again.
        <br><br>
        Some minions add cards to your hand during combat (e.g. <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=248">Bristlemane Scrapsmith</a>) or can access the cards in your hand (e.g. <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=332">Bassgill</a>).
        <br><br>
        During the combat round you are able to see the number of cards in the hand of your current opponent and can sometimes deduce their strength or strategy from that information.
    </p>
    <h3 id="discovers">Discovering <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        Some cards or effects let you discover minions (and sometimes even spells). When this happens you will usually be presented with a choice of three options to pick from. The card picked will be added to your hand.
        <br><br>
        The most common occurence of discovering happens when tripling minions.
    </p>
    <h3 id="tripling">Tripling minions <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        When you buy or otherwise get the third copy of a minion all copies on your battlefield will be pulled back to your hand and combined into a golden minion. In general a tripled minion will have double the stats of the regular minion plus all the permanent buffs accumulated on the prior copies. For an in-depth look at the math involved please refer to our <a href="https://bgknowhow.com/bgbasics/triple_stats.php">Triple Stats guide</a>. <!--In most cases it will also have-->
        <br><br>
        As a bonus, when you play the golden minion you will receive a discover-effect card which lets you discover one minion from a tier one level higher than your current tavern tier. The tier level for the discover will be locked in when you play the golden minion. Therefore, if you want to get a higher discovery it is possible to delay the playing of your triple. You also benefit from tripled minions by needing one less space on your tavern board.
        <br><br>
        Your first triple during a game can often be a key decision guiding your direction or strategy for the rest of the game. Please refer to <a href="https://bgknowhow.com/bgstrategy/general.php#keyminions">our list of key minions for each minion type</a>.
        <br><br>
        Already golden minions can not be tripled again and will bind three copies of the minion on your board. Of course, it is possible to get another golden version of a minion by combining three new minions of the same name. When you sell a tripled minion three copies will be readded to the shared minion pool. This is more relevant for high-tier minions, because there are only 9 copies of each tier 5 minion and only 7 minions of each tier 6 minion.
    </p>
    <h3 id="buffs">Buff persistence <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        Unless explicitly stated that an effect is permant (like on <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=50">Budding Greenthumb</a>) buffs which happen during the combat phase won't carry over. This includes all "at the beginning of combat" effects.
        <br><br>
        On the other hand, buffs that happen during the tavern/buy phase (from something like <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=351">The Boogie Monster</a>) or "at the end of your turn" (e.g <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=351">Famished Felbat</a>) will persist, unless specified otherwise.
    </p>
    <h3 id="order">Order of effects <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
    </p>
    <h3 id="damagecap">Damage Cap <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        The Damage Cap was implemented to avoid players from taking huge amounts of damage on early turns. It is
        indicated by a little shield symbol you can see while hovering over heroes on the left bar. The current Damage
        Cap is set to 15, meaning if a player would take more than 15 damage (e.g. 20) while the cap is active, the
        damage will be reduced to the maximum amount of 15.
        <br><br>
        The Damage Cap is in place until both a hero has died and the game has reached at least turn 8 (10 gold).
    </p>
    <h3 id="deadguy">Fighting a ghost aka 'Deadguy' <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        Whenever an odd number of players are defeated before a combat round, one of the remaining players will be
        randomly paired with one of the eliminated players. These eliminated players, referred to as ghosts or 'deadguys' (their ingame name will show as "Kel'Thuzad"), will bring their board lineup from the time of their death to the fight, but will not activate hero powers (even passive ones like from <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/hero/?id=16">Deathwing</a> will be inactive) or any other abilities.
        <br><br>
        In most cases, the fight will be relatively easy to win, allowing players to use the lobby turn beforehand to
        level up a tier or improve their board without much concern for the matchup. However, an exception can occur in
        the endgame when only three players are left standing, and one of them will have to face the player who was just
        eliminated and likely had an endgame-viable board. Losing to a 'deadguy' will deal the normal amount of damage
        and could potentially lead to elimination.
        <br><br>
        The bar on the left of the screen represents the heroes ordered by their remaining health and armor. In the
        event of a 'deadguy' fight, the bottom three players who were not paired with a ghost during the previous two
        rounds will be eligible.
        <br><br>
        In 7-player lobbies where one player disconnected or conceded early it can be a successful tactic to level faster than
        usual, while taking lots of damage in the early fights to place oneself on the lower half of the scoreboard and
        therefore have a high repeating chance to face the 'deadguy' and use these auto-win rounds to catch up and overtake
        the other living players.
    </p>
    <h3 id="gamelength">Game length <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        Most lobbies will take about 13-16 turns to find a winner, which translates to around 25 to 30 minutes in real
        life. Of course there are exceptions to this rule, for example when many fights end in ties during the endgame
        it is totally possible to reach 20+ turns.
        <br><br>
        The first 5 turns are usually refered to as the early game, whereas turns 6 to 10 are the mid-game and
        everything after that is the end game. It is very uncommon for a player to die before turn 8 (notwithstanding
        conceding or disconnecting), but pretty common on turns 9 to 10. This will also depend on the tempo of the
        current meta game and the lobby composition, of course.
    </p>
    <h3 id="damage">Damage Output <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
    </p>
    <h3 id="scouting">Scouting <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
    </p>
    <h3 id="disconnecting">Disconnecting intentionally <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
    </p>
    <h3 id="conceding">Conceding <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
    </p>
    <h3 id="rating">Rating (BG MMR) <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        The rating shown after every game is your match making rating (MMR), a first place will normally net you around +100 points, whereas an 8th place will make you lose around -100 points. The actual values are based on a formula and depend on the MMR of every player in the lobby and your actual placement at the end of the game.
        <br><br>
        The higher your MMR gets, the harder it will be to further accumulate points (for example with an MMR of 10,000 a win will only provide like 70 points, while an 8th place will cost you ~115 points). At normal rating ranges, a singular 5th place and below will make you lose points, whereas a singular 4th place and above will make you gain points. If multiple players die on the same turn, the rating gain/loss will be 'split' between them.
        <br><br>
        The matchmaking algorithm will try to build lobbies where every player is roughly in the same MMR range. But after you reach a high rating (8000+ in the middle of the season) there is a chance to be matched with everyone, even the top 100 players of the <a href="https://hearthstone.blizzard.com/community/leaderboards?region=US&leaderboardId=battlegrounds" target="_blank">ladder</a>.
    </p>
    <h3 id="ratingfloor">Rating Floors <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        There are rating floors between 2000 and 6000 for your MMR. Your rating does not drop below each floor once it
        is above it. Currently, there is a floor every 500 rating points: 2000, 2500, 3000, 3500, 4000, 4500, 5000,
        5500, 6000.
        <!--        (<a href=https://hearthstone.blizzard.com/en-us/news/23523064 target="_blank">source</a>)-->
    </p>
    <h3 id="ratinginternal">Internal rating <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        At the start of each BG season (roughly every 3 to 4 months) your shown/external MMR will be reset to zero. But
        Hearthstone saves your internal MMR (which at the end of a season will be very close to your external MMR) and
        will match-make you by your internal MMR.
        <br><br>
        A lobby win at that point in time will net you up to 300 points, allowing you to climb back to your 'real' MMR
        faster. This bonus for point gains will decrease the closer you'll get to your internal MMR (and will also be
        capped at ~8000 MMR, even if you had a very high rating like 10,000+ in the last season).
    </p>
    <h3 id="winningpercentages">Winning percentages <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        Some external addons are capable of calculating your odds of winning, tying or losing a given round by simulating the combat before or while it happens. Although those tools will usually run several thousand iterations of the combat in order to provide percentages as accurate as possible, it can still happen that you lose a combat for which the addon claimed a 100% chance to win. As the number of random effects during combat increase (e.g. with cards like <a href="https://bgknowhow.com/bgstrategy/minion/?id=135">Ghastcoiler</a>) there is always the off chance that a crazy result will happen, not in the first 5000 iterations but only on the 5001st run (which could be your actual combat).
        <br><br>
        Although knowing your chances in combat can be used as a guide for the relative strength of your composition do not overvalue the numbers. Be aware of the mental impact of always checking the win percentages and what the percentages really express. For example a fair amount of combats will be decided by who attacks first, which is essentially a 50:50 coin flip at the begining of the match. This effect is evened out by the theoretical simulations running several thousand iterations. But in practice, it will still be just the one coin flip at the start of your combat, having a major impact on the result of the given round.
    </p>
    <br><br>
</div>

<?php
include_once('../footer.php');
?>
