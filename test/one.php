<?php
require "autoload.php";

use Httproot\NetConf\NetConf;
use Httproot\NetConf\NetConfAuth\NetConfAuthPassword;

$NetConf=new \Httproot\NetConf\NetConf();
var_dump($NetConf->Hesa());
die;
$netConf = new NetConf(
    "192.168.0.100",
    new NetConfAuthPassword(
        [
            "username" => "lamoni",
            "password" => "phpsux"
        ]
    )
);

echo $netConf->sendRPC(
    "<get-config>".
    "<source>".
    "<running/>".
    "</source>".
    "</get-config>"
);