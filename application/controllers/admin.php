<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
			//Load Dependencies
		$this->load->model('m_UAS');
		if ( !$this->session->userdata('HakAkses') ) {
			redirect('Auth','refresh');
			
		}

	}
	

	public function index()
	{
		$data['title'] = 'HOME Admin';
		$this->load->view('template/dashHead', $data);
		$this->load->view('template/dashSidebar');
		$this->load->view('Admin/dashboard');
		$this->load->view('template/dashEnd');

		
	}

	public function Home($value='')
	{
		$data['maba'] = $this->m_UAS->getAll();
		$data['title'] = 'Daftar Mahasiswa';
		$this->load->view('template/dashHead', $data);
		$this->load->view('template/dashSidebar');
		$this->load->view('Admin/v_listMaba',$data);
		$this->load->view('template/dashEnd');

	}

	

	public function add()
	{
		$data['maba'] = $this->m_UAS->m_jurusan();
		$data['title'] = 'Tambah Mahasiswa';
		$this->load->view('template/dashHead', $data);
		$this->load->view('template/dashSidebar');
		$this->load->view('Admin/v_addMaba',$data);
		$this->load->view('template/dashEnd');

	}

	public function prosesAdd($value='')
	{
		$id_jur;

		if ($this->input->post('Jurusan') == 'D3 Sistem Informasi') {
			$id_jur = 1;
		}elseif ($this->input->post('Jurusan') == 'S1 Ilmu Komputer') {
			$id_jur = 2;
		}elseif ($this->input->post('Jurusan') == 'S1 Desain Komunikasi Visual') {
			$id_jur = 3;
		}elseif ($this->input->post('Jurusan') == 'S1 Teknologi Informasi') {
			$id_jur = 4;
		}

		$data = [
			'nama' => $this->input->post('nama'),
			'jenisKelamin' => $this->input->post('JenisKelamin'),
			'alamat' => $this->input->post('alamat'),
			'tanggal' => $this->input->post('tanggal'),
			'noHp' => $this->input->post('noHP'),
			'jurusan' => $this->input->post('Jurusan'),
			'id_jurusan' => $id_jur
		];

		$this->m_UAS->m_TambahData($data);
		redirect('admin','refresh');
	}

	public function detail($id)
	{
		$data['key'] = $this->m_UAS->getdetail($id);
		$data['title'] = 'Detail Mahasiswa';

		$this->load->view('template/dashHead', $data);
		$this->load->view('template/dashSidebar');
		$this->load->view('Admin/v_detail',$data);
		$this->load->view('template/dashEnd');

	}

	public function getByID($id)
	{
		$data = ['confirm' => 1];
		$this->m_UAS->getConfirm($data, $id);
		redirect('admin/Home','refresh');
	}

	public function prodi()
	{
		$data['title'] = 'Jurusan';
		$data['jur'] = $this->m_UAS->m_jurusan();
		$this->load->view('template/dashHead', $data);
		$this->load->view('template/dashSidebar');
		$this->load->view('Admin/v_jurusan', $data);
		$this->load->view('template/dashEnd');
	}

	public function mainProdi($value='')
	{
		//belum di pake
		$data['title'] = 'Kelola jurusan';
		$data['jur'] = $this->m_UAS->m_jurusan();
		$this->load->view('template/dashHead', $data);
		$this->load->view('template/dashSidebar');
		$this->load->view('Admin/v_edit_jurusan', $data);
		$this->load->view('template/dashEnd');
	}

	public function update( $id )
	{
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required|numeric');


		if ($this->form_validation->run() == FALSE) {
			$data['jurusan']=$this->db->get_where('jurusan', ['id'=>$id])->row_array();
			$data['title'] = 'Edit Jurusan';
			$this->load->view('template/dashHead', $data);
			$this->load->view('template/dashSidebar');
			$this->load->view('Admin/v_edit', $data);
			$this->load->view('template/dashEnd');
		} else {
			$data = [
				'jurusan' => $this->input->post('jurusan'),
				'harga' => $this->input->post('harga'),
			];
			$id = $this->input->post('id');
			$this->db->update('jurusan', $data, ['id' => $id]);
			redirect('admin/mainProdi','refresh');
		}

		
	}


	public function users()
	{
		$data['title'] = 'Edit Jurusan';
		$data['user'] = $this->db->get_where('user', ['HakAkses' => 'maba'])->result();
		$this->load->view('template/dashHead', $data);
		$this->load->view('template/dashSidebar');
		$this->load->view('Admin/v_users', $data);
		$this->load->view('template/dashEnd');
	}

	public function deleteUser( $id )
	{
		$this->db->delete('user', ['id_user' => $id]);
		$this->db->delete('maba', ['id_user' => $id]);
		redirect('admin/users','refresh');

	}

	

	public function delete( $id )
	{
		$this->m_UAS->delete($id);
		redirect('admin/Home','refresh');
	}


	public function listMabaByJur($jur)
	{
		$data['aku'] = $this->db->get_where('maba', ['id_jurusan' => $jur])->result();
		// $data['maba'] = $this->m_UAS->getAll();
		//var_dump($data['aku']);
		$data['title'] = 'Mahasiswa By Jurusan';
		$this->load->view('template/dashHead', $data);
		$this->load->view('template/dashSidebar');
		$this->load->view('Admin/v_listByJurusan', $data);
		$this->load->view('template/dashEnd');
		

	}


}

/* End of file C_home.php */
/* Location: ./application/controllers/C_home.php */


?>