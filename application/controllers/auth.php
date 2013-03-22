<?php

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	public function index()
	{
		$data['title'] = "Auth"; // Capitalize the first letter
		$data['message'] = "";
		$user = $this->session->userdata('user');
		if (!empty($user)) {
			$this->output->set_header("Location: http://google.com", TRUE, 302); 
		}
		$this->load->view('templates/header', $data);
		$this->load->view('auth/index', $data);
		$this->load->view('templates/footer', $data);
	}
	public function signup() {
		$this->form_validation->set_rules('users[name]', 'name', 'required');
		$this->form_validation->set_rules('users[hash]', 'pass', 'required');
		 if ($this->form_validation->run() !== FALSE) {
		 	$user = $this->user_model->create_user($this->input->post('users'));
		 	$newdata = array('user' => $user);
			$this->session->set_userdata($newdata);
		 	redirect('');
		 }
		$data['title'] = "Sign Up";
		$this->load->view('templates/header', $data);
		$this->load->view('auth/signup', $data);
		$this->load->view('templates/footer', $data);
	}
	public function login() 
	{
		$users = $this->input->post('users');

		$user = $this->user_model->find_user($users['name'], $users['hash']);
		if($user->name==$users['name']) {
			$newdata = array('user' => $user);
			$this->session->set_userdata($newdata);
			redirect($user);
		}
		else {
			$data['message'] = "User not found";
			redirect('not found');
		}
	}
	public function logout() {
		$this->session->sess_destroy();
		redirect('');
	}
}