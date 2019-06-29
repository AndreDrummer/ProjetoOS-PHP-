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
  <title>Novo Usuário</title>
</head>

<body>
  <div class="container-fluid backgroud backgroudNewUser" style="opacity: 0.9">
    <div class="row justify-content-center">
      <div class="col-sm-6" style="top: 30px;">
      <h3 style="color: #fff; font-size: 35pt; margin-bottom: 25px;">Novo Usuário</h3>
        <form class="form-control" method="post" action="cadastro.php" style="opacity: 0.9">          
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="cpf">CPF</label>
              <input type="text" class="form-control" name="cpf" id="nome" placeholder="CPF sem pontos ou traços">
            </div>
            <div class="col-md-6 mb-3">
              <label for="nome">Nome de Usuário</label>
              <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome de Usuário">
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="cargo">Cargo</label>
              <input type="text" class="form-control" name="cargo" id="cargo" placeholder="Ex.: Recepcionista">
            </div>
            <div class="col-md-6 mb-3">
              <label for="setor">Departamento</label>
              <input type="text" class="form-control" name="setor" id="setor" placeholder="Ex.: R. H">
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="ramal">Ramal</label>
              <input type="number" class="form-control" name="ramal" id="ramal" placeholder="Ex.: 285">
            </div>
          </div>
          <button type="submit" class="btn btn-outline-success" href="index.html">Salvar</button>
          <a href="novoPedido.php" role="button" aria-pressed="true" class="btn btn-outline-danger">Cancelar</a>
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