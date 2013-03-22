<?php
class User_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function find_user($name, $pass) {
		$query = $this->db->where(array('name'=>$name,'hash'=>$pass))->limit(1,0)->get('users');
		if ($query->num_rows() > 0){
			return $query->row();
		}
		else {
			return FALSE;
		}
	}

	public function create_user($user) {
		$user['hash'] = $user['hash'];
		$this->db->insert('users', $user);
        return $this->db->where('id',$this->db->insert_id())->get('users');
	}

	public function get_hash($pass) {
		return hash('sha256',$pass);
	}
}