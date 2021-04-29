<?php

/*
 * RakLib network library
 *
 *
 * This project is not affiliated with Jenkins Software LLC nor RakNet.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 */

declare(strict_types=1);

namespace raklib\server;

use raklib\protocol\EncapsulatedPacket;

interface SessionInterface{

	public function sendEncapsulated(EncapsulatedPacket $packet, bool $immediate = false) : void;

	public function initiateDisconnect(string $reason) : void;
}
