<?php
  $assunto = isset($_POST["assunto"]) ? $_POST["assunto"] : 'Teste';
  $timenow = isset($_POST["data"]) ? $_POST["data"] : 'Teste';
  $user = isset($_POST["usuario_logado"]) ? $_POST["usuario_logado"] : 'Teste';
  $destino = isset($_POST["destiny"]) ? $_POST["destiny"] : 'Teste';
  $prioridade = isset($_POST["priority"]) ? $_POST["priority"] : 'Teste';
  $codigo = isset($_POST["code"]) ? $_POST["code"] : 'Teste';
  $descricao = isset($_POST["descricao"]) ? $_POST["descricao"] : 'Teste';

  include ('./connection.php');
  $novo  = "INSERT INTO ordens(assunto, timenow, usuario_logado, destino, prioridade, codigo_os, descricao)
  values('$assunto ', '$timenow', '$user', '$destino', '$prioridade', '$codigo', '$descricao')";
  $mysqli->query($novo) or die ($mysqli->error);
  header('Location: ../php/index.php');
?>