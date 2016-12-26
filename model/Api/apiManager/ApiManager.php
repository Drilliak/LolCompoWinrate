<?php


class ApiManager
{

    protected $builder;

    protected $content;

    protected $allowedTypes = array(
        GameType::NORMAL,
        GameType::RANKED_PREMADE_5x5,
        GameType::RANKED_TEAM_5x5,
    );


    public function loadContent($url)
    {
        $this->content = json_decode(file_get_contents($url));
    }

    public function getContent()
    {
        return $this->content;
    }

    /**
     * Renvoie le nombre de requêtes pendant les dernières secondes.
     *
     * @param $url
     * @param $nbSeconds nombre de secondes à traiter. Peut prendre les valeurs suivante :
     *              <ul>
     *              <li>1</li>
     *             <li>10</li>
     *             <li>600</li>
     *             <li>3600</li>
     *              </ul>
     */
    public static function getRequestCount($url, $nbSeconds = 10)
    {
        $headers = get_headers($url, 1);
        $nbAllRequests = explode(",", $headers['X-Rate-Limit-Count']);

        $requestsCount = array();
        foreach ($nbAllRequests as $nbRequests) {
            $t = explode(":", $nbRequests);
            $requestsCount[$t[1]] = $t[0];
        }
        return $requestsCount[$nbSeconds];
    }


}

