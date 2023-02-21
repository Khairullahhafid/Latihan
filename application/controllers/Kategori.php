<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class User extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('kategori_m');
    }
    public function index()
    {
        $data['row'] = $this->user_m->get();
        $this->template->load('template','kategori/kategori_data',$data);
    }
    public function add()
    {
        $kategori = new stdClass();
        $kategori->kategori_id = null;
        $kategori->nama = null;
        $data = array(
            'page'=>'add'
            'row'=>$kategori
        );
        $this->template->load('template','kategori/kategori_form',$data);
    }
    public function edit(id)
    {
        $query = $this->kategori_m->get($id);
        if($query->num_rows() > 0){
            $kategori = $query->row();
            $data = array(
                'page'=>'edit'
                'row'=>$kategori
            );
            $this->template->load('template','kategori/kategori_form',$data);
        }else{
            echo "<script>alert('Data tidak ditemukan')";
            echo "<script>window.location='" .site_url('kategori')."';</script>";
        }
    }
    public function proses()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])){
            $this->kategori_m->add($post);
            if($this->db->affected_rows() > 0 ){
                $this->session->set_flashdata('succes','Data berhasil ditambahkan');
            }
        }else if(isset($_POST['add'])){
                $this->kategori_m->add($post);
                if($this->db->affected_rows() > 0 ){
                    $this->session->set_flashdata('succes','Data berhasil ditambahkan');
            }
        }

        echo "<script>window.location='". site_url('kategori')."';</script>";
    }
    public function delete($id)
    {
        $this->kategori_m->del($id);
        if ($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success','Data berhasil dihapus');
        }
        echo "<script>window.location='". site_url('kategori')."';</script>";
    }


