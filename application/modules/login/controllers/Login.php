<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use RandomLib\Factory;
class Login extends MY_Controller{
  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function index()
  {
    $data['main_content']="signin";
    $this->load->view('dashboard', $data);
  }

}
