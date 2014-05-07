<?php

namespace Madinina\Exception;

use Exception;

class NotAlphabeticException extends Exception {

    public function __construct(){
        $msg = 'Not Alphabetic ! Must contain only a-zA-Z characters...';
        parent::__construct( $msg);
    }
}