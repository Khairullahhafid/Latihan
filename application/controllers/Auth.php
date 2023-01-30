<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');

class Auth extends CI_controller {
    public function login()
    {
        check_already_login();
        $this->load->view('user/login');
    }
    public function proses()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['login'])) {
            $this->load->model('user_m');
            $query = $this->user_m->login($post);
            if($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'user_id' => $row->user_id,
                    'level' => $row->level
                );
                $this->session->set_userdata($params);
                echo "<script>
                alert('Login Berhasil');
                window.location='".site_url('dashboard')."';
                </script>";
            }else {
                echo "<script>
                alert('Login Gagal');
                window.location='".site_url('auth/login')."';
                </script>";
            }
        }
    }
    public function logout()
    {$params = array('user_id','level');
    $this->session->unset_userdata($params);
redirect('auth/login');
}
}