<?php

class ModelCadastro extends CI_Model {

    public function inserirDados($usuario, $contato, $localizacao, $login) {
        $this->db->insert('usuario', $usuario);
        $this->db->insert('contato', $contato);
        $this->db->insert('localizacao', $localizacao);
        $this->db->insert('login', $login);
    }

    public function buscarEmail($email) {
        $resultado = $this->db->get_where('contato', array('Email' => $email));

        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }

    public function inserirCaminhoImagem($url) {
        $this->db->insert('img_perfil', $url);
    }

    //Função feita para Igualar os IDS da tabela USUARIOS e permitir o relacionamento!
    public function uparDados($cpf) {
        $this->db->query("UPDATE `usuario` SET `ID_Contato`=ID_Usuario,`ID_Localizacao`=ID_Usuario,`ID_Login`=ID_Usuario, `ID_Foto`=ID_Usuario WHERE CPF='$cpf'");
    }

}
