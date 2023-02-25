<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');
class Supplier_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_supplier');
        if ($id != null) {
            $this->db->where('supplier_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function add($post)
    {
        $params = [
            'nama' => $post['nama'],
            'alamat' => $post['alamat'],
            'telp' => $post['telp'],
            'deskripsi' => $post['deskripsi'],
        ];
        $this->db->insert('tb_supplier',$params);
    }
    public function edit($post)
    {
        $params = [
            'nama' => $post['nama'],
            'alamat' => $post['alamat'],
            'telp' => $post['telp'],
            'deskripsi' => $post['deskripsi'],
            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('supplier_id', $post['id']);
        $this->db->update('tb_supplier', $params);
    }
    public function del($id)
    {
       $this->db->where('supplier_id', $id);
       $this->db->delete('tb_supplier');
    }
}
