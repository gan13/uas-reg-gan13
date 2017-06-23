<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
	{
		# code...
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('partials/about.php');
	}
}
