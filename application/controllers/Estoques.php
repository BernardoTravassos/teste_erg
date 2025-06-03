<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estoques extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Estoque_model');
        $this->load->model('Variacao_model');
    }

    public function manage($variacao_id) {
        $data['estoque'] = $this->Estoque_model->get_by_variacao($variacao_id);
        $data['variacao'] = $this->Variacao_model->get($variacao_id);
        $this->load->view('estoques/form', $data);
    }

    public function store($variacao_id) {
        $estoque = $this->Estoque_model->get_by_variacao($variacao_id);

        $data = [
            'variacao_id' => $variacao_id,
            'quantidade' => $this->input->post('quantidade')
        ];

        if ($estoque) {
            $this->Estoque_model->update($estoque->id, $data);
        } else {
            $this->Estoque_model->insert($data);
        }

        redirect('variacoes/index/'.$this->input->post('produto_id'));
    }
}
