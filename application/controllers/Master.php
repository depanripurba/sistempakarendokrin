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
		$this->load->model('Gejala_model');
	}
	public function index()
	{
		$data['aktif'] = 'home';
		$data['judul'] = 'Halaman Home';
		$this->load->view('template/header',$data);
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
		$data['judul'] = 'Data Gejala';
		$data['gejala'] = $this->Gejala_model->getAllGejala();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/datagejala',$data);
		$this->load->view('template/footer');
	}
	public function datapenyakit()
	{
		$data['aktif'] = 'datapenyakit';
		$data['judul'] = 'Data Penyakit';
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/datapenyakit');
		$this->load->view('template/footer');
	}
	public function basispengetahuan()
	{
		$data['aktif'] = 'basispengetahuan';
		$data['judul'] = 'Basis Pengetahuan';
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/basispengetahuan');
		$this->load->view('template/footer');
	}
	public function datapasien()
	{
		$data['aktif'] = 'datapasien';
		$data['judul'] = 'Data Pasien';
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/datapasien');
		$this->load->view('template/footer');
	}

	public function tambahdatagejala()
	{
		$data['aktif'] = 'datagejala';
		$data['judul'] = 'Form Tambah Data Gejala';
		// $data['kode_gejala'] = $this->Gejala_model->getNewGejala();
		
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/formtambahdatagejala');
		$this->load->view('template/footer');
	}

	public function ubahdatagejala($id)
	{
		$data['aktif'] = 'datagejala';
		$data['judul'] = 'Form Ubah Data Gejala';
		$data['selected'] = $this->Gejala_model->selectGejala($id);
		// $data['kode_gejala'] = $this->Gejala_model->getNewGejala();
		
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/formubahdatagejala',$data);
		$this->load->view('template/footer');
	}

	public function addGejala(){
		$data_to_insert = array(
			'kode_gejala' => $_POST['kode_gejala'],
			'nama_gejala' => $_POST['nama_gejala'],
		);

		$insertGejala = $this->Gejala_model->insertGejala($data_to_insert);

		if($insertGejala===null){
			redirect('/datagejala');
		}else{
			redirect('/tambahdatagejala');
		}
	}

	public function edtGejala(){
		$data_to_update=array(
			'nama_gejala' => $_POST['nama_gejala'],
		);

		$this->db->where('kode_gejala', $_POST['kode_gejala']);
		$update = $this->db->update('tbl_gejala', $data_to_update);

		if($update){
			redirect('/datagejala');
		}
	}

	public function deleteGejala($id){
		$this->Gejala_model->deleteGejala($id);
		redirect('/datagejala');
	}

	public function tambahdatapenyakit()
	{
		$data['aktif'] = 'datapenyakit';
		$data['judul'] = 'Form Tambah Data Penyakit';
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/formtambahdatapenyakit');
		$this->load->view('template/footer');
	}

}
