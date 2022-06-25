<?php

namespace PracticeCore\Player;

class PlayerInvite {

	private $inviter;

	private $invited;

	public function __construct(PPlayer $inviter, PPlayer $invited){
		$this->inviter = $inviter;
		$this->invited = $invited;
	}

	public function getInviter() : PPlayer {
		return $this->inviter;
	}

	public function getInvited() : PPlayer {
		return $this->invited;
	}

}