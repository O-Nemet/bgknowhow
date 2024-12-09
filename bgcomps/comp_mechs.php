<?php include_once('../header.php'); ?>

<h2 class="page_title">Standard Compositions: Mechs</h2>
<p>
    <?php include_once('intro.php'); ?>
</p>
<br>
<hr>
<br>
<p>
    <a href="/bgstrategy/?show=minions&type=mech"><i class="bi bi-box-arrow-up-right"></i> All available Mechs and Mech-associated minions</a>
    <br><br>
    In general, Mechs have the upside of having numerous <a href="/bgbasics/#shield">Divine Shield</a> minions, the ability to resummon Mechs, and small token units. This gives them an advantage against venom/scam compositions and builds with low stats. Except for <a class="hoverimage" href="/bgstrategy/minion/?id=353">Beatboxer</a> magnetization composition, this makes them weak against high stat builds like Demons, Elementals, and Naga.
    <!--    <br><br>-->
    <!--    Mechs also got a new mechanic added through the 6 Zilliax cards available on Tier 2. Cards such as <a class="hoverimage" href="/bgstrategy/minion/?id=504">Zilliax: Defense Module</a>, <a class="hoverimage" href="/bgstrategy/minion/?id=503">Zilliax: Crystal Module</a>, and <a class="hoverimage" href="/bgstrategy/minion/?id=506">Zilliax: Whirring Module</a> can add incredibly strong keywords to other Mechs. However, you need to triple them with <a class="hoverimage" href="/bgstrategy/minion/?id=353">Zilliax: Bonding Module</a> to make sure you can put it on other Mechs.-->
</p>
<div class="comp_wrapper">
    <h3 id="magnetic">Magnetic Mech <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Holo Rover', 'Holo Rover', 'Holy Mecherel', 'Holy Mecherel', 'Mechagnome Interpreter', 'Mechagnome Interpreter', 'Moonsteel Juggernaut'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Once you get to Tier-6, you should be getting more Dr. Boom's Monster. This will be your main way of buffing up your minions.
    </p>

    <h3 id="magneticsummon">Magnetic Summon Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Holo Rover', 'Holo Rover', 'Dr. Boom\'s Monster', 'Dr . Boom\'s Monster', 'Kangor\'s', 'Kangor\'s', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        The last build focused on buffing your minions with Dr. Boom's Monster. This time, you will taunt your Dr. Boom's Monster and having Kangor's Apprentice summon as much as you can. This will swarm the board with big sized mechs, assuming you have been magnetizing plenty of cards.
    </p>

    <h3 id="shield">Czarina Spell Comp<a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Deflecto', 'Deflecto', 'Czarina', 'Marquee Ticker', 'Marquee Ticker', 'Holy Mecherel', 'Holy Mecherel'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        The key with this comp is obviously to buy the cheapest spells you can. You can use Drakkari Enchanter to gain more spells from Marquee Ticker. Also, be sure to attach Annoy-O-Module onto Holy Mecherel.
    </p>
    <h3 id="mecherel">Holy Mecherel Comp<a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Deflecto', 'Deflecto', 'Greasebot', 'Greasebot', 'Czarina', 'Holy Mecherel', 'Holy Mecherel'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        You're trying to have your opponent ping-pong between the Holy Mecherel and other Divine Shield minions to continuously buff them from Grease Bot's effect, and to have unlimited Divine Shields. The only problem with this build is how much Leroy can ruin the plan. So be sure to play around that if your opponent has him.
    </p>

    <h3 id="automaton">Ancestral Automaton Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Leeroy', 'Automaton', 'Automaton', 'Kangor\'s', 'Kangor\'s', 'Chameleon', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        You're going to try your best to get Magnetic reborn cards to resummon the Automaton's. You do this by finding Mecha Jaraxxus or Prosthetic Hand. While Leroy is here to fill the rest of the build up, by being a universally strong card, Chameleon is here to be a third Kangor's. Eventually, you can replace Leroy with a third Automaton that is golden by using the spell "Eyes of the Earth Mother".
    </p>

    <h3 id="endofturn">End of Turn Mech <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Moonsteel Juggernaut', 'Moonsteel Juggernaut', 'Jaraxxus', 'Young Murk-Eye', 'Jaraxxus', 'Brann', 'Drakkari Enchanter'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        The goal here is to get as much Magnetic cards as you can from Mecha Jaraxxus and Moonsteel Juggernaut, but also to get triple discovers from them so you can find Dr. Boom's Monster. This will be the main way to buff up your Mech cards.
    </p>

</div>

<br><br>
<hr>
<br>
<p>
    <?php include_once('outro.php'); ?>
</p>
<br><br>

<?php include_once('../footer.php'); ?>
