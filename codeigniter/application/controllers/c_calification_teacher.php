<?php
/**
 * Created by PhpStorm.
 * User: juand
 * Date: 14/06/2018
 * Time: 13:20
 */

class c_calification_teacher extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_calification_teacher');
    }

    function index($id_group, $id_class)
    {
        $this->load_model($id_group, $id_class);
    }
    function save_calification($id_class, $id_group, $expiration_date, $calification)
    {
        $this->m_calification_teacher($id_group, $expiration_date, $calification);
        $this->load_model($id_class, $id_group);
    }
    private function load_model($id_group, $id_class)
    {
        $query = $this->m_calification_teacher->get_students($id_group);
        $query2 = $this->m_calification_teacher->get_name_group($id_group);
        $name_group = $query2[0]->name;
        $id_students = array();
        $name_students = array();
        $calification_between_students = array();
        $average_calification = array();

        //Cogemos los ids
        foreach ($query as $student)
            $id_students[] = $student->id_user;
        //Cogemos los nombres de los estudiantes
        foreach ($id_students as $id_student)
        {
            $query = $this->m_calification_teacher->get_student_name($id_student);
            $name_students[] = $query[0]->name;
        }
        //Asignamos las calificaciones dadas por los estudiantes, si la calificacion es -1 no se escribe
        for ($i = 0; $i < count($id_students); $i++)
        {
            $calification_between_students[$name_students[$i]] = array();
            $califications = $this->m_calification_teacher->get_califications($id_students[$i], $id_group);

            if(!empty($califications))
            {
                foreach ($califications as $calification) {
                    if (empty($calification) || $calification->grade < 0 || $calification->grade > 10)
                        $calification_between_students[$name_students[$i]][] = '-';
                    else
                        $calification_between_students[$name_students[$i]][] = $calification->grade;
                }
            }
            else
            {
                for($j = 0; $j < count($id_students) ; $j++)
                    $calification_between_students[$name_students[$i]][] = '-';
            }
        }
        //Calculamos la media
        for ($i = 0; $i < count($id_students); $i++)
        {
            if(!empty($califications))
            {
                $average = 0;
                for($j=0 ; $j < count($califications) && !empty($califications[$j]) && $califications[$j]->grade >= 0 && $califications[$j]->grade <= 10 ; $j++)
                    $average+=$califications->grade;
                if($j == count($califications))
                    $average_calification[] = $average/$j;
                else
                    $average_calification[] = '-';
            }
            else
            {
                $average_calification[] = '-';
            }
        }
        $data['id_students'] = $id_students;
        $data['name_students'] = $name_students;
        $data['califications_between_students'] = $calification_between_students;
        $data['average_calification'] = $average_calification;
        $data['id_class'] = $id_class;
        $data['id_group'] = $id_group;
        $data['name_group'] = $name_group;

        $this->load->view('v_calification_teacher',$data);
    }
}