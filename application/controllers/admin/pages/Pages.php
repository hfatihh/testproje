<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends Admin_Controller {

 	public function __construct ()
 	{
 		parent::__construct();
 	}
 	
	public function index()
	{	
		echo "Pages";
	}
}
