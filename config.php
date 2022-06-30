<?php
  //show me the errors please
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

 //let's connect
  define('HOST', 'localhost');
  define('USER', 'root');
  define('PASS', '');
  define('BASE', 'hackaton');
  $conn = new MysQLi(HOST,USER,PASS,BASE);
 ?>