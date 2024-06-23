<?php

//use ye_chize_alaki\Game\Game;
//use ye_chize_alaki\Game\Player\Player;
use ye_chize_alaki\Game\Game;


require_once realpath("vendor/autoload.php");

//$player = new Player();
$game = new Game();


$generator = \Nubs\RandomNameGenerator\All::create();
echo $generator->getName();

echo '<br/><br/>';

echo 'hi i am php gffg';



/*

require_once 'vendor/autoload.php';

$generator = \Nubs\RandomNameGenerator\All::create();
echo $generator->getName();

echo '<br/><br/>';

echo 'hi i am php gffg';
*/

?>
