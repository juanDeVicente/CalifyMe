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


    function sign_student_group($id_group, $id_class){

        $this->db->trans_start();


        $this -> db -> select('id_student');
        $this -> db -> from('SIGNED_IN');
        $this -> db -> where('id_class', $id_class);

        $query = $this->db->get();

        foreach ($query->result() as $row)
        {
            $this->db->set('id_group');
            $this->db->where('id_student', $row);
            $this->db->update('SIGNED_IN');
        }

    }
}