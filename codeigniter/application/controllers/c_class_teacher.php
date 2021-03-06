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
        $this->load_model();
    }

    public function create_class($name_class, $grade)
    {
        $this->m_class_teacher->create_class($name_class, $grade);
        redirect(base_url().'index.php/c_class_teacher/index/');
    }

    public function drop_class($id_class)
    {
        $this->m_class_teacher->delete_class($id_class);
        redirect(base_url().'index.php/c_class_teacher/index/');
    }
    private function load_model()
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
        $this->load->view('v_class_teacher', $data);
    }
}