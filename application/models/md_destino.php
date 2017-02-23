<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 22/02/2017
 * Time: 23:43
 */
class md_destino extends CI_Model
{
    public function retornaDestino(){
        return $this->db->get('tb_viagem')->result_array();
    }
}