<?php

class ControllerCadastro extends CI_Controller {

    public function trabalhador() {
        $this->load->view('menu');
        $this->load->view('pagCadastro');
    }

    public function consultarEmail() {
        $this->load->Model('ModelCadastro', '', TRUE);
        $EmailResult = $this->model->buscarEmail($this->input->post('Email'));
        foreach ($EmailResult as $e) {
            $email = array("email" => $e->Email);
        }
        echo json_encode($email);
    }

    public function cadastro() {
        $this->load->Model('ModelCadastro', '', TRUE);

        // definimos um nome aleatório para o diretório
        $folder = $this->input->post('User_Login');
        //definimos o nome do path onde o arquivo será gravado
        $path = "./uploads/" . $folder;

        //verificamos se o diretório existe
        // se não exite criamos com permissão de leitura e escrita
        if (!is_dir($path)) {
            mkdir($path, 0777, $recursive = true);
        }
        //denimos as configurações para upload
        //determinamos o path para gravar o arquivo
        $configUpload['upload_path'] = $path;
        //definimos - através da extensão os tipos de arquivos suportados
        $configUpload['allowed_types'] = 'jpg|png|jpeg';
        //definimos o nome do arquivo para criptografado
        $configUpload['encrypt_name'] = TRUE;

        //passamos as configurações para a library UPLOAD
        $this->upload->initialize($configUpload);

        if (!$this->upload->do_upload('userfile')) {
            $url = array(
                'Url_Foto' => base_url('/img/img_perf.png')
            );
            $this->ModelCadastro->inserirCaminhoImagem($url);
        } else {
            // verificamos se o upload foi processado com sucesso
            if (!$this->upload->do_upload('userfile')) {
                //em caso de erro retornamos os mesmos para uma variável e enviamos para a home
                $data = array('error' => $this->upload->display_errors());
                $this->load->view('pagCadastro', $data);
            } else {
                //se ocorrer tudo bem, recuperamos os dados do arquivo
                $data['dadosArquivos'] = $this->upload->data();
                $arquivoPath = 'uploads/' . $folder . "/" . $data['dadosArquivos']['file_name'];
                // passando para o array $data
                $data['urlArquivo'] = base_url($arquivoPath);
                $url = array(
                    'Url_Foto' => base_url($arquivoPath)
                );
                $this->ModelCadastro->inserirCaminhoImagem($url);
            }
        }


        //Organizando o ARRAY($usuario) para preenchimento da tabela USUÁRIO;
        $usuario = array(
            'Nome_Usuario' => $this->input->post('Nome_Usuario'),
            'Data_Nascimento' => $this->input->post('dataNasc'),
            'Sexo' => $this->input->post('Sexo'), // 1 -> Homem 2-> Mulher 3->Outros
            'Sobre' => $this->input->post('Detalhe'),
            'CPF' => $this->input->post('CPF')
        );

        //Organizando o ARRAY($contato) para preenchimento da tabela CONTATOS;
        $contato = array(
            'Email' => $this->input->post('Email'),
            'Telefone1' => $this->input->post('Telefone1'),
            'Telefone2' => $this->input->post('Telefone2')
        );

        //Organizando o ARRAY($localizacao) para preenchimento da tabela LOCALIZACAO;
        $localizacao = array(
            'CEP' => $this->input->post('CEP'),
            'Numero_End' => $this->input->post('Numero'),
            'Complemento' => $this->input->post('Complemento')
        );

        //Organizando o ARRAY($localizacao) para preenchimento da tabela LOCALIZACAO;
        $login = array(
            'Usuario_Login' => $this->input->post('User_Login'),
            'Senha_Login' => md5($this->input->post('Senha_Usuario')) //md5(string) criptografa a senha para md5
        );
        $this->ModelCadastro->inserirDados($usuario, $contato, $localizacao, $login); //Passagem de ARRAYS como parâmetros
        $this->ModelCadastro->uparDados($this->input->post('CPF')); //Usa o CPF que é UNIQUE para identificar e IGUALAR !
        //Views a serem chamadas
        $this->load->view('menu');
        $this->load->view('index.php');
    }

}
