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

        foreach ($query->result() as $student)
        {
            $insert  = array(
                'id_user' => $student,
                'grade' => $grade,
            );
            $this->db->insert('signed_in', $insert);
        }

    }
}