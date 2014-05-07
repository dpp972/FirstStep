<?php

namespace Madinina\Services;

use Exception;

class serviceManager
{
    /**
     * @var array
     */
    private $services;

    public function __construct(){
        $this->services = array();
    }

    /**
     * @param $serviceName
     * @param $serviceInstance
     * @throws \Exception
     * @return $this
     */
    public function addService( $serviceName, $serviceInstance){

        if( !is_string( $serviceName)) {
            throw new Exception( 'First parameter must be a string : '.gettype( $serviceName).' given');
        }

        if( !is_object( $serviceInstance)){
            throw new Exception( 'Second parameter must be an object : '.gettype( $serviceInstance).' given');
        }

        $this->services[$serviceName] = $serviceInstance;

        return $this;
    }

    /**
     * @param $serviceName
     * @return null
     * @throws \Exception
     */
    public function getService( $serviceName){

        if( !is_string( $serviceName)) {
            throw new Exception( 'First parameter must be a string : '.gettype( $serviceName).' given');
        }

        $ret = null;
        if( isset( $this->services[$serviceName])) {
            $ret = $this->services[$serviceName];
        }

        return $ret;
    }
}