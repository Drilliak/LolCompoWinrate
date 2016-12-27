<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 25/12/2016
 * Time: 21:05
 */

class DefaultApiUrlBuilder implements ApiUrlBuilder
{

    /**
     * @var tableau des champs de l'url à construire.
     *  Les clés correspondent aux champs.
     *  Les valeurs à la valeur des champs.
     */
    private $fields = array();

    /**
     * @var tableau
     */
    private $parameters = array();

    const REGIONS = array("br", "eune", "euw", "jp", "kr", "lan", "las", "na", "oce", "ru", "tr");

    /**
     * Caractère définissant le début des zones de substitution.
     */
    const API_URLS_PLACEHOLDER_START = '{';

    /**
     * Caractère définnissant la fin des zones de substitution.
     */
    const API_URLS_PLACEHOLDER_END = '}';

    /**
     * Chemin du fichier contenant la forme de url de l'api.
     */
    const API_URLS_FILE = "RiotApiUrls.ini";

    /**
     * Chemin du fichier contenant les versions des différentes section de l'api
     */
    const API_VERSIONS_FILE = "RiotApiVersions.ini";
    /**
     * @var format de l'url
     */

    /**
     * Nom de domaine de l'api
     */
    const DOMAIN_NAME = "api.pvp.net/api/lol";
    /**
     * Protocole
     */
    const PROTOCOL = "https";
    private $urlFormat;

    /**
     * @var array
     *         tableau associatif contenant les méthodes en clé, et les format d'url ne valeur.
     */
    private $riotApiUrls;

    private $simpleRiotApiUrls;

    /**
     * @var array
     *          tableau associatif contenant les noms des sections de l'api en clé, et versions et valeur;
     */
    private $riotApiVersion;

    public function __construct(string $methodName, string $applicationId, string $region){
        try{
            $this->riotApiUrls = parse_ini_file(self::API_URLS_FILE, true);
            $this->simpleRiotApiUrls = parse_ini_file(self::API_URLS_FILE);
        } catch (Exception $e){
            exit("An error occured while loading urls");
        }
        try{
            $this->riotApiVersion = parse_ini_file(self::API_VERSIONS_FILE);
        } catch (Exception $e){
            exit("An error occured while loading version");
        }
        $methodExist =false;
        $section = "";
        foreach ($this->riotApiUrls as $key =>$value){
            foreach($value as $method => $url){
                if ($method == $methodName){
                    $methodExist = true;
                    $section = $key;
                    break;
                }
            }
            if ($method == $methodName)
                break;
        }
        if($methodExist){
            $this->urlFormat = $this->riotApiUrls[$section][$methodName];
            if (!is_null($applicationId)){
                $this->parameters["api_key"] = $applicationId;
            }
            if(!in_array(strtolower($region), self::REGIONS)){
                exit("Not supported region");
            }
            $this->fields["region"] = $region;
            $this->fields["protocol"] = self::PROTOCOL;
            $this->fields["domain"] = self::DOMAIN_NAME;
            $this->fields["api_version"] = $this->riotApiVersion[$section];
        } else {
            throw new Exception("Method " . $methodName . " not supported");
        }
    }
    /**
     * @see ApiUrlBuilder::withId()
     */
    public function withId(int $id) : ApiUrlBuilder{
        $this->fields["id"] = $id;
        return $this;
    }

    /**
     * @see ApiUrlBuilder::withIds()
     */
    public function withIds(array $ids) : ApiUrlBuilder{
        return $this;
    }

    /**
     * @see ApiUrlBuilder::withMethod()
     */
    public function withMethod(string $methodName): ApiUrlBuilder
    {
        if (array_key_exists($methodName, $this->simpleRiotApiUrls)){
            $this->urlFormat = $this->simpleRiotApiUrls[$methodName];
        } else {
            throw new Exception("Method " . $methodName . " not supported");
        }

        return $this;
    }

    /**
     * @see ApiUrlBuilder::withParameter()
     */
    public function withParameter(string $name, string $value): ApiUrlBuilder
    {
        if (!is_null($value) && strlen($value) >0 ){
            $this->parameters[$name] = urlencode($value);
        }

        return $this;
    }

    /**
     * @see ApiUrlBuilder::withField()
     */
    public function withField(string $name, string $value) : ApiUrlBuilder
    {
        if (!is_null($value) && strlen($value) >0 ){
            $this->fields[$name] = $value;
        }

        return $this;
    }

    /**
     * @see ApiUrlBuilder::withFields()
     */
    public function withFields(string $name, array $values) : ApiUrlBuilder{
        if (!is_null($values) && !empty($values)){
            $builder = "";
            foreach($values as $value){
                $builder .= $value;
                if (next($values) !== false){
                    $builder .= "%2C";
                }
            }
            $this->fields[$name] = $builder;
        }
        return $this;
    }


    /**
     * @see ApiUrlBuilder::buildUrl()
     */
    public function buildUrl() : string{
        $urlBuilder = "";
        $placeHolderBuilder ="";
        $fieldsLeftArray = $this->fields;
        $parametersLeftArray = $this->parameters;
        $placeHolderFlag = false;
        $firstParameter = true;
        for ($i = 0; $i<strlen($this->urlFormat); $i++){
            if ($this->urlFormat[$i] == self::API_URLS_PLACEHOLDER_START){
                $placeHolderBuilder = "";
                $placeHolderFlag = true;
            } else if ($placeHolderFlag &&
                $this->urlFormat[$i] == self::API_URLS_PLACEHOLDER_END){
                $placeHolder = $placeHolderBuilder;
                if (array_key_exists($placeHolder,$this->fields)){
                    $urlBuilder .= $this->fields[$placeHolder];
                    unset($fieldsLeftArray[$placeHolder]);
                } else if (array_key_exists($placeHolder, $this->parameters)){
                    $builder = "";
                    if ($firstParameter){
                        $firstParameter = false;
                    } else{
                        $builder .= '&';
                    }
                    $builder .= $placeHolder;
                    $builder .= '=';
                    $builder .= $this->parameters[$placeHolder];
                    $urlBuilder .= $builder;
                    unset($parametersLeftArray[$placeHolder]);
                }
                $placeHolderFlag = false;
            } else if ($placeHolderFlag){
                $placeHolderBuilder .= $this->urlFormat[$i];
            } else {
                $urlBuilder .= $this->urlFormat[$i];
            }
        }
        return $urlBuilder;
    }


}

