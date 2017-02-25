<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 14/02/2017
 * Time: 20:48
 */
class Mercadoria
{
    protected $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
    }

    public function listarDeposito(){
        $this->CI->load->model('md_volume');
        $resultado = $this->CI->md_volume->listarVolumeDeposito();
        $html='';

        if(count($resultado)==0){
         $html .= "<tr>";
         $html .= "<td colspan='11' style='text-align: center;'>Nenhuma encomenda encontrada no estoque!</td>";
         $html .= "</tr>";
        }else {
            foreach ($resultado as $res) {
                $html .= "<tr>";
                $html .= "<td>" . $res['id_mercadoria'] . "</td>";
                $html .= "<td>" . $res['nome'] . "</td>";
                $html .= "<td>" . $res['descricao'] . "</td>";
                $html .= "<td>" . $res['tp_volume'] . "</td>";
                $html .= "<td>" . $res['tm_volume'] . "</td>";
                $html .= "<td>" . $res['dt_deposito'] . "</td>";
                $html .= "<td>" . $res['dt_envio'] . "</td>";
                $html .= "<td>" . $res['dt_recebido'] . "</td>";
                $html .= "<td>" . $res['dt_entregue'] . "</td>";
                $html .= "<td>" . $res['status'] . "</td>";
                $html .= "<td class='actions'>";
                $html .= "<a class='btn btn-success btn-xs' href='#' data-toggle='modal' data-target='#despacharModal-modal' onclick='$(\"#id_mercadoria\").val(" . $res["id_mercadoria"] . ");'><i class='fa fa-reply-all'></i> Enviar</a>";
                $html .= "<a class='btn btn-warning btn-xs' href='#' data-toggle='modal' data-target='#inserirModal-modal' onclick='editarVolume(" . $res["id_mercadoria"] . ");'><i class='fa fa-pencil'></i> Editar</a>";
                $html .= "<a class='btn btn-danger btn-xs' id='cancelar'  href='#' data-toggle='modal' data-target='#excluirModal-modal' onclick='$(\"#id_mercadoria_excluir\").val(" . $res["id_mercadoria"] . ");$(\"#tipoExclusao\").val(1)'><i class='fa fa-close'></i> Cancelar</a>";
                $html .= "</td>";
                $html .= "<tr>";
            }
        }

        echo $html;
    }

    public function listarEnvios(){
        $this->CI->load->model('md_volume');
        $resultado = $this->CI->md_volume->listarVolumeEnvio();
        $html='';

        if(count($resultado)==0){
            $html .= "<tr>";
            $html .= "<td colspan='11' style='text-align: center;'>Nenhuma encomenda encontrada no estoque!</td>";
            $html .= "</tr>";
        }else {

            foreach ($resultado as $res) {
                $html .= "<tr>";
                $html .= "<td>" . $res['id_mercadoria'] . "</td>";
                $html .= "<td>" . $res['nome'] . "</td>";
                $html .= "<td>" . $res['descricao'] . "</td>";
                $html .= "<td>" . $res['tp_volume'] . "</td>";
                $html .= "<td>" . $res['tm_volume'] . "</td>";
                $html .= "<td>" . $res['dt_deposito'] . "</td>";
                $html .= "<td>" . $res['dt_envio'] . "</td>";
                $html .= "<td>" . $res['dt_recebido'] . "</td>";
                $html .= "<td>" . $res['dt_entregue'] . "</td>";
                $html .= "<td>" . $res['status'] . "</td>";
                $html .= "<td class='actions'>";
                $html .= "<a class='btn btn-success btn-xs' href='#' data-toggle='modal' data-target='#receberModal-modal' onclick='$(\"#id_mercadoria_recebido\").val(" . $res["id_mercadoria"] . ");'><i class='fa fa-arrow-down'></i> Receber</a>";
//            $html .= "<a class='btn btn-warning btn-xs' href='#' data-toggle='modal' data-target='#inserirModal-modal' onclick='editarVolume(".$res["id_mercadoria"].");'><i class='fa fa-pencil'></i> Editar</a>";
                $html .= "<a class='btn btn-danger btn-xs' id='cancelar'  href='#' data-toggle='modal' data-target='#excluirModal-modal' onclick='$(\"#id_mercadoria_excluir\").val(" . $res["id_mercadoria"] . ");$(\"#tipoExclusao\").val(2)'><i class='fa fa-close'></i> Cancelar</a>";
                $html .= "</td>";
                $html .= "<tr>";
            }
        }

        echo $html;
    }

    public function listarRecebidos(){
        $this->CI->load->model('md_volume');
        $resultado = $this->CI->md_volume->listarVolumeRecebido();
        $html='';

        if(count($resultado)==0){
            $html .= "<tr>";
            $html .= "<td colspan='11' style='text-align: center;'>Nenhuma encomenda encontrada no estoque!</td>";
            $html .= "</tr>";
        }else {

            foreach ($resultado as $res) {
                $html .= "<tr>";
                $html .= "<td>" . $res['id_mercadoria'] . "</td>";
                $html .= "<td>" . $res['nome'] . "</td>";
                $html .= "<td>" . $res['descricao'] . "</td>";
                $html .= "<td>" . $res['tp_volume'] . "</td>";
                $html .= "<td>" . $res['tm_volume'] . "</td>";
                $html .= "<td>" . $res['dt_deposito'] . "</td>";
                $html .= "<td>" . $res['dt_envio'] . "</td>";
                $html .= "<td>" . $res['dt_recebido'] . "</td>";
                $html .= "<td>" . $res['dt_entregue'] . "</td>";
                $html .= "<td>" . $res['status'] . "</td>";
                $html .= "<td class='actions'>";
                $html .= "<a class='btn btn-success btn-xs' href='#' data-toggle='modal' data-target='#entregarModal-modal' onclick='$(\"#id_mercadoria_entregue\").val(" . $res["id_mercadoria"] . ");'><i class='fa fa-arrow-up'></i> Entregar</a>";
//            $html .= "<a class='btn btn-warning btn-xs' href='#' data-toggle='modal' data-target='#inserirModal-modal' onclick='editarVolume(".$res["id_mercadoria"].");'><i class='fa fa-pencil'></i> Editar</a>";
                $html .= "<a class='btn btn-danger btn-xs' id='cancelar'  href='#' data-toggle='modal' data-target='#excluirModal-modal' onclick='$(\"#id_mercadoria_excluir\").val(" . $res["id_mercadoria"] . ");$(\"#tipoExclusao\").val(3)'><i class='fa fa-close'></i> Cancelar</a>";
                $html .= "</td>";
                $html .= "<tr>";
            }
        }

        echo $html;
    }

    public function listarEntregues(){
        $this->CI->load->model('md_volume');
        $resultado = $this->CI->md_volume->listarVolumeEntregue();
        $html='';

        if(count($resultado)==0){
            $html .= "<tr>";
            $html .= "<td colspan='11' style='text-align: center;'>Nenhuma encomenda encontrada no estoque!</td>";
            $html .= "</tr>";
        }else {

            foreach ($resultado as $res) {
                $html .= "<tr>";
                $html .= "<td>" . $res['id_mercadoria'] . "</td>";
                $html .= "<td>" . $res['nome'] . "</td>";
                $html .= "<td>" . $res['descricao'] . "</td>";
                $html .= "<td>" . $res['tp_volume'] . "</td>";
                $html .= "<td>" . $res['tm_volume'] . "</td>";
                $html .= "<td>" . $res['dt_deposito'] . "</td>";
                $html .= "<td>" . $res['dt_envio'] . "</td>";
                $html .= "<td>" . $res['dt_recebido'] . "</td>";
                $html .= "<td>" . $res['dt_entregue'] . "</td>";
                $html .= "<td>" . $res['status'] . "</td>";
                $html .= "<td class='actions'>";
//            $html .= "<a class='btn btn-success btn-xs' href='#' data-toggle='modal' data-target='#entregarModal-modal' onclick='$(\"#id_mercadoria_entregue\").val(".$res["id_mercadoria"].");'><i class='fa fa-arrow-up'></i> Entregar</a>";
//            $html .= "<a class='btn btn-warning btn-xs' href='#' data-toggle='modal' data-target='#inserirModal-modal' onclick='editarVolume(".$res["id_mercadoria"].");'><i class='fa fa-pencil'></i> Editar</a>";
                $html .= "<a class='btn btn-danger btn-xs' id='cancelar'  href='#' data-toggle='modal' data-target='#excluirModal-modal' onclick='$(\"#id_mercadoria_excluir\").val(" . $res["id_mercadoria"] . ");$(\"#tipoExclusao\").val(4)'><i class='fa fa-close'></i> Cancelar</a>";
                $html .= "</td>";
                $html .= "<tr>";
            }
        }

        echo $html;
    }

}