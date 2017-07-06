<?php
namespace AppBundle\Service;

use Exception;
use JMS\DiExtraBundle\Annotation as DI;

use AppBundle\Service\Iface\MongoServiceIface;
use MongoDB\Client as MongoClient;


/**
 * @DI\Service("mongo.service")
 */
class MongoService implements MongoServiceIface{

    private $mongoHost;
    private $mongoPort;

    private $mongoClient;

    /**
     * @DI\InjectParams({
     *     "mongoHost" = @DI\Inject("%mongo_host%"),
     *     "mongoPort" = @DI\Inject("%mongo_port%"),
     * })
     */
    public function __construct( $mongoHost, $mongoPort )
    {
        $this->mongoHost = $mongoHost;
        $this->mongoPort = $mongoPort;
        $this->getConnection();
    }


    private function getConnection(){
        $conStr = "mongodb://".$this->mongoHost.':'.$this->mongoPort;
        $this->mongoClient = new MongoClient( $conStr );
        return $this->mongoClient;
    }

    public function getClient(){
        return $this->mongoClient;
    }

}