<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MataKuliah extends CI_Controller {

	public function index()
	{
		$this->load->view('mata_kuliah');
	}
}
