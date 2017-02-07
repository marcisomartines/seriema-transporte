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
    <div id="top" class="row">
        <div class="col-md-3">
            <h2>Encomendas</h2>
        </div>

<!--        <div class="col-md-6">-->
<!--            <div class="input-group h2">-->
<!--                <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Encomenda">-->
<!--                <span class="input-group-btn">-->
<!--                <button class="btn btn-primary" type="submit">-->
<!--                    <span class="glyphicon glyphicon-search"></span>-->
<!--                </button>-->
<!--            </span>-->
<!--            </div>-->
<!--        </div>-->

        <div class="col-md-3">
            <a href="add.html" class="btn btn-primary btn-lg btn-block btn-huge pull-right h2">Ver Todos<br></a>
        </div>
        <div class="col-md-3">
            <a href="add.html" class="btn btn-primary btn-lg btn-block btn-huge pull-right h2">Buscar Encomenda<br></a>
        </div>
        <div class="col-md-3">
            <a href="<?=base_url()?>index.php/Inicio/adicionarEncomenda" class="btn btn-primary btn-lg btn-block btn-huge pull-right h2">Nova Encomenda<br></a>
        </div>
    </div> <!-- /#top -->
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
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
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
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
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
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
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
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
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
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
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
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
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
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
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
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                    </td>
                </tr>



                </tbody>
            </table>

        </div>
    </div> <!-- /#list -->

<!--    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete-modal">Excluir</a>-->
</div>


<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabel">Excluir Encomenda</h4>
            </div>
            <div class="modal-body">
                Deseja realmente excluir esta encomenda?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Sim</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
            </div>
        </div>
    </div>
</div> <!-- /.modal -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="<?=base_url()?>js/jquery.min.js"></script>
 <script src="<?=base_url()?>js/bootstrap.min.js"></script>
</body>
</html>