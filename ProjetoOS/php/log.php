<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <!--Arquivos Bootstrap CSS-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!--FIm dos Arquivos Bootstrap CSS-->

  <script src="../Js/alerts.js"></script>  
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <title>Entrar | Login</title>
</head>

<body>
  <div class="container-fluid backgroud">
    <div class="row justify-content-center">
      <div class="col-sm-4" style="top: 40px; left: 10px;">
          <h1 style="font-size: 40pt; margin-bottom: 0px; color: #fff;">S.O.S Service</h1>
          <p style="color: #fff;">Ordens de serviço de um jeito rápido e fácil!</p>
        <form class="form-control" style="opacity: 0.9" action="index.php" method="get">
          <h4>Login | Entrar</h4>
          <div class="form-group">
            <label for="userName">Nome de Usuário</label>
            <input name="userName" id="userName" type="text" class="form-control" placeholder="Nome de Usuário">
          </div>
          <div class="form-group">
            <label for="password">CPF</label>
            <input name="password" id="password" type="password" class="form-control"
              placeholder="CPF sem traços e pontos">
          </div>     
          <button class="btn btn-primary">Entrar</button>
          <a href="#" id="teste" onclick="esqueciSenha()">Esqueci meu usuário</a>
          <div class="alert alert-info" role="alert" id='alerta' style="display: none; top: 10px;">
            <strong>Aviso! </strong>Para fazer login coloque corretamente seu nome de usuário e o seu CPF!
            <button onclick="esqueciSenha()" type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>       
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
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Nos Encontre</h5>

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
    <a href="#"><b><em> - Drummer Productions - </em></b></a> All rigths reserved
  </div>
  <!-- Copyright -->
  
  </footer>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>