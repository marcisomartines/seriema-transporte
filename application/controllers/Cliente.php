<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 12/02/2017
 * Time: 19:36
 */
class Cliente extends CI_Controller
{
    public function autoComplete(){
        $this->load->view('ajaxBuscaCliente');
    }

    public function buscaCliente(){
        $this->load->view('vw_buscaCliente');
    }
}