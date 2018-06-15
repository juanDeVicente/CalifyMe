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
                redirect(base_url().'/index.php/c_class_teacher/index/');
            else if ($_SESSION['role'] == 1) //El 1 es un alumno
                redirect(base_url().'/index.php/c_group_student/index/');
             else if ($_SESSION['role'] == 0) //El 0 es un admin
                redirect(str_replace("/codeigniter", "", base_url()) . '/phpmyadmin');
            else
                print ("La base de datos está to mal");
        }
    }

    function redirect()
    {
        $this->session->sess_destroy();
        redirect(base_url(), c_login);
    }
}