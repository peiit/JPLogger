<?php

namespace Peiit\JPLogger;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Formatter\LineFormatter;

class JPLogger
{
    const log_path = 'logs/{name}.log';
    
    private $_loggers;
    
    public function logger($log_name){
        if (isset($this->_loggers[$log_name])){
            return $this->_loggers[$log_name];
        }
        $logger = new Logger($log_name, [$this->getMonologHandler($log_name)]);
        $this->_loggers[$log_name] = $logger;
        return $logger;
    }
    
    protected function getMonologHandler($log_name)
    {
        return (new StreamHandler(self::logPath($log_name), Logger::DEBUG))
        ->setFormatter(new LineFormatter(null, null, true, true));
    }
    
    static private function logPath($log_name){
        return storage_path(str_replace('{name}', $log_name, self::log_path));
    }
}
