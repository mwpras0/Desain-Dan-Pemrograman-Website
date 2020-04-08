<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

    function __construct(){
        parent::__construct();
        check_not_login();
        $this->load->model(['item_model', 'category_model', 'unit_model']);
    }

	public function index()
	{
        $data['row'] = $this->item_model->get();
		$this->template->load('template', 'product/item/item_data', $data);
    }
    
    public function add(){
        $item = new stdClass();
        $item->item_id = null;
        $item->barcode = null;
        $item->name = null;
        $item->price = null;
        $item->category_id = null;
        $item->unit_id = null;

        $query_category = $this->category_model->get();
        $query_unit = $this->unit_model->get();

        $data = array(
            'page' => 'add',
            'row' => $item,
            'category' => $query_category,
            'unit' => $query_unit,
        );
        $this->template->load('template', 'product/item/item_form', $data);
    }

    public function edit($id){
        $query = $this->item_model->get($id);
        
        if($query->num_rows() > 0){
            $item = $query->row();

            $query_category = $this->category_model->get();
            $query_unit = $this->unit_model->get();

            $data = array(
                'page' => 'edit',
                'row' => $item,
                'category' => $query_category,
                'unit' => $query_unit,
            );
            $this->template->load('template', 'product/item/item_form', $data);
        }else{
            echo "<script>alert('Data tidak ditemukan');";
            echo "window.location='".site_url('item')."';</script>";
        }
    }

    public function process(){
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])){
            if($this->item_model->check_barcode($post['barcode'])->num_rows() > 0){
                $this->session->set_flashdata('error', "Barcode $post[barcode] sudah dipakai");
                redirect('item/add');
            }
            $this->item_model->add($post);
        }else if(isset($_POST['edit'])){
            if($this->item_model->check_barcode($post['barcode'], $post['id'])->num_rows() > 0){
                $this->session->set_flashdata('error', "Barcode $post[barcode] sudah dipakai");
                redirect('item/edit/'.$post['id']);
            }else{
                $this->item_model->edit($post);
            }
        }

        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('item');
    }
    

    public function del($id){
        $this->item_model->del($id);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
        }
        redirect('item');
    }

    public function barcode_print(){
        
        $this->fungsi->PdfGenerator('coba', 'coba', 'A4', 'potrait');
    }

	
}
