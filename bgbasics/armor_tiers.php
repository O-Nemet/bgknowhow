<?php
include_once('../header.php');

if (!empty($_GET['mode'])) {
    $mode = $_GET['mode'];
} else {
    $mode = 'txt';
}
?>

<h2 class="page_title">Hero Armor Tiers</h2>
<br>
<div id="hero_armor_tiers">
    <div>
        <div class="title">Tier 1<br>
            <div class="container"><span class="card_attack">0</span>
                <img class="img_armor" src="<?= PICTURE_LOCAL ?>icons/armor.webp">
            </div>
        </div>
        <?php
        foreach ($tempHeroes->data as $key => $object) {
            if ($object->isActive && $object->armorTier === 1) {
                if ($mode === 'txt') {
                    echo "<div><a class='hoverimage' href='" . $object->websites->bgknowhow . "'>" . $object->name . "</a></div>";
                } else {
                    echo "<div><a href='" . $object->websites->bgknowhow . "'><img src='" . $object->picturePortrait . "' title='" . htmlspecialchars($object->name, ENT_QUOTES, 'utf-8') . "'></img></a></div>";
                }
            }
        }
        ?>
    </div>
    <div>
        <div class="title">Tier 2<br>
            <div class="container"><span class="card_attack">2-5</span>
                <img class="img_armor" src="<?= PICTURE_LOCAL ?>icons/armor.webp">
            </div>
        </div>
        <?php
        foreach ($tempHeroes->data as $key => $object) {
            if ($object->isActive && $object->armorTier === 2) {
                if ($mode === 'txt') {
                    echo "<div><a class='hoverimage' href='" . $object->websites->bgknowhow . "'>" . $object->name . "</a></div>";
                } else {
                    echo "<div><a href='" . $object->websites->bgknowhow . "'><img src='" . $object->picturePortrait . "' title='" . htmlspecialchars($object->name, ENT_QUOTES, 'utf-8') . "'></img></a></div>";
                }
            }
        }
        ?>
    </div>
    <div>
        <div class="title">Tier 3<br>
            <div class="container"><span class="card_attack">3-6</span>
                <img class="img_armor" src="<?= PICTURE_LOCAL ?>icons/armor.webp">
            </div>
        </div>
        <?php
        foreach ($tempHeroes->data as $key => $object) {
            if ($object->isActive && $object->armorTier === 3) {
                if ($mode === 'txt') {
                    echo "<div><a class='hoverimage' href='" . $object->websites->bgknowhow . "'>" . $object->name . "</a></div>";
                } else {
                    echo "<div><a href='" . $object->websites->bgknowhow . "'><img src='" . $object->picturePortrait . "' title='" . htmlspecialchars($object->name, ENT_QUOTES, 'utf-8') . "'></img></a></div>";
                }
            }
        }
        ?>
    </div>
    <div>
        <div class="title">Tier 4<br>
            <div class="container"><span class="card_attack">4-7</span>
                <img class="img_armor" src="<?= PICTURE_LOCAL ?>icons/armor.webp">
            </div>
        </div>
        <?php
        foreach ($tempHeroes->data as $key => $object) {
            if ($object->isActive && $object->armorTier === 4) {
                if ($mode === 'txt') {
                    echo "<div><a class='hoverimage' href='" . $object->websites->bgknowhow . "'>" . $object->name . "</a></div>";
                } else {
                    echo "<div><a href='" . $object->websites->bgknowhow . "'><img src='" . $object->picturePortrait . "' title='" . htmlspecialchars($object->name, ENT_QUOTES, 'utf-8') . "'></img></a></div>";
                }
            }
        }
        ?>
    </div>
    <div>
        <div class="title">Tier 5<br>
            <div class="container"><span class="card_attack">5-8</span>
                <img class="img_armor" src="<?= PICTURE_LOCAL ?>icons/armor.webp">
            </div>
        </div>
        <?php
        foreach ($tempHeroes->data as $key => $object) {
            if ($object->isActive && $object->armorTier === 5) {
                if ($mode === 'txt') {
                    echo "<div><a class='hoverimage' href='" . $object->websites->bgknowhow . "'>" . $object->name . "</a></div>";
                } else {
                    echo "<div><a href='" . $object->websites->bgknowhow . "'><img src='" . $object->picturePortrait . "' title='" . htmlspecialchars($object->name, ENT_QUOTES, 'utf-8') . "'></img></a></div>";
                }
            }
        }
        ?>
    </div>
    <div>
        <div class="title">Tier 6<br>
            <div class="container"><span class="card_attack">6-9</span>
                <img class="img_armor" src="<?= PICTURE_LOCAL ?>icons/armor.webp">
            </div>
        </div>
        <?php
        foreach ($tempHeroes->data as $key => $object) {
            if ($object->isActive && $object->armorTier === 6) {
                if ($mode === 'txt') {
                    echo "<div><a class='hoverimage' href='" . $object->websites->bgknowhow . "'>" . $object->name . "</a></div>";
                } else {
                    echo "<div><a href='" . $object->websites->bgknowhow . "'><img src='" . $object->picturePortrait . "' title='" . htmlspecialchars($object->name, ENT_QUOTES, 'utf-8') . "'></img></a></div>";
                }
            }
        }
        ?>
    </div>
    <div>
        <div class="title">Tier 7<br>
            <div class="container"><span class="card_attack">7-10</span>
                <img class="img_armor" src="<?= PICTURE_LOCAL ?>icons/armor.webp">
            </div>
        </div>
        <?php
        foreach ($tempHeroes->data as $key => $object) {
            if ($object->isActive && $object->armorTier === 7) {
                if ($mode === 'txt') {
                    echo "<div><a class='hoverimage' href='" . $object->websites->bgknowhow . "'>" . $object->name . "</a></div>";
                } else {
                    echo "<div><a href='" . $object->websites->bgknowhow . "'><img src='" . $object->picturePortrait . "' title='" . htmlspecialchars($object->name, ENT_QUOTES, 'utf-8') . "'></img></a></div>";
                }
            }
        }
        ?>
    </div>
</div>

<br><br>

<?php
include_once('../footer.php');
?>

