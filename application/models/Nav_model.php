<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nav_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}


	function get_nav_items($lang)
	{
		return $this->db->select('item_id,item_text,item_link,item_lang,status')
						  ->from('navigation')
						  ->where('item_lang',$lang)
						  ->get()
					      ->result_array();

	}

}