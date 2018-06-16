<?php
/**
 * Created by PhpStorm.
 * User: juand
 * Date: 16/06/2018
 * Time: 10:22
 */

class m_calification_student extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_id_students_group($id_group)
    {
        $this->db->select('id_user');
        $this->db->from('SIGNED_IN');
        $this->db->where('id_group', $id_group);

        return $this->db->get()->result();
    }
    public function get_name_student($id_group, $id_student)
    {
        $this->db->select('name');
        $this->db->from('USER');
        $this->db->join('SIGNED_IN','USER.id_user=SIGNED_IN.id_user');
        $this->db->where('USER.id_user', $id_student);
        $this->db->where('id_group', $id_group);

        return $this->db->get()->result();
    }
    public function get_name_group($id_group)
    {
        $this->db->select('name');
        $this->db->from('GROUPS');
        $this->db->where('id_group', $id_group);

        return $this->db->get()->result();
    }
    public function get_group_calification($id_group)
    {
        $this->db->select('teacher_calification');
        $this->db->from('CALIFICATION');
        $this->db->where('id_group', $id_group);

        return $this->db->get()->result();
    }
}