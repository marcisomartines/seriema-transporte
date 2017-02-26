<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 25/02/2017
 * Time: 22:40
 */
$form     =array('id' => 'form-login', 'class' => 'form-horizontal','role'=>'form');
$usuario  =array('name' => 'nome', 'id' => 'nome', 'class' => 'form-control');
$password =array('name' => 'password', 'id' => 'password', 'class' => 'form-control');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Seriema Turimo Encomendas - SISTUR</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div style="width:200px; height:200px; position:absolute;
	top:50%;
	left:50%;
	margin-top:-270px;
	margin-left:-145px;">

    <div class="form-group">
        <img class="col-xs-15 col-md-15 pull-center" src="<?=base_url()?>img/logo.png">
        <?php
        echo form_open('autenticacao/login',$form);
        echo validation_errors();

        echo form_label('Login:','nome');
        echo form_input($usuario);
        ?>
    </div>
    <br>
    <div class="form-group">
        <?php
        echo form_label('Senha:','password');
        echo form_password($password);

        echo "<div class='form-group'>";
        echo "<div class='col-sm-offset-2 col-sm-10'>";
        echo "<br>";
        echo '<input type="submit" class="btn btn-lg btn-success pull-right" value="Entrar">';
        echo "</div>";
        echo "</div>";
        echo form_close();
        ?>
    </div>
</div>
</body>
</html>