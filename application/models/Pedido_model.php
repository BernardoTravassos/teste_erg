<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedido_model extends CI_Model {

    public function criar($pedido, $itens) {
        // Insere pedido
        $this->db->insert('pedidos', $pedido);
        $pedido_id = $this->db->insert_id();

        // Insere itens
        foreach($itens as $item) {
            $this->db->insert('pedido_itens', [
                'pedido_id' => $pedido_id,
                'variacao_id' => $item['id'],
                'quantidade' => $item['qty'],
                'preco_unitario' => $item['price']
            ]);
        }

        return $pedido_id;
    }
}
