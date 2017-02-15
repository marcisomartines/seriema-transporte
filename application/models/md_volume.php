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

    public function listarVolume(){
        return $this->db->select("tb_mercadoria.id_mercadoria,
                                  tb_mercadoria.id_cliente,
                                  tb_mercadoria.nr_nota_fiscal,
                                  tb_mercadoria.descricao,
                                  CASE tb_mercadoria.tp_volume
                                    WHEN 1 THEN 'CAIXA' 
                                    WHEN 2 THEN 'SACOLA'
                                    WHEN 3 THEN 'ENVELOPE'
                                    WHEN 4 THEN 'AVULSO'
                                  END as tp_volume,
                                  CASE tb_mercadoria.tm_volume
                                    WHEN 1 THEN 'PEQUENO'
                                    WHEN 2 THEN 'MÉDIO'
                                    WHEN 3 THEN 'GRANDE'
                                  END as tm_volume,
                                  DATE_FORMAT(tb_mercadoria.dt_entrada,'%d/%m/%Y') as dt_entrada,
                                  CASE tb_mercadoria.status
                                    WHEN 1 THEN 'DEPÓSITO'
                                    WHEN 2 THEN 'DESPACHADO'
                                    WHEN 3 THEN 'RECEBIDO'
                                    WHEN 4 THEN 'ENTREGUE'
                                  END as status,
                                  tb_clients.nome")
            ->from('tb_mercadoria')
            ->join('tb_clients','tb_clients.id_clients=tb_mercadoria.id_cliente')
            /*->where('status',1)*/->get()->result_array();
    }
} 