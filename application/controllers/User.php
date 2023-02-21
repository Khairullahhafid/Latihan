<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class User extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('user_m');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['row'] = $this->user_m->get();
        $this->template->load('template','user/user_data',$data);
    }
    public function add()
    {
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('nama_user','User Nama','required|min_length[5]|is_unique[tb_pengguna.nama_user]');
        $this->form_validation->set_rules('password','Password','required|min_length[5]');
        $this->form_validation->set_rules('passkonf','Konfirmasi','required|min_length[5]|matches[password]', 
        array ('matches'=>'%s Tidak Sesuai')
    );
    $this->form_validation->set_rules('level','Level Pengguna','required');
    $this->form_validation->set_message('required', '%s Masih Kosong, silahkan diisi');
    $this->form_validation->set_message('min_lenght', '{filed} minimal 5 karakter');
    $this->form_validation->set_message('is_unique', '{filed} sudah terpakai, silahkan ganti');    

    $this->form_validation->set_error_delimiters('<span class="help-block">','</span>');

    if ($this->form_validation->run()==FALSE) {
        $this->template->load('template', 'user/user_tambah');
    } else {
        $post = $this->input->post(null, TRUE);
        $this->user_m->edit($post);
        if ($this->db->affected_rows() > 0 ){
            $this->session->set_flashdata('success', 'data berhasil disimpan');
        }
        echo "<script>window.location='" .site_url('user')."';</script>";
    }

    }
    public function del()
    {
        $id = $this->input->post('user_id');
        $this->user_m->del($id);

        if ($this->db->affected_rows() > 0 ){
            $this->session->set_flashdata('success', 'data berhasil dihapus');
        }
        echo "<script>window.location='" .site_url('user')."';</script>";
    }
    public function edit($id)
    {
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('nama_user','User Nama','required|min_length[5]|is_unique[tb_pengguna.nama_user]');
        if($this->input->post('password')){
        $this->form_validation->set_rules('password','Password','required|min_length[5]');
        $this->form_validation->set_rules('passkonf','Konfirmasi','required|min_length[5]|matches[password]', 
        array ('matches'=>'%s Tidak Sesuai')
        );
        }
        if($this->input->post('passkonf')){
        $this->form_validation->set_rules('passkonf','Konfirmasi','required|min_length[5]|matches[password]', 
        array ('matches'=>'%s Tidak Sesuai')
        );
        }
        $this->form_validation->set_rules('level','Level Pengguna','required');
        $this->form_validation->set_message('required', '%s Masih Kosong, silahkan diisi');
        $this->form_validation->set_message('min_lenght', '{filed} minimal 5 karakter');
        $this->form_validation->set_message('is_unique', '{filed} sudah terpakai, silahkan ganti');    

        $this->form_validation->set_error_delimiters('<span class="help-block">','</span>');

        if ($this->form_validation->run()==FALSE) {
            $query = $this->user_m->get($id);
            if($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template', 'user/user_edit', $data);
            } else{
                echo "<script>alert('Data tidak diteukan')";
                echo "<script>window.location='" .site_url('user')."';</script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->user_m->add($post);
            if ($this->db->affected_rows() > 0 ){
                $this->session->set_flashdata('success', 'data berhasil disimpan');
            }
            echo "<script>window.location='" .site_url('user')."';</script>";
        }
    }
}