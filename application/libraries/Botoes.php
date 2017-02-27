<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 09/02/2017
 * Time: 23:03
 */
class Botoes
{
    protected $CI;

    public function  __construct()
    {
        $this->CI =&get_instance();
    }

    public function gerar(){

        $html = "<div id=\"top\" class=\"row\" style='float: right;'>";

        $html .= " <div class=\"col-md-12 pull-right\">";

        $html .= " <a href=\"#\" class=\"btn btn-primary\" style=\"width: 125px;\">";
        $html .= " <div class=\"row\">";
        $html .= "<div class=\"col-xs-12 text-center\">";
        $html .= "<i class=\"fa fa-line-chart fa-5x\"></i>";
        $html .= "</div>";
        $html .= "<div class=\"col-xs-12 text-center\">";
        $html .= "<p>Relatorios</p>";
        $html .= "</div>";
        $html .= "</div>";
        $html .= "</a>";

//        $html .= " <a href=\"#\"  data-toggle=\"modal\" data-target=\"#buscarModal-modal\"  class=\"btn btn-primary\">";
//        $html .= " <div class=\"row\">";
//        $html .= "<div class=\"col-xs-12 text-center\">";
//        $html .= "<i class=\"fa fa-eye fa-5x\"></i>";
//        $html .= "</div>";
//        $html .= "<div class=\"col-xs-12 text-center\">";
//        $html .= "<p>Localizar Volume</p>";
//        $html .= "</div>";
//        $html .= "</div>";
//        $html .= "</a>";

        $html .= " <a href='".base_url()."index.php/Volume/entregues' class=\"btn btn-primary\" style=\"width: 125px;\">";
        $html .= " <div class=\"row\">";
        $html .= "<div class=\"col-xs-12 text-center\">";
        $html .= "<i class=\"fa fa-check-circle fa-5x\"></i>";
        $html .= "</div>";
        $html .= "<div class=\"col-xs-12 text-center\">";
        $html .= "<p>Entregues</p>";
        $html .= "</div>";
        $html .= "</div>";
        $html .= "</a>";

        $html .= " <a href='".base_url()."index.php/Volume/recebidos' class=\"btn btn-primary\" style=\"width: 125px;\">";
        $html .= " <div class=\"row\">";
        $html .= "<div class=\"col-xs-12 text-center\">";
        $html .= "<i class=\"fa fa-arrow-down fa-5x\"></i>";
        $html .= "</div>";
        $html .= "<div class=\"col-xs-12 text-center\">";
        $html .= "<p>Recebidos</p>";
        $html .= "</div>";
        $html .= "</div>";
        $html .= "</a>";

        $html .= " <a href='".base_url()."index.php/Volume/enviados' class=\"btn btn-primary\" style=\"width: 125px;\">";
        $html .= " <div class=\"row\">";
        $html .= "<div class=\"col-xs-12 text-center\">";
        $html .= "<i class=\"fa fa-arrow-up fa-5x\"></i>";
        $html .= "</div>";
        $html .= "<div class=\"col-xs-12 text-center\">";
        $html .= "<p>Enviados</p>";
        $html .= "</div>";
        $html .= "</div>";
        $html .= "</a>";

        $html .= " <a href='".base_url()."index.php/Volume/deposito'  class=\"btn btn-primary\" style=\"width: 125px;\">";
        $html .= " <div class=\"row\">";
        $html .= "<div class=\"col-xs-12 text-center\">";
        $html .= "<i class=\"fa fa-cubes fa-5x\"></i>";
        $html .= "</div>";
        $html .= "<div class=\"col-xs-12 text-center\">";
        $html .= "<p>Depósito</p>";
        $html .= "</div>";
        $html .= "</div>";
        $html .= "</a>";

        $html .= " <a  href=\"#\" data-toggle=\"modal\" data-target=\"#inserirModal-modal\" onclick='$(\"#tipoVolume\").val(1);' class=\"btn btn-primary\" style=\"width: 125px;\">";
        $html .= " <div class=\"row\">";
        $html .= "<div class=\"col-xs-12 text-center\">";
        $html .= "<i class=\"fa fa-plus-circle fa-5x\"></i>";
        $html .= "</div>";
        $html .= "<div class=\"col-xs-12 text-center\">";
        $html .= "<p>Novo Volumes</p>";
        $html .= "</div>";
        $html .= "</div>";
        $html .= "</a>";

        $html .= "</div>";
        $html .= "</div>";

        echo $html;
    }

    public function menu(){
        $html = '';
        $html .= "<li><a href='".base_url()."'>Início</a></li>";
        $html .= "<li><a href='#'>Opções</a></li>";
        $html .= "<li><a href='#'>Perfil</a></li>";
        $html .= "<li><a href='".base_url()."index.php/Autenticacao/logout'>Sair</a></li>";
        $html .= "<li><a href='#'><i class='fa fa-user-circle'></i> ".$this->CI->session->userdata('nome_comp')." </a></li>";

        echo $html;
    }
}