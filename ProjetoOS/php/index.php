<?php
include_once('../PHProcess/connection.php');
$setZero = "SET @n = 0;";
$query = "SELECT timenow, assunto, destino, usuario_logado from ordens";
$result = $mysqli->query($query) or die($mysqli->error);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>List OS</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid backgroud backgroudIndex">
        <div class="row justify-content-md-center">
            <div class="col-sm-8" style="top: 30px;">
                <h3 style="text-align: center; font-size: 30pt;">Pedidos enviados</h3>
                <div style="margin-bottom: 30px;">
                    <a class="btn btn-primary mb-2 float-right" role="button" href="novoPedido.php">Novo</a>
                    <a href="dashboard.php"><i class="fa fa-home">&nbsp;home</i></a>
                </div>                
                <div class="scrolling" id="scroll">
                    <table class="table table-hover table-light table-sm">
                        <thead class='thead-dark' style="text-align: center;">
                            <tr>
                                <th scope="col">Nº</th>
                                <th scope="col">Data</th>
                                <th scope="col">Título</th>
                                <th scope="col">Destino</th>
                                <th scope="col">Enviado por</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $cont = 1;
                            while ($dado = $result->fetch_array()) { ?>
                                <tr style="text-align: center;">
                                    <td><?php echo $cont++; ?></td>
                                    <td><?php echo $dado["timenow"]; ?></td>
                                    <td><?php echo $dado["assunto"]; ?></td>
                                    <td><?php echo $dado["destino"]; ?></td>
                                    <td><?php echo $dado["usuario_logado"]; ?></td>
                                    <td><a onclick="alert('Editar?')"><i class="fa fa-pencil text-warning"></i></a>&nbsp; &nbsp;<a class="danger" onclick="alert('Deletar?')"><i class="fa fa-trash text-danger"></i></a>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
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

</html>
<!-- <pre>
            <?php
            if ($result) {
                while ($row = $result->fetch_array()) {
                    $name = $row["nome"];
                    echo "Nome: " . $name . "<hr>";
                    print_r($result);
                }
            }
            ?>
        </pre> -->