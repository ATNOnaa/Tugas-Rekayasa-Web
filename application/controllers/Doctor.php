<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Medical';
		$this->load->view('user/templates/header', $data);
		$this->load->view('user/doctor');
		$this->load->view('user/templates/footer');
	}

	public function billiard()
	{
		$data['title'] = 'Medical - Profile Doctor';
		$this->load->view('user/templates/header', $data);
		$this->load->view('user/doctor/doctor1');
		$this->load->view('user/templates/footer');
	}

	public function levine()
	{
		$data['title'] = 'Medical - Profile Doctor';
		$this->load->view('user/templates/header', $data);
		$this->load->view('user/doctor/doctor2');
		$this->load->view('user/templates/footer');
	}

	public function fred()
	{
		$data['title'] = 'Medical - Profile Doctor';
		$this->load->view('user/templates/header', $data);
		$this->load->view('user/doctor/doctor3');
		$this->load->view('user/templates/footer');
	}

	public function justin()
	{
		$data['title'] = 'Medical - Profile Doctor';
		$this->load->view('user/templates/header', $data);
		$this->load->view('user/doctor/doctor4');
		$this->load->view('user/templates/footer');
	}

	public function elizabeth()
	{
		$data['title'] = 'Medical - Profile Doctor';
		$this->load->view('user/templates/header', $data);
		$this->load->view('user/doctor/doctor5');
		$this->load->view('user/templates/footer');
	}

	public function susan()
	{
		$data['title'] = 'Medical - Profile Doctor';
		$this->load->view('user/templates/header', $data);
		$this->load->view('user/doctor/doctor6');
		$this->load->view('user/templates/footer');
	}

	public function elders()
	{
		$data['title'] = 'Medical - Profile Doctor';
		$this->load->view('user/templates/header', $data);
		$this->load->view('user/doctor/doctor7');
		$this->load->view('user/templates/footer');
	}

	public function mary()
	{
		$data['title'] = 'Medical - Profile Doctor';
		$this->load->view('user/templates/header', $data);
		$this->load->view('user/doctor/doctor8');
		$this->load->view('user/templates/footer');
	}
}