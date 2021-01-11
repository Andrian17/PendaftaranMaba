<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
			//Load Dependencies
		$this->load->model('m_UAS');
		if ( !$this->session->userdata('NamaLengkap') ) {
			redirect('Auth','refresh');
			
		}

	}
	
		// List all your items
	public function index()
	{
		$judul['title'] = 'Daftar Mahasiswa';
		$this->load->view('template/dashHead');
		$this->load->view('template/dashSidebar');
		$this->load->view('Admin/dashboard');
		$this->load->view('template/dashEnd');

		
	}

	public function Home($value='')
	{
		$data['maba'] = $this->m_UAS->getAll();
		$judul['judul'] = 'Daftar Mahasiswa';
		$this->load->view('template/dashHead');
		$this->load->view('template/dashSidebar');
		$this->load->view('Admin/v_listMaba',$data);
		$this->load->view('template/dashEnd');

	}
	

		// Add a new item
	public function add()
	{
		$data['maba'] = $this->m_UAS->m_jurusan();
		$judul['judul'] = 'Daftar Mahasiswa';
		$this->load->view('template/dashHead');
		$this->load->view('template/dashSidebar');
		$this->load->view('Admin/v_addMaba',$data);
		$this->load->view('template/dashEnd');

	}

	public function prosesAdd($value='')
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'jenisKelamin' => $this->input->post('JenisKelamin'),
			'alamat' => $this->input->post('alamat'),
			'tanggal' => $this->input->post('tanggal'),
			'noHp' => $this->input->post('noHP'),
			'jurusan' => $this->input->post('Jurusan')
		];

		$this->m_UAS->m_TambahData($data);
		redirect('admin','refresh');
	}

	public function getByID($id)
	{
		$data = ['confirm' => 1];
			$this->m_UAS->getConfirm($data, $id);
		redirect('admin/Home','refresh');
	}
	
		//Update one item
	public function update( $id = NULL )
	{

	}
	
		//Delete one item
	public function delete( $id = NULL )
	{

	}
}

/* End of file C_home.php */
/* Location: ./application/controllers/C_home.php */


?>