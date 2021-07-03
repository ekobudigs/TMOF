<?php

class Model_Auth extends CI_Model

{

    function getlogin($email, $password)
    {
        return $this->db->get_where('users', array('email' => $email, 'password' => $password));
    }
}
