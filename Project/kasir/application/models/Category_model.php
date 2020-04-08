<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

    public function get($id = null){
        $this->db->from('product_category');
        if($id != null){
            $this->db->where('category_id', $id);
        }
        $query = $this->db->get();
        return $query;

    }

    public function add($post){
        $params['name'] = $post['name'];
        $this->db->insert('product_category', $params);
    }

    public function edit($post){
        $params['name'] = $post['name'];
        $this->db->where('category_id', $post['category_id']);
        $this->db->update('product_category', $params);
    }

    public function del($id){
        $this->db->where('category_id', $id);
        $this->db->delete('product_category');
    }

}