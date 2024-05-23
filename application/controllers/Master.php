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
		$this->load->model('Penyakit_model');
		// Load Model
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
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/datagejala');
		$this->load->view('template/footer');
	}
	public function datapenyakit()
	{
		$data['penyakit'] = $this->Penyakit_model->getAllData();
		$data['aktif'] = 'datapenyakit';
		$data['judul'] = 'Data Penyakit';
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/datapenyakit',$data);
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
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/formtambahdatagejala');
		$this->load->view('template/footer');
	}
	public function tambahdatapenyakit()
	{
		$data['kode'] = $this->Penyakit_model->getcode();
		$data['aktif'] = 'datapenyakit';
		$data['judul'] = 'Form Tambah Data Penyakit';
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/formtambahdatapenyakit');
		$this->load->view('template/footer');
	}

	public function addpenyakit()
	{
		$kodepenyakit = $_POST['kode_penyakit'];
		$namapenyakit = $_POST['nama_penyakit'];
		$solusi = $_POST['solusi'];
		$tambahpenyakitbaru = $this->Penyakit_model->insertData($kodepenyakit, $namapenyakit, $solusi);
		if ($tambahpenyakitbaru) {
			$this->session->set_flashdata('berhasil', 'Data Penyakit '.$_POST['kode_penyakit'].' berhasil ditambahkan ke dalam database');
			redirect(base_url('datapenyakit'));
		}
	}

	public function editpenyakit($id)
	{
		$data['dataedit'] = $this->Penyakit_model->ambildata($id);
		$data['judul'] = 'Form Edit Penyakit';
		$data['aktif'] = 'datapenyakit';
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/editpenyakit',$data);
		$this->load->view('template/footer');
	}

	public function posteditpenyakit()
	{
		$cek = $this->Penyakit_model->updatedata();
		if ($cek) {
			$this->session->set_flashdata('berhasil', 'Data Penyakit '.$_POST['kode_penyakit'].' berhasil di update');
			redirect(base_url('datapenyakit'));
		}
	}

	public function hapuspenyakit($kodepenyakit)
	{
		$cek = $this->Penyakit_model->hapusdata($kodepenyakit);
		if ($cek) {
			$this->session->set_flashdata('deleted', 'berhasil dihapus');
			redirect(base_url('datapenyakit'));
		}
	}
	

}
