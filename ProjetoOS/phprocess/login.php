<?php
if (isset($_GET['userName']) && isset($_GET['password'])) {
  $userName = $_GET['userName'];
  $password = $_GET['password'];
  echo "Entrou no If<br/>";
  //doLogin($userName, $password);
} else {
  echo "Deu Erro<br/>";
}

include ('./connection.php');
  $chamaBanco = "SELECT * FROM $usertable where $name = '$userName' AND $password = '$password'";
  $result = $mysqli->query($chamaBanco) or die ($mysqli->error);  // Retorna a consulta do Banco ou um erro;
  $row = $result->num_rows;
  print_r($result);

?>