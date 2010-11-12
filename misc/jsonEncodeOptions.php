<?php

/**
 * json_encode got a new "options" parameter
 * one example shows how to force the return to be an object
 */

$data = array();

$json = json_encode($data);
var_dump($json);

$json = json_encode($data,JSON_FORCE_OBJECT);
var_dump($json);

?>
