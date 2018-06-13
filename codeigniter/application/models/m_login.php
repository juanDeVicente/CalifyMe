<?php
/**
 * Created by PhpStorm.
 * User: juand
 * Date: 11/06/2018
 * Time: 17:22
 */

class M_login extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function validate_data($email, $password)
    {
        $this -> db -> select('*');
        $this -> db -> from('USER');
        $this -> db -> where('email', $email);
        $this -> db -> where('password', $password);

        $query = $this -> db -> get();

        if($query -> num_rows() == 1)
        {
            return ($query->result())[0];
        }
        else
        {
            return false;
        }
    }
}