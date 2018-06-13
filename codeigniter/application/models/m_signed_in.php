<?php
/**
 * Created by PhpStorm.
 * User: Jaime Escribano
 * Date: 13/06/2018
 * Time: 15:58
 */

class m_signed_in extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function sign_student_class($id_class){

        $this->db->trans_start();

        $this -> db -> select('grade');
        $this -> db -> from('CLASS');
        $this -> db -> where('id_class', $id_class);

        $query = $this->db->get();

        $grade = $query->row();

        $this -> db -> select('id_user');
        $this -> db -> from('USER');
        $this -> db -> where('grade', $grade);

        $query = $this->db->get();
        //Esta es la parte que quizá no funcione
        foreach ($query->result() as $student)
        {
            $insert  = array(
                'id_user' => $student,
                'grade' => $grade,
            );
            $this->db->insert('signed_in', $insert);
        }

        $this->db->trans_complete();

    }

    //Receives an array of students and creates a group with them.
    function sign_student_group($id_student_array, $id_class, $id_group){

        $this->db->trans_start();


        foreach ($id_student_array as $student_id)
        {
            $this->db->set('id_group', $id_group);
            $this->db->where('id_student', $student_id);
            $this->db->where('id_class', $id_class);
            $this->db->update('SIGNED_IN');
        }

        $this->db->transt_complete();
    }


    function get_students_class($id_class){

        $this->db->select('id_alumno');
        $this->db->from('SIGNED_IN');
        $this->db->where('id_class', $id_class);

        $query = $this->db->get();


        return $this->db->result();
    }


}