<?php
error_reporting(E_ALL);

/**
 * Throws an E_DEPRECATED error because of the removal of the ergeg_* functions
 */

$pattern = '/[0-9]+/';
$string  = 'this is a 1234 sample string';

$return = ereg($pattern,$string);

var_dump($return);

?>
