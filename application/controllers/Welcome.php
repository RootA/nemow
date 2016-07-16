<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('home/base/head');
		$this->load->view('home/base/header');
		$this->load->view('home/base/banner');
		$this->load->view('home/bannerbtm');
		$this->load->view('home/bannerbtm1');
		$this->load->view('home/specialdeals');
		$this->load->view('home/newproducts');
		$this->load->view('home/topbrands');
		$this->load->view('home/base/newsletter');
		$this->load->view('home/base/footer');
	}

	public function about(){
		$this->load->view('home/base/head');
		$this->load->view('home/base/header');
		$this->load->view('home/base/about_banner');
		$this->load->view('home/base/breadcrumbs');
		$this->load->view('home/about');
		$this->load->view('home/team');
		$this->load->view('home/base/newsletter');
		$this->load->view('home/base/footer');
	}

	public function mail(){
		$this->load->view('home/base/head');
		$this->load->view('home/base/header');
		$this->load->view('mail/banner');
		$this->load->view('mail/breadcrumbs');
		$this->load->view('mail/contact');
		$this->load->view('home/base/newsletter');
		$this->load->view('home/base/footer');
	}

	public function product(){
		$this->load->view('home/base/head');
		$this->load->view('home/base/header');
		$this->load->view('products/banner');
		$this->load->view('products/breadcrumbs');
		$this->load->view('products/dresses');
		$this->load->view('home/base/newsletter');
		$this->load->view('home/base/footer');
	}
}
