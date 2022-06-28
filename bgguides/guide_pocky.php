<?php
include_once('../header.php');
?>
<h2 class="page_title">Pocky's Guide to Improving at Battlegrounds</h2>

<div class="guide">
    <h3 data-movie="Forest Gump">“Hello. My name's Pocky, Pocky Plays. You want a chocolate?”</h3>
    <p>
        Hi all, I'm Pocky, a BGs streamer and player. I've peaked as high as Rank 11 on leaderboards, was part of a winning Twitch Rivals team, and some other tourney wins. Nearly 2 years ago I posted a <a href="https://www.reddit.com/r/hearthstone/comments/hkmbzd/a_guide_to_improving_at_battlegrounds_or_how_i/" target="_blank">popular guide</a> to Improving at Battlegrounds. I've gotten a lot better since then, but the game has also changed significantly. I still suck. I've wanted to update the guide for a while but there was always an excuse not to. No longer. I've added a ton, and cut out a lot of specific examples. Just like last time, the goal of this guide is to help you frame how you think of Battlegrounds, not teach you about specific examples, which will hopefully help keep this relevant for a long time to come.
        <br><br>
        Like all card games and auto-battlers, Battlegrounds is a strategy game that is influenced by RNG or luck. That means that to improve your gameplay you need to optimize your strategy accounting for the odds of different outcomes. Over time the random outcomes will equalize across all players and game knowledge and understanding of the game, and optimal plays will result in your climb.
        <br><br>
        It's important to establish this on the front end, because as with any strategy game, part of improving is analyzing your play. It's important to know that you will not always win even if you play 100% correctly. But if you do play optimally, over time you will get better, and you can't blame everything on the RNGods as it will only hold you back from rationally analyzing your play. (Important note here: previously I said play “correctly”. This isn't something that really exists. Two of the best players in the game may make drastically different plays; what they have in common is making the fewest suboptimal plays.)
        <br><br>
        There are two phases of the game, the Tavern portion and the Combat phase. The only time you have control over the game is the Tavern phase, but we can impact the Combat phase with our positioning and Tavern phase decisions.
        <br><br>
        The Tavern phase is when you spend your gold each turn, which means that understanding it best requires you to understand the things you spend gold on: using hero powers, buying minions, leveling, and rolling/freezing. The Combat phase is impacted mainly by your minion choices, positioning, and understanding your opponents and the game state. Combat will also influence your Tavern decisions.
        <br><br>
        Before we can get into it this time though, the game has changed. Game knowledge is more important now than ever. So we're restructuring everything. Understanding heroes and minion types come into play right from the start. So let's start with that.
    </p>
    <h3 data-movie="Jerry Maguire">“You Had Me at Hero” <em>(Understanding Heroes)</em></h3>
    <p>
        Picking a hero is the first decision you make in a game of BGs. Heroes are defined by their hero powers, of which there are many. Most importantly it's important to know what each hero's hero power is, and what it does.
        <br><br>
        I'm sure most of you are aware of the <a href="https://hsreplay.net/battlegrounds/heroes/" target="_blank">HSReplay Hero Tier List</a>. It doesn't tell you everything, but it remains a great resource. For a lot of low level players, simply always picking statistically the best hero would likely improve their win rate. For a lot of high level players, that also remains the case.
        <br><br>
        Beyond knowing what each hero power does, there's a further level to understanding them. When you understand hero powers, you can tailor your play to each hero power. Each hero power can impact your game in a number of ways. As more heroes have been released, the number of hero powers with multiple characteristics has increased. In a general sense, these traits can be defined as the following:
        <br><br>
    </p>
    <ul>
        <li>Tempo (stats buff)</li>
        <li>Consistency</li>
        <li>Value</li>
        <li>Greed</li>
        <li>Combat</li>
    </ul>
    <p>
        <br>
        <strong>Tempo</strong> heroes are heroes like <a href="https://bgknowhow.com/bgstrategy/hero/?id=78">Yogg</a>, <a href="https://bgknowhow.com/bgstrategy/hero/?id=32">Kael'thas</a>, <a href="https://bgknowhow.com/bgstrategy/hero/?id=14">Deryl</a>, or <a href="https://bgknowhow.com/bgstrategy/hero/?id=33">Mukla</a>. Simply put, they buff the stats on your minions which means all else being equal, your minions will typically be stronger than your opponents.
    </p>
    <div class="comp_wrapper" style="width: 51%">
        <a href="https://bgknowhow.com/bgstrategy/hero/?id=78"><img src="<?= PICTURE_LOCAL ?>heropowers/TB_BaconShop_HP_039_render_80.webp"></a>
        <a href="https://bgknowhow.com/bgstrategy/hero/?id=32"><img src="<?= PICTURE_LOCAL ?>heropowers/TB_BaconShop_HP_066_render_80.webp"></a>
        <a href="https://bgknowhow.com/bgstrategy/hero/?id=14"><img src="<?= PICTURE_LOCAL ?>heropowers/TB_BaconShop_HP_042_render_80.webp"></a>
        <a href="https://bgknowhow.com/bgstrategy/hero/?id=33"><img src="<?= PICTURE_LOCAL ?>heropowers/TB_BaconShop_HP_038_render_80.webp"></a>
    </div>
    <p>
        <strong>Consistency</strong> heroes are heroes like <a href="https://bgknowhow.com/bgstrategy/hero/?id=10">Hooktusk</a>, <a href="https://bgknowhow.com/bgstrategy/hero/?id=46">Nozdormu</a>, <a href="https://bgknowhow.com/bgstrategy/hero/?id=39">Malygos</a>, and <a href="https://bgknowhow.com/bgstrategy/hero/?id=20">Elise</a>. These heroes have ways of rerolling minions or taverns, or discovering minions, so that when you are offered unideal options, you have a chance to try to get better minions, or hit triples thus reducing the swing impacts of RNG, and more consistently having a solid board.
    </p>
    <div class="comp_wrapper" style="width: 51%">
        <a href="https://bgknowhow.com/bgstrategy/hero/?id=10"><img src="<?= PICTURE_LOCAL ?>heropowers/TB_BaconShop_HP_075_render_80.webp"></a>
        <a href="https://bgknowhow.com/bgstrategy/hero/?id=46"><img src="<?= PICTURE_LOCAL ?>heropowers/TB_BaconShop_HP_063_render_80.webp"></a>
        <a href="https://bgknowhow.com/bgstrategy/hero/?id=39"><img src="<?= PICTURE_LOCAL ?>heropowers/TB_BaconShop_HP_052_render_80.webp"></a>
        <a href="https://bgknowhow.com/bgstrategy/hero/?id=20"><img src="<?= PICTURE_LOCAL ?>heropowers/TB_BaconShop_HP_047_render_80.webp"></a>
    </div>
    <p>
        <strong>Value</strong> heroes are heroes that allow you to most efficiently use your gold. Value heroes are heroes like <a href="https://bgknowhow.com/bgstrategy/hero/?id=6">Rafaam</a>, <a href="https://bgknowhow.com/bgstrategy/hero/?id=38">Maiev</a>, <a href="https://bgknowhow.com/bgstrategy/hero/?id=41">Millhouse</a>, <a href="https://bgknowhow.com/bgstrategy/hero/?id=76">Xyrella</a>, and <a href="https://bgknowhow.com/bgstrategy/hero/?id=78">Yogg</a>. They can all acquire minions at a reduced cost that allows them to often have more minions on board, or in hand, which opens up avenues for greedy leveling, or an increased chance at triples.
    </p>
    <div class="comp_wrapper" style="width: 65%">
        <a href="https://bgknowhow.com/bgstrategy/hero/?id=6"><img src="<?= PICTURE_LOCAL ?>heropowers/TB_BaconShop_HP_053_render_80.webp"></a>
        <a href="https://bgknowhow.com/bgstrategy/hero/?id=38"><img src="<?= PICTURE_LOCAL ?>heropowers/TB_BaconShop_HP_068_render_80.webp"></a>
        <a href="https://bgknowhow.com/bgstrategy/hero/?id=41"><img src="<?= PICTURE_LOCAL ?>heropowers/TB_BaconShop_HP_054_render_80.webp"></a>
        <a href="https://bgknowhow.com/bgstrategy/hero/?id=76"><img src="<?= PICTURE_LOCAL ?>heropowers/BG20_HERO_101p_render_80.webp"></a>
        <a href="https://bgknowhow.com/bgstrategy/hero/?id=78"><img src="<?= PICTURE_LOCAL ?>heropowers/TB_BaconShop_HP_039_render_80.webp"></a>
    </div>
    <p>
        <strong>Greed</strong> heroes are heroes like <a href="https://bgknowhow.com/bgstrategy/hero/?id=1">A. F. Kay</a>, <a href="https://bgknowhow.com/bgstrategy/hero/?id=3">Alexstrasza</a>, <a href="https://bgknowhow.com/bgstrategy/hero/?id=55">Reno Jackson</a>, <a href="https://bgknowhow.com/bgstrategy/hero/?id=9">Captain Eudora</a>, and <a href="https://bgknowhow.com/bgstrategy/hero/?id=62">Skycap'n Kragg</a>. These heroes effectively play without a hero power for a period, and in return get a power spike later on in the game. While they play without a hero power they are typically punished by taking high damage, but the power spike(s) allows them the opportunity to swing the game back into their favor.
    </p>
    <div class="comp_wrapper" style="width: 65%">
        <a href="https://bgknowhow.com/bgstrategy/hero/?id=1"><img src="<?= PICTURE_LOCAL ?>heropowers/TB_BaconShop_HP_044_render_80.webp"></a>
        <a href="https://bgknowhow.com/bgstrategy/hero/?id=3"><img src="<?= PICTURE_LOCAL ?>heropowers/TB_BaconShop_HP_064_render_80.webp"></a>
        <a href="https://bgknowhow.com/bgstrategy/hero/?id=55"><img src="<?= PICTURE_LOCAL ?>heropowers/TB_BaconShop_HP_046_render_80.webp"></a>
        <a href="https://bgknowhow.com/bgstrategy/hero/?id=9"><img src="<?= PICTURE_LOCAL ?>heropowers/TB_BaconShop_HP_074_render_80.webp"></a>
        <a href="https://bgknowhow.com/bgstrategy/hero/?id=62"><img src="<?= PICTURE_LOCAL ?>heropowers/TB_BaconShop_HP_076_render_80.webp"></a>
    </div>
    <p>
        <strong>Combat</strong> heroes are heroes like <a href="https://bgknowhow.com/bgstrategy/hero/?id=69">Lich King</a>, <a href="https://bgknowhow.com/bgstrategy/hero/?id=2">Al’Akir</a>, <a href="https://bgknowhow.com/bgstrategy/hero/?id=7">Bru’kan</a>, etc. They used to be bad. However, most combat hero powers have moved to costing 0 gold, which means that they can be viable, or even strong with the right comps to take advantage of their hero powers.
    </p>
    <div class="comp_wrapper" style="width: 41%">
        <a href="https://bgknowhow.com/bgstrategy/hero/?id=69"><img src="<?= PICTURE_LOCAL ?>heropowers/TB_BaconShop_HP_024_render_80.webp"></a>
        <a href="https://bgknowhow.com/bgstrategy/hero/?id=2"><img src="<?= PICTURE_LOCAL ?>heropowers/TB_BaconShop_HP_086_render_80.webp"></a>
        <a href="https://bgknowhow.com/bgstrategy/hero/?id=7"><img src="<?= PICTURE_LOCAL ?>heropowers/BG22_HERO_001p_render_80.webp"></a>
    </div>
    <h3 data-movie="Fanboys" id="testscroll">“You are only as strong as your weakest link...” <em>(Strengths and Weaknesses)</em></h3>
    <p>
        Understanding the strengths of your hero power allows you to play towards it, as well as understand your weaknesses and how to play around it. There are a number of guides that people have written on specific heroes that go into far more depth on the details on different heroes, but in a general sense there are some tips that can help you organically think about different hero power characteristics.
        <br><br>
        For <strong>tempo</strong> hero powers, your strength is your board strength, which is particularly impactful in the early game. A <a href="https://bgknowhow.com/bgstrategy/hero/?id=33">Mukla</a> or <a href="https://bgknowhow.com/bgstrategy/hero/?id=78">Yogg</a> on turns 3-7 are likely simply going to be stronger than most other heroes simply by having more stats on their minions. We will get into tempo a little more with understanding game state, but essentially since you will typically have a strong tempo early game, you are afforded the ability to occasionally play greedy, whether it's by leveling faster as <a href="https://bgknowhow.com/bgstrategy/hero/?id=78">Yogg</a>, or perhaps holding for an extra turn to dance more, as <a href="https://bgknowhow.com/bgstrategy/hero/?id=14">Deryl</a>. Many of these heroes fall off later as the stats buffs become less relevant as other players start to scale with proper scaling engines, so pressing your advantage early to gain further
        advantage puts you in a better position to win. Playing greedy in these situations can accelerate your advantage, and punish other players, diminishing your relative weaknesses in the later game.
        <br><br>
        <strong>Consistency</strong> hero powers see a few different impacts on their play. For one, similar to tempo heroes, they'll often have strong boards early game by virtue of having better minions. <a href="https://bgknowhow.com/bgstrategy/hero/?id=46">Nozdormu</a> is a great example of this. On turn 1 instead of picking the best of 3 minions, you get to pick the best of 6 minions. So instead of having a top 33% minion, you instead have a top 17% minion. This applies throughout the game, so you’ll be able to have a better than average board. While slightly stronger minions don't quite give you the same relative tempo early, the extra consistency more importantly increases the likelihood you will hit triples, which makes it more conducive to pick up pairs when you're playing these heroes. Since you can have a relatively strong board by consistently getting good minions, oftentimes you'll be afforded the opportunity to hold onto pairs and level aggressively to triple into higher
        tier minions that can either give you a direction, or give you a strong power spike.
        <br><br>
        <strong>Value</strong> hero powers can get minions for cheaper, which means the main thing is to consider how to best utilize the extra resources it affords you. The simplest example of this are alternative curves like the "Rafaam or Warrior curves" (discussed below). These curves typically provide the benefit of being able to pick up pairs and additional minions, while later allowing you to use your extra gold to level quickly. Even more than the consistency heroes, you can triple into higher tier minions. <a href="https://bgknowhow.com/bgstrategy/hero/?id=38">Maiev</a> plays similar to <a href="https://bgknowhow.com/bgstrategy/hero/?id=6">Rafaam</a> except on a delay, but you can choose what you pick up, meaning you can prioritize pairs. Many heroes with 2 gold hero powers like <a href="https://bgknowhow.com/bgstrategy/hero/?id=76">Xyrella</a>, <a href="https://bgknowhow.com/bgstrategy/hero/?id=57">Scabbs</a> and <a href="https://bgknowhow.com/bgstrategy/hero/?id=78">Yogg</a>,
        have adapted versions of these curves.
        <br><br>
        <strong>Greed</strong> hero powers are; you know greed hero powers. We all love high rolling. Greed heroes usually play without a hero power early, for a later payoff. Usually this payoff comes at the expense of your hero's health, which means generally you play in one of two ways, typically decided by your game state. The first and typically best is to play as conservatively as possible, and as close to a standard curve as you can. You don't need to be greedy because you have natural greed built in, and that payoff will help make up for your earlier losses. The other situation is recognizing when the benefits of playing conservatively will not pay off for you. The best example of this when you are offered a very poor shop on turn 3, an option you have is to look at the situation and say I'm likely to lose regardless of if I buy minions here, and resign to taking the damage, but increasing your high roll potential by getting to a higher level faster. Greed heroes are usually
        designed around managing your non-gold resource, health, optimally.
        <br><br>
        <strong>Combat</strong> hero powers, like the name suggests, impact combat. Their advantage is that typically in the early game they provide tempo, winning early fights, and they can have unique interactions that benefit specific compositions. Their weaknesses exist in that they usually don’t provide econ or consistency.
        <br><br>
        A brief note on armor. Armor does matter, but for the vast majority of heroes it is meant to be a win rate equalizer. Some heroes like <a href="https://bgknowhow.com/bgstrategy/hero/?id=43">Mr. Bigglesworth</a> or <a href="https://bgknowhow.com/bgstrategy/hero/?id=35">Lich Baz’hial</a> have much more to consider with their armor levels as it can impact how their hero plays. Usually it should not be a major factor in your hero choice though.
        <br><br>
        As mentioned before, many hero powers now have multiple characteristics. Consider hero powers holistically, and try to identify your heroes strengths and weaknesses. Playing into a hero’s strengths, and balancing the hedge against their weaknesses is foundational to being the best player you can be.
    </p>
    <h3 data-movie="Avengers: Endgame" id="testscroll2">“Minions, Assemble!”</h3>
    <p>
        Battlegrounds now has 9 minion types, but only 5 are in any given lobby. That means that different combinations can play out drastically differently. When there were only 6 and 7 minion types, we had 6 and 21 lobby configurations respectively. Now we have 126! Don’t bother memorizing them anymore. Instead, understanding the characteristics and synergies of the different minion types can give you insight into how a lobby will play out before it even starts.
        <br><br>
        Murlocs provide access to abundant poison. Mechs dominate divine shield access. Quilboar benefit from those shields with <a href="https://bgknowhow.com/bgstrategy/minion/?id=56">Gemsplitter</a> and <a href="https://bgknowhow.com/bgstrategy/minion/?id=84">Groundshaker</a>. Naga may prefer to be paired with Quilboar for access to cheap spells, or with cleaves to take advantage of their type neutral utility. All those shields might not prove as impactful when Dragons are in.
        <br><br>
        On top of these characteristics and synergies, it also helps to consider the directional or keystone minions in each tribe, as well as the availability of econ on lower tiers. Knowing which minions you’re going for, as well as the gold resources you’ll have available to you in the early game will help you guide you in our next section.
    </p>
    <h3 data-movie="The Pursuit of Happyness">“You Want Something, Go Get It. Period.”</h3>
    <p>
        You should have an idea of your goals for a game before you even see your first shop. Between your hero choice and the minion types in a lobby, you should have a general plan through the early game, mid-game, and where you’d ideally be in the end-game. BGs, like life, rarely goes according to plan, but having that plan can help guide our decisions, both in leaning into certain end games or lines, or when to adjust when a line no longer seems feasible to us.
    </p>
    <div class="comp_wrapper" style="width: 87%;">
        <?php
        $board   = ['Eliza', 'Buster', 'Zapp', 'Baron', 'Mummy', 'Pupbot', 'Scallywag'];
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        ?>
    </div>
    <p>
        A brief example could be a <a href="https://bgknowhow.com/bgstrategy/hero/?id=38">Maiev</a> game in a lobby with Pirates, Mechs, Dragons, Quilboar, and Murlocs. <a href="https://bgknowhow.com/bgstrategy/hero/?id=38">Maiev</a> is strong at lining up early triples, especially into 6 before other heroes are able to. Dragons, Quilboar, and Murlocs can be slow to scale up, meaning an early <a href="https://bgknowhow.com/bgstrategy/minion/?id=131">Eliza</a> has a strong window to tempo out those comps. Pirate Exodia likes Quilboar in as a way to play around <a href="https://bgknowhow.com/bgstrategy/minion/?id=144">Zapp</a>. Mechs provide an alternative course in <a href="https://bgknowhow.com/bgstrategy/minion/?id=142">Omega Buster</a> as a comp that can also make use of a <a href="https://bgknowhow.com/bgstrategy/minion/?id=108">Baron</a>, as well as providing high tempo 1 drops in <a href="https://bgknowhow.com/bgstrategy/minion/?id=6">Micro Mummy</a> and <a
                href="https://bgknowhow.com/bgstrategy/minion/?id=7">Pupbot</a>. Picking up early <a href="https://bgknowhow.com/bgstrategy/minion/?id=12">Scallywags</a>, can play into this plan, and we can have contingencies if our plan doesn’t come to fruition. Having a blurry painting of this before the game starts will help your game.
        <br><br>
        And NOW we’re ready to start the game.
    </p>
    <h3 data-movie="Dr. Strangelove / Whiplash">“Gentlemen, You Can't Fight In Here! This is The Tavern” / “Not Quite My Tempo”</h3>
    <p>
        As we get into the Tavern, we need to understand minions, tempo, and direction.
        <br><br>
        Minions, they're what you buy. Minions are the foundation of Battlegrounds, as they're what do the battling. Minions can have stats and effects. The stats are made up of attack and health, and the effects can be a range. Some effects have synergy with specific minion types. Each minion costs 3 gold to buy (usually), and so buying minions will typically make up most of your gold spent in a game.
        <br><br>
        Tempo in a general sense is buying minions to optimize your chances of winning the next fight. Typically, this revolves around buying the minions with the best stats possible. Sometimes this is naked stats, but sometimes it's based on what's currently on your board. <a href="https://bgknowhow.com/bgstrategy/minion/?id=28">Murloc Warleader</a> can be a naked 3/3 or could effectively be adding 6 attack to 3 other murlocs already on your board. <a href="https://bgknowhow.com/bgstrategy/minion/?id=25">Menagerie Mug</a> can range from a 2/2 on its own, or it can be as strong as a 5/5 in total stats with a full buff.
    </p>
    <div class="comp_wrapper">
        <?php
        $board   = ['Warleader', 'Mug', 'Goldrinn', 'Mama Bear', 'Elder', 'Kaly'];
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        ?>
    </div>
    <p>
        When you want or need to win fights, you should be playing for tempo. Oftentimes playing for tempo means that you'll naturally start taking advantage of tribal synergies, which begins what we call our direction. If your board is made up of 5 pirates early on, you will start looking for minions that benefit pirates, as you move to late-game. As you get later on in the game, if you have a direction, you'll be looking for 'keystone' cards that fit your direction. <a href="https://bgknowhow.com/bgstrategy/minion/?id=136">Goldrinn</a> or <a href="https://bgknowhow.com/bgstrategy/minion/?id=117">Mama Bear</a> for Beasts, <a href="https://bgknowhow.com/bgstrategy/minion/?id=210">Darkgaze</a> for Quilboar, <a href="https://bgknowhow.com/bgstrategy/minion/?id=138">Kalecgos</a> for Dragons etc. Neutral cards like <a href="https://bgknowhow.com/bgstrategy/minion/?id=109">Brann</a>, <a href="https://bgknowhow.com/bgstrategy/minion/?id=108">Baron</a>, or <a
                href="https://bgknowhow.com/bgstrategy/minion/?id=120">Mythrax</a> can also advise your direction. If you don't have a direction, then it's important to play for tempo so that you can get to Tier 5 and 6 where most of the 'keystone' cards reside. This allows you to pick one of them up and then have a direction for your late game build. There is a balance to deciding what is an acceptable direction depending on the trajectory of a lobby, because different cards scale at different speeds. Scaling engines like <a href="https://bgknowhow.com/bgstrategy/minion/?id=138">Kale</a>, <a href="https://bgknowhow.com/bgstrategy/minion/?id=210">Darkgaze</a>, or <a href="https://bgknowhow.com/bgstrategy/minion/?id=206">Athissa</a> take time to build up. Exodia style comps scale exponentially with each additional piece of the puzzle picked up.
    </p>
    <div class="comp_wrapper">
        <?php
        $board   = ['Brann', 'Baron', 'Mythrax', 'Kaly', 'Elder', 'Athissa'];
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        ?>
    </div>
    <p>
        Without going into details on every minion, it's important to understand which minions are strong on stats and tempo (and when), and which minions give you a direction, and are worth building around and when. Together with our pre-game picture, and the picture that gets painted in-game we can lean into and find our direction.
    </p>
    <h3 data-movie="I'm no Angel">“A Figure With Curves Offers A Lot Of Interesting Angles.” <em>(Understanding Curves)</em></h3>
    <p>
        Understanding curves is essentially understanding leveling patterns. The table below is a breakdown of some basic statistics on each level:<br><br>
    </p>
    <table class="tier-table">
        <thead>
        <tr>
            <th>Tavern Tier</th>
            <th>Upgrade base cost</th>
            <th>Minions in tavern</th>
            <th>Copies of each minion</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>-</td>
            <td>3</td>
            <td>16</td>
        </tr>
        <tr>
            <td>2</td>
            <td>5</td>
            <td>4</td>
            <td>15</td>
        </tr>
        <tr>
            <td>3</td>
            <td>7</td>
            <td>4</td>
            <td>13</td>
        </tr>
        <tr>
            <td>4</td>
            <td>8</td>
            <td>5</td>
            <td>11</td>
        </tr>
        <tr>
            <td>5</td>
            <td>9</td>
            <td>5</td>
            <td>9</td>
        </tr>
        <tr>
            <td>6</td>
            <td>10</td>
            <td>6</td>
            <td>7</td>
        </tr>
        </tbody>
    </table>
    <br><br>
    <p>
        Of course, most importantly is that each Tier offers you stronger minions than the last, so it's important to know <a href="https://hearthstone.fandom.com/wiki/Battlegrounds/Minion" target="_blank">what minions are on what tier</a>, so that when you're looking for specific minions you know what tier to be on. If you're playing elementals/mechs or divine shield it's fine to stay on 4 for longer than normal. This is especially relevant when you triple, as your preferred direction will dictate what tier you triple into and what tier you want to roll on.
        <br><br>
        So we know why we level, how much it costs to level, etc. The bit that people struggle with the most is when to level. Minder has a useful <a href="https://docs.google.com/spreadsheets/d/1Pis44oSp3jXylJnF6Xd55m_ZnWP7pNcmWhpW56CvWM4/edit#gid=0" target="_blank">curve sheet</a> that outlines most of the basic curves in BGs right now. Ignore the “Tier” ranking of these curves, they're all situational. <em>*Editor’s Note: Yes, Pocky curve does suck now.</em>
        <br><br>
        Standard Curve is far less common now than it has been in the past (so much so that some don’t like calling it that now, see Basic Curve.) It does still provide a very clear outline of how to level gold efficiently with a 0 cost hero power. It’s helpful to know it in and out, because then we can easily think about when and why deviate from the curve.
    </p>
    <h4 data-movie="Wanted">“Have you ever thought about doing things differently?”</h4>
    <p>
        So when do you want to deviate from the curve?
    </p>
    <br>
    <ul>
        <li>To maximize your hero power</li>
        <li>To stay alive or conserve HP</li>
        <li>To greed when you're in a strong position</li>
        <li>Shop too good/too bad</li>
    </ul>
    <br>
    <p>
        The first point is commonly seen in the aforementioned <a href="https://bgknowhow.com/bgstrategy/hero/?id=6">Rafaam</a> curve:
    </p>
    <div class="comp_wrapper" style="float: left; width: 200px; margin-left: 25px; margin-top: 10px;">
        <a href="https://bgknowhow.com/bgstrategy/hero/?id=6"><img src="<?= PICTURE_LOCAL ?>heropowers/TB_BaconShop_HP_053_render_80.webp"></a>
    </div>
    <div style="float: left; margin-left: -30px; margin-top: 35px;">
        <ul>
            <li>3 Gold turn: Buy</li>
            <li>4 Gold turn: Buy, Hero Power</li>
            <li>5 Gold turn: Roll (if no good minions), Buy, Hero Power</li>
            <li>6 Gold turn: Buy, Hero Power, Level 2 (for 2)</li>
            <li>7 Gold turn: Hero Power, Level 3 (for 6)</li>
            <li>8 Gold turn: Hero Power, Level 4 (for 7) or Standard Curve</li>
        </ul>
    </div>
    <br>
    <p class="cf">
        Essentially this curve is valuable because it allows you to take advantage of your hero power early, and return to the standard curve, so you don't fall behind in the late game. You make up for not leveling by getting tempo in the form of minions for 1 gold, but in addition to getting tempo, you also increase the chances that you'll hit triples, which have a greater payoff when you're able to level greedily. Heroes with 2 gold hero powers will often play alternative curves to be able to efficiently weave in their hero powers. Heroes with hero powers that discover early may be inclined to go 3on3 (i.e. Tier 3 on turn 3).
    </p>
    <br><br>
    <p>
        Staying alive is a bit more straightforward. We all have those games where it seems nothing is going our way. We can't get good minions in the shop, we can't win a fight for our lives, and we're almost dead on Turn 7. In this case the outcome of potentially taking first place is almost entirely gone, a win for us now is simply losing the least MMR, whether that's a top 4, or a 6th place rather than 8th. We don't level on curve because we need to stabilize and improve our tempo, simply, so we don't lose the next turn or two. Maybe you’re doing alright, but are about to face the high roller. We wait a turn, and simply tempo up the best we can, to survive.
    </p>
    <h3 data-movie="Wall Street">“Greed, for lack of a better word, is good.”</h3>
    <p>
        Sometimes you're getting one of those games where everything is going your way. The shops are great, you're getting pairs, and you're winning every fight. Boom you hit a triple. You've got a board full of dragons, and you'd really love to get a Kalecgos instead of a tier 5. In this case you can level, potentially sacrificing a fight, but increasing your odds to take first place, and you know you're not going to die immediately.You'll hopefully power spike with your 6 drop, and go from there. Level and believe in the heart of the cards.
        <br><br>
        Lastly is simply the shop might be too good or too bad to warrant staying on our normal curve. Say you really wanted to level to 5 on 9 gold, but you get presented a ton of synergistic minions. You may delay your level to buy the lot. More often it feels like you're on turn 3, you've got econ ready, and the shop is terrible. We’ll take the early loss and try to find higher tier minions to stabilize us. Level to T3 and enjoy the ride. The tempo you sacrifice isn't that great by virtue of the poor shop, and we're just trying to make the best of a bad situation, and putting ourselves in a better position to get lucky later.
        <br><br>
        In real games you'll deviate from the standard curve more often than not, but it helps to think of it as your base, and understand why and when you're deviating. Once you start to understand the advantages and disadvantages of the different curves, the game gets simpler. Slower leveling curves will more frequently line up triples. Faster leveling curves can open up high rolls.
        <br><br>
        Eventually you won’t need to abide by any of them, but you need to know the rules to break them. Understanding curves is simply, understanding how to best utilize your hero, tempo, and managing your resources. Which brings us to our next topic.
    </p>
    <h3 data-movie="Vertical Limit">“We Can't Waste Resources On A Lost Cause.” <em>(Understanding Resources)</em></h3>
    <h4 data-movie="Austin Powers">“I love goooold”</h4>
    <p>
        In Battlegrounds there are two resources to manage. Gold, obviously, and health. Most of what we've discussed above is actually rooted in understanding how to manage these resources. Our curves are based on maximizing gold efficiency while keeping your health as high as possible. This is because it's focused on buying the maximum amount of minions while still leveling efficiently, allowing you to get stronger minions as you level up. This optimizes your tempo, while limiting the amount of wasted gold.
    </p>
    <h4 data-movie="Star Wars">“It's a trap!”</h4>
    <p>
        One of the most common traps lower level players fall into is rolling for specific minions, whether it's a murloc for their murloc board, or a triple too hard. Rolls are expensive. If you look at the standard curve, we don't typically have excess gold to roll until our 8 gold turn (i.e. turn 6). In a standard curve, you'll generally only roll 3 times in your first 8 turns. Any excess rolls on any earlier turns will usually prevent you from being gold efficient, resulting either in you playing down a minion or delaying a level. Is that really worth the rolls? If we look at a curve like Warrior Curve, there’s usually even less gold dedicated to rolling.
        <br><br>
        Related to rolling is freezing. Each new tavern we see is worth one gold. If you freeze a tavern you're missing out on seeing a new tavern, which is essentially missing a roll. Since you froze you're likely buying a minion in the shop you're freezing. That minion might be worth 3 gold, but would you pay 4 for it? If not it's probably not worth the freeze. What about when you're floating a gold, or even two? That minion could be effectively costing you 5 or 6 gold. Some minions are worth that, especially if there's a strong triple that you cannot get to. But otherwise you're missing out on potentially better minions, potential triples, etc.
        <br><br>
        If your opponents are wasting 20 gold in a game, and you’re perfectly efficient, you’re getting a boost of two <a href="https://bgknowhow.com/bgstrategy/hero/?id=62">Kragg</a> hero powers in a single game! That’s an insane advantage, almost sure to make up for any bad RNG. Now of course playing perfectly efficiently isn’t realistic, but you would be surprised how often the margin between you and your opponents could be even more than 20 gold. A million gold isn't cool. You know what's cool? A billion gold.
    </p>
    <h4 data-movie="Mel Brooks">“Money does buy happiness. And I'm healthy already.”</h4>
    <p>
        This is pretty straightforward and essentially what was discussed around greedy heroes, and when to deviate from the curve. It's simply knowing when you are wealthy and healthy (#rhymes) enough to take a hit while being greedy, or when you are poor and need to be a little more frugal with your health. If you are willing to play with your MMR a little, practicing with <a href="https://bgknowhow.com/bgstrategy/hero/?id=50">Patchwerk</a> and <a href="https://bgknowhow.com/bgstrategy/hero/?id=35">Lich Baz'hial</a> can give you a good feel for managing health, as they both utilize it as a resource more than any other hero.
    </p>
    <h3 data-movie="Forrest Gump">“Battlegrounds is Like a Box of Chocolates”</h3>
    <p>
        Battlegrounds is an auto-battler, meaning during the actual combat phase we don’t have any control of the game. However, as players we can still hugely impact how a combat will go. We can choose our chocolates if you will.
    </p>
    <h3 data-movie="Batman Begins">“You Must Become More Than Just A Player In The Mind Of Your Opponent.” <em>(Understanding Opponents)</em></h3>
    <p>
        So first off a plug for <a href="https://hsreplay.net/downloads/" target="_blank">Hearthstone Deck Tracker</a>. If you play on desktop it's an insanely helpful resource/crutch. It tracks the minions your opponents have had when you've played against them. There's also the Bob's Buddy addition, which gives you rough combat odds based on simulations that can help you judge how strong you are relative to your opponents and a general understanding of how likely you were to win, regardless of the results of a specific combat outcome. This can help us be more objective in the analysis of our play.
        <br><br>
        One of the main things that lower level players don't do is check their opponents before each combat phase. Even without a deck tracker the game gives you a lot of information about your opponents. How much damage they've done to their last two opponents, how many triples they have, their win streak, and a very blurry picture of the sort of comp they have. As it relates to deciding if you need to tempo up or if you can be greedy, checking your opponent typically gives you the answer. If they level, you know they invest gold in leveling instead of tempo, and may want to take the opportunity to level as well. If they are on a 5 round win streak doing a lot of damage to opponents, perhaps we focus on tempo for a turn. If they've been struggling and taking it from everyone, maybe you have the leeway to level aggressively. Do not judge an opponent’s strength by their health total. They may have been greeding and spiked against you, or they may have gotten lucky match up RNG.
        <br><br>
        Knowing their comp is also vital to shop purchasing decisions and positioning. If someone has a deathrattle comp, you may more specifically look for a <a href="https://bgknowhow.com/bgstrategy/minion/?id=144">Zapp</a> to snipe their <a href="https://bgknowhow.com/bgstrategy/minion/?id=108">Baron</a>. If they're mechs on tier 4 you might put a bumper in front to break a potential divine shield on their taunt. If they look to have multiple shields, consider a <a href="https://bgknowhow.com/bgstrategy/minion/?id=226">Buster</a>. If they are likely to have extremely high-statted minions, look for <a href="https://bgknowhow.com/bgstrategy/minion/?id=208">Leeroy</a> and poison.
    </p>
    <div class="comp_wrapper" style="width: 62%">
        <?php
        $board   = ['Zapp', 'Baron', 'Buster', 'Leeroy', 'Goldrinn'];
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        ?>
    </div>
    <p>
        Checking your opponents will have a huge impact on your decisions in the Tavern phase, and those decisions will improve your combat outcomes, specifically in preventing big losses when an opponent is very strong.
    </p>
    <h3 data-movie="Independence Day">“First, You Strategically Position Your Pieces And When The Timing Is Right You Strike.” <em>(Understanding Positioning)</em></h3>
    <p>
        Positioning can have a huge impact on combat outcomes. To use a stark example, imagine putting a <a href="https://bgknowhow.com/bgstrategy/minion/?id=108">Baron</a> in the left-most position and a <a href="https://bgknowhow.com/bgstrategy/minion/?id=136">Goldrinn</a> in the right-most position. In most situations that can turn an easy win into a guaranteed loss.
        <br><br>
        A note for beginners, attack priority is determined by the player with more minions. If you have more minions than your opponent, you will attack first, if they have more they will attack first, and if you have the same it will be a coin flip (50/50 chance). This is another reason why playing on curve and not over-rolling is important. Attacking first typically benefits you in combat, in a way giving your minions 'control' of a fight, so making sure you're not missing out on filling your board will result in better combat results.
    </p>
    <h4>Trading</h4>
    <p>
        As a very general rule, you want to have minions with higher attack to attack first. The reason for this is it improves your trading, as your attacks will be more likely to kill the opponent's minions. Consider the following example: Two players each have a 6/3 and a 2/4. In one scenario Player A and B both position the 6/3 first. Each has a 25% chance to win, 50% chance to draw, and 25% chance to lose. In the other scenario Player A positions the 6/3 first and Player B positions the 2/4 first. Instead, Player A wins 31.25% of the time, and it's a draw 68.75% of the time.
    </p>
    <br>
    <table class="tier-table">
        <thead>
        <tr>
            <th>Player</th>
            <th>Minion #1</th>
            <th>Minion #2</th>
            <th>Attacks first -> Left</th>
            <th>Attacks first -> Right</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Player A</td>
            <td>6/3</td>
            <td>2/4</td>
            <td>100% draw</td>
            <td>50% win, 50% draw</td>
            <td>25% win, 50% draw, 25% loss</td>
        </tr>
        <tr>
            <td>Player B</td>
            <td>6/3</td>
            <td>2/4</td>
            <td>100% draw</td>
            <td>50% win, 50% draw</td>
            <td>25% win, 50% draw, 25% loss</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Player A</td>
            <td>6/3</td>
            <td>2/4</td>
            <td>50% win, 50% draw</td>
            <td>100% draw</td>
            <td>31.25% win, 68.75% draw</td>
        </tr>
        <tr>
            <td>Player B</td>
            <td>2/4</td>
            <td>6/3</td>
            <td>50% loss, 50% draw</td>
            <td>25% loss, 75% draw</td>
            <td>31.25% loss, 68.75% draw</td>
        </tr>
        </tbody>
    </table>
    <br>
    <p>
        Meaning by mispositioning and getting poor trades as a result, Player B gives up 25% chance to win, and loses an additional 6.25% time. (We're always assuming the opponent is playing optimally, if they're not it only benefits you.) This is essentially because the 6/3 more frequently survives with 1 hp because the lower attack minion attacks first and cannot kill it. If the 6/3 minion attacks first it will always kill what it attacks. Extracting this logic out further means that by positioning higher attack minions in front you will less frequently allow the opponent good trades where their minions survive on 1 or 2 health.
    </p>
    <h4>Priority</h4>
    <p>
        As an even more general rule, you want minions that you want to attack first to attack first. Mind-blowing, right? As we just went over, usually this is higher attack minions, but there are also any other number of reasons why we'd want other minions to attack first, usually because that minion has an effect on attacking (or on death). <a href="https://bgknowhow.com/bgstrategy/minion/?id=144">Zapp</a>, <a href="https://bgknowhow.com/bgstrategy/minion/?id=60">Macaw</a>, and Cleave, Overkill, and Windfury minions all have additional value when they're attacking, but not when they're attacked. Part of the reason attacking first can be so important is if a <a href="https://bgknowhow.com/bgstrategy/minion/?id=144">Zapp</a> attacks first it can kill a <a href="https://bgknowhow.com/bgstrategy/minion/?id=108">Baron</a> or <a href="https://bgknowhow.com/bgstrategy/minion/?id=67">Juggler</a> before they can have any impact on a fight, if a <a
                href="https://bgknowhow.com/bgstrategy/minion/?id=60">Macaw</a> attacks first it can trigger free deathrattles before you have a chance to kill anything on their board.
    </p>
    <div class="comp_wrapper" style="width: 52%;">
        <?php
        $board   = ['Zapp', 'Macaw', 'Baron', 'Juggler'];
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        ?>
    </div>
    <p>
        A large cleave in front can take out a lot of minions at once, or more reliably snipe the opponents own high priority minions before they can attack or have an impact. Similarly, certain deathrattles are important to have gone off first, <a href="https://bgknowhow.com/bgstrategy/minion/?id=226">Buster</a> to clear an opponent's divine shields, or a Spawn or <a href="https://bgknowhow.com/bgstrategy/minion/?id=136">Goldrinn</a> to buff as much of your board as possible. Another example of a minion that you would want to attack earlier is something like <a href="https://bgknowhow.com/bgstrategy/minion/?id=53">Deflect-o-Bot</a> (or formerly <a href="https://bgknowhow.com/bgstrategy/minion/?id=112">Holy Mecherel</a> RIP, leaving this lol), so it can lose its divine shield and get a potential reset before accidentally getting sniped later in your order. This is also why you typically position the reset right behind it.
    </p>
    <div class="comp_wrapper" style="width: 87%;">
        <?php
        $board   = ['Goldrinn', 'Mecherel', 'Baron', 'Mama Bear', 'Gemsplitter', 'Kangor\'s', 'Rat Pack'];
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        ?>
    </div>
    <p>
        Another concept of priority is minions you want to die later in combat. For obvious reasons you typically want to put these minions further right on your board to delay their attacks as much as possible. Examples of this are minions like <a href="https://bgknowhow.com/bgstrategy/minion/?id=108">Baron</a>, <a href="https://bgknowhow.com/bgstrategy/minion/?id=117">Mama Bear</a>, <a href="https://bgknowhow.com/bgstrategy/minion/?id=56">Gemsplitter</a> and other minions like Avenge units that have an effect while they're alive. Other minions that you might want to die later are things like <a href="https://bgknowhow.com/bgstrategy/minion/?id=114">Kangor's</a>, or <a href="https://bgknowhow.com/bgstrategy/minion/?id=61">Rat</a>, so they can have as many summons as possible. Besides, positioning these minions to delay their attacks, there's one more way you can help these minions stay alive, which brings us to our next topic.
    </p>
    <h4>Taunts</h4>
    <p>
        Taunts are severely underrated by lower level players. Taunts are one of the best ways to manipulate the outcomes of battles in ways that favor you because it's the most you can do to control how your opponents' minions attack. They serve a lot of purposes, mostly related to what we discussed above. A taunt soaking attacks means that the minions that you want to have attack priority will more likely get to attack, and your general attack order will be preserved. It also helps keep your other minions alive. The last value is that they serve as cleave protection. We've all been devastated by that cleave that just kills 3 minions in the middle of your order, or snipes your most important minion. Putting a taunt at the far left or usually right (so it stays alive rather than attacking), and a low value minion next to it can protect from a strong potential cleave. You'll often see a <a href="https://bgknowhow.com/bgstrategy/minion/?id=127">Voidlord</a>, <a
                href="https://bgknowhow.com/bgstrategy/minion/?id=73">Annoy-o-Module</a>, or Divine Shield taunt put into unrelated builds to simply provide a two attack taunt for protection. Another benefit with some of these minions is that, unbuffed, they can be used to play around cards like <a href="https://bgknowhow.com/bgstrategy/minion/?id=140">Nadina</a> or <a href="https://bgknowhow.com/bgstrategy/minion/?id=12">Scallywag</a>.
    </p>
    <div class="comp_wrapper">
        <?php
        $board   = ['Voidlord', 'Module', 'Nadina', 'Scallywag', 'Baron', 'Zapp'];
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        ?>
    </div>
    <p>
        Last bit on positioning is just to reiterate and stress the importance of checking your opponents before combat. If they have 5 or 6 dragons you might want to play around <a href="https://bgknowhow.com/bgstrategy/minion/?id=140">Nadina</a>. If they're Beasts or Mechs you're more likely going to want to make sure you have cleave protection. If they're running <a href="https://bgknowhow.com/bgstrategy/minion/?id=108">Baron</a>, focus on trying to get <a href="https://bgknowhow.com/bgstrategy/minion/?id=144">Zapp</a> for a turn.
    </p>
    <h3 data-movie="Oceans Eleven">“When That Perfect Shop Comes Along, You Buy Big” <em>(Understanding the Game Flow)</em></h3>
    <p>
        The last thing to understand is a more general game sense aspect. Understanding the game state and the general game flow of the lobby that you're in. Sometimes you run into a high roller and you know they're likely to win the lobby. Your priority and focus might shift from trying to win to trying to get a top 4. If a lobby is grindy and filled with players going for top 4, they might not be able to do as much damage to you, and you will have more opportunities to play a little greedier and go for a winning build. Perhaps you're the high roller, but you have pirates, you might try to play aggressive in getting to 6 and getting high value minions to pace up the lobby and kill people faster, increasing your odds of top 4 and of 1st. Understanding the state of your lobby, should influence how you play, and your goals in each lobby. To climb you're just trying to get the best finish possible for your game. If you turn a game that you should have gotten top 8 into a 6th place finish
        you can consider that a win. Playing turn to turn will often get you good finishes, but thinking about the long game in each lobby can help you get to that next level.
        <br><br>
        Likewise, you should also recognize your opportunities to strike. If you get dealt a pair of aces, you always split. In BGs, if you’re presented with a high-roll game, you should do your best to capitalize on it. Every placement matters, so if getting 6th instead of 8th is a win, so is getting 1st instead of 3rd. You will not get a first every game, nor will you even have the chance to, but if it’s in the cards, carpe diem. Seize the day.
    </p>
    <h3 data-movie="The Matrix">“Remember, All I’m Offering Is The Truth. Nothing More.” <em>(Understanding the Meta)</em></h3>
    <p>
        The meta is always changing, so it's difficult to give lasting advice, but it's important to understand that the meta shifts can have a huge impact on your play, especially at higher MMRs. If you don't play according to the meta, you can see huge MMR drops. Sometimes you will have a greedy meta, and you will either have to play into the greed, or play for survival against those that hit. In a more tempo-oriented meta, you will have to balance not taking too much damage with capitalizing on opportunities to level and play aggressively. It’s also vital to know what comps are strongest, how to play them, and perhaps more importantly, how to play against them. Metas will shift as certain comps become more popular, and their counters will then become more contested. Knowing the meta makes it easier to analyze the game state or know what your opponent has before you fight them. Whether it’s what type of build they’re running, what direction you may want to lean into, or countering
        the meta or even countering the counter, it all starts with understanding.
    </p>
    <h4 data-movie="Drumline">“Why You Forcin’ It?”</h4>
    <p>
        An important reminder. DON’T FORCE IT (*terms and conditions apply). The questions, what comp should I learn first, or what’s the best comp in the game, are frequently asked. The best comp is the one that’s getting you the best placement. While certain comps will at times be the strongest, if you force it you’ll miss other opportunities. A forced beast build may be worse than a pirate board that comes to you more naturally, because you won’t put so many resources into looking for the pieces for the build you’re trying to put together. On top of that if everyone is forcing the same build, then it becomes more contested, which makes it even harder to put together an optimal comp. A perfect dragon board may be better than a perfect elemental board, but a more fully put together elemental board will still likely prevail against a sub-par build of any kind. While you won't climb trying to force the 'best build' every game, it definitely helps to know what that best build is and when
        to go for it.
    </p>
    <h3 data-movie="Harry Potter">“It is Not Our Luck That Shows What We Truly Are… It is Our Choices.”</h3>
    <p>
        Improving at this game is an exercise in looking at how we can improve our play in the aspects that we can control. Your decisions do matter, and too often I’ll see players dismiss losses as a matter of RNG. This can happen, and you can get unlucky, but more often than not, their play could still be improved.
        <br><br>
        So how do we get 'luckier'? Those that are most lucky are those that put themselves in a position to <a href="https://www.youtube.com/watch?v=5NV6Rdv1a3I" target="_blank">Get Lucky</a>. Like I stated at the beginning, if you're able to continually put yourselves in good positions to get lucky, you'll notice yourself getting lucky more often. Maximizing opportunities to get lucky, and minimizing your odds to be unlucky, is at the core of any game based on randomness. The players at the top of the leaderboards are there time and time again, because they’re manipulating those odds better than anyone else. You can't win every game of Battlegrounds, but you can win more than you lose if you play optimally.
        <br><br>
        When you win OR lose, look back at your game and ask yourself if there was any way you could have played better. Sometimes you made bad plays and won, other times you played the best you could and still lost. Not being results-oriented, and being able to discern your good plays from bad ones in the face of wins and losses that don’t always make sense is a skill in and of itself.
        <br><br>
        Don’t constrict your mind either. This <a href="https://us.forums.blizzard.com/en/hearthstone/t/developer-insights-battlegrounds-balance/87311" target="_blank">insight piece from the devs</a> is fantastic. However, this quote:
        <br><br>
        <span class="quote">
        ”The takeaway here is that players shouldn’t feel obligated to pick only the heroes that work best for the top 1% of players but should instead experiment with different heroes to see what performs best for their skill bracket, level of engagement with the game, and play style.”
        </span>
        <br>
        is a dangerous trap for any player that is trying to improve at the game. Always aim to be the best player that you can be. Taking a direction-oriented hero just because it performs best at your skill level, doesn’t mean that you can’t take a hero that’s considered better at higher levels, and simply put in the effort into learning how to play better. Be willing to lose games to learn.
        <br><br>
        Identifying what areas you can improve on is another challenge. This guide hopefully catches a few. But it can also change over time. There’s an interesting curve, where at lower MMRs usually players need to be more gold efficient. Not rolling. This goes all the way to leaderboards, but then there is a shift. Players need to start rolling more and being more selective on what they pick up, not investing into unnecessary upgrades. These are entirely opposite things to work on, but either could apply to you, depending on where you’re at with your game.
        <br><br>
        Continually look to learn from yourself and others. I've learned a lot by watching all different levels of streamers. Question their decisions, see what they might be doing wrong, or what they're thinking of that maybe you weren't. The entire community develops by doing this. When I wrote this guide originally, staying on Tier 1 until 7 gold and double leveling would have been crazy, but we collectively improved at the game. If even the best players can continue to improve, then you can too. Keep the mentality that improvement is always possible and always strive to get better.
        <br><br>
        <em>Fin.</em>
    </p>
    <br>
    <hr>
    <br>
    <p>
        This guide has been written and was kindly provided for publishing on this website by Pocky. You can watch him stream on <a href="https://www.twitch.tv/PockyPlays" target="_blank">Twitch</a>, catch his videos on <a href="https://www.youtube.com/pockyplays" target="_blank">Youtube</a> or contact him on <a href="https://twitter.com/pocky_plays" target="_blank">Twitter</a>. There is also a downloadable <a href="https://drive.google.com/file/d/1W10ItAeVeirWrmioAWi668niB5hyT2F8/view" target="_blank">PDF Version</a> (not updated after patch 23.4).
    </p>
</div>

<?php
include_once('../footer.php');
?>

