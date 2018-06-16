<?php
/**
 * Created by PhpStorm.
 * User: juand
 * Date: 14/06/2018
 * Time: 12:59
 */

class c_calification_student extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_calification_student');
    }

    function index($id_group)
    {
        $this->load_model($id_group);
    }

    private function load_model($id_group)
    {
        $this->load->view('v_calification_student');
    }
}