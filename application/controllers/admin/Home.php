<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller {

 	public function __construct ()
 	{
 		parent::__construct();
 	}
 	
	public function index()
	{	
		$this->if_not_logged_in();

		if (!redirect(base_url('admin/dashboard'))) {
			exit(lang('err_false_redirect'));
		}
		
	}


	public function loginForm()
	{
		$this->if_is_logged_in();

		$data['base_url'] = base_url('libs');

		$data['required_js'] = array(

									array(
										'req_js' => '/vendor/jquery-validation/jquery.validate.min.js',
										'base_url' => base_url('libs')
										 )

									);
		$data['init_js'] = array(

									array(
										'in_js' => 'Login'
										 )

									);

		$data['toastr_code'] = $this->session->flashdata('toastr_code');
		$data['toastr_status'] = $this->session->flashdata('toastr_status');
		$data['toastr_title'] = $this->session->flashdata('toastr_title');
		$data['toastr_text'] = $this->session->flashdata('toastr_text');

		$data['event_handlers'] = array(

									array(
										'event_handler' => '/assets/js/login.js',
										'base_url' => base_url('libs')
										 )

									);

		$data['login_page'] = array(
									'base_url' => base_url('libs'),
									'panel_owner' => lang('panel_owner'), 
									'login_page_ph_username' => lang('login_page_ph_username'), 
									'login_page_ph_password' => lang('login_page_ph_password'), 
									'login_page_msg_1' => lang('login_page_msg_1'), 
									'login_page_msg_2' => lang('login_page_msg_2'), 
									'login_page_forgot' => lang('login_page_forgot'), 
									'login_page_remember' => lang('login_page_remember'), 
									'login_page_submit' => lang('login_page_submit'), 
									'login_page_footer' => lang('login_page_footer')
									);

		$this->parser->parse('admin/theme/header',$data);

		$this->parser->parse('admin/login',$data['login_page']);

		$this->parser->parse('admin/theme/footer',$data);
	}
}
