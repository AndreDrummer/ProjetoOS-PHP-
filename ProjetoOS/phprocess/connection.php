<?php
  $hostname = '127.0.0.1';
  $username = 'root';
  $password = '';
  $banco = 'pessoas';
  // $mysqli = new mysqLi($hostname, $username, $password, $banco);
  $mysqli = new mysqli($hostname, $username, $password , $banco);

  if($mysqli->connect_errno)
  {
    echo "Falha na conexão: (".$mysqli->connect_errno.")".$mysqli->connect_error;
  }
?>