<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Menggunakan Vendor PHPSpreadSheet

class Master extends CI_Controller
{

	// Construct untuk memastikan ada user yang logindex()
    public function index()
	{

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
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
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/datagejala');
		$this->load->view('template/footer');
	}

}
