<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dash extends CI_Controller {

  public function index(){
    $this->load->view('dash/base/head');
    $this->load->view('dash/signin');
    $this->load->view('dash/base/signin_footer');
  }

  public function dashboard(){
    $this->load->view('dash/base/head');
    $this->load->view('dash/base/side_nav');
    $this->load->view('dash/base/header');
    $this->load->view('dash/stats/dash_stats');
    $this->load->view('dash/stats/switch');
    $this->load->view('dash/base/dash_footer');
  }

  public function category(){
    $this->load->view('dash/base/head');
    $this->load->view('dash/base/side_nav');
    $this->load->view('dash/base/header');
    $this->load->view('dash/category');
    // $this->load->view();
      $this->load->view('dash/base/dash_footer');
  }

  public function add_product(){

  }

  public function products(){
    $this->load->view('dash/base/head');
    $this->load->view('dash/base/side_nav');
    $this->load->view('dash/base/header');
    $this->load->view('dash/products');
    $this->load->view('dash/base/dash_footer');
  }

  public function admin(){
    $this->load->view('dash/base/head');
    $this->load->view('dash/base/side_nav');
    $this->load->view('dash/base/header');
    $this->load->view('dash/admin');
    $this->load->view('dash/base/dash_footer');
  }
}
