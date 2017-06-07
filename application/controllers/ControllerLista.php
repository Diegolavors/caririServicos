<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerLista extends CI_Controller {


	public function listar()
	{
            
            $this->load->view('menu');
                 
            $this->load->model('ModelLista');

            $config = array(
		"base_url" => base_url('/ControllerLista/listar/usuario/p'),
		"per_page" => 4, //itens por pagina
		"total_rows" => $this->ModelLista->CountAll(),
		"full_tag_open" => "<ul class='pagination'>",
		"full_tag_close" => "</ul>",
		"first_link" => FALSE,
		"last_link" => FALSE,
		"first_tag_open" => "<li>",
		"first_tag_close" => "</li>",
		"prev_link" => "<<",
		"prev_tag_open" => "<li class='prev'>",
		"prev_tag_close" => "</li>",
		"next_link" => ">>",
                "num_links" =>"1",
		"next_tag_open" => "<li class='next'>",
		"next_tag_close" => "</li>",
		"last_tag_open" => "<li>",
		"last_tag_close" => "</li>",
		"cur_tag_open" => "<li class='active'><a href='#'>",
          	"cur_tag_close" => "</a></li>",
		"num_tag_open" => "<li>",
		"num_tag_close" => "</li>"
                );

		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();

//		$offset = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
		$data['usuario'] = $this->ModelLista->GetAll();
		$this->load->view('lista',$data);
	}
}
