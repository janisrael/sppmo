<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    public function view($page='homeView'){

  		$this->load->view('include/header');
  		$this->load->view($page);
  		$this->load->view('include/footer');
  	}

}
