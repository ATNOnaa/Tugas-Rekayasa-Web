<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Medical';
		$this->load->view('user/templates/header', $data);
		$this->load->view('user/schedule');
		$this->load->view('user/templates/footer');
	}
}