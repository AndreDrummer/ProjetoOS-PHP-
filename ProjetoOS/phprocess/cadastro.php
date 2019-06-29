<?php
  $cpf = isset($_POST["cpf"]) ? $_POST["cpf"] : "";
  $nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
  $cargo = isset($_POST["cargo"]) ? $_POST["cargo"] : "";
  $setor = isset($_POST["setor"]) ? $_POST["setor"] : "";
  $ramal = isset($_POST["ramal"]) ? $_POST["ramal"] : 0;

  include ('./connection.php');
  $cadastrar  = "INSERT INTO users(cpf, nome, cargo, setor, ramal)
  values('$cpf', '$nome', '$cargo', '$setor', $ramal)";
  $mysqli->query($cadastrar) or die ($mysqli->error); 
  header('Location: ./php/index.php'); 
?>

<!-- insert into users
values(70342896113, 'Andre Felipe', 'Programador', 'Desenvolvimento', 285) -->