<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$title['judul'] = 'Login';
		$this->load->view('template/header', $title);
		$this->load->view('Auth/login');
		$this->load->view('template/footer');
	}

	public function prosesLogin(){
		$this->load->model('m_login');
		$user = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$cek_username = $this->db->get_where('user', ['username' => $user])->row_array();

		if ($user == 'admin') {
			$direct = 'admin';
		}else{
			$direct = 'maba';
		}

		$cek = $this->m_login->cekLogin($user, $password);

		if ($cek->num_rows() > 0) {
			//jika sesuai maka data akan diambil
			$isi = $cek->row_object();
			$dataSession = [
				'id_user' => $cek_username['id_user'],
				'username' => $cek_username['username'],
				'NamaLengkap' => $cek_username['NamaLengkap'],
				'HakAkses' => $cek_username['HakAkses'],
				'status' => $cek_username['status']
			];

			$this->session->set_userdata($dataSession);
			redirect($direct, 'refresh');
		}else{
			$this->session->set_flashdata('pesan', 'USERNAME DAN password tidak valid');
			redirect('Auth','refresh');
		}


	}

	public function daftar()
	{
		$title['judul'] = 'daftar akun';
		$this->load->view('template/header', $title);
		$this->load->view('Auth/daftar');
		$this->load->view('template/footer');
	}

	public function prosesDaftar()
	{
		$pass = md5($this->input->post('password'));

		$data = [
			'id_user' => null,
			'username' => $this->input->post('username'),
			'password' => $pass,
			'NamaLengkap' => $this->input->post('namalengkap'),
			'HakAkses' => 'maba',
			'status' => 0

		];

		$this->db->insert('user', $data);
		redirect('Auth','refresh');

	}

	// public function direct(){

	// 	$this->load->model('m_UAS');

	// 	$data['maba'] = $this->m_UAS->m_jurusan();
	// 	$data['id_user'] = $this->session->userdata('id_user');
	// 	$title['judul'] = 'Pendaftaran Mahasiswa';
	// 	$this->load->view('template/header', $title);
	// 	$this->load->view('template/nav');
	// 	$this->load->view('ViewMaba/v_tambahMaba', $data);
	// 	$this->load->view('template/footer');
	// 	redirect('maba','refresh');
	// }

	public function logout(){
		$this->session->sess_destroy();
		redirect('Auth', 'refresh');
	}


}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */

?>