<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrinho extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('Variacao_model');
    }

    public function index() {
        $data['carrinho'] = $this->cart->contents();
        $this->load->view('carrinho/index', $data);
    }

    public function adicionar($variacao_id) {
        $variacao = $this->Variacao_model->get($variacao_id);

        if($variacao) {
            $data = [
                'id' => $variacao->id,
                'qty' => 1,
                'price' => $variacao->preco_adicional,
                'name' => $variacao->nome
            ];
            $this->cart->insert($data);
        }

        redirect('carrinho');
    }

    public function atualizar() {
        $i = 1;
        foreach($this->cart->contents() as $item) {
            $this->cart->update([
                'rowid' => $item['rowid'],
                'qty' => $this->input->post('qty'.$i)
            ]);
            $i++;
        }
        redirect('carrinho');
    }

    public function remover($rowid) {
        $this->cart->update([
            'rowid' => $rowid,
            'qty' => 0
        ]);
        redirect('carrinho');
    }

    public function limpar() {
        $this->cart->destroy();
        redirect('carrinho');
    }
}
