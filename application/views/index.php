<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Seriema encomendas - SISTUR</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Seriema Encomendas - SISTUR</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Início</a></li>
                <li><a href="#">Relatorios</a></li>
                <li><a href="#">Perfil</a></li>
                <li><a href="#">aaaa</a></li>
                <li><a href="#">Sair</a></li>
            </ul>
        </div>
    </div>
</nav>


<br>
<br>
<br>
<div id="main" class="container-fluid">

     <!-- /#top -->
    <?=$this->botoes->gerar();?>
     <!-- /#top -->

    <div id="list" class="row">

        <div class="table-responsive col-md-12">
            <table class="table table-striped" cellspacing="0" cellpadding="0">
                <thead>
                <tr>
                    <th>Onibus</th>
                    <th>Origem</th>
                    <th>Destino</th>
                    <th>Chegada - Destino</th>
                    <th>Cliente</th>
                    <th class="actions">Ações</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td>5014</td>
                    <td>São Paulo - SP</td>
                    <td>Campo Grande - MS</td>
                    <td>07/02/2017</td>
                    <td>Marciso Gonzalez Martines</td>
                    <td class="actions">
                        <a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
                        <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#excluirModal-modal">Excluir</a>
                    </td>
                </tr>

                <tr>
                    <td>5014</td>
                    <td>São Paulo - SP</td>
                    <td>Campo Grande - MS</td>
                    <td>07/02/2017</td>
                    <td>Marciso Gonzalez Martines</td>
                    <td class="actions">
                        <a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
                        <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#excluirModal-modal">Excluir</a>
                    </td>
                </tr>


                <tr>
                    <td>5014</td>
                    <td>São Paulo - SP</td>
                    <td>Campo Grande - MS</td>
                    <td>07/02/2017</td>
                    <td>Marciso Gonzalez Martines</td>
                    <td class="actions">
                        <a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
                        <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#excluirModal-modal">Excluir</a>
                    </td>
                </tr>


                <tr>
                    <td>5014</td>
                    <td>São Paulo - SP</td>
                    <td>Campo Grande - MS</td>
                    <td>07/02/2017</td>
                    <td>Marciso Gonzalez Martines</td>
                    <td class="actions">
                        <a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
                        <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#excluirModal-modal">Excluir</a>
                    </td>
                </tr>


                <tr>
                    <td>5014</td>
                    <td>São Paulo - SP</td>
                    <td>Campo Grande - MS</td>
                    <td>07/02/2017</td>
                    <td>Marciso Gonzalez Martines</td>
                    <td class="actions">
                        <a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
                        <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#excluirModal-modal">Excluir</a>
                    </td>
                </tr>


                <tr>
                    <td>5014</td>
                    <td>São Paulo - SP</td>
                    <td>Campo Grande - MS</td>
                    <td>07/02/2017</td>
                    <td>Marciso Gonzalez Martines</td>
                    <td class="actions">
                        <a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
                        <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#excluirModal-modal">Excluir</a>
                    </td>
                </tr>


                <tr>
                    <td>5014</td>
                    <td>São Paulo - SP</td>
                    <td>Campo Grande - MS</td>
                    <td>07/02/2017</td>
                    <td>Marciso Gonzalez Martines</td>
                    <td class="actions">
                        <a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
                        <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#excluirModal-modal">Excluir</a>
                    </td>
                </tr>

                <tr>
                    <td>5014</td>
                    <td>São Paulo - SP</td>
                    <td>Campo Grande - MS</td>
                    <td>07/02/2017</td>
                    <td>Marciso Gonzalez Martines</td>
                    <td class="actions">
                        <a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
                        <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#excluirModal-modal">Excluir</a>
                    </td>
                </tr>



                </tbody>
            </table>

        </div>
    </div> <!-- /#list -->

<!--    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#excluirModal-modal">Excluir</a>-->
</div>

<?php
include 'modal/modal_excluirVolume.php';
include 'modal/modal_inserirVolume.php';
include 'modal/modal_buscarVolume.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- <script src="--><?//=base_url()?><!--js/jquery.min.js"></script>-->
 <script src="<?=base_url()?>js/bootstrap.js"></script>
</body>
</html>