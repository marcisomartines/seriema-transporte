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

        foreach($resultado as $res){
            $html .= "<tr>";
            $html .= "<td>".$res['nome']."</td>";
            $html .= "<td>".$res['descricao']."</td>";
            $html .= "<td>".$res['tp_volume']."</td>";
            $html .= "<td>".$res['tm_volume']."</td>";
            $html .= "<td>".$res['dt_deposito']."</td>";
            $html .= "<td>".$res['status']."</td>";
            $html .= "<td class='actions'>";
            $html .= "<a class='btn btn-success btn-xs' href='#' data-toggle='modal' data-target='#despacharModal-modal' onclick='despachar(".$res["id_mercadoria"].");'><i class='fa fa-reply-all'></i> Despachar</a>";
            $html .= "<a class='btn btn-warning btn-xs' href='#' data-toggle='modal' data-target='#inserirModal-modal' onclick='editarVolume(".$res["id_mercadoria"].");'><i class='fa fa-pencil'></i> Editar</a>";
            $html .= "<a class='btn btn-danger btn-xs'  href='#' data-toggle='modal' data-target='#excluirModal-modal' onclick='excluirVolume(".$res["id_mercadoria"].");'><i class='fa fa-close'></i> Excluir</a>";
            $html .= "</td>";
            $html .= "<tr>";
        }

        echo $html;
    }

    public function listarEnvios(){
        $this->CI->load->model('md_volume');
        $resultado = $this->CI->md_volume->listarVolumeEnvio();
        $html='';

        foreach($resultado as $res){
            $html .= "<tr>";
            $html .= "<td>".$res['nome']."</td>";
            $html .= "<td>".$res['descricao']."</td>";
            $html .= "<td>".$res['tp_volume']."</td>";
            $html .= "<td>".$res['tm_volume']."</td>";
            $html .= "<td>".$res['dt_deposito']."</td>";
            $html .= "<td>".$res['status']."</td>";
            $html .= "<td class='actions'>";
            $html .= "<a class='btn btn-success btn-xs' href='#' data-toggle='modal' data-target='#despacharModal-modal' onclick='despachar(".$res["id_mercadoria"].");'><i class='fa fa-arrow-down'></i> Receber</a>";
            $html .= "<a class='btn btn-warning btn-xs' href='#' data-toggle='modal' data-target='#inserirModal-modal' onclick='editarVolume(".$res["id_mercadoria"].");'><i class='fa fa-pencil'></i> Editar</a>";
            $html .= "<a class='btn btn-danger btn-xs'  href='#' data-toggle='modal' data-target='#excluirModal-modal' onclick='excluirVolume(".$res["id_mercadoria"].");'><i class='fa fa-close'></i> Excluir</a>";
            $html .= "</td>";
            $html .= "<tr>";
        }

        echo $html;
    }

    public function listarRecebidos(){
        $this->CI->load->model('md_volume');
        $resultado = $this->CI->md_volume->listarVolumeRecebido();
        $html='';

        foreach($resultado as $res){
            $html .= "<tr>";
            $html .= "<td>".$res['nome']."</td>";
            $html .= "<td>".$res['descricao']."</td>";
            $html .= "<td>".$res['tp_volume']."</td>";
            $html .= "<td>".$res['tm_volume']."</td>";
            $html .= "<td>".$res['dt_deposito']."</td>";
            $html .= "<td>".$res['status']."</td>";
            $html .= "<td class='actions'>";
            $html .= "<a class='btn btn-success btn-xs' href='#' data-toggle='modal' data-target='#despacharModal-modal' onclick='despachar(".$res["id_mercadoria"].");'><i class='fa fa-arrow-up'></i> Entregar</a>";
            $html .= "<a class='btn btn-warning btn-xs' href='#' data-toggle='modal' data-target='#inserirModal-modal' onclick='editarVolume(".$res["id_mercadoria"].");'><i class='fa fa-pencil'></i> Editar</a>";
            $html .= "<a class='btn btn-danger btn-xs'  href='#' data-toggle='modal' data-target='#excluirModal-modal' onclick='excluirVolume(".$res["id_mercadoria"].");'><i class='fa fa-close'></i> Excluir</a>";
            $html .= "</td>";
            $html .= "<tr>";
        }

        echo $html;
    }
}