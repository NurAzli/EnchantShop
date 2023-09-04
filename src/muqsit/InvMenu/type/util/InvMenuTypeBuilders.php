<?php

declare(strict_types=1);

namespace muqsit\Invmenu\type\util;

use muqsit\Invmenu\type\util\builder\ActorFixedInvMenuTypeBuilder;
use muqsit\Invmenu\type\util\builder\BlockActorFixedInvMenuTypeBuilder;
use muqsit\Invmenu\type\util\builder\BlockFixedInvMenuTypeBuilder;
use muqsit\Invmenu\type\util\builder\DoublePairableBlockActorFixedInvMenuTypeBuilder;

final class InvMenuTypeBuilders{

	public static function ACTOR_FIXED() : ActorFixedInvMenuTypeBuilder{
		return new ActorFixedInvMenuTypeBuilder();
	}

	public static function BLOCK_ACTOR_FIXED() : BlockActorFixedInvMenuTypeBuilder{
		return new BlockActorFixedInvMenuTypeBuilder();
	}

	public static function BLOCK_FIXED() : BlockFixedInvMenuTypeBuilder{
		return new BlockFixedInvMenuTypeBuilder();
	}

	public static function DOUBLE_PAIRABLE_BLOCK_ACTOR_FIXED() : DoublePairableBlockActorFixedInvMenuTypeBuilder{
		return new DoublePairableBlockActorFixedInvMenuTypeBuilder();
	}
}
