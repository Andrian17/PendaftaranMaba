<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class UASmaba extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('m_UAS');

	}

	// List all your items
	public function index()
	{
		$data['prodi'] = $this->m_UAS->m_jurusan();
		$data['maba'] = $this->db->get_where('maba', 'id_user');
		$title['judul'] = 'Pendaftaran Mahasiswa';
		$this->load->view('template/header', $title);
		$this->load->view('template/nav');
		$this->load->view('ViewMaba/v_index', $data);
		$this->load->view('template/footnav');
		$this->load->view('template/footer');

	}
	// public function add()
	// {
	// 	$data['maba'] = $this->m_UAS->m_jurusan();
	// 	$data['id_user'] = $this->session->userdata('id_user');
	// 	$title['judul'] = 'Pendaftaran Mahasiswa';
	// 	$this->load->view('template/header', $title);
	// 	$this->load->view('template/nav');
	// 	$this->load->view('ViewMaba/v_tambahMaba', $data);
	// 	$this->load->view('template/footer');

	// }
	// public function prosesAdd(){
	// 	$data = [
	// 		'nama' => $this->input->post('nama'),
	// 		'jenisKelamin' => $this->input->post('JenisKelamin'),
	// 		'alamat' => $this->input->post('alamat'),
	// 		'tanggal' => $this->input->post('tanggal'),
	// 		'noHp' => $this->input->post('noHP'),
	// 		'jurusan' => $this->input->post('Jurusan')
	// 	];

	// 	$this->m_UAS->m_TambahData($data);
	// 	$this->session->set_flashdata('pesan', 'data Terkirim');
	// 	redirect('Auth','refresh');
	// }

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}
}

/* End of file UASmaba.php */
/* Location: ./application/controllers/UASmaba.php */


/* End of file UASmaba.php */
/* Location: ./application/controllers/UASmaba.php */

?>