<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Latihan extends CI_Model {
	private $table = 'prauts';
	private $prodi = 'jurusan';

	public function m_Tampil(){

		return $this->db->get($this->table)->result();
	}

	public function m_jurusan(){
		return $this->db->get($this->prodi)->result();
	}
	public function m_TambahData($dataInput){
		
		return $this->db->insert($this->table, $dataInput);
	}
	public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }

}

/* End of file m_Latihan.php */
/* Location: ./application/models/m_Latihan.php */