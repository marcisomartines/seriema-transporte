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
            'tm_volume'      => $this->input->post('tamanhoVolume'),
            'dt_entrada'     => date('Y-m-d'),
            'status'         => 1
        ];

        $this->db->insert('tb_mercadoria',$dados);
    }

    public function editarVolume(){

        $query = $this->db->query("SELECT id_clients FROM tb_clients WHERE nome='".$this->input->post('course')."' ORDER BY nome LIMIT 0,15");


        $dados = [
            'id_cliente'     => $this->input->post('cliente'),
            'nr_nota_fiscal' => $this->input->post('notafiscal'),
            'descricao'      => $this->input->post('desc'),
            'tp_volume'      => $this->input->post('tipoVolume'),
            'tm_volume'      => $this->input->post('tamanhoVolume')
        ];

        $this->db->update('tb_mercadoria',$dados);
        $this->db->where('id_mercadoria', $this->input->post('id_mercadoria'))->update('tb_mercadoria', $dados);
    }
}