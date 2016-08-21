<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller
{
 	public function __construct ()
 	{
 		parent::__construct();
 	}

 	public function index()
 	{
 		

		$data['base_url'] = base_url('libs');
		$data['logout'] = base_url('admin/login/logout');


		$data['toastr_code'] = $this->session->flashdata('toastr_code');
		$data['toastr_status'] = $this->session->flashdata('toastr_status');
		$data['toastr_title'] = $this->session->flashdata('toastr_title');
		$data['toastr_text'] = $this->session->flashdata('toastr_text');

		$data['sidebar'] = array('base_url' => base_url('libs'),
								 'method_name' => $this->method_name,
								 'nav_items' => $this->get_nav_items() );

 		$this->parser->parse('admin/theme/header',$data);

		$this->parser->parse('admin/theme/sidebar',$data['sidebar']);
		$this->parser->parse('admin/theme/topnavbar',$data);

		$this->load->view('admin/theme/dashboardtitle');
		$this->load->view('admin/theme/featuredboxlinks');

		$this->load->view('admin/theme/offsidebar');

		$this->load->view('admin/theme/contentfooter');
		$this->parser->parse('admin/theme/footer',$data);
 	}
}