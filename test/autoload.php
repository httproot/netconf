<?php
$baseDir=dirname(dirname(__FILE__));
//echo '$vendorDir:'.$vendorDir;
//$baseDir=dirname($vendorDir);
//echo '$baseDir'.$baseDir;
    $arr=array(
        "Httproot\\NetConf\\"=>array($baseDir.'/src')
    );
    print_r($arr);
return $arr;