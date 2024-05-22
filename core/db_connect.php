<?php
session_start();

/**
 * Voor de MAC gebruikers;
 */
$dbhost = "localhost:8889";
$dbuser = "root";
$dbpass = "root";
$dbname = "nagelshop";

/**
 * Voor de Windows gebruikers;
 */
// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "";
// $dbname = "webdev_base";

$con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($con -> connect_errno) {
    echo "Failed to connect to MySQL: " . $con -> connect_error;
    exit();
}

define("BASEURL","http://localhost:8888/module4_new/");
define("BASEURL_CMS","http://localhost:8888/module4_new/admin/");

function prettyDump ( $var ) {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}
