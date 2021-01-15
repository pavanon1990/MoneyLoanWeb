<?php
  $host = "localhost"; /* Host name */
  $user = "root"; /* User */
  $password = "P@ssw0rd"; /* Password */
  $dbname = "com12126_dbloansys"; /* Database name */
  $appID = 0;
  $con = mysqli_connect($host, $user, $password,$dbname);
  // Check connection
  if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
  mysqli_query($con,"set character set UTF8");

?>