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

    public function listar(){
        $this->CI->load->model('md_volume');
        $resultado = $this->CI->md_volume->listarVolume();
        $html='';

        foreach($resultado as $res){
            $html .= "<tr>";
            $html .= "<td>".$res['nome']."</td>";
            $html .= "<td>".$res['descricao']."</td>";
            $html .= "<td>".$res['tp_volume']."</td>";
            $html .= "<td>".$res['tm_volume']."</td>";
            $html .= "<td>".$res['dt_entrada']."</td>";
            $html .= "<td>".$res['status']."</td>";
            $html .= "<td class='actions'>";
            $html .= "<a class='btn btn-success btn-xs' href='#' data-toggle='modal' data-target='#despacharVolumeModal-modal'><i class='fa fa-reply-all'></i> Despachar</a>";
            $html .= "<a class='btn btn-warning btn-xs' href='#' data-toggle='modal' data-target='#editarVolumeModal-modal'><i class='fa fa-pencil'></i> Editar</a>";
            $html .= "<a class='btn btn-danger btn-xs'  href='#' data-toggle='modal' data-target='#excluiVolumerModal-modal'><i class='fa fa-close'></i> Excluir</a>";
            $html .= "</td>";
            $html .= "<tr>";
        }

        echo $html;
    }
}