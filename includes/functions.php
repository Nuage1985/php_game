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
        echo $player['name'] . ' [HP: ' . $player['health'] . '] [S: ' . $player['strength'] . ']';
        if (array_key_exists('magic', $player)) {
            echo ' [M:' . $player['magic'] . ']';
        }
        if (array_key_exists('stealth', $player)) {
            echo ' [ST:' . $player['stealth'] . ']';           
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