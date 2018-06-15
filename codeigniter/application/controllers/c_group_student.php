<?php
/**
 * Created by PhpStorm.
 * User: juand
 * Date: 12/06/2018
 * Time: 17:17
 */

class c_group_student extends CI_Controller
{
    function index()
    {
        $this->load_model();
    }
    private function load_model()
    {
        $this->load->model('m_group_student');
        $students_groups = $this->m_group_student->get_groups($_SESSION['id_user']);
        $data['groups'] = array();
        foreach ($students_groups as $group) {
            $array = array();
            $array['name'] = $group->group_name . '-' . $group->class_name;

            if ($group->teacher_calification < 0)
                $array['calification'] = '-';
            else
                $array['calification'] = $group->teacher_calification;

            $array['date'] = $group->expiration_date;
            array_push($data['groups'], $array);
        }
        $data['counter'] = 0;
        $this->load->view('v_group_student', $data);
    }
}