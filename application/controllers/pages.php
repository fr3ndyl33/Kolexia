<?php

class Pages extends CI_Controller {
	public function __construct()
	{
	    parent::__construct();
	    // Your own constructor code
	    $this->load->helper('url');
	}

	public function index(){
		$this->load->view('templates/general_layout');
	}	
}
