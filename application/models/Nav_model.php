<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nav_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function is_user_exist_username($user_name)
	{
		$this->db->select('usrnm');
		$this->db->where('usrnm', $user_name);
		$query = $this->db->get('pnlusr');
		
		if($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}

	}

	function login_validation($user_name)
	{
		return $this->db->select('usrnm,psswrd')
						  ->from('pnlusr')
						  ->where('usrnm',$user_name)
						  ->get()
					      ->result_array();

	}

}