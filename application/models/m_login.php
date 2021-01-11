<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	private $table = 'user';

	public function cekLogin($username, $password)
	{
		# code...
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get($this->table);
		

	}

}

/* End of file m_login.php */
/* Location: ./application/models/m_login.php */

 ?>