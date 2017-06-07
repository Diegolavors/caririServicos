<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ModelLista extends CI_Model {

    var $table = "usuario";

    // function __construct() {
    //   parent::__construct();
    //}

    function GetAll($sort = 'ID_Usuario', $order = 'asc', $limit = null, $offset = null) {
        $this->db->order_by($sort, $order);

        $query = $this->db->select('img_perfil.Url_Foto, contato.Telefone1, localizacao.Estado, localizacao.Cidade, usuario.*') //Atributos que vai querer exibir, caso fosse todos (*)
                ->from('usuario')//Ponto de partida
                ->join('img_perfil', 'img_perfil.ID_Foto = usuario.ID_Foto')
                ->join('contato', 'contato.ID_Contato = usuario.ID_Contato')
                ->join('localizacao', 'localizacao.ID_Localizacao = usuario.ID_Localizacao')
                ->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

    function CountAll() {
        return $this->db->count_all($this->table);
    }

}

/* End of file */
