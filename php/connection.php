<?php
$connectionInfo = array("UID" => "josejlm2@ozfevv4o6f", "pwd" => "TamuHack2015", "Database" => "tamuhack2015_db", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:ozfevv4o6f.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>