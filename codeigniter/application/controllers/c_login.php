<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class C_login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->view('v_login');
    }

    function verify_login()
    {
        $this->load->model('m_login');
        $email = $_POST["email"];
        $password = $_POST["password"];

        $result = $this->m_login->validate_data($email, $password);

        if ($result == false)
            $this->redirect();
        else
        {
            $user_session_data = array
            (
                'id_user' => $result->id_user,
                'email' => $result->email,
                'password' => $result->password,
                'name' => $result->name . ' ' . $result->first_last_name . ' ' . $result->second_last_name,
                'role' => $result->role
            );
            $this->session->set_userdata($user_session_data);

            if ($_SESSION['role'] == 2) //El 2 es un profesor
            {
                $this->load->model('m_class_teacher');
                $teacher_classes = $this->m_class_teacher->get_classes($_SESSION['id_user']);
                $data['classes'] = array();

                foreach ($teacher_classes as $class)
                {
                    $array = array();
                    $array['name'] = $class->class_name;
                    $array['grade'] = $class->grade;
                    $array['id_class'] = $class->id_class;
                    array_push($data['classes'],$array);
                }

                $data['counter'] = 1;
                $data['grades'] = array();
                $grades = $this->m_class_teacher->get_all_grades();
                foreach ($grades as $grade)
                    if($grade->grade != 0)
                        array_push($data['grades'],$grade->grade);
                $this->load->view('v_class_teacher', $data);
            }
            else if ($_SESSION['role'] == 1) //El 1 es un alumno
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
            } else if ($_SESSION['role'] == 0) //El 0 es un admin
                redirect(str_replace("/codeigniter", "", base_url()) . '/phpmyadmin');
            else
                print ("La base de datos está to mal");
        }
    }

    function redirect()
    {
        redirect(base_url(), c_login);
    }
}