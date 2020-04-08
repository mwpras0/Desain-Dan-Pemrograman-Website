<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends CI_Controller {

    function __construct(){
        parent::__construct();
        check_not_login();
        $this->load->model(['item_model', 'stock_model']);
    }

    public function stock_in_data(){
        $data['row'] = $this->stock_model->get_stock_in()->result();
        $this->template->load('template', 'transaction/stock_in/stock_in_data', $data);

    }

    public function stock_in_add(){
        $item = $this->item_model->get()->result();
        $data = ['item' => $item];
        $this->template->load('template', 'transaction/stock_in/stock_in_form', $data);
    }

    public function process(){
        if(isset($_POST['in_add'])){
            $post = $this->input->post(null, TRUE);
            $this->stock_model->add_stock_in($post);
            $this->item_model->update_stock_in($post);

            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('success', 'Data barang masuk berhasil disimpan');
            }
            redirect('stock/in');
        }
    }

}