<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');

class Dashboard extends CI_controller {
    public function index()
    {
        $this->template->load('template', 'user/dashboard');
    }
}