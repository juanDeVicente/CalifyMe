<?php
/**
 * Created by PhpStorm.
 * User: juand
 * Date: 13/06/2018
 * Time: 12:46
 */

class c_class_teacher extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_class_teacher');
    }

    function index()
    {

    }

    public function create_class()
    {
        $name = $this->input->post('name');
        $grade = $this->input->post('grade');
        $id_class=$this->m_class_teacher->create_class($_SESSION['id_user'], $name);


        //crear modelo para crear clase con alumnos asignados

        redirect(base_url("v_class_teacher"), "refresh");
    }
    public function drop_class()
    {
        $id = $this->uri->segment(3);
        $delete = $this->m_class_teacher->delete_class($id);
        redirect(base_url().'eliminar');
    }
}