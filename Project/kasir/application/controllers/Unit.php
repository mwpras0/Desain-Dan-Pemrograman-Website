<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit extends CI_Controller {

    function __construct(){
        parent::__construct();
        check_not_login();
        $this->load->model('unit_model');
        $this->load->library('form_validation');
    }

	public function index()
	{
        $data['row'] = $this->unit_model->get();
		$this->template->load('template', 'product/unit/unit_data', $data);
    }
    
    public function add(){
        $this->form_validation->set_rules('name', 'name', 'required|is_unique[product_unit.name]',[
            'is_unique' => 'Kategori ini sudah dipakai, silahkan ganti',
        ]);
        //
        //ALL MESSAGES
        //

        $this->form_validation->set_message('required', '%s masih kosong, silahkan diisi');

        //

        if ($this->form_validation->run() == FALSE){
            $this->template->load('template', 'product/unit/unit_form_add');
        }else{
            $post = $this->input->post(null, TRUE);
            $this->unit_model->add($post);
            if($this->db->affected_rows() > 0){
                echo "<script>
                    alert('Data berhasil disimpan');
                </script>";
            }
            echo "<script>window.location='".site_url('unit')."';</script>";
        }
    }

    public function edit($id){
        $this->form_validation->set_rules('name', 'name', 'required|callback_name_check');
        //ALL MESSAGES

        $this->form_validation->set_message('required', '%s masih kosong, silahkan diisi');

        //

        if ($this->form_validation->run() == FALSE){
            $query = $this->unit_model->get($id);
            if($query->num_rows() > 0){
                $data['row'] = $query->row();
                $this->template->load('template', 'product/unit/unit_form_edit', $data);
            }else{
                echo "<script>alert('Data tidak ditemukan');";
                echo "window.location='".site_url('unit')."';</script>";
            }   
        }else{
            $post = $this->input->post(null, TRUE);
            $this->unit_model->edit($post);
            if($this->db->affected_rows() > 0){
                echo "<script>
                    alert('Data berhasil disimpan');
                </script>";
            }
            echo "<script>window.location='".site_url('unit')."';</script>";
        }    
    }

    function name_check(){
        $post = $this->input->post(null, TRUE);
        $query = $this->db->query("SELECT * FROM product_unit WHERE name = '$post[name]' AND unit_id != '$post[unit_id]'");
        if($query->num_rows() > 0){
            $this->form_validation->set_message('name_check', '{field} ini sudah dipakai, silahkan ganti');
            return FALSE;
        }else{
            return TRUE;
        }
    }

    public function del(){
        $id = $this->input->post('unit_id');
        $this->unit_model->del($id);

        if($this->db->affected_rows() > 0){
            echo "<script>
                alert('Data berhasil dihapus');
            </script>";
        }
        echo "<script>window.location='".site_url('unit')."';</script>";
    }

	
}
