<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 12/02/2017
 * Time: 17:53
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Volume extends CI_Controller
{
    public function cadastrarVolume(){
        $this->load->model('md_volume');
        $this->md_volume->salvarVolume();
    }
}