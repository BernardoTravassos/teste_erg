<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Produto_model');
    }

    public function index() {
        $data['produtos'] = $this->Produto_model->get_all();
        $this->load->view('produtos/listar', $data);
    }

    public function create() {
        $this->load->view('produtos/form');
    }

    public function store() {
        $data = [
            'nome' => $this->input->post('nome'),
            'preco' => $this->input->post('preco')
        ];
        $produto_id = $this->Produto_model->insert($data);
        redirect('produtos');
    }

    public function edit($id) {
        $data['produto'] = $this->Produto_model->get($id);
        $this->load->view('produtos/form', $data);
    }

    public function update($id) {
        $data = [
            'nome' => $this->input->post('nome'),
            'preco' => $this->input->post('preco')
        ];
        $this->Produto_model->update($id, $data);
        redirect('produtos');
    }

    public function delete($id) {
        $this->Produto_model->delete($id);
        redirect('produtos');
    }
}
