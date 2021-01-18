<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	private $table = 'user';

	public function cekLogin($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get($this->table);
		

	}

	public function adduser($data)
	{
		return $this->db->insert('user', $data);;
	}

}

/* End of file m_login.php */
/* Location: ./application/models/m_login.php */

 ?>