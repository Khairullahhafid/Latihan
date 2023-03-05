<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');
class Costumer_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_costumer');
        if ($id != null) {
            $this->db->where('costumer_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function add($post)
    {
        $params = [
            'nama' => $post['nama'],
            'kelamin' => $post['kelamin'],
            'telp' => $post['telp'],
            'alamat' => $post['alamat'],
        ];
        $this->db->insert('tb_costumer',$params);
    }
    public function edit($post)
    {
        $params = [
            'nama' => $post['nama'],
            'kelamin' => $post['kelamin'],
            'telp' => $post['telp'],
            'alamat' => $post['alamat'],
            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('costumer_id', $post['id']);
        $this->db->update('tb_costumer', $params);
    }
    public function del($id)
    {
       $this->db->where('costumer_id', $id);
       $this->db->delete('tb_costumer');
    }
}
