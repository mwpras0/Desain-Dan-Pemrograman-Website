<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item_model extends CI_Model {

    public function get($id = null){
        $this->db->select('product_item.*, product_category.name as category_name, product_unit.name as unit_name');
        $this->db->from('product_item');
        $this->db->join('product_category', 'product_category.category_id = product_item.category_id');
        $this->db->join('product_unit', 'product_unit.unit_id = product_item.unit_id');
        if($id != null){
            $this->db->where('item_id', $id);
        }
        $query = $this->db->get();
        return $query;

    }

    public function add($post){
        $params = [
            'barcode' => $post['barcode'],
            'name' => $post['item_name'],
            'category_id' => $post['category'],
            'unit_id' => $post['unit'],
            'price' => $post['price'],
        ];
        $this->db->insert('product_item', $params);
    }

    public function edit($post){
        $params = [
            'barcode' => $post['barcode'],
            'name' => $post['item_name'],
            'category_id' => $post['category'],
            'unit_id' => $post['unit'],
            'price' => $post['price'],
            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('item_id', $post['id']);
        $this->db->update('product_item', $params);
    }

    public function check_barcode($code, $id = null){
        $this->db->from('product_item');
        $this->db->where('barcode', $code);
        if($id != null){
            $this->db->where('item_id !=', $id);
        }
        $query= $this->db->get();
        return $query;
    }

    public function del($id){
        $this->db->where('item_id', $id);
        $this->db->delete('product_item');
    }

    public function update_stock_in($data){
        $qty = $data['qty'];
        $id = $data['item_id'];
        $sql = "UPDATE product_item SET stock = stock + '$qty' WHERE item_id = '$id'";
        $this->db->query($sql);
    }

}