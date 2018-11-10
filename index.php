<?php
session_start();
set_time_limit(0);
define("PE_VERSION",'0.1');
require "lib/init.cls.php";
$ginkgo = new ginkgo;
$ginkgo->run();
?>