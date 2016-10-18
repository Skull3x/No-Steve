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
    if($player->getName() == "steve" || "Steve"){
        $player->kick(Color::RED . "Steve is a(an) invalid name");
    }
}
