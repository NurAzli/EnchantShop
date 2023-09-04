<?php

declare(strict_types=1);

namespace muqsit\Invmenu\type\util\builder;

use muqsit\Invmenu\type\InvMenuType;

interface InvMenuTypeBuilder{

	public function build() : InvMenuType;
}
