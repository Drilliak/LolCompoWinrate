<?php
/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 26/12/2016
 * Time: 15:55
 */

interface RiotApiQuery extends RiotAuthenticationClient{

    public function list();

    public function reset();
}