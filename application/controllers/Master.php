<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Menggunakan Vendor PHPSpreadSheet

class Master extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// Jika tidak ada user yang berhasil login, kembalikan ke halaman login
		if (!$this->session->userdata('username')) {
			redirect('auth');
		}
		// Load Model
	}
	public function index()
	{
		$data['aktif'] = 'home';
		$this->load->view('template/header');
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/dashboard');
		$this->load->view('template/footer');
		// }
	}

	public function login()
	{
		$this->load->view('admin/login');
	}

	public function datagejala()
	{
		$data['aktif'] = 'datagejala';
		$this->load->view('template/header');
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/datagejala');
		$this->load->view('template/footer');
	}
}
