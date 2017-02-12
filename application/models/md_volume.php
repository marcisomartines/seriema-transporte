<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 12/02/2017
 * Time: 18:38
 */
class md_volume extends CI_Model
{

    public function salvarVolume(){
        $dados = [
            'id_cliente'     => $this->input->post('cliente'),
            'nr_nota_fiscal' => $this->input->post('notafiscal'),
            'descricao'      => $this->input->post('desc'),
            'tp_volume'      => $this->input->post('tipoVolume'),
            'tm_volume'      => $this->input->post('tamanhoVolume')
        ];

        $this->db->insert('tb_mercadoria',$dados);
    }
}