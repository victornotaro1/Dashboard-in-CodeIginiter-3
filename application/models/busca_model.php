<?php

class Busca_model extends CI_Model
{
    public function buscar($busca)
    {
        if(empty($busca))
        {
            return array();
        }
    }
}