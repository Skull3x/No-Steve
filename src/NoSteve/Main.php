<?php

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\utils\TextFormat as Color;

class Main extends PluginBase implements Listener {

    public function onJoin(PlayerJoinEvent $event){
    $player = $event->getPlayer();
    if($player->getName() === "steve"){
    //$player->kick(Color::RED . "In order to join this server\nYou must change your name\n \n \nTo something other\nThan Steve!");
  } // Still lively working
}
