<?php

class Pages extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		 $this->load->library('session');
		 $this->load->model('user_model',TRUE);
	}
	public function view($page = 'home')
	{
		$user = $this->session->userdata('user');
		if (empty($user)) {
			redirect(site_url("auth/index")); 
		}
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
			{
				show_404();
			}
			$data['user'] = $this->session->userdata('user');
			$data['title'] = ucfirst($page); // Capitalize the first letter
			$this->load->view('templates/header', $data);
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer', $data);
	}
}
