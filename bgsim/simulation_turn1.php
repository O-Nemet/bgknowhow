<?php
include_once('../header.php');
?>

<?php

class Minion
{
    private string $id;
    private int    $position       = -1;
    private string $name;
    private int    $attack;
    private int    $health;
    private int    $tier;
    private bool   $hasShield      = false;
    private bool   $hasDeathrattle = false;
    private bool   $hasReborn      = false;

    public function __construct($id)
    {
        $tempMinions = json_decode(file_get_contents('../bgjson/output/bg_minions_all.json'));

        foreach ($tempMinions->data as $key => $object) {
            if ($object->blizzardId === $id && $object->isActive === true) {
                $this->id             = $object->blizzardId;
                $this->name           = $object->name;
                $this->attack         = $object->attack;
                $this->health         = $object->health;
                $this->tier           = $object->tier;
                $this->hasShield      = $object->abilities->hasShield;
                $this->hasDeathrattle = $object->abilities->hasDeathrattle;
                $this->hasReborn      = $object->abilities->hasReborn;
            }
        }
    }

    public function killMinion()
    {
//        $this->
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAttack(): int
    {
        return $this->attack;
    }

    public function getHealth(): int
    {
        return $this->health;
    }

    public function getHasShield(): bool
    {
        return $this->hasShield;
    }

    public function setHasShield(bool $hasShield): void
    {
        $this->hasShield = $hasShield;
    }

    public function setHealth(int $damage): void
    {
        if (($this->health - $damage <= 0) && $this->hasShield) {
            $this->hasShield = false;
        } else {
            $this->health = $this->health - $damage;
        }
    }

    public function getHasDeathrattle(): bool
    {
        return $this->hasDeathrattle;
    }

    public function setHasDeathrattle(bool $hasDeathrattle): void
    {
        $this->hasDeathrattle = $hasDeathrattle;
    }

    public function getHasReborn(): bool
    {
        return $this->hasReborn;
    }

    public function setHasReborn(bool $hasReborn): void
    {
        $this->hasReborn = $hasReborn;
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function setPosition(int $position): void
    {
        $this->position = $position;
    }

    public function getIsDead(): bool
    {
        return ($this->health < 0 ? true : false);
    }

    public function getTier(): int
    {
        return $this->tier;
    }

    public function setTier(int $tier): void
    {
        $this->tier = $tier;
    }
}

class Battlefield
{
//    private array $slotsP1 = [[], [], [], [], [], [], []];
    private array $slots         =
        [1 => ['x', 'x', 'x', 'x', 'x', 'x', 'x'], 2 => ['x', 'x', 'x', 'x', 'x', 'x', 'x']];
    private int   $totalDamageP1 = 0;
    private int   $totalDamageP2 = 0;
    private int   $totalMinionDamageP1 = 0;
    private int   $totalMinionDamageP2 = 0;

    public function __construct()
    {
//        echo $this->slots[1][1];
//        $this->slotsP1[0] = [['x'], ['x'], ['x'], ['x'], ['x'], ['x'], ['x']];
    }

    public function spawnMinion($minion)
    {

    }

    public function getLoserDamage() {
        
        for  ($i = 0; $i < 6; $i++) {
            if (is_object($this->slots[1][$i])) {
                $this->totalDamageP2 += $this->slots[1][$i]->getTier();
            }
        }

        for  ($i = 0; $i < 6; $i++) {
            if (is_object($this->slots[2][$i])) {
                $this->totalDamageP1 += $this->slots[2][$i]->getTier();
            }
        }

        echo "<br>";
        echo "P1 TotalDamage: " . $this->totalDamageP1 . " | MinionDamage: " . $this->totalMinionDamageP1;
        echo "<br>";
        echo "P2 TotalDamage: " . $this->totalDamageP2 . " | MinionDamage: " . $this->totalMinionDamageP2;
        echo "<br>";
    }


    /**
     * @throws Exception
     */
    public function runFight()
    {
        $attacker           = 0;
        $allDead     = false;
        $foundMinion = false;
        $minion      = $this->slots[1][$attacker];
        // first found minion attacks random enemy minion (TODO: random instead of 3 + taunt)
        while (!$allDead) {
            echo $attacker . "|";
            if (is_object($minion)) {
                $foundMinion = true;
                echo "<-";

                // find target
                $defender = 0;
//                while ($this->slots[2][$defender]) {
//                    if (is_object($minion)) {
//                }
                $target = random_int(0,6);
                $this->runAttack($this->slots[1][$attacker], $this->slots[2][$defender]);
            }
            $attacker++;

            // no minions left on the board
            if ($attacker > 6 && $foundMinion == false) {
                $allDead = true;
            } else {
                // reset at the end of the board
                if ($attacker > 6) {
                    $attacker    = 0;
                    $foundMinion = false;
                }
                $minion = $this->slots[1][$i];
            }
        }
    }

    public function runAttack($minion1, $minion2)
    {
//        print_r($minion1);
//        var_dump($minion2);
        // attack P1
        $minion2->setHealth($minion1->getAttack());
        $this->totalMinionDamageP1 += $minion1->getAttack();

        // attack P2
        $minion1->setHealth($minion2->getAttack());
        $this->totalMinionDamageP2 += $minion2->getAttack();

        // check for death
        if ($minion1->getHealth() < 1) {
            $this->setSlot(1, $minion1->getPosition(), 'x');
        }
        if ($minion2->getHealth() < 1) {
            $this->setSlot(2, $minion2->getPosition(), 'x');
        }
    }

    public function setSlot($player, $slot, $minion)
    {
        if (is_object($minion)) {
            $minion->setPosition($slot);
        } else {
            // kill minion
            $realMinion = $this->getSlot($player, $slot);
//            var_dump($realMinion);
            $realMinion->setPosition(-1);
        }
        $this->slots[$player][$slot] = $minion;
    }

    public function getSlot($player, $slot)
    {
        return $this->slots[$player][$slot];
    }

    public function getPlayer($player)
    {
//        echo "<pre>";
//        var_dump($this->slots);
//        echo "</pre>";

        foreach ($this->slots[$player] as $minion) {
            $name = 'x';
            if (is_object($minion)) {
                $name = $minion->getName();
            }
            echo "[$name]";
        }
    }
}


$battlefield = new Battlefield();
$battlefield->setSlot(1, 3, new Minion('BGS_122'));
$battlefield->setSlot(2, 3, new Minion('BG21_022'));
$battlefield->getPlayer(1);
echo "<br>";
$battlefield->getPlayer(2);
echo "<br><br>";
$battlefield->runFight();
echo "<br><br>";
$battlefield->getPlayer(1);
echo "<br>";
$battlefield->getPlayer(2);
echo "<br><br>";
$battlefield->getLoserDamage();

include_once('index.php');
?>

<?php
include_once('../footer.php');
?>
