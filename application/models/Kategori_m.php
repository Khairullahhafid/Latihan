<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');
class Kategori_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_kategori');
        if ($id != null) {
            $this->db->where('kategori_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function add($post)
    {
        $params = [
            'nama' => $post['nama'],
        ];
        $this->db->insert('tb_kategori',$params);
    }
    public function edit($post)
    {
        $params = [
            'nama' => $post['nama'],
            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('kategori_id', $post['id']);
        $this->db->update('tb_kategori', $params);
    }
    public function del($id)
    {
       $this->db->where('kategori_id', $id);
       $this->db->delete('tb_kategori');
    }
}
