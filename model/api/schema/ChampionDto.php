<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 26/12/2016
 * Time: 18:48
 */
class ChampionDto extends Schema
{
    private $allytips;
    private $blurb;
    private $ennemytips;
    private $id;
    private $image;
    private $info;
    private $key;
    private $lore;
    private $name;
    private $partype;
    private $passive;
    private $recommended;
    private $skins;
    private $spells;
    private $stats;
    private $tags;
    private $title;


    public function __construct(array $data)
    {
        parent::__construct($data);
    }

    public function getAllytips()
    {
        return $this->allytips;
    }


    public function setAllytips($allytips)
    {
        $this->allytips = $allytips;
    }


    public function getBlurb()
    {
        return $this->blurb;
    }


    public function setBlurb($blurb)
    {
        $this->blurb = $blurb;
    }


    public function getEnnemytips()
    {
        return $this->ennemytips;
    }


    public function setEnnemytips($ennemytips)
    {
        $this->ennemytips = $ennemytips;
    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getImage()
    {
        return $this->image;
    }


    public function setImage($image)
    {
        $this->image = $image;
    }


    public function getInfo()
    {
        return $this->info;
    }


    public function setInfo($info)
    {
        $this->info = $info;
    }


    public function getKey()
    {
        return $this->key;
    }


    public function setKey($key)
    {
        $this->key = $key;
    }


    public function getLore()
    {
        return $this->lore;
    }


    public function setLore($lore)
    {
        $this->lore = $lore;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }


    public function getPartype()
    {
        return $this->partype;
    }


    public function setPartype($partype)
    {
        $this->partype = $partype;
    }


    public function getPassive()
    {
        return $this->passive;
    }


    public function setPassive($passive)
    {
        $this->passive = $passive;
    }


    public function getRecommended()
    {
        return $this->recommended;
    }


    public function setRecommended($recommended)
    {
        $this->recommended = $recommended;
    }


    public function getSkins()
    {
        return $this->skins;
    }


    public function setSkins($skins)
    {
        $this->skins = $skins;
    }


    public function getSpells()
    {
        return $this->spells;
    }


    public function setSpells($spells)
    {
        $this->spells = $spells;
    }


    public function getStats()
    {
        return $this->stats;
    }


    public function setStats($stats)
    {
        $this->stats = $stats;
    }


    public function getTags()
    {
        return $this->tags;
    }


    public function setTags($tags)
    {
        $this->tags = $tags;
    }


    public function getTitle()
    {
        return $this->title;
    }


    public function setTitle($title)
    {
        $this->title = $title;
    }




}