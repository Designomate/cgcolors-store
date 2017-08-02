<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function about()
	{
		
       	$d['v'] = 'about';
		
		$this->load->view('template', $d);
	}
	
	public function contact()
	{
		
       	$d['v'] = 'contact';
		
		$this->load->view('template', $d);
	}
	
	public function answer()
	{
		
       	$d['v'] = 'faq-details';
		
		$this->load->view('template', $d);
	}
	public function works()
	{
		
       	$d['v'] = 'how-it-works';
		
		$this->load->view('template', $d);
	}
	public function faq1()
	{
		
       	$d['v'] = 'faq1';
		
		$this->load->view('template', $d);
	}
	public function faq2()
	{
		
       	$d['v'] = 'faq2';
		
		$this->load->view('template', $d);
	}
	public function faq3()
	{
		
       	$d['v'] = 'faq3';
		
		$this->load->view('template', $d);
	}
	public function faq4()
	{
		
       	$d['v'] = 'faq4';
		
		$this->load->view('template', $d);
	}
	public function faq5()
	{
		
       	$d['v'] = 'faq5';
		
		$this->load->view('template', $d);
	}
	public function faq6()
	{
		
       	$d['v'] = 'faq6';
		
		$this->load->view('template', $d);
	}
	public function faq7()
	{
		
       	$d['v'] = 'faq7';
		
		$this->load->view('template', $d);
	}
	public function faq8()
	{
		
       	$d['v'] = 'faq8';
		
		$this->load->view('template', $d);
	}
	public function faq9()
	{
		
       	$d['v'] = 'faq9';
		
		$this->load->view('template', $d);
	}
	public function faq10()
	{
		
       	$d['v'] = 'faq10';
		
		$this->load->view('template', $d);
	}
	public function faq11()
	{
		
       	$d['v'] = 'faq11';
		
		$this->load->view('template', $d);
	}
	public function faq12()
	{
		
       	$d['v'] = 'faq12';
		
		$this->load->view('template', $d);
	}
	public function faq13()
	{
		
       	$d['v'] = 'faq13';
		
		$this->load->view('template', $d);
	}
	public function faq14()
	{
		
       	$d['v'] = 'faq14';
		
		$this->load->view('template', $d);
	}
	
}
