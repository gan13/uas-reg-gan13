<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MaMigrate extends CI_Controller {

	public function __construct()
	{
		# code...
		parent::__construct();
	}
	public function index()
	{
        $this->load->library('migration');

	if ($this->migration->curent() === FALSE);
	{
        show_error($this->migration->error_string());
    }else{
        echo "Migration Sukses Boss !";
    }

    }
}
