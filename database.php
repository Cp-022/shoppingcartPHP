<?php
$database_config = parse_ini_file("config.ini");
if($database_config['debug']){
  echo "<pre>";
  print_r( $database_config);
  echo "</pre>";
}
try {
  $conn = new PDO("mysql:host=".$database_config['host'].
  ";dbname=".$database_config['database'],
  $database_config['user'],
  $database_config['password']);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
}
catch(PDOException $e)
{
  echo "Connection failed: " . $e->getMessage();
}
?>
