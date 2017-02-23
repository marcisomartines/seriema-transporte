<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 22/02/2017
 * Time: 23:35
 */
class Destino
{
    protected $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
    }

    public function retornaDestino(){
        $this->CI->load->model('md_destino');
        $resultado = $this->CI->md_destino->retornaDestino();

        $opcoes = [];

        foreach($resultado as $res){
            $opcoes[$res['id_viagem']] = $res['destino'];
        }

        return $opcoes;

    }

}