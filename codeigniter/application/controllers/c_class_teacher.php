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
        $this->load->model('m_signed_in');
    }

    function index()
    {

    }

    public function create_class()
    {
        $name = $this->input->post('name');
        $grade = $this->input->post('grade');
        $id_class=$this->m_class_teacher->create_class($_SESSION['id_user'], $name);
        $this->m_signed_in->sign_student_class($id_class);







        //Obtener un array con todos los usuarios de la clase
       $id_users = $this->signed_in->get_students_class($id_class);
       $auxiliar = count($id_users);
       $contador = 0;

       //Crear grupos de 3
        //En cada vuelta del bucle se crea un grupo (queda registrado en la BBDD) y se le asignan 3 alumnos
        //Tiene en cuenta si no quedan todos los alumnos posibles
       while($contador < $auxiliar){


           $id_groups = $this->db->create_group($id_class);
           $id_students_array = array(
              'student1' =>  $id_users[$contador],
               'student2' => $id_users[$contador + 1],
               'student2' => $id_users[$contador + 2],
           );

           $this->m_signed_in->sign_student_group($id_students_array, $id_class, $id_groups);
           $contador = $contador + 3;

           if($auxiliar - $contador == 2){
               $id_groups = $this->db->create_group($id_class);
               $id_students_array = array(
                   'student1' =>  $id_users[$contador],
                   'student2' => $id_users[$contador + 1],
               );

               $this->m_signed_in->sign_student_group($id_students_array, $id_class, $id_groups);
           }

           if($auxiliar - $contador == 1){
               $id_groups = $this->db->create_group($id_class);
               $id_students_array = array(
                   'student1' =>  $id_users[$contador],
               );

               $this->m_signed_in->sign_student_group($id_students_array, $id_class, $id_groups);
           }
       }



        redirect(base_url("v_class_teacher"), "refresh");


    }
    public function drop_class()
    {
        $id = $this->uri->segment(3);
        $delete = $this->m_class_teacher->delete_class($id);

        //cargar la siguiente vista
    }
}