<?php

  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';

  $conn = mysqli_connect($dbhost,$dbuser,$dbpass);
  if(!$conn)
  {
      die('could not connect: ' . mysql_error());
  }
  echo '<b>CONNECTED SUCCESSFULLY</b';
  mysqli_select_db($conn,'crud');
  mysqli_close($conn);








?>