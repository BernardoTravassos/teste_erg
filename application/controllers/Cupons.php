<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cupons extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Cupom_model');
    }

    public function index() {
        $data['cupons'] = $this->Cupom_model->get_all();
        $this->load->view('cupons/listar', $data);
    }

    public function create() {
        $this->load->view('cupons/form');
    }

    public function store() {
        $data = [
            'codigo' => $this->input->post('codigo'),
            'valor_desconto' => $this->input->post('valor_desconto'),
            'valor_minimo' => $this->input->post('valor_minimo'),
            'validade' => $this->input->post('validade')
        ];
        $this->Cupom_model->insert($data);
        redirect('cupons');
    }

    public function edit($id) {
        $data['cupom'] = $this->Cupom_model->get($id);
        $this->load->view('cupons/form', $data);
    }

    public function update($id) {
        $data = [
            'codigo' => $this->input->post('codigo'),
            'valor_desconto' => $this->input->post('valor_desconto'),
            'valor_minimo' => $this->input->post('valor_minimo'),
            'validade' => $this->input->post('validade')
        ];
        $this->Cupom_model->update($id, $data);
        redirect('cupons');
    }

    public function delete($id) {
        $this->Cupom_model->delete($id);
        redirect('cupons');
    }
}
