<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Satuan extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('satuan_m');
    }
    public function index()
    {
        $data['row'] = $this->satuan_m->get();
        $this->template->load('template','satuan/satuan_data',$data);
    }
    public function add()
    {
        $satuan = new stdClass();
        $satuan->satuan_id = null;
        $satuan->nama = null;
        $data = array(
            'page'=>'add',
            'row'=>$satuan
        );
        $this->template->load('template','satuan/satuan_form',$data);
    }
    public function edit($id)
    {
        $query = $this->satuan_m->get($id);
        if($query->num_rows() > 0){
            $satuan = $query->row();
            $data = array(
                'page'=>'edit',
                'row'=>$satuan
            );
            $this->template->load('template','satuan/satuan_form',$data);
        }else{
            echo "<script>alert('Data tidak ditemukan')";
            echo "<script>window.location='" .site_url('satuan')."';</script>";
        }
    }
    public function proses()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])){
            $this->satuan_m->add($post);
            if($this->db->affected_rows() > 0 ){
                $this->session->set_flashdata('succes','Data berhasil ditambahkan');
            }
        }else if(isset($_POST['edit'])){
                $this->satuan_m->edit($post);
                if($this->db->affected_rows() > 0 ){
                    $this->session->set_flashdata('succes','Data berhasil ditambahkan');
            }
        }

        echo "<script>window.location='". site_url('satuan')."';</script>";
    }
    public function del()
    {
        $id = $this->input->post('satuan_id');
        $this->satuan_m->del($id);
        if ($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success','Data berhasil dihapus');
        }
        echo "<script>window.location='". site_url('satuan')."';</script>";
    }
}