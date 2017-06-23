<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class Tugas extends CI_Controller {

	public function __construct()
	{
		# code...
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('partials/tugas.php');
	}
}
