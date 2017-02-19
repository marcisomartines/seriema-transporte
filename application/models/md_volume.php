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
            'descricao'      => strtoupper($this->input->post('desc')),
            'tp_volume'      => $this->input->post('tipoVolume'),
            'tm_volume'      => $this->input->post('tamanhoVolume'),
            'dt_deposito'    => implode('-',array_reverse(explode('/',$this->input->post('dt_deposito')))),
            'status'         => 1
        ];

        $this->db->insert('tb_mercadoria',$dados);
    }

    public function salvarEnvio(){
        $dados = [
            'dt_envio' => implode('-',array_reverse(explode('/',$this->input->post('dt_envio')))),
            'veiculo'  => $this->input->post('veiculo'),
            'status'   => 2
        ];

        $this->db->where('id_mercadoria',$this->input->post('id_mercadoria'))->update('tb_mercadoria',$dados);
    }

    public function salvarRecebido(){
        $dados = [
            'dt_recebido' => implode('-',array_reverse(explode('/',$this->input->post('dt_recebido')))),
            'status'      => 3
        ];

        $this->db->where('id_mercadoria',$this->input->post('id_mercadoria'))->update('tb_mercadoria',$dados);
    }

    public function salvarEntregue(){
        $dados = [
            'dt_entregue' => implode('-',array_reverse(explode('/',$this->input->post('dt_entregue')))),
            'status'      => 4
        ];

        $this->db->where('id_mercadoria',$this->input->post('id_mercadoria'))->update('tb_mercadoria',$dados);
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

    public function listarVolumeDeposito(){
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
                                  DATE_FORMAT(tb_mercadoria.dt_deposito,'%d/%m/%Y') as dt_deposito,
                                  DATE_FORMAT(tb_mercadoria.dt_envio,'%d/%m/%Y') as dt_envio,
                                  DATE_FORMAT(tb_mercadoria.dt_recebido,'%d/%m/%Y') as dt_recebido,
                                  DATE_FORMAT(tb_mercadoria.dt_entregue,'%d/%m/%Y') as dt_entregue,
                                  CASE tb_mercadoria.status
                                    WHEN 1 THEN 'DEPÓSITO'
                                    WHEN 2 THEN 'DESPACHADO'
                                    WHEN 3 THEN 'RECEBIDO'
                                    WHEN 4 THEN 'ENTREGUE'
                                  END as status,
                                  tb_clients.nome")
            ->from('tb_mercadoria')
            ->join('tb_clients','tb_clients.id_clients=tb_mercadoria.id_cliente')
            ->where('status',1)->get()->result_array();
    }

    public function listarVolumeEnvio(){
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
                                  DATE_FORMAT(tb_mercadoria.dt_deposito,'%d/%m/%Y') as dt_deposito,
                                  DATE_FORMAT(tb_mercadoria.dt_envio,'%d/%m/%Y') as dt_envio,
                                  DATE_FORMAT(tb_mercadoria.dt_recebido,'%d/%m/%Y') as dt_recebido,
                                  DATE_FORMAT(tb_mercadoria.dt_entregue,'%d/%m/%Y') as dt_entregue,
                                  CASE tb_mercadoria.status
                                    WHEN 1 THEN 'DEPÓSITO'
                                    WHEN 2 THEN 'DESPACHADO'
                                    WHEN 3 THEN 'RECEBIDO'
                                    WHEN 4 THEN 'ENTREGUE'
                                  END as status,
                                  tb_clients.nome")
            ->from('tb_mercadoria')
            ->join('tb_clients','tb_clients.id_clients=tb_mercadoria.id_cliente')
            ->where('status',2)->get()->result_array();
    }

    public function listarVolumeRecebido(){
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
                                  DATE_FORMAT(tb_mercadoria.dt_deposito,'%d/%m/%Y') as dt_deposito,
                                  DATE_FORMAT(tb_mercadoria.dt_envio,'%d/%m/%Y') as dt_envio,
                                  DATE_FORMAT(tb_mercadoria.dt_recebido,'%d/%m/%Y') as dt_recebido,
                                  DATE_FORMAT(tb_mercadoria.dt_entregue,'%d/%m/%Y') as dt_entregue,
                                  CASE tb_mercadoria.status
                                    WHEN 1 THEN 'DEPÓSITO'
                                    WHEN 2 THEN 'DESPACHADO'
                                    WHEN 3 THEN 'RECEBIDO'
                                    WHEN 4 THEN 'ENTREGUE'
                                  END as status,
                                  tb_clients.nome")
            ->from('tb_mercadoria')
            ->join('tb_clients','tb_clients.id_clients=tb_mercadoria.id_cliente')
            ->where('status',3)->get()->result_array();
    }
} 