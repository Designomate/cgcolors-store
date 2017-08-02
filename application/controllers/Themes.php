<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Themes extends CI_Controller {

	 public function __construct() {
        parent:: __construct();
        $this->load->helper("url");
       $this->load->model('Themes_M');
        $this->load->library("pagination");
    }
	 
	 
	public function index()
	{
		$config = array();
        $config["base_url"] = base_url() . "themes/index";
        $config["total_rows"] = $this->Themes_M->record_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = round($choice);

		 $this->pagination->initialize($config);
		 $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1;
		 $d["list"] = $this->Themes_M->fetch_allThemes($config["per_page"], $page);
		 $d["links"] = $this->pagination->create_links();
		 $d['v'] = 'themes';
		
		//$d['list'] = $this->Themes_M->allThemes();
		$this->load->view('template', $d);
	}
	
	
		public function themes_list()
	{
	 $this->load->model('Themes_M');
	 $themes=$this->Themes_M->themes_list();
	//redirect('plan-list');
	 $d['list'] = $themes;
	 $d['v'] = 'themes-list';
	$this->load->view('backtemplates', $d);
	}
	
	
	public function buynow() {
	    $theme_id = $this->input->get('p');
		$this->load->model('Themes_M');
		$this->load->model('Customer_M');
		$this->Customer_M->temp_data($this->input->get());
		$theme = $this->Themes_M->single_plan($theme_id);
		$this->session->set_userdata(array(
                            'theme'       => $theme->theme_name,
                            'theme_price'      => $theme->theme_price,
							'theme_image'      => $theme->theme_screenshot_link,
							'theme_id'          =>$theme_id,
						     'status'        => TRUE
                    ));
	
		$d['v'] = 'plans';
		redirect('themes/addons');
	}
	
	public function addons()
	{    
	    $d['v'] = 'addons';
		$this->load->model('Addons_M');
		$d['list'] = $this->Addons_M->allAddons();
		$this->load->view('template', $d);
	}
	
	public function addon_details()
	{    $this->load->model('Addons_M');
	     $addonid = $this->input->get('id');
		
		$d['addon_details']  = $this->Addons_M->single_addon($addonid);
		$d['v'] = 'addons-details';
		$this->load->model('Addons_M');
		$d['list'] = $this->Addons_M->allAddons();
		$this->load->view('template', $d);
	}
	
	public function add_continue()
	{
		$addons_items = $this->input->post('addons_items');
		$this->load->model('Customer_M');
		$this->Customer_M->temp_data($this->input->post());
		$this->load->model('Addons_M');
		
		$addons_id="";
		if(!empty($addons_items)) {
		foreach($addons_items as $addon) {
			$addons_id .= $addon.",";
			$list = $this->Addons_M->single_addon($addon);
			
			$addons_item[]= $list;
			
		}
		
		$this->session->set_userdata(array(
                            'addons'  => $addons_item,
							'addons_id' =>$addons_id 
                    ));
		}
		redirect('cart');
	}
	
	
	
}
