<?php
/**
 * Created by PhpStorm.
 * User: juand
 * Date: 13/06/2018
 * Time: 1:56
 */

class m_class_teacher extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function get_classes($id_user)
    {
        $this->db->select('CLASS.name as class_name, Class.grade, id_class');
        $this->db->from('CLASS');
        $this->db->join('USER', 'id_teacher=id_user');
        $this->db->where('id_teacher', $id_user);
        $query = $this->db->get();
        if($query->num_rows() == 0)
            return FALSE;
        return $query->result();
    }
    function get_all_grades()
    {
        $this->db->distinct();
        $this->db->select('grade');
        $this->db->from('USER');

        $query = $this->db->get();
        if($query->num_rows() == 0)
            return FALSE;
        return $query->result();

    }
    function create_class($name_class, $grade)
    {
        $data = array
        (
            'id_class' => null,
            'name' => $name_class,
            'id_teacher' => $_SESSION['id_user'],
            'grade' => $grade
        );
        $this->db->insert('CLASS', $data);
    }
    function delete_class($id_class)
    {
        $this->db->where('id_class',$id_class);
        $this->db->delete('class');
    }
}