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

        $html = "<div id=\"top\" class=\"row\">";

        $html .= " <div class=\"col-md-12 pull-right\">";

        $html .= " <a href=\"#\" class=\"btn btn-primary\">";
        $html .= " <div class=\"row\">";
        $html .= "<div class=\"col-xs-12 text-center\">";
        $html .= "<i class=\"fa fa-file-text-o fa-5x\"></i>";
        $html .= "</div>";
        $html .= "<div class=\"col-xs-12 text-center\">";
        $html .= "<p>Relatorios</p>";
        $html .= "</div>";
        $html .= "</div>";
        $html .= "</a>";

        $html .= " <a href='".base_url()."index.php/Volume/recebidos' class=\"btn btn-primary\">";
        $html .= " <div class=\"row\">";
        $html .= "<div class=\"col-xs-12 text-center\">";
        $html .= "<i class=\"fa fa-arrow-down fa-5x\"></i>";
        $html .= "</div>";
        $html .= "<div class=\"col-xs-12 text-center\">";
        $html .= "<p>Recebidos</p>";
        $html .= "</div>";
        $html .= "</div>";
        $html .= "</a>";

        $html .= " <a href='".base_url()."index.php/Volume/enviados' class=\"btn btn-primary\">";
        $html .= " <div class=\"row\">";
        $html .= "<div class=\"col-xs-12 text-center\">";
        $html .= "<i class=\"fa fa-arrow-up fa-5x\"></i>";
        $html .= "</div>";
        $html .= "<div class=\"col-xs-12 text-center\">";
        $html .= "<p>Despachados</p>";
        $html .= "</div>";
        $html .= "</div>";
        $html .= "</a>";

        $html .= " <a href=\"#\" class=\"btn btn-primary\">";
        $html .= " <div class=\"row\">";
        $html .= "<div class=\"col-xs-12 text-center\">";
        $html .= "<i class=\"fa fa-eye fa-5x\"></i>";
        $html .= "</div>";
        $html .= "<div class=\"col-xs-12 text-center\">";
        $html .= "<p>Ver Todos</p>";
        $html .= "</div>";
        $html .= "</div>";
        $html .= "</a>";

        $html .= " <a href=\"#\" data-toggle=\"modal\" data-target=\"#buscarModal-modal\" class=\"btn btn-primary\">";
        $html .= " <div class=\"row\">";
        $html .= "<div class=\"col-xs-12 text-center\">";
        $html .= "<i class=\"fa fa-search fa-5x\"></i>";
        $html .= "</div>";
        $html .= "<div class=\"col-xs-12 text-center\">";
        $html .= "<p>Buscar Volume</p>";
        $html .= "</div>";
        $html .= "</div>";
        $html .= "</a>";

        $html .= " <a href='".base_url()."index.php/Volume/deposito'  class=\"btn btn-primary\">";
        $html .= " <div class=\"row\">";
        $html .= "<div class=\"col-xs-12 text-center\">";
        $html .= "<i class=\"fa fa-cubes fa-5x\"></i>";
        $html .= "</div>";
        $html .= "<div class=\"col-xs-12 text-center\">";
        $html .= "<p>Depósito</p>";
        $html .= "</div>";
        $html .= "</div>";
        $html .= "</a>";

        $html .= " <a  href=\"#\" data-toggle=\"modal\" data-target=\"#inserirModal-modal\" class=\"btn btn-primary\">";
        $html .= " <div class=\"row\">";
        $html .= "<div class=\"col-xs-12 text-center\">";
        $html .= "<i class=\"fa fa-plus-circle fa-5x\"></i>";
        $html .= "</div>";
        $html .= "<div class=\"col-xs-12 text-center\">";
        $html .= "<p>Novo Volumes</p>";
        $html .= "</div>";
        $html .= "</div>";
        $html .= "</a>";

        $html .= " <a  href=\"#\" data-toggle=\"modal\" data-target=\"#inserirModal-modal\" class=\"btn btn-primary\">";
//        $html .= " <div class=\"row\">";
//        $html .= "<div class=\"col-xs-12 text-center\">";
        $html .= "<i class=\"fa fa-plus-circle\"></i> ";
//        $html .= "</div>";
//        $html .= "<div class=\"col-xs-12 text-center\">";
        $html .= " Novo Volumes";
//        $html .= "</div>";
//        $html .= "</div>";
        $html .= "</a>";



        $html .= "</div>";
        $html .= "</div>";

        echo $html;
    }
}