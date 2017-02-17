<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 12/02/2017
 * Time: 19:34
 */
?>

<html>
<head>
    <title></title>
    <link rel="stylesheet" href="<?=base_url()?>jQuery/jquery-ui-1.11.1.css">
<!--    <script src="--><?//=base_url()?><!--jQuery/jquery-1.11.1.js"></script>-->
    <script src="<?=base_url()?>jQuery/jquery-ui-1.11.1.js"></script>
    <script type="text/javascript">
    $(function() {
        $("#course").autocomplete({
                source: "<?=base_url()?>index.php/Cliente/autoComplete",
                width: 260,
                matchContains: true,
                selectFirst: false
            });
        });
    </script>
</head>
<body>
<div id="content">
    <input type="text" name="course" id="course" class="form-control" />
    <input type="hidden" name="cliente" id="cliente" class="form-control" />
</div>
</body>
</html>