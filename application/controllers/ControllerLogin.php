<?php

class ControllerLogin extends CI_Controller {

    public function logar() {
        $this->load->view('menu');
    }

    public function conferirLogin() {
        
        $this->form_validation->set_rules('Usuario','Usuario','required');
        $this->form_validation->set_rules('Senha','Senha','required|callback_verificarUsuario');
        
        if($this->form_validation->run() == false){
            $this->load->view('menu'); 
        }else{
            redirect('ControllerLogin/Sucesso');  
        }
            
    }
    
    public function verificarUsuario(){
        $Usuario = $this->input->post('Usuario');
        $Senha = md5($this->input->post('Senha'));
        
        $this->load->model('modelLogin');
        
        if($this->modelLogin->login($Usuario, $Senha)){
            return true;
        }else{
            $this->form_validation->set_message('verificarUsuario','Usuario ou senha Incorreto.');
            return false;
        }
        
    }
    
    public function Sucesso(){
        $this->load->view('loginOk');
    }

}
