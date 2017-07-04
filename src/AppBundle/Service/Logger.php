<?php
namespace AppBundle\Service;

use AppBundle\Service\Iface\LoggerIface;

/**
 * @DI\Service("logger")
 */
class Logger implements LoggerIface{

    private $logger;

    /**
     * this has to be in constructor else channelling won't work
     * @DI\InjectParams({ "logger" = @DI\Inject("logger") })
     */
    public function __construct(Logger $logger) {
        $this->logger = $logger;
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

    public function err($message, Exception $e=null)
    {
        $this->logger->error($message." ".(is_null($e)?"":$e->getMessage().":  ".$e->getTraceAsString()));
    }

    public function crit($message, Exception $e=null)
    {
        $this->logger->critical($message." ".(is_null($e)?"":$e->getMessage().":  ".$e->getTraceAsString()));
    }

    public function alert($message, Exception $e=null)
    {
        $this->logger->alert($message." ".(is_null($e)?"":$e->getMessage().":  ".$e->getTraceAsString()));
    }


}