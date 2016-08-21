<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Public_Controller 
{
 	public function __construct ()
 	{
 		parent::__construct();
 		$this->load->model('users_model');
 	}

 	public function index()
 	{
 		$this->if_is_logged_in();

 		if ($this->input->post()) {
 			
 			$data['usrnm'] = $this->input->post('username');
 			$data['psswrd'] = $this->input->post('password');
 			$this->setLogin($data);
 			
 		} // IF POSTED CONTROL

 		
 	}

 	public function setLogin($data)
 	{	
		if ($this->users_model->is_user_exist_username($data['usrnm'])) {
			if ($val = $this->users_model->login_validation($data['usrnm'])) {
				if ($val[0]['usrnm'] == $data['usrnm'] AND $val[0]['psswrd'] == md5($data['psswrd'])) {
					$this->session->set_userdata('is_login',TRUE);
					$this->session->set_userdata('user_name',$val[0]['usrnm']);
					$this->toastr('success','SCC_LOGIN_SUCCESS');
					$this->if_is_logged_in();
				}
				else {
					$this->toastr('error','ERR_LOGIN_FAILED');
					$this->if_not_logged_in();
				}
			}
		}
		else {
			$this->toastr('error','ERR_LOGIN_FAILED');
			$this->if_not_logged_in();
		}


 	}

 	public function logout()
 	{
 		$this->session->unset_userdata('is_login');
 		$this->session->unset_userdata('user_name');
 		$this->toastr('info','INF_LOGOUT');
		$this->if_is_logged_in();
 		$this->if_not_logged_in();
 	}
}