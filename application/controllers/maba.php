<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Maba extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (null==$this->session->HakAkses) {
			redirect('auth');
		}elseif ($this->session->HakAkses != 'maba') {
			redirect('auth/logout');
		}
		$this->load->model('m_UAS');
		// else{
		// 	if ($this->session->level!="operator") {
		// 		redirect('auth','refresh');
		// 	}
		// }
	}

	

	public function index()
	{
		$title['judul'] = 'Pendaftaran Mahasiswa';
		$id = $this->session->userdata('id_user');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['username'] = $this->session->userdata('username');
		$data['prodi'] = $this->m_UAS->m_jurusan();
		
		$data['key'] = $this->m_UAS->getById($id);

		$cek_user = $this->db->get_where('user', ['id_user' =>$id])->row_array();
		if ($cek_user['status'] == 0 ) {
			redirect('maba/add','refresh');
			//var_dump($cek_user['status']);
		}else{
			$this->load->view('template/header', $title);
			$this->load->view('template/nav');
			$this->load->view('maba/indexmaba', $data);
			$this->load->view('template/footer');
		}

		
		// var_dump($data['username']);
	}

	public function add()
	{
		$id = $this->session->userdata('id_user');
		$cek_user = $this->db->get_where('user', ['id_user' =>$id])->row_array();
		if ($cek_user['status'] == 0 ) {
			$data['maba'] = $this->m_UAS->m_jurusan();
			$data['id_user'] = $this->session->userdata('id_user');
			$title['judul'] = 'Pendaftaran Mahasiswa';
			$this->load->view('template/header', $title);
			$this->load->view('template/nav');
			$this->load->view('ViewMaba/v_tambahMaba', $data);
			$this->load->view('template/footer');
		}else{
			redirect('maba','refresh');
		}
		
		// var_dump($data['id_user']);
	}

	public function prosesAdd(){
		$data = [
			'id_user' => $this->input->post('id_user'),
			'nama' => $this->input->post('nama'),
			'jenisKelamin' => $this->input->post('JenisKelamin'),
			'alamat' => $this->input->post('alamat'),
			'tanggal' => $this->input->post('tanggal'),
			'noHp' => $this->input->post('noHP'),
			'jurusan' => $this->input->post('Jurusan')
		];
		$stats = [
			'status' => 1];

			$id = $this->input->post('id_user');


			$this->m_UAS->m_TambahData($data);
			$this->m_UAS->updateStats($stats, $id);
			redirect('maba/index','refresh');
		}

		public function daftar()
		{

			$this->load->view('maba', $data);
		}

		public function edit()
		{
			$id = $this->input->post('id');
			$data = [
				'id' => $this->input->post('id'),
				'nama' => $this->input->post('nama'),
				'jenisKelamin' => $this->input->post('JenisKelamin'),
				'alamat' => $this->input->post('alamat'),
				'tanggal' => $this->input->post('tanggal'),
				'noHp' => $this->input->post('noHP'),
				'jurusan' => $this->input->post('Jurusan')
			];
			//var_dump($data);
			$this->m_UAS->updateMaba($data, $id);
			redirect('maba','refresh');

		}

	}

	/* End of file maba.php */
	/* Location: ./application/controllers/maba.php */

	?>