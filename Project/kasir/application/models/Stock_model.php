<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock_model extends CI_Model {

    public function get_stock_in(){
        $this->db->select('transaction_stock.stock_id, product_item.barcode, product_item.name as item_name, qty, date, detail, product_item.item_id');
        $this->db->from('transaction_stock');
        $this->db->join('product_item', 'transaction_stock.item_id = product_item.item_id');
        $this->db->where('type', 'in');
        $query = $this->db->get();
        return $query;
    }

    public function add_stock_in($post){
        $params =[
            'item_id' => $post['item_id'],
            'type' => 'in',
            'detail' => $post['detail'],
            'qty' => $post['qty'],
            'date' => $post['date'],
            'user_id' => $this->session->userdata('userid'),
        ];
        $this->db->insert('transaction_stock', $params);
    }
}