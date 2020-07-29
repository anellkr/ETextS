<?php

/**
 * @name ETextS
 * @main etexts\ETextS
 * @author anell
 * @version first
 * @api 3.10.0
 * @description !
 */

namespace etexts;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

use pocketmine\Player;

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;

class ETextS extends PluginBase implements Listener {

public static $prefix = '§l§f(알림) §r§f';

public function onEnable(){
 $this-> getServer ()->getPluginManager ()->registerEvents ( $this, $this );
 }
 
public function onJoin (PlayerJoinEvent $event)
 {

 $this->getServer()->broadcastMessage(self::$prefix . '§a' . $event->getPlayer()->getName() . '§f님이 입장하셨습니다.§r');
 }

public function onQuit (PlayerQuitEvent $event)
 {

 $this->getServer()->broadcastMessage(self::$prefix . '§a' . $event->getPlayer()->getName() . '§f님이 퇴장하셨습니다.§r');
  }
 }
