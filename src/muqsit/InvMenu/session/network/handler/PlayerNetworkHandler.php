<?php

declare(strict_types=1);

namespace muqsit\Invmenu\session\network\handler;

use Closure;
use muqsit\Invmenu\session\network\NetworkStackLatencyEntry;

interface PlayerNetworkHandler{

	public function createNetworkStackLatencyEntry(Closure $then) : NetworkStackLatencyEntry;
}
