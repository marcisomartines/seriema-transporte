<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 25/02/2017
 * Time: 23:09
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Autenticacao extends CI_Controller
{

    public function login(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nome', 'Login', 'required|trim|callback_validar_dados');
        $this->form_validation->set_rules('password', 'Senha', 'required|md5|trim');

        if ($this->form_validation->run()) {
            $usuario = array(
                'nome' => $this->input->post('nome'),
                'is_logged_in' => 1
            );
            $this->session->set_userdata($usuario);
            redirect('/');
        } else {
            $this->load->view('login');
        }
    }

    public function validar_dados() {
        $this->load->model('md_usuario');

        if ($this->md_usuario->can_log_in()){
            return true;
        } else {
            $this->form_validation->set_message('validar_dados', 'Usuario/Senha incorretos');
            return false;
        }
    }

    public function logout() {
        $this->session->sess_destroy(); //destroi a sessão
        redirect('home/index');
    }
}