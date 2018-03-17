<?php

class Bird {
	public $canFly;
	public $legCount;

	public function __construct($canfly, $legcount){
		$this->canFly = $canfly;
		$this->legCount = $legcount;
	}

	public function canFly() {
		return $this->canFly;
	}

	public function getLegCount() {
		return $this->legCount;
	}
}

class Pigeon extends Bird {
}

class Sparrow extends Bird {
}

class Penguin extends Bird {
}

class BirdsFactory {
	public static function getBird($bird = '') {
		switch($bird){
			case 'pigeon':
				return new Pigeon(true, 2);
			break;
			case 'sparrow':
				return new Sparrow(true, 2);
			break;
			case 'penguin':
				return new Penguin(false, 2);
			break;
			default:
				return new Bird();
		}
	}
}

$bird = BirdsFactory::getBird('sparrow');