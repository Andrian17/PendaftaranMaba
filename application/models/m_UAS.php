<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_UAS extends CI_Model {

	private $prodi = 'jurusan';
	private $table = 'maba';
	private $user = 'user';

	public function getAll()
	{
		# code...
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

	public function getByID($id)
	{
		return $this->db->get_where($this->table, ["id_user" => $id])->row_array();

	}

	public function updateStats($data, $id)
	{
		
		//$this->db->where($id);
		return $this->db->update($this->user ,$data, ['id_user' => $id]);

	}

	public function updateMaba($dataInput, $ID)
	{
		return $this->db->update($this->table, $dataInput, ['ID' => $ID]);
	}

	public function getConfirm($data, $id)
	{
		return $this->db->update($this->table, $data, ['id' => $id]);
	}

	public function getJurusan($prodi)
	{
		return $this->db->get($this->table, ["jurusan" => $prodi])->row_object();
	}

	public function getdetail($id)
	{
		return $this->db->get_where($this->table, ["id" => $id])->row_array();
	}


}

/* End of file m_UAS.php */
/* Location: ./application/models/m_UAS.php */

?>