<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$data['title']= 'PetFriend';
		$this->load->view('home/header',$data);
		$this->load->view('home/home');
		$this->load->view('home/footer');
	}
}