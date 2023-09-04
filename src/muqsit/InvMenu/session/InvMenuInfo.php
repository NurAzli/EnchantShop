<?php

declare(strict_types=1);

namespace muqsit\Invmenu\session;

use muqsit\Invmenu\InvMenu;
use muqsit\Invmenu\type\graphic\InvMenuGraphic;

final class InvMenuInfo{

	public function __construct(
		readonly public InvMenu $menu,
		readonly public InvMenuGraphic $graphic,
		readonly public ?string $graphic_name
	){}
}
