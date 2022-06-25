<?php

namespace PracticeCore\Player;

use pocketmine\player\Player;

class PPlayer {

	private Player $player;

	private $invited = false;

	private $invites = [];

	public function __construct(Player $player){
		$this->player = $player;
	}

	public function getPlayer() : Player {
		return $this->player;
	}

	public function invite(PPlayer $PPlayer){

		$player = $PPlayer->getPlayer();

		$this->invites[$player->getName()] = new PlayerInvite($this, $PPlayer);

		$player->sendMessage("You has invited");

		$this->invites[$player->getName()]->getInvited()->getPlayer()->sendMessage("You are Invited");

	}

	public function isInvited(string $name) : bool {
		if(isset($this->invites[$name])){
			return true;
		}
		return false;
	}

}