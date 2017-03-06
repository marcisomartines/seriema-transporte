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
            'id_cliente'        => $this->input->post('cliente'),
            'nr_nota_fiscal'    => $this->input->post('notafiscal'),
            'descricao'         => strtoupper($this->input->post('desc')),
            'tp_volume'         => $this->input->post('tipoVolume'),
            'tm_volume'         => $this->input->post('tamanhoVolume'),
            'dt_deposito'       => implode('-',array_reverse(explode('/',$this->input->post('dt_deposito')))),
            'id_resp_deposito'  => $this->session->userdata('id'),
            'status'            => 1
        ];

        $this->db->insert('tb_mercadoria',$dados);
    }

    public function editarVolume(){
        $dados = [
            'id_cliente'       => $this->input->post('cliente'),
            'nr_nota_fiscal'   => $this->input->post('notafiscal'),
            'descricao'        => strtoupper($this->input->post('desc')),
            'tp_volume'        => $this->input->post('tipoVolume'),
            'tm_volume'        => $this->input->post('tamanhoVolume'),
            'dt_deposito'      => implode('-',array_reverse(explode('/',$this->input->post('dt_deposito')))),
            'id_resp_deposito' => $this->session->userdata('id'),
            'status'           => 1
        ];

        $this->db->where('id_mercadoria', $this->input->post('id_mercadoria'))->update('tb_mercadoria', $dados);
    }

    public function salvarEnvio(){
        $dados = [
            'dt_envio'      => implode('-',array_reverse(explode('/',$this->input->post('dt_envio')))),
            'veiculo'       => $this->input->post('veiculo'),
            'origem'        => $this->input->post('origem'),
            'destino'       => $this->input->post('destino'),
            'id_resp_envio' => $this->session->userdata('id'),
            'status'        => 2
        ];

        $this->db->where('id_mercadoria',$this->input->post('id_mercadoria'))->update('tb_mercadoria',$dados);
    }

    public function salvarRecebido(){
        $dados = [
            'dt_recebido'     => implode('-',array_reverse(explode('/',$this->input->post('dt_recebido')))),
            'id_resp_receber' => $this->session->userdata('id'),
            'status'          => 3
        ];

        $this->db->where('id_mercadoria',$this->input->post('id_mercadoria'))->update('tb_mercadoria',$dados);
    }

    public function salvarEntregue(){
        $dados = [
            'dt_entregue'       => implode('-',array_reverse(explode('/',$this->input->post('dt_entregue')))),
            'id_resp_entrega'   => $this->session->userdata('id'),
            'status'            => 4
        ];

        $this->db->where('id_mercadoria',$this->input->post('id_mercadoria'))->update('tb_mercadoria',$dados);
    }

    public function cancelarVolume(){
        $this->db->where('id_mercadoria',$this->input->post('id_mercadoria'))->delete('tb_mercadoria');
    }

    public function cancelarEnvio(){
        $dados = [
            'dt_envio'      => NULL,
            'veiculo'       => NULL,
            'origem'        => NULL,
            'destino'       => NULL,
            'id_resp_envio' => NULL,
            'status'        => 1
        ];

        $this->db->where('id_mercadoria', $this->input->post('id_mercadoria'))->update('tb_mercadoria', $dados);
    }

    public function cancelarRecebido(){
        $dados = [
            'dt_recebido'     => NULL,
            'id_resp_receber' => NULL,
            'status'          => 2
        ];

        $this->db->where('id_mercadoria', $this->input->post('id_mercadoria'))->update('tb_mercadoria', $dados);
    }

    public function cancelarEntregue(){
        $dados = [
            'dt_entregue'     => NULL,
            'id_resp_entrega' => NULL,
            'status'          => 3
        ];

        $this->db->where('id_mercadoria', $this->input->post('id_mercadoria'))->update('tb_mercadoria', $dados);
    }

    public function buscaEditarVolume(){
        $resultado = $this->db->select("tb_mercadoria.id_mercadoria,
                                  tb_mercadoria.id_cliente,
                                  tb_mercadoria.nr_nota_fiscal,
                                  tb_mercadoria.descricao,
                                  tb_mercadoria.tp_volume,
                                  tb_mercadoria.tm_volume,
                                  DATE_FORMAT(tb_mercadoria.dt_deposito,'%d/%m/%Y') as dt_deposito,
                                  tb_mercadoria.status,
                                  tb_clients.nome,
                                  tb_clients.telefone")
            ->from('tb_mercadoria')
            ->join('tb_clients','tb_clients.id_clients=tb_mercadoria.id_cliente')
            ->where('id_mercadoria',$this->input->post('id_mercadoria'))->get()->result_array();

        echo json_encode($resultado);
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
            ->where('status',1)->order_by('dt_deposito','desc')->get()->result_array();
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
                                  tb_clients.nome,
                                  tb_mercadoria.veiculo")
            ->from('tb_mercadoria')
            ->join('tb_clients','tb_clients.id_clients=tb_mercadoria.id_cliente')
            ->where('status',2)->order_by('dt_envio','desc')->get()->result_array();
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
                                  tb_clients.nome,
                                  tb_mercadoria.veiculo")
            ->from('tb_mercadoria')
            ->join('tb_clients','tb_clients.id_clients=tb_mercadoria.id_cliente')
            ->where('status',3)->order_by('dt_recebido','desc')->get()->result_array();
    }


    public function listarVolumeEntregue(){
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
                                  tb_clients.nome,
                                  tb_mercadoria.veiculo")
            ->from('tb_mercadoria')
            ->join('tb_clients','tb_clients.id_clients=tb_mercadoria.id_cliente')
            ->where('status',4)->order_by('dt_entregue','desc')->get()->result_array();
    }
} 