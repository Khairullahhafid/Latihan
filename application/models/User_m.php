<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');
class User_m extends CI_Model
{
    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('tb_pengguna');
        $this->db->where('nama_user', $post['username']);
        $this->db->where('password', sha1($post['password']));
        $query = $this->db->get();
        return $query;
    }
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_pengguna');
        if ($id != null) {
            $this->db->where('User_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function add($post)
    {
        $params['nama'] = $post['nama'];
        $params['nama_user'] = $post['nama_user'];
        $params['password'] = sha1($post['password']);
        $params['level'] = $post['level'];
        $this->db->insert('tb_pengguna',$params);
    }

    public function del($id)
    {
       $this->db->where('user_id', $id);
       $this->db->delete('tb_pengguna');
    }
}
