<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {

 public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('file');
        $this->load->library('session');
        $this->load->library('form_validation');
	    }


	public function index()
	{
		// $this->load->view('Layout/Header.php');
		// $this->load->view('Layout/Sidebar.php');
		$this->load->view('Authentication/Login.php');
		// $this->load->view('Layout/Footer.php');
	}

	
}
