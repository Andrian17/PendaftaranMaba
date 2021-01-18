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
		$cek = $this->m_login->cekLogin($user, $password);
		if ($cek->num_rows() > 0) {
			//jika sesuai maka data akan diambil
			$dataSession = [
				'id_user' => $cek_username['id_user'],
				'username' => $cek_username['username'],
				'kontak' => $cek_username['kontak'],
				'HakAkses' => $cek_username['HakAkses'],
				'status' => $cek_username['status']
			];

			$this->session->set_userdata($dataSession);
			redirect($cek_username['HakAkses'], 'refresh');
		}else{
			$this->session->set_flashdata('pesan', 'USERNAME DAN password tidak valid');
			redirect('Auth','refresh');
		}


	}

	public function daftar()
	{
		$this->load->model('m_login');

		$this->form_validation->set_rules('kontak', 'no Hp/Email', 'required|numeric');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password1', 'password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$title['judul'] = 'daftar akun';
			$this->load->view('template/header', $title);
			$this->load->view('Auth/login');
			$this->load->view('template/footer');
		} else {

			$kontak = $this->input->post('kontak', true);
			$username = $this->input->post('username', true);
			$password = md5($this->input->post('password1', true));

			$data = [
				'id_user' => null,
				'username' => $username,
				'password' => $password,
				'kontak' => $kontak,
				'HakAkses' => 'maba',
				'status' => 0
			];

			$this->m_login->adduser($data);

			$this->session->set_flashdata('notif', 'user baru ditambahkan, login disini..!!');
			redirect('Auth','refresh');
		}

		
	}


	public function logout(){

		$this->session->sess_destroy();
		redirect('Auth', 'refresh');
	}


}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */

?>