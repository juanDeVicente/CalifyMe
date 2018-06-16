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
        $data = array();
        $data['counter'] = 0;
        $data['id_group'] = $id_group;
        $query = $this->m_calification_student->get_group_calification($id_group);
        $data['group_calification'] = $query[0]->teacher_calification;
        $query = $this->m_calification_student->get_name_group($id_group);
        $data['name_group'] = $query[0]->name;
        $query = $this->m_calification_student->get_id_students_group($id_group);

        $data['students'] = array();
        foreach ($query as $id_student)
        {
            $array = array();
            $name = $this->m_calification_student->get_name_student($id_group, $id_student->id_user);
            $array['name'] = $name[0]->name;
            $array['id_student'] = $id_student->id_user;

            array_push($data['students'], $array);
        }
        $data['total_points'] = $data['group_calification'] * count($query);
        $data['points_asigned'] = 0;
        $this->load->view('v_calification_student', $data);
    }
}