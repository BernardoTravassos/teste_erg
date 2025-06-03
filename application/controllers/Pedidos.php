<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('Pedido_model');
    }

    public function finalizar() {
        if (!$this->cart->contents()) {
            redirect('carrinho');
        }

        // Dados fictícios do cliente (pode criar um form depois)
        $cliente = [
            'nome' => 'Cliente Teste',
            'email' => 'cliente@teste.com',
            'cep' => '12345-678',
            'endereco' => 'Rua Exemplo, 123'
        ];

        // Dados do pedido
        $pedido = [
            'cliente_nome' => $cliente['nome'],
            'cliente_email' => $cliente['email'],
            'cliente_cep' => $cliente['cep'],
            'cliente_endereco' => $cliente['endereco'],
            'subtotal' => $this->cart->total(),
            'frete' => 10.00, // fixo para exemplo
            'total' => $this->cart->total() + 10.00
        ];

        // Salva pedido e retorna ID
        $pedido_id = $this->Pedido_model->criar($pedido, $this->cart->contents());

        // Limpa o carrinho
        $this->cart->destroy();

        // Exibe confirmação
        $this->load->view('pedidos/confirmacao', ['pedido_id' => $pedido_id]);
    }
}
