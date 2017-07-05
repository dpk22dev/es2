<?php
namespace AppBundle\Service;


use Exception;
use JMS\DiExtraBundle\Annotation as DI;
use AppBundle\Service\Iface\LoggerIface;

/**
 * @DI\Service("app.logger")
 */
class AppLogger implements LoggerIface{

    /** @DI\Inject("logger") */
    public $logger;

    public function __construct() {

    }

    public function getLogger()
    {
        return $this->logger;
    }

    public function debug($message)
    {
        $this->logger->debug($message);
    }

    public function info($message)
    {
        $this->logger->info($message);
    }

    public function notice($message)
    {
        $this->logger->notice($message);
    }

    public function warn($message, Exception $e=null)
    {
        $this->logger->warning($message." ".(is_null($e)?"":$e->getMessage().":  ".$e->getTraceAsString()));
    }

    public function error($message, Exception $e=null)
    {
        $this->logger->error($message." ".(is_null($e)?"":$e->getMessage().":  ".$e->getTraceAsString()));
    }

    public function critical($message, Exception $e=null)
    {
        $this->logger->critical($message." ".(is_null($e)?"":$e->getMessage().":  ".$e->getTraceAsString()));
    }

    public function alert($message, Exception $e=null)
    {
        $this->logger->alert($message." ".(is_null($e)?"":$e->getMessage().":  ".$e->getTraceAsString()));
    }


}