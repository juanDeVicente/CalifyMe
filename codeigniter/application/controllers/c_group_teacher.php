<?php
/**
 * Created by PhpStorm.
 * User: juand
 * Date: 13/06/2018
 * Time: 16:18
 */

class c_group_teacher extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_group_teacher');
    }

    function index($id_class)
    {
        $this->load_model($id_class);
    }
    function drop_group($id_group, $id_class)
    {
        $this->m_group_teacher->delete_group($id_group);
        $this->load_model($id_class);
    }
    function drop_all_groups($id_class)
    {
        $this->m_group_teacher->delete_all_groups($id_class);
        $this->load_model($id_class);
    }
    function create_group($id_class, $group_name, $students)
    {
        $this->m_group_teacher->create_group($id_class, $group_name);
        foreach ($students as $student)
            $this->m_group_teacher->add_student_to_group($this->m_group_teacher->get_id_group($id_class,$group_name),$student);
        $this->load_model($id_class);
    }
    private function load_model($id_class)
    {
        $groups = $this->m_group_teacher->get_groups_from_class($_SESSION['id_user'],$id_class);
        $data['groups'] = array();
        foreach ($groups as $group)
        {
            $array = array();
            $array['name'] = $group->name;
            $array['id_group'] = $group->id_group;
            array_push($data['groups'], $array);
        }
        $data['name'] = $this->m_group_teacher->get_name_of_class($id_class)->name;
        $data['counter'] = 1;
        $data['id_class'] = $id_class;
        $this->load->view('v_group_teacher',$data);
    }
}