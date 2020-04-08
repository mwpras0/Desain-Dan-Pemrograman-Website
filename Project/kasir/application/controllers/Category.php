<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    function __construct(){
        parent::__construct();
        check_not_login();
        $this->load->model('category_model');
        $this->load->library('form_validation');
    }

	public function index()
	{
        $data['row'] = $this->category_model->get();
		$this->template->load('template', 'product/category/category_data', $data);
    }
    
    public function add(){
        $this->form_validation->set_rules('name', 'name', 'required|is_unique[product_category.name]',[
            'is_unique' => 'Kategori ini sudah dipakai, silahkan ganti',
        ]);
        //
        //ALL MESSAGES
        //

        $this->form_validation->set_message('required', '%s masih kosong, silahkan diisi');

        //

        if ($this->form_validation->run() == FALSE){
            $this->template->load('template', 'product/category/category_form_add');
        }else{
            $post = $this->input->post(null, TRUE);
            $this->category_model->add($post);
            if($this->db->affected_rows() > 0){
                echo "<script>
                    alert('Data berhasil disimpan');
                </script>";
            }
            echo "<script>window.location='".site_url('category')."';</script>";
        }
    }

    public function edit($id){
        $this->form_validation->set_rules('name', 'name', 'required|callback_name_check');
        //ALL MESSAGES

        $this->form_validation->set_message('required', '%s masih kosong, silahkan diisi');

        //

        if ($this->form_validation->run() == FALSE){
            $query = $this->category_model->get($id);
            if($query->num_rows() > 0){
                $data['row'] = $query->row();
                $this->template->load('template', 'product/category/category_form_edit', $data);
            }else{
                echo "<script>alert('Data tidak ditemukan');";
                echo "window.location='".site_url('category')."';</script>";
            }   
        }else{
            $post = $this->input->post(null, TRUE);
            $this->category_model->edit($post);
            if($this->db->affected_rows() > 0){
                echo "<script>
                    alert('Data berhasil disimpan');
                </script>";
            }
            echo "<script>window.location='".site_url('category')."';</script>";
        }    
    }

    function name_check(){
        $post = $this->input->post(null, TRUE);
        $query = $this->db->query("SELECT * FROM product_category WHERE name = '$post[name]' AND category_id != '$post[category_id]'");
        if($query->num_rows() > 0){
            $this->form_validation->set_message('name_check', '{field} ini sudah dipakai, silahkan ganti');
            return FALSE;
        }else{
            return TRUE;
        }
    }

    public function del(){
        $id = $this->input->post('category_id');
        $this->category_model->del($id);

        if($this->db->affected_rows() > 0){
            echo "<script>
                alert('Data berhasil dihapus');
            </script>";
        }
        echo "<script>window.location='".site_url('category')."';</script>";
    }

	
}
