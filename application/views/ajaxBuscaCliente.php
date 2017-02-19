<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 12/02/2017
 * Time: 19:39
 */

$q = strtolower($_GET["term"]);

if (!$q)
    return;

$query = $this->db->query("SELECT DISTINCT nome FROM tb_clients WHERE nome LIKE '%" . $q . "%' ORDER BY nome LIMIT 0,15");

foreach ($query->result_array() as $vi) {
    $cname[] = $vi['nome'];
}
echo json_encode($cname);
?>