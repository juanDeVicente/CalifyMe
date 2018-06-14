<?php
/**
 * Created by PhpStorm.
 * User: juand
 * Date: 14/06/2018
 * Time: 9:42
 */

class m_group_teacher extends CI_Model
{
    function get_groups_from_class($id_teacher, $id_class)
    {
        $this->db->select('GROUPS.id_group, GROUPS.name');
        $this->db->from('GROUPS');
        $this->db->join('CLASS','CLASS.id_class=GROUPS.id_class');
        $this->db->where('id_teacher',$id_teacher);
        $this->db->where('CLASS.id_class', $id_class);

        return $this->db->get()->result();
    }
    function get_name_of_class($id_class)
    {
        $this->db->select('name');
        $this->db->from('CLASS');
        $this->db->where('id_class', $id_class);

        return ($this->db->get()->result())[0];
    }
    function delete_group($id_group)
    {
        $this->db->where('id_group',$id_group);
        $this->db->delete('groups');
    }
    function delete_all_groups($id_class)
    {
        $this->db->where('id_class',$id_class);
        $this->db->delete('groups');
    }
}