<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		# code...
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('main');
	}
}
