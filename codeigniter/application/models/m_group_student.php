<?php
/**
 * Created by PhpStorm.
 * User: juand
 * Date: 12/06/2018
 * Time: 17:23
 */

class m_group_student extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function get_groups($id_user)
    {
        $this->db->select('GROUPS.name AS group_name, CLASS.name AS class_name, expiration_date, teacher_calification');
        $this->db->from('SIGNED_IN');
        $this->db->join('GROUPS','SIGNED_IN.id_group=GROUPS.id_group');
        $this->db->join('CLASS','SIGNED_IN.id_class=CLASS.id_class');
        $this->db->join('CALIFICATION','SIGNED_IN.id_group=CALIFICATION.id_group');
        $this->db->where('SIGNED_IN.id_user', $id_user);

        return $this -> db -> get() -> result();
    }
}