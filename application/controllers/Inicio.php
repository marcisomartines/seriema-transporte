<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
        if ($this->session->userdata('is_logged_in') == 1) {
            $this->load->library('Botoes');
            $this->load->view('index');
        }else{
            $this->load->view('login');
        }
	}

    public function login(){
        $this->load->view('login');
    }
}