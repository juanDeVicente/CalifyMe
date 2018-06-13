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
        $this->db->select('CLASS.name as class_name, grade');
        $this->db->from('CLASS');
        $this->db->join('USER', 'id_teacher=id_user');
        $this->db->where('id_teacher', $id_user);
        $query = $this->db->get();
        if($query->num_rows() == 0)
            return FALSE;
        return $query->result();
    }
}