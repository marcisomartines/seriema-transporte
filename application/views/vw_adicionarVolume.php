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

    <link href="<?=base_url()?>css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url()?>css/bootstrap.min.css" rel="stylesheet">
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
<br>
<br>

<div id="main" class="container-fluid">
    <h3 class="page-header">Adicionar Volume</h3>

    <form action="index.html">
        <!-- area de campos do form -->
<!--        <div id="actions" class="row">-->
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="campo1">Cliente</label>
                        <input type="text" class="form-control" id="campo1">
                    </div>

                    <div class="form-group col-md-2">
                        <label for="campo2">Telefone</label>
                        <input type="text" class="form-control" id="campo3">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="campo2">Onibus</label>
                        <input type="text" class="form-control" id="campo3">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="campo3">Campo Três</label>
                        <input type="text" class="form-control" id="campo3">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="index.html" class="btn btn-default">Cancelar</a>
            </div>
<!--        </div>-->
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?=base_url()?>js/jquery.min.js"></script>
<script src="<?=base_url()?>js/bootstrap.min.js"></script>
</body>
</html>
