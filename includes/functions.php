<?php

/**
 * displayPlayers
 *
 * @param  mixed $players
 * @return void
 */

function displayPlayers($players): void
{
    foreach ($players as $player) {
        echo $player['name'] . ': ' .  $player['type']['class'] . PHP_EOL . 'Stats: [HP: ' . $player['type']['health'] . '] [S: ' . $player['type']['strength'] . ']' . PHP_EOL;
        if (array_key_exists('magic', $player['type'])) {
            echo '[M:' . $player['type']['magic'] . ']';
        }
        if (array_key_exists('stealth', $player['type'])) {
            echo '[ST:' . $player['type']['stealth'] . ']';           
        }
        echo PHP_EOL;
    }
    echo PHP_EOL;
}


/**
* displayBoard
* @param  array $board
* 
* @return void
*/
function displayBoard( array $board ) : void
{
    for ( $y = 0; $y < SIZE_Y; $y ++ ) {
        for ($x = 0; $x < SIZE_X; $x ++) {
            if ( is_array( $board[ $y ][ $x ] ) ) {
                $player = $board[ $y ][ $x ];
                echo ' (' . substr( $player[ 'name' ], 0, 1 ) . ') ';
            } else {
                echo ' [' . $x . ':' . $y . '] ';
            }
        }
        echo PHP_EOL;
        echo PHP_EOL;
    }
}