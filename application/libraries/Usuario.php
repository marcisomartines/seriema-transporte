<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 22/02/2017
 * Time: 23:58
 */
class Usuario
{
    protected $CI;

    function __construct()
    {
        $this->CI = &get_instance();
    }

    public function retornaCidadeUsuarioLogado(){
        return $this->CI->session->userdata('cidade');
    }

    public function retornaUsuarioLogado(){
        return $this->CI->session->userdata('id');
    }

}