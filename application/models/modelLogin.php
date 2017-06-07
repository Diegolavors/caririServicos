<?php

class ModelLogin extends CI_Model {

        
    public function login($Usuario_Login, $Senha_Login){
        
        $this->db->select('Usuario_Login, Senha_Login');
        $this->db->from('login');
        $this->db->where('Usuario_Login', $Usuario_Login);
        $this->db->where('Senha_Login', $Senha_Login);
        
        $query = $this->db->get();
        
        if($query->num_rows() == 1){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}
