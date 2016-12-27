<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 26/12/2016
 * Time: 16:00
 */
class RiotApiQueryFactory
{
    /**
     * @var string
     *          Clé de l'application.
     */
    private $applicationKey;
    /**
     * @var string
     *          Région.
     */
    private $region;

    /**
     * @var SplQueue  Queue for short time limit.
     */
    private static $shortLimitQueue;

    /**
     * @var SplQueue queue for long time limit.
     */
    private static $longLimitQueue;

    /** Number of seconds */
    const LONG_TIME_INTERVAL = 600;

    /** Nubmer of seconds */
    const SHORT_TIME_INTERVAL = 10;

    /** Requests number for LONG_TIME_INTERVAL */
    const RATE_LIMIT_LONG = 500;

    /** Requests number for SHORT_TIME_INTERVAL */
    const RATE_LIMIT_SHORT = 10;




    /**
     * RiotApiQueryFactory constructor.
     * @param string $applicationKey
     *                  clé de l'application.
     * @param string $region
     *                  région.
     */
    private function __construct(string $applicationKey, string $region)
    {
        $this->applicationKey = $applicationKey;
        $this->region = $region;
    }

    /**
     * Nouvelle instance
     *
     * @param string $applicationKey
     *                  clé de l'application
     * @param string $region
     *                  région
     * @return RiotApiQueryFactory
     *              nouvel objet riot api query factory.
     */
    static public function newInstance(string $applicationKey, string $region) : RiotApiQueryFactory{
        return new RiotApiQueryFactory($applicationKey, $region);
    }

    /**
     *  New static data api query.
     *
     * @return StaticDataApiQuery
     *              the static data api query
     */
    public function newStaticDataApiQuery() : StaticDataApiQuery{
        return new StaticDataApiQueryImpl($this->applicationKey, $this->region);
    }

    /**
     * New game api query.
     *
     * @return GameApiQuery
     *          the game api query.
     */
    public function newGameApiQuery() : GameApiQuery {
        return new GameApiQueryImpl($this->applicationKey, $this->region);
    }

    /**
     * New summoner api query.
     *
     * @return SummonerApiQuery
     *             the summoner api query.
     */
    public function newSummonerApiQuery() : SummonerApiQuery {
        return new SummonerApiQueryImpl($this->applicationKey, $this->region);
    }

    /**
     * Updates the queue.
     *
     * @param SplQueue $queue
     * @param $interval
     * @param $rate
     */
    private static function updtateLimitQueue(SplQueue $queue, $interval, $rate){
        while(!$queue->isEmpty()){
            $timeSinceOldest = microtime(true) - $queue->bottom();
            if($timeSinceOldest > $interval){
                $queue->dequeue();
            }
            elseif($queue->count() >= $rate){
                if($timeSinceOldest < $interval){

                    sleep($interval - $timeSinceOldest);
                }
            }
            else {
                break;
            }
        }
        $queue->enqueue(microtime(true));
    }

    /**
     * Waits if a rate limits is exceededs.
     * Use this function before each query.
     */
    public static function wait(){
        if (!isset(self::$shortLimitQueue)){
            self::$shortLimitQueue = new SplQueue();
        }
        if (!isset(self::$longLimitQueue)){
            self::$longLimitQueue = new SplQueue();
        }
        self::updtateLimitQueue(self::$shortLimitQueue, self::SHORT_TIME_INTERVAL, self::RATE_LIMIT_SHORT);
        self::updtateLimitQueue(self::$longLimitQueue, self::LONG_TIME_INTERVAL, self::RATE_LIMIT_LONG);

    }





}