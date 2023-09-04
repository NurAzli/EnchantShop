<?php

declare(strict_types=1);

namespace muqsit\Invmenu\type;

use muqsit\Invmenu\InvMenu;
use muqsit\Invmenu\type\graphic\InvMenuGraphic;
use pocketmine\inventory\Inventory;
use pocketmine\player\Player;

interface InvMenuType{

	public function createGraphic(InvMenu $menu, Player $player) : ?InvMenuGraphic;

	public function createInventory() : Inventory;
}
