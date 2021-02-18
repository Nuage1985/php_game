<?php

/**
 * buildStats
 * Genrate characters stats
 * @param  mixed $character, passage par référence grâce au symbole '&'
 * @return void
 */

function buildStats(array &$character)
{
    $aTypeInfo = $character['type']; // Simplification du code
    $character['health'] = rand($aTypeInfo['min_health'], $aTypeInfo['max_health']);
    $character['strength'] = rand($aTypeInfo['min_strength'], $aTypeInfo['max_strength']);

    if ($character['type'] === TYPE_WIZARD) {
        $character['magic'] = rand($aTypeInfo['min_magic'], $aTypeInfo['max_magic']);
    }

    if ($character['type'] === TYPE_STEALTH) {
        $character['stealth'] = rand($aTypeInfo['min_stealth'], $aTypeInfo['max_stealth']);
    }

    $character['position']['x'] = rand(0, SIZE_X-1);
    $character['position']['y'] = rand(0, SIZE_Y-1);
}


/**
 * displayPlayers
 *
 * @param  mixed $players
 * @return void
 */

function displayPlayers($players): void
{
    foreach ($players as $player) {
        echo $player['name'] . ' (' .  $player['type']['name'] . '): ';
        echo ' in [' . $player['position']['x'] . ', ' . $player['position']['y'] . ']' . PHP_EOL;
        echo 'Stats: [HP: ' . $player['health'] . '] [S: ' . $player['strength'] . ']';
        if (array_key_exists('magic', $player)) {
            echo ' [M:' . $player['magic'] . ']';
        }
        if (array_key_exists('stealth', $player)) {
            echo ' [ST:' . $player['stealth'] . ']';
        }
        echo PHP_EOL . PHP_EOL;
    }
    echo PHP_EOL;
}


/**
 * displayBoard
 * @param  array $board
 * 
 * @return void
 */
function displayBoard(array $board): void
{
    for ($y = 0; $y < SIZE_Y; $y++) {
        for ($x = 0; $x < SIZE_X; $x++) {
            if (is_array($board[$y][$x])) {
                $player = $board[$y][$x];
                echo ' ( ' . substr($player['name'], 0, 1) . ' ) ';
            } else {
                echo ' [' . $x . ':' . $y . '] ';
            }
        }
        echo PHP_EOL;
        echo PHP_EOL;
    }
}


