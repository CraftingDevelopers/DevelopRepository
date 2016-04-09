<?php

namespace FirstCode;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\command\CommandReader;
use pocketmine\event\player\PlayerToggleSneakEvent;
use pocketmine\utils\TextFormat;
use pocketmine\Player

class FirstCode extends PluginBase implements Listener{

 public function onSneak(PlayerToggleSneakEvent $ev){
        $player = $ev->getPlayer();
           
           if($player->hasPermission("sneak.warn") and $player->isSneaking()){
            $this->getServer()->sendMessage(TextFormat:RED."You are not sneaking anymore!");
             public function onCommand(CommandSender $sender,Command $cmd,$label,array $args){
             if($cmd->getName() == "SneakWarn"){
             $sender->sendMessage("".$sender->getName()." [SneakWarn] Plugin by Jankirby!");
 }

