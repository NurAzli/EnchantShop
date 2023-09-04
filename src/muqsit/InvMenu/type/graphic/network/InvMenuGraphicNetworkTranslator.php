<?php

declare(strict_types=1);

namespace muqsit\Invmenu\type\graphic\network;

use muqsit\Invmenu\session\InvMenuInfo;
use muqsit\Invmenu\session\PlayerSession;
use pocketmine\network\mcpe\protocol\ContainerOpenPacket;

interface InvMenuGraphicNetworkTranslator{

	public function translate(PlayerSession $session, InvMenuInfo $current, ContainerOpenPacket $packet) : void;
}
