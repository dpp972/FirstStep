<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 07/05/14
 * Time: 11:28
 */

namespace Madinina\Services;

use Exception;
use Psr\Log\LoggerTrait;

class FileLog {

    use LoggerTrait;

    /**
     * @var cached reference to singleton instance
     */
    private static $instance;

    /**
     * gets the instance via lazy initialization (created on first usage)
     *
     * @return self
     */
    public static function getInstance()
    {

        if (null === static::$instance) {
            static::$instance = new static;
        }

        return static::$instance;
    }

    /**
     * is not allowed to call from outside: private!
     *
     */
    private function __construct()
    {

    }

    /**
     * prevent the instance from being cloned
     *
     * @throws \Exception
     * @return void
     */
    private function __clone()
    {
        throw new Exception( 'Interdit !!');
    }

    /**
     * prevent from being unserialized
     *
     * @throws \Exception
     * @return void
     */
    private function __wakeup()
    {
        throw new Exception( 'Interdit !!');
    }

    public function getNbLog() {

    }
    public function getLastLog() {

    }
    public function addLog() {

    }

    /**
     * Logs with an arbitrary level.
     *
     * @param mixed $level
     * @param string $message
     * @param array $context
     * @return null
     */
    public function log($level, $message, array $context = array())
    {

    }
}