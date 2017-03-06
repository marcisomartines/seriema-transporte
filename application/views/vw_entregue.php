<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 19/02/2017
 * Time: 18:20
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SISTUR</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url()?>css/bootstrap-datepicker.min.css"  >
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="<?=base_url()?>/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="http://malsup.github.io/jquery.blockUI.js"></script>
</head>
<body>
<script>
    $('.datepicker').datepicker();
</script>
<nav class="navbar navbar-default navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?=base_url()?>">SISTUR</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <?=$this->botoes->menu();?>
            </ul>
        </div>
    </div>
</nav>

<div id="main" class="container-fluid">
    <div class="row" style="margin-bottom: 10px;">
        <?=$this->botoes->gerar();?>
    </div><!-- /#list -->
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading"><i class="fa fa-print"></i> Entregas - Lista de encomendas</div>

        <!-- Table -->
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Veiculo</th>
                <th>Cliente</th>
                <th>Descrição</th>
                <th>Tipo</th>
                <th>Tamanho</th>
                <th>Data - Deposito</th>
                <th>Data - Envio</th>
                <th>Data - Recebido</th>
                <th>Data - Entregue</th>
                <th>Situação</th>
                <th class="actions">Ações</th>
            </tr>
            </thead>
            <tbody>
            <?=$this->mercadoria->listarEntregues();?>
            </tbody>
        </table>
    </div>
</div>
<?php
include 'modal/modal_despacharVolume.php';
include 'modal/modal_excluirVolume.php';
include 'modal/modal_inserirVolume.php';
include 'modal/modal_receberVolume.php';
include 'modal/modal_entregarVolume.php';
?>

<script src="<?=base_url()?>js/funcoes.js"></script>
</body>
</html>