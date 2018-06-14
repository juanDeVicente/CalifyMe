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
    }
    function index()
    {
        $this->load->view('v_calification_student');
    }
}