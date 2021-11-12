<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard_admin extends CI_Controller {

	public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();
		
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('templates_admin/footer');
	}
}
