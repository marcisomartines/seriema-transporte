<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 12/02/2017
 * Time: 21:35
 */

$this->db->where('nome',$_POST['nome']);
$res = $this->db->get('tb_clients')->result_array();
if(empty($res))
    echo 0;
else
    echo json_encode($res);