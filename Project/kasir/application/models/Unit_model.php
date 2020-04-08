<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class unit_model extends CI_Model {

    public function get($id = null){
        $this->db->from('product_unit');
        if($id != null){
            $this->db->where('unit_id', $id);
        }
        $query = $this->db->get();
        return $query;

    }

    public function add($post){
        $params['name'] = $post['name'];
        $this->db->insert('product_unit', $params);
    }

    public function edit($post){
        $params['name'] = $post['name'];
        $this->db->where('unit_id', $post['unit_id']);
        $this->db->update('product_unit', $params);
    }

    public function del($id){
        $this->db->where('unit_id', $id);
        $this->db->delete('product_unit');
    }

}