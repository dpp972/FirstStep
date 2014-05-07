<?php

require_once '../vendor/autoload.php';

use Madinina\Services\FileLog;

//function gen_one_to_three() {
//    for ($i = 1; $i <= 3; $i++) {
//        // Notez que $i est préservé entre chaque production de valeur.
//        yield $i;
//    }
//}

//$generator = gen_one_to_three();
//var_dump( $generator);
//foreach ($generator as $value) {
//    echo "$value\n";
//}

$logger = FileLog::getInstance();
$logger->alert("alert!!");