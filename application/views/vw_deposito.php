<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 06/02/2017
 * Time: 21:54
 */
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
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

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
                <li><a href="#">Opções</a></li>
                <li><a href="#">Perfil</a></li>
                <li><a href="#">Sair</a></li>
            </ul>
        </div>
    </div>
</nav>

<div id="main" class="container-fluid">
    <h4 class="pull-left" style="margin-top: 55px;" >Deposito - Listagem </h4>

    <div id="list" class="row"><!-- /#list -->

        <div class="table-responsive col-md-12">
            <a href="#" class="btn btn-primary pull-right"><i class="fa fa-plus-circle"></i> Novo Volume </a>
            <table class="table table-striped" cellspacing="0" cellpadding="0">
                <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Descrição</th>
                    <th>Tipo</th>
                    <th>Tamanho</th>
                    <th>Data - Entrada</th>
                    <th>Situação</th>
                    <th class="actions">Ações</th>
                </tr>
                </thead>

                <tbody>
                <?=$this->mercadoria->listarDeposito();?>
                </tbody>
            </table>

        </div>
    </div> <!-- /#list -->
</div>
<?php
include 'modal/modal_despacharVolume.php';
include 'modal/modal_excluirVolume.php';
include 'modal/modal_inserirVolume.php';
include 'modal/modal_buscarVolume.php';
?>

<script src="<?=base_url()?>js/funcoes.js"></script>
</body>
</html>
