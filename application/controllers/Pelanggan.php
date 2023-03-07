<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Pelanggan extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('costumer_m');
    }
    public function index()
    {
        $data['row'] = $this->costumer_m->get();
        $this->template->load('template','costumer/costumer_data',$data);
    }
    public function add()
    {
        $costumer = new stdClass();
        $costumer->costumer_id = null;
        $costumer->nama = null;
        $costumer->kelamin = null;
        $costumer->telp = null;
        $costumer->alamat = null;
        $data = array(
            'page'=>'add',
            'row'=>$costumer
        );
        $this->template->load('template','costumer/costumer_form',$data);
    }
    public function edit($id)
    {
        $query = $this->costumer_m->get($id);
        if($query->num_rows() > 0){
            $costumer = $query->row();
            $data = array(
                'page'=>'edit',
                'row'=>$costumer
            );
            $this->template->load('template','costumer/costumer_form',$data);
        }else{
            echo "<script>alert('Data tidak ditemukan')";
            echo "<script>window.location='" .site_url('costumer')."';</script>";
        }
    }
    public function proses()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])){
            $this->costumer_m->add($post);
            if($this->db->affected_rows() > 0 ){
                $this->session->set_flashdata('succes','Data berhasil ditambahkan');
            }
        }else if(isset($_POST['edit'])){
                $this->costumer_m->edit($post);
                if($this->db->affected_rows() > 0 ){
                    $this->session->set_flashdata('succes','Data berhasil ditambahkan');
            }
        }

        echo "<script>window.location='". site_url('costumer')."';</script>";
    }
    public function del()
    {
        $id = $this->input->post('costumer_id');
        $this->costumer_m->del($id);
        if ($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success','Data berhasil dihapus');
        }
        echo "<script>window.location='". site_url('costumer')."';</script>";
    }
}