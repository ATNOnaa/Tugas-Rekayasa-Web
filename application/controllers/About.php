<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Medical';
		$this->load->view('user/templates/header', $data);
		$this->load->view('user/about');
		$this->load->view('user/templates/footer');
	}
}