<?php

namespace NoSteve;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\utils\TextFormat as Color;

class Main extends PluginBase implements Listener {
public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info("No-Steve has been enabled");
}

public function onJoin(PlayerJoinEvent $event){
    $player = $event->getPlayer();
    if($player->getName() === "steve"){
        $player->kick(Color::RED ."In order to join this server" .Color::YELLOW ."\nYou must change your name" .Color::AQUA ."\n \n \nTo something other" .Color::GREEN ."\nThan Steve!");
    }
}

public function onDisable(){
    $this->getLogger()->info("No-Steve has been disabled");
}
