<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Menggunakan Vendor PHPSpreadSheet

class Admin extends CI_Controller
{

	// Construct untuk memastikan ada user yang login
	public function __construct()
	{
		parent::__construct();
		// Jika tidak ada user yang berhasil login, kembalikan ke halaman login
		if (!$this->session->userdata('username')) {
			redirect('auth');
		}
		// Load Model
		$this->load->model('Admin_model');
		$this->load->model('Enkripsi_model');
		$this->load->model('Dekripsi_model');
	}

	public function index()
	{
		$data['login'] = $this->db->get_where('tbl_login', ['username' => $this->session->userdata('username')])->row_array();
		$data['judul'] = 'home';

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('template/footer');
	}

}
