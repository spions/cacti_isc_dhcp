<?php

/* do NOT run this script through a web browser */
if (!isset($_SERVER["argv"][0]) || isset($_SERVER['REQUEST_METHOD'])  || isset($_SERVER['REMOTE_ADDR'])) {
   die("<br><strong>This script is only meant to run at the command line.</strong>");
}

$no_http_headers = true;

    $hostname 	= $_SERVER["argv"][1];
    $community 	= $_SERVER["argv"][2];
    $object_id	= "UCD-SNMP-MIB::extOutput.1";
    $ifAlias = snmp2_get($hostname, $community, $object_id,7200000);
    $ifAlias=preg_replace('/STRING: /','',$ifAlias);
    echo $ifAlias;

?>
