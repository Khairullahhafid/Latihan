<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');
class satuan_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_satuan');
        if ($id != null) {
            $this->db->where('satuan_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function add($post)
    {
        $params = [
            'nama' => $post['nama'],
        ];
        $this->db->insert('tb_satuan',$params);
    }
    public function edit($post)
    {
        $params = [
            'nama' => $post['nama'],
            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('satuan_id', $post['id']);
        $this->db->update('tb_satuan', $params);
    }
    public function del($id)
    {
       $this->db->where('satuan_id', $id);
       $this->db->delete('tb_satuan');
    }
}
