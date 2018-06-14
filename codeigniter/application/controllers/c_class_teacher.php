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

    function index($id_class)
    {
        $this->load_model($id_class);
    }

    public function create_class($name_class,$id_class)
    {
        $this->m_class_teacher->create_class($name_class);
        $this->load_model($id_class);
    }

    public function drop_class($id_class)
    {
        $this->m_class_teacher->delete_class($id_class);
        $this->load_model($id_class);
    }
    private function load_model($id_class)
    {
        $teacher_classes = $this->m_class_teacher->get_classes($_SESSION['id_user']);
        $grades = $this->m_class_teacher->get_all_grades();

        $data['classes'] = array();
        if ($teacher_classes != FALSE && $grades != FALSE) {
            foreach ($teacher_classes as $class) {
                $array = array();
                $array['name'] = $class->class_name;
                $array['grade'] = $class->grade;
                $array['id_class'] = $class->id_class;
                array_push($data['classes'], $array);
            }

            $data['counter'] = 1;
            $data['grades'] = array();

            foreach ($grades as $grade)
                if ($grade->grade != 0)
                    array_push($data['grades'], $grade->grade);
        }
        $data['id_class'] = $id_class;
        $this->load->view('v_class_teacher', $data);
    }
}