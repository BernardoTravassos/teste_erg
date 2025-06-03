<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Variacoes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Variacao_model');
    }

    public function index($produto_id) {
        $data['variacoes'] = $this->Variacao_model->get_by_produto($produto_id);
        $data['produto_id'] = $produto_id;
        $this->load->view('variacoes/listar', $data);
    }

    public function create($produto_id) {
        $data['produto_id'] = $produto_id;
        $this->load->view('variacoes/form', $data);
    }

    public function store($produto_id) {
        $data = [
            'produto_id' => $produto_id,
            'nome' => $this->input->post('nome'),
            'preco_adicional' => $this->input->post('preco_adicional')
        ];
        $this->Variacao_model->insert($data);
        redirect('variacoes/index/'.$produto_id);
    }

    public function edit($id) {
        $data['variacao'] = $this->Variacao_model->get($id);
        $this->load->view('variacoes/form', $data);
    }

    public function update($id) {
        $variacao = $this->Variacao_model->get($id);
        $data = [
            'nome' => $this->input->post('nome'),
            'preco_adicional' => $this->input->post('preco_adicional')
        ];
        $this->Variacao_model->update($id, $data);
        redirect('variacoes/index/'.$variacao->produto_id);
    }

    public function delete($id) {
        $variacao = $this->Variacao_model->get($id);
        $this->Variacao_model->delete($id);
        redirect('variacoes/index/'.$variacao->produto_id);
    }
}
