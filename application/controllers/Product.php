<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {


public function index(){
  $this->load->view('home/base/head');
  $this->load->view('home/base/header');
  $this->load->view('products/banner');
  $this->load->view('products/breadcrumbs');
  $this->load->view('products/dresses');
  $this->load->view('home/base/newsletter');
  $this->load->view('home/base/footer');
}
  public function single_product()
  {
    $this->load->view('home/base/head');
		$this->load->view('home/base/header');
		$this->load->view('products/base/single_banner');
		$this->load->view('products/base/single_bread');
		$this->load->view('products/single');
		$this->load->view('home/base/newsletter');
		$this->load->view('home/base/footer');
  }

  public function checkout()
  {
    $this->load->view('home/base/head');
		$this->load->view('home/base/header');
		$this->load->view('products/base/checkout_banner');
		$this->load->view('products/checkout');
		$this->load->view('home/base/newsletter');
		$this->load->view('home/base/footer');
  }
}
