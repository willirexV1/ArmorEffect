<?php
  
namespace Willirex\ArmorEffect;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\scheduler\PluginTask;
use pocketmine\utils\TextFormat as TF;
use pocketmine\event\entity\EntityArmorChangeEvent;
use pocketmine\Player;
use pocketmine\entity\EffectInstance;
use pocketmine\entity\Effect;
use pocketmine\item\Item;
use pocketmine\inventory\PlayerInventory;
use pocketmine\inventory\ArmorInventory;


class Main extends PluginBase implements Listener{

	public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
  }

  public function onLoad() {
    	$this->getLogger()->info(TF::GREEN . "Loading...");
  }

  public function onArmorChange(EntityArmorChangeEvent $ev){
  	$player = $ev->getEntity();
    $Nid = $ev->getNewItem()->getID();
    $Oid = $ev->getOldItem()->getID();

    if($player instanceof Player){
    //Casque
    if($Nid === 302){
 $eff = new EffectInstance(Effect::getEffect(Effect::NIGHT_VISION) , 1 * 999999, 1, true);
$player->addEffect($eff);
      
    }elseif($Oid === 302){
      $player->removeEffect(16);
    }
    
    //Plastron
    if($Nid === 303){
 $eff = new EffectInstance(Effect::getEffect(Effect::RESISTANCE) , 2 * 999999, 2, true);
$player->addEffect($eff);
      
    }elseif($Oid === 303){
      $player->removeEffect(11);
    }
    
    //Jambieres
    if($Nid === 304){
 $eff = new EffectInstance(Effect::getEffect(Effect::FIRE_RESISTANCE) , 1 * 999999, 1, true);
$player->addEffect($eff);
      
    }elseif($Oid === 304){
      $player->removeEffect(12);
    }
    
    //Bottes
    if($Nid === 305){
 $eff = new EffectInstance(Effect::getEffect(Effect::SPEED) , 1 * 999999, 1, true);
$player->addEffect($eff);
      
    }elseif($Oid === 305){
      $player->removeEffect(1);
    }
          
    //Jump boots
    if($Nid === 301){
 $eff = new EffectInstance(Effect::getEffect(Effect::JUMP_BOOST) , 1 * 999999, 1, true);
$player->addEffect($eff);
      
    }elseif($Oid === 301){
      $player->removeEffect(8);
    }
        
  }
      
}
}