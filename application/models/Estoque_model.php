<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estoque_model extends CI_Model {

    public function get_by_variacao($variacao_id) {
        return $this->db->get_where('estoques', ['variacao_id' => $variacao_id])->row();
    }

    public function insert($data) {
        $this->db->insert('estoques', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id)->update('estoques', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id)->delete('estoques');
    }
}
