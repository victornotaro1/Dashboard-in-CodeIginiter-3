<?php

class users_model extends CI_Model{
    public function store($user)
    {
     $this->db->insert("tb_users", $user);
    }
}