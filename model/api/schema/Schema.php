<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 26/12/2016
 * Time: 22:01
 */
abstract class Schema
{
    /**
     * @var int the remaining number of seconds before the rate limit reset.
     */
    protected $retryAfter;


    protected function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function setRetryAfter(int $retryAfter){
        if ($retryAfter > 0 ){
            $this->retryAfter = $retryAfter;
        }
    }

    public function getRetryAfter() : int{
        return $this->retryAfter;
    }

    private function hydrate(array $data)
    {
        foreach ($data as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }
}