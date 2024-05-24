<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Menggunakan Vendor PHPSpreadSheet

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$data['judul']='SISTEM PAKAR DIAGNOSA ENDOKRIN - HOME';
		$this->load->view('user/home',$data);
	}
	
	public function diagnosa(){
		$data['judul']='SISTEM PAKAR DIAGNOSA ENDOKRIN - DIAGNOSA';
		$this->load->view('user/diagnosa',$data);
	}
}
