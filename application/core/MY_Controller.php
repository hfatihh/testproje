<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct ()
	{
		parent::__construct();

		$this->langCheck();

	}
	
	public function langCheck ()
	{	
		$this->session->set_userdata('lang1','en');
		$this->session->set_userdata('lang2','english');

		$lv_lang1 = $this->session->userdata('lang1');
		$lv_lang2 = $this->session->userdata('lang2');

		if ($lv_lang1 == NULL OR $lv_lang2 == NULL)
		{
			$this->session->set_userdata('lang1','tr');
			$this->session->set_userdata('lang2','turkish');
		}

		$lv_lang1 = $this->session->userdata('lang1');
		$lv_lang2 = $this->session->userdata('lang2');

		$this->lang->load($lv_lang1,$lv_lang2);
	}

	public function if_not_logged_in ()
	{
		if (is_null($this->session->userdata('is_login'))) {
			if (!redirect(base_url('admin/home/loginForm'))) {
				exit(lang('err_not_login_false_redirect'));
			}
			
		}
	}

	public function if_is_logged_in ()
	{
		if ($this->session->userdata('is_login')) {
			if (!redirect(base_url('admin/dashboard'))) {
				exit(lang('err_false_redirect'));
			}
			
		}
	}

	public function toastr($status,$code)
	{
		if ($status == 'error') {
			$title = lang('TOASTR_ERROR_TITLE');
		}
		elseif ($status == 'info') {
			$title = lang('TOASTR_INFO_TITLE');
		}
		elseif ($status == 'warning') {
			$title = lang('TOASTR_WARNING_TITLE');
		}
		elseif ($status == 'success') {
			$title = lang('TOASTR_SUCCESS_TITLE');
		}
		$this->session->set_flashdata('toastr_code',$code);
		$this->session->set_flashdata('toastr_status',$status);
		$this->session->set_flashdata('toastr_title',$title);
		$this->session->set_flashdata('toastr_text',lang($code));
	}
}

class Public_Controller extends MY_Controller
{

	public function __construct ()
	{
		parent::__construct();
	}
	
}

class Admin_Controller extends MY_Controller
{

	public function __construct ()
	{
		parent::__construct();

		$this->if_not_logged_in();
		$this->load->model('nav_model');
	}


	public function get_nav_items()
	{
		return $this->nav_model->get_nav_items($this->session->userdata('lang1'));
	}
	
}

