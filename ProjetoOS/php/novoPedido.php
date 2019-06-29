<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--Arquivos Bootstrap CSS-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!--FIm dos Arquivos Bootstrap CSS-->

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <title>Pedido de OS</title>
</head>

<body>
  <div class="container-fluid backgroud">
    <div class="row justify-content-center">
      <div class="col-sm-8" style="top: 30px;">
        <h2 style="margin-bottom: 20px; text-align: center; color: #fff; font-size: 30pt;">Nova Ordem de Serviço</h2>
        <form class="form-control" method="post" action="../phprocess/novoPedidoProcess.php" id='formulario' style="opacity: 0.9">
          <div class="form-row">
            <div class="col-sm-6">
              <label for="assunto">Assunto</label>
              <input name="assunto" type="text" value="Teste de Conexão com banco" class="form-control" id="assunto" placeholder="Assunto da OS">
            </div>
            <div class="col-sm-3">
              <label for="data">Data</label>
              <input readonly class="form-control" name="data" type="date" value="2019-06-29" class="form-control" id="data" placeholder="Assunto da OS">
            </div>
            <div class="col-sm-3">
              <label for="usuario_logado">Usuário</label>
              <input readonly class="form-control" name="usuario_logado" type="text" value="luanrf" class="form-control" id="user" placeholder="Assunto da OS">
            </div>
          </div>
          <div class="form-row">
            <div class="col-sm-4">
              <label for="destiny">Destino</label>
              <select name="destiny" class="form-control" id="destiny">
                <option value="Tasy - Jonas">Tasy - Jonas</option>
                <option value="T.I - Maurício">T.I - Maurício</option>
                <option value="Higienização - Vilma">Higienização - Vilma</option>
                <option value="Almoxarifado - Kalikleiton">Almoxarifado - Kalikleiton</option>
              </select>
            </div>            
            <div class="col-sm-4">
              <label for="priority">Prioridade</label>
              <select name="priority" class="form-control" id="priority">
                <option value="Urgente">Urgente</option>
                <option value="A confirmar">A confirmar</option>
                <option value="Pra semana">Pra semana</option>
                <option value="Pra amanhã">Pra amanhã</option>
              </select>
            </div>            
            <div class="col-sm-4">
              <label for="code">Código</label>
              <input readonly class="form-control" name="code" type="text" value="EMPNAME:20191060001" class="form-control" id="code" placeholder="Assunto da OS">
            </div>
          </div>
          <div class="form-group">
            <label for="descricao">Escreva seu pedido</label>
            <textarea class="form-control" name="descricao" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-outline-success">Enviar</button>
          <a role="button" class="btn btn-outline-danger" href="dashboard.php">Cancelar</a>
        </form>
      </div>
    </div>
  </div>
  <footer class="page-footer font-small special-color-dark pt-4 rodape">
    <!-- Footer Links -->
    <div class="container text-center text-md-center">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-4 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Encontre nossas páginas</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!"><img src="../image/logo insta.png" class="image-fluid"></a>
            </li>
            <li>
              <a href="#!"><img src="../image/face logo.png" class="image-fluid"></a>
            </li>
            <li>
              <a href="#!"><img src="../image/wpp logo.png" class="image-fluid"></a>
            </li>
            <li>
              <a href="#!"><img src="../image/lk logo.png" class="image-fluid"></a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 copy">&copy; 2019 Copyright
      <a href="#"><b><em>Drummer Productions</em></b></a> All rigths reserved
    </div>
    <!-- Copyright -->

  </footer>

  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>