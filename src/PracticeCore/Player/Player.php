<?php

namespace PracticeCore\Player;

use pocketmine\player\Player;

final class PPlayer {

	private Player $player;

	private $invited = false;

	private $invites = [];

	public function __construct(Player $player){
		$this->player = $player;
	}

	public function getPlayer() : Player {
		return $this->player;
	}

	public function invite(PPlayer $inviter){



	}

	public function isInvited(string $name) : bool {
		if(isset($this->invites[$name])){
			return true;
		}
		return false;
	}

}