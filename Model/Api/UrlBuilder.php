<?php

require_once "../Region.php";


class UrlBuilder{

	protected $region = REGION::EUW;

	protected $apiKey = "308fdabd-0365-4103-b5ec-e8e965db5515";

	private $gameVersion = "v1.3";

	protected $version;
	protected $baseUrl;



	public function getGameUrl($summonerId){
		return "https://" . $this->region. ".api.pvp.net/api/lol/" . $this->region . "/" .
		 $this->gameVersion . "/game/by-summoner/" . $summonerId . "/recent?api_key=" . $this->apiKey;
	}


}
