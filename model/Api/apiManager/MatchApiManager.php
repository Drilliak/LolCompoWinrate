<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 24/12/2016
 * Time: 16:02
 */
class MatchApiManager extends ApiManager
{
    public function __construct()
    {
        $this->builder = new MatchUrlBuilder();
    }

    public function getBotLane($matchId){
        $url = $this->builder->getMatchUrl($matchId);
        $this->loadContent($url);
        var_dump($this->content);
        foreach($this->content->{'participants'} as $participant){
            var_dump($participant);
            echo ($participant->{'timeline'}->{'lane'});
        }
    }
}