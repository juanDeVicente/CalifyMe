<?php
/**
 * Created by PhpStorm.
 * User: juand
 * Date: 14/06/2018
 * Time: 13:57
 */

class m_calification_teacher extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    function get_students($id_group)
    {
        $this->db->select('id_user');
        $this->db->from('SIGNED_IN');
        $this->db->where('id_group',$id_group);

        return $this->db->get()->result();
    }
    function get_student_name($id_user)
    {
        $this->db->select('name');
        $this->db->from('USER');
        $this->db->where('id_user', $id_user);

        return $this->db->get()->result();
    }
    function get_califications($id_calificator, $id_group)
    {
        $this->db->select('grade');
        $this->db->from('CALIFICATION_BETWEEN_STUDENTS');
        $this->db->where('id_calificator',$id_calificator);
        $this->db->where('id_group', $id_group);

        return $this->db->get()->result();
    }
    function get_name_group($id_group)
    {
        $this->db->select('name');
        $this->db->from('GROUPS');
        $this->db->where('id_group', $id_group);

        return $this->db->get()->result();
    }
    function set_calification($id_group, $expiration_date, $calification)
    {
        $data = array
        (
            'id_group' => $id_group,
            '$expiration_date' => $expiration_date,
            '$calification' => $calification
        );

        $this->db->insert('CALIFICATION', $data);
    }
}