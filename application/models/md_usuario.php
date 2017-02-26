<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 25/02/2017
 * Time: 23:14
 */
class md_usuario extends CI_Model
{
    public function can_log_in(){
        $this->db->where('nome_user', $this->input->post('nome'));
        $this->db->where('senha', md5($this->input->post('password')));
        $this->db->where('status','A');
        $query = $this->db->get('tb_users');
        if ($query->num_rows() == 1) {
            return $query->result_array();
        } else {
            return false;
        }
    }
}