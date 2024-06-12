<?php defined('BASEPATH') or exit('No direct script access allowed');



class Mod_login extends CI_Model
{

	public function check($username, $password, $level)
	{
		// Fetch the user record matching the username and level
		$this->db->where('username', $username);
		$this->db->where('level', $level);
		$query = $this->db->get('users');

		if ($query->num_rows() == 1) {
			$user = $query->row_array();

			// Verify the password
			if (password_verify($password, $user['password'])) {
				// Password matches
				return $user;
			} else {
				// Password does not match
				return false;
			}
		} else {
			// User not found
			return false;
		}
	}
}

/* End of file Mod_login.php */
/* Location: ./application/models/Mod_login.php */