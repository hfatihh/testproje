<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller {

 	public function __construct ()
 	{
 		parent::__construct();
 	}
 	
	public function index()
	{	
		$this->lang->load('en','english');
		$data['test'] = lang('hello');
		$this->load->view('home',$data);
	}
}
