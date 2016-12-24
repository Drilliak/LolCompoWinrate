<?php



class ApiManager{

	protected $builder;

	protected $content;


	public function loadContent($url){
		$this->content = json_decode(file_get_contents($url));
	}

	public function getContent(){
		return $this->content;
	}



}

