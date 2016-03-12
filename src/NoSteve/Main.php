<?php

namespace NoSteve;

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
    $player->kick(Color::RED ."In order to join this server" .Color::YELLOW ."\nYou must change your name" .Color::Aqua ." .Color::GREEN ."\n \n \nTo something other" .Color::RED ."\nThan Steve!");
  }
}
