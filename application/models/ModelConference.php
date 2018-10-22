<?php

class ModelConference extends CI_Model
{
    public function getAllConferences()
    {
        $sql=$this->db->query('select *
                               from conference
                               ');
        return $sql->result();
    }
}



?>