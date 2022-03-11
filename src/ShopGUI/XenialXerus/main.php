<?php

namespace ShopGUI\XenialXerus;

use pocketmine\item\Item;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

use muqsit\invmenu\InvMenu;
use muqsit\invmenu\InvMenuHandler;
use muqsit\invmenu\transaction\InvMenuTransaction;
use muqsit\invmenu\transaction\InvMenuTransactionResult;
use pocketmine\event\inventory\InventoryTransactionEvent;

use SOFe\Capital\{Capital, CapitalException, LabelSet};

use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\network\mcpe\protocol\LevelSoundEventPacket;

use pocketmine\item\ItemFactory;
use pocketmine\player\Player;

class main extends PluginBase implements Listener{
    private $selector;

    protected function onEnable() : void {
        Capital::api("0.1.0", function(Capital $api) {
            $this->selector = $api->completeConfig($this->getConfig()->get("selector"));
        });

        if(!InvMenuHandler::isRegistered()) {
            InvMenuHandler::register($this);
        }
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool{
        if($command->getName() == "shopgui"){
            if($sender instanceof Player){
                $this->shopgui($sender);
            } else {
                $sender->sendMessage("Run Command In-game Only");
            }
        }

        return true;
    }
     public function shopgui($player) {
        $menu = InvMenu::create(InvMenu::TYPE_DOUBLE_CHEST);
        $meny->setListner(InvMenu::readonly());
        $menu->setName("§l§6Shop Menu");
        $inventory = $menu->getInventory();
          $inventory->setItem(0, ItemFactory::getInstance()->get(160, 15, 1)->setCustomName("§r"));
          $inventory->setItem(1, ItemFactory::getInstance()->get(160, 15, 1)->setCustomName("§r"));
          $inventory->setItem(2, ItemFactory::getInstance()->get(160, 11, 1)->setCustomName("§r"));
          $inventory->setItem(3, ItemFactory::getInstance()->get(160, 11, 1)->setCustomName("§r"));
          $inventory->setItem(4, ItemFactory::getInstance()->get(160, 11, 1)->setCustomName("§r"));
          $inventory->setItem(5, ItemFactory::getInstance()->get(160, 11, 1)->setCustomName("§r"));
          $inventory->setItem(6, ItemFactory::getInstance()->get(160, 11, 1)->setCustomName("§r"));
          $inventory->setItem(7, ItemFactory::getInstance()->get(160, 15, 1)->setCustomName("§r"));
          $inventory->setItem(8, ItemFactory::getInstance()->get(160, 15, 1)->setCustomName("§r"));
          $inventory->setItem(9, ItemFactory::getInstance()->get(160, 15, 1)->setCustomName("§r"));
          $inventory->setItem(10, ItemFactory::getInstance()->get(160, 15, 1)->setCustomName("§r"));
          $inventory->setItem(11, ItemFactory::getInstance()->get(257, 0, 1)->setCustomName("§r§l§eTOOLS SHOP\n\n§r§7Click To Buy\n§r§7Tools."));
          $inventory->setItem(12, ItemFactory::getInstance()->get(160, 14, 1)->setCustomName("§r"));
          $inventory->setItem(13, ItemFactory::getInstance()->get(276, 0, 1)->setCustomName("§r§l§eWEAPONS SHOP\n\n§r§7Click To Buy\n§r§7Weapons."));
          $inventory->setItem(14, ItemFactory::getInstance()->get(160, 14, 1)->setCustomName("§r"));
          $inventory->setItem(15, ItemFactory::getInstance()->get(311, 0, 1)->setCustomName("§r§l§eARMOR SHOP\n\n§r§7Click To Buy\n§r§7Armors."));
          $inventory->setItem(16, ItemFactory::getInstance()->get(160, 14, 1)->setCustomName("§r"));
          $inventory->setItem(17, ItemFactory::getInstance()->get(160, 15, 1)->setCustomName("§r"));
          $inventory->setItem(18, ItemFactory::getInstance()->get(160, 15, 1)->setCustomName("§r"));
          $inventory->setItem(19, ItemFactory::getInstance()->get());

     }

    }
}
