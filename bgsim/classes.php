<?php

/*
 * Simple timer class to measure script execution time
 */

class StopWatch
{
    private static float $total;

    public static function start()
    {
        self::$total = microtime(true);
    }

    public static function elapsed(): float
    {
        return microtime(true) - self::$total;
    }
}


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
        $tempMinions = json_decode(file_get_contents('../bgjson/output/bg_minions_active.json'));

        foreach ($tempMinions->data as $key => $object) {
            if ($object->id === $id && (bool)$object->isActive === true) {
                $this->id             = $object->id;
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
//        $this->health = 0;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAttack(): int
    {
        return $this->attack;
    }

    public function setAttack(int $attack): void
    {
        $this->attack = $attack;
    }

    public function getHealth(): int
    {
        return $this->health;
    }

    public function setHealth(int $health): void
    {
        $this->health = $health;
    }

    public function setHealthByDamage(int $damage): void
    {
        if ($this->name === 'Bubblette' && $damage === 1) {
            $this->health = 0;
        } else if ($this->name === 'Incorporeal Corporal' && $damage >= 1) {
            // TODO: fix results by implementing random roll for attack first and a loop for each individual fight
            $this->health = 0;
        } else if (($this->health - $damage < 1) && $this->hasShield) {
            $this->hasShield = false;
        } else {
            $this->health = $this->health - $damage;
        }

        // check for death
//        if ($this->health < 1) {
//            $this->setSlot(1, $this->position, 'x');
//        }

    }

    public function getHasShield(): bool
    {
        return $this->hasShield;
    }

    public function setHasShield(bool $hasShield): void
    {
        $this->hasShield = $hasShield;
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

    public function getId()
    {
        return $this->id;
    }

//    public function setId($id): void
//    {
//        $this->id = $id;
//    }
}

class Battlefield
{
//    private array $slotsP1 = [[], [], [], [], [], [], []];
    private array $slots                   =
        [1 => ['x', 'x', 'x', 'x', 'x', 'x', 'x'], 2 => ['x', 'x', 'x', 'x', 'x', 'x', 'x']];
    private int   $roundDamageP1           = 0;
    private int   $roundDamageP2           = 0;
    private int   $totalMinionDamageDoneP1 = 0;
    private int   $totalMinionDamageDoneP2 = 0;

    public function __construct()
    {
//        $this->slotsP1[0] = [['x'], ['x'], ['x'], ['x'], ['x'], ['x'], ['x']];
    }

    public function spawnMinion($player, $slot, $minion)
    {
        // $this->getFreeSlot();
        $this->setSlot($player, $slot, $minion);
        switch ($minion->getName()) {
            case 'Alleycat':
                $this->spawnMinion($player, $slot + 1, new Minion('CFM_315t'));
                break;
            case 'Mini-Myrmidon':
                $minion->setAttack($minion->getAttack() + 2);
                break;
            case 'Picky Eater':
                $minion->setAttack($minion->getAttack() + 2);
                $minion->setHealth($minion->getHealth() + 2);
                break;
            case 'Razorfen Geomancer':
                $minion->setAttack($minion->getAttack() + 1);
                $minion->setHealth($minion->getHealth() + 1);
                break;
            default:
                // do nothing
                break;
        }
    }

    // count the number of stars on the remaining minions for each player (should always be 0 for one side)
    public function getLoserDamage(): int
    {
        for ($i = 0; $i < 6; $i++) {
            if (is_object($this->slots[1][$i])) {
                $this->roundDamageP2 += $this->slots[1][$i]->getTier();
            }
        }

        for ($i = 0; $i < 6; $i++) {
            if (is_object($this->slots[2][$i])) {
                $this->roundDamageP1 += $this->slots[2][$i]->getTier();
            }
        }

        if ($this->roundDamageP1 > 0 && $this->roundDamageP2 > 0) {
#            echo "ERROR in getLoserDamage() $this->roundDamageP1 vs. $this->roundDamageP2<br>";
        }

        // return the actual dmg given/taken (number of stars still on the board)
        if ($this->roundDamageP1 > $this->roundDamageP2) {
            return $this->roundDamageP1 * -1;
        } else if ($this->roundDamageP1 < $this->roundDamageP2) {
            return $this->roundDamageP2;
        } else {
            return 0;
        }
    }

    public function findTarget(int $player): int
    {
        $possibleDefenders = [];

        for ($defender = 0; $defender < 6; $defender++) {
            if (is_object($this->slots[$player][$defender])) {
                $possibleDefenders[] = $this->slots[$player][$defender];
            }
        }

//        echo "<pre>";
//        var_dump($possibleDefenders);
//        echo "</pre>";

        // find actual defender
        $maxRandom = count($possibleDefenders) - 1;
        if ($maxRandom >= 0) {
            $target = random_int(0, $maxRandom);
            return $possibleDefenders[$target]->getPosition();
        } else {
            return -1;
        }
    }

    /**
     * @throws Exception
     *
     * TODO:
     * - run more than 1 iteration
     * - randomly decide which player attacks first
     * - taunt handling
     */
    public function runFight()
    {
        $attacker        = 0;
        $allDead         = false;
        $foundMinion     = false;
        $playerAttacking = 1;
        $playerDefending = 2;

        $minion = $this->slots[$playerAttacking][$attacker];

        // special handling for Red Whelp (player1)
        for ($i = 0; $i < 6; $i++) {
            if (is_object($this->slots[1][$i]) && $this->slots[1][$i]->getName() === 'Red Whelp') {
                $target = $this->findTarget($playerDefending);
                $this->slots[2][$target]->setHealthByDamage(1);
                $this->totalMinionDamageDoneP1++;
                if ($this->slots[2][$target]->getHealth() < 1) {
                    $this->setSlot(2, $this->slots[2][$target]->getPosition(), 'x');
                }
            }
        }

        // special handling for Red Whelp (player2)
        $playerDefending = 1;
        for ($i = 0; $i < 6; $i++) {
            if (is_object($this->slots[2][$i]) && $this->slots[2][$i]->getName() === 'Red Whelp') {
                $target = $this->findTarget($playerDefending);
                $this->slots[1][$target]->setHealthByDamage(1);
                $this->totalMinionDamageDoneP2++;
                if ($this->slots[1][$target]->getHealth() < 1) {
                    $this->setSlot(1, $this->slots[1][$target]->getPosition(), 'x');
                }
            }
        }

        $playerDefending = 2;
        // first found minion (checking left to right) attacks random enemy minion (TODO: taunt handling)
        while (!$allDead) {
//            if ($attacker === 0) echo "<br>";
//            echo "|" . $attacker;
            // TODO remove dozy temp handling!
            if (is_object($minion) && ($minion->getAttack() > 0 || $minion->getName() === 'Dozy Whelp')) {
                $foundMinion = true;
//                echo "<-";

                // find possible defender
                $defender = $this->findTarget($playerDefending);
//                echo $defender . "*";
                if ($defender > -1) {
                    // special handling for Dozy Whelp
                    if ($this->slots[$playerDefending][$defender]->getName() === 'Dozy Whelp') {
                        $this->slots[$playerDefending][$defender]->setAttack($this->slots[$playerDefending][$defender]->getAttack() + 1);
                    }
                    // execute attack
                    // TODO remove dozy temp handling!
                    if ($this->slots[$playerAttacking][$attacker]->getName() === 'Dozy Whelp') {
                        $this->slots[$playerAttacking][$attacker]->setAttack($this->slots[$playerAttacking][$attacker]->getAttack() + 1);
                    }
                    $this->runAttack($this->slots[$playerAttacking][$attacker], $this->slots[$playerDefending][$defender]);
                } else {
                    $allDead = true;
                }
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
                $minion = $this->slots[$playerAttacking][$attacker];
            }
        }
    }

    public function runAttack($minion1, $minion2)
    {
//        print_r($minion1);
//        var_dump($minion2);
//        echo "<br>";
//        echo "Attack: " . $minion1->getName() . " vs " . $minion2->getName();

        // attack P1
        $minion2->setHealthByDamage($minion1->getAttack());
        $this->totalMinionDamageDoneP1 += $minion1->getAttack();

        // attack P2
        $minion1->setHealthByDamage($minion2->getAttack());
        $this->totalMinionDamageDoneP2 += $minion2->getAttack();

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
//            echo "|setSlot ". $minion->getName();
            $minion->setPosition($slot);
            $this->slots[$player][$slot] = $minion;
        } else {
            // kill minion
            $realMinion = $this->getSlot($player, $slot);
            $realMinion->setPosition(-1);
            $this->slots[$player][$slot] = $minion; // $minion = 'x'
            // handle reborn
            if ($realMinion->getHasReborn()) {
//                echo "<br>RB FOUND!";
                $this->spawnMinion($player, $slot, $realMinion);
                $realMinion->setPosition($slot);
                $realMinion->setHasReborn(false);
                $realMinion->setHealth(1);
                // handle deathrattle
            } else if ($realMinion->getHasDeathrattle()) {
//                echo "<br>DR FOUND!";
                switch ($realMinion->getName()) {
                    case 'Icky Imp':
                        $this->spawnMinion($player, $slot, new Minion('BRM_006t'));
                        $this->spawnMinion($player, $slot + 1, new Minion('BRM_006t'));
                        break;
                    case 'Imprisoner':
                        $this->spawnMinion($player, $slot, new Minion('BRM_006t'));
                        break;
                    case 'Manasaber':
                        $this->spawnMinion($player, $slot, new Minion('BG26_800t'));
                        $this->spawnMinion($player, $slot + 1, new Minion('BG26_800t'));
                        break;
                    case 'Scallywag':
                        $this->spawnMinion($player, $slot, new Minion($realMinion->getId() . 't'));
                        break;
                    default:
                        // do nothing
//                        $this->spawnMinion($player, $slot, new Minion($realMinion->getId() . 't'));
                        break;
                }
            }
        }
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
//            echo "[$name]";
        }
    }

    public function getTotalMinionDamageDoneP1(): int
    {
        return $this->totalMinionDamageDoneP1;
    }

    public function setTotalMinionDamageDoneP1(int $totalMinionDamageDoneP1): void
    {
        $this->totalMinionDamageDoneP1 = $totalMinionDamageDoneP1;
    }

}