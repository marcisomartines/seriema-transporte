<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
        $this->load->library('Botoes');
		$this->load->view('index');
	}

	public function adicionarEncomenda(){
	    $this->load->view('vw_adicionarEncomenda');
    }
}