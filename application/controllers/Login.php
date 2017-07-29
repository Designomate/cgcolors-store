<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	 
	
	public function index()
	{
        if($this->session->userdata('email')) {
		redirect('dashboard');
		}
		
	   $d['v'] = 'login';
		$this->load->library('user_agent');  // load user agent library

       //Set session for the referrer url
       $this->session->set_userdata('referrer_url', $this->agent->referrer() );  
		$this->load->view('template', $d);
	}
	
	public function auth()
	{
	$this->load->model('Customer_M');
	$this->load->library('form_validation');
	$this->form_validation->set_rules('email', 'Email', 'trim|required');
	$this->form_validation->set_rules('password', 'Password', 'trim|required');
	if ($this->form_validation->run() == FALSE) {
			$d['v'] = 'login';
			$this->load->view('template', $d);
	} else {
	 if($this->Customer_M->vauth($this->input->post())) {
		$user = $this->Customer_M->userby_email($this->input->post('email')); 
	 $this->session->set_userdata(array('user_id'=>$user->id,'name'=> $user->fname,'email'=>$this->input->post('email')));
	 if( $this->session->userdata('referrer_url') ) {
    //Store in a variable so that can unset the session
    $redirect_back = $this->session->userdata('referrer_url');
    $this->session->unset_userdata('referrer_url');
	
    redirect( $redirect_back );
}

else {
	 redirect('dashboard/plans');
}
		
	 } else {
		 $this->session->set_flashdata('login_error', 'Sorry Email/Password is incorrect');

	 	$d['v'] = 'login';
		
		$this->load->view('template', $d);
	 }
							
     }
      
	}
	
	public function forget_password()
	{
		$d['v'] = 'forget-password';
		
		$this->load->view('template', $d);
	}
	
	public function resetPassword()
	{
		$d['v'] = 'forget-password';
		$this->load->helper('url');
		$email= $this->input->post('email');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('email','email','required|trim|callback_rolekey_exists[' . $email . ']');
		$this->form_validation->set_message('rolekey_exists', 'Sorry! Email is not exist');

		if ($this->form_validation->run() == FALSE)
		{
			
		$d['v'] = 'forget-password';
		$this->load->view('template', $d);
	
		}
		else
		{
						$this->load->library('email');

			$config['protocol'] = 'sendmail';
			$config['mailpath'] = '/usr/sbin/sendmail';
			$config['charset'] = 'iso-8859-1';
			$config['wordwrap'] = TRUE;
			$config['mailtype'] = 'html';


			$this->email->initialize($config);

			
			  $temp_pass = md5(uniqid());
            //send email with #temp_pass as a link
           // $this->load->library('email', array('mailtype'=>'html'));
            $this->email->from('designomate@careermarshalletters.com', "designomate");
            $this->email->to($this->input->post('email'));
            $this->email->subject("Reset your Password");

            $message = "This email has been sent as a request to reset our password";
            $message .= "<p><a href='".base_url()."login/reset_password/$temp_pass'>Click here </a>if you want to reset your password,
                        if not, then ignore</p>";
            $this->email->message($message);

            if($this->email->send()){
                $this->load->model('Customer_M');
                if($this->Customer_M->temp_reset_password($temp_pass)){
                   $this->session->set_flashdata('success', 'Please check your email');
				   $d['v'] = 'forget-password';
				   $this->load->view('template', $d);
                }
            }
            else{
				 $this->session->set_flashdata('error', 'Email was not sent, please contact your administrator');
				 $d['v'] = 'forget-password';
				 $this->load->view('template', $d);
            }
		
		}
	
	}
	
	public function reset_password($temp_pass){
		 if($this->session->userdata('email')) {
		redirect('dashboard');
		}
    $this->load->model('Customer_M');
    if($this->Customer_M->is_temp_pass_valid($temp_pass)){
		$d['v'] = 'reset-password';
		$d['temp_pass'] = $temp_pass;
		$this->load->view('template', $d);

    }else{
		  $this->session->set_flashdata('error', 'the key is not valid');
		   $d['v'] = 'forget-password';
		   $this->load->view('template', $d);
    }

}
   public function update_password($temp_pass){
	    if($this->session->userdata('email')) {
		redirect('dashboard');
		}
    $this->load->library('form_validation');
	$this->form_validation->set_rules('password', 'Password', 'required|trim');
	$this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|trim|matches[password]');
		if($this->form_validation->run()){
		  $this->load->model('Customer_M');
		  $this->Customer_M->reset_password($temp_pass);
		  $this->session->set_flashdata('success', 'Your Password is changed, Login Now');
	 	 redirect('login');
		}
	 else{
			$this->session->set_flashdata('error', 'Password is not matched');
			$d['v'] = 'reset-password';
				$d['temp_pass'] = $temp_pass;
		  $this->load->view('template', $d);

		 }
  }

		function rolekey_exists($key) {
			$this->load->model('Customer_M');
				$this->Customer_M->mail_exists($key);
				if ($this->Customer_M->mail_exists($key))
                {
                        return TRUE;   
                }
                else
                { 
			 $this->form_validation->set_message('error', 'Incorrect Email');
                      return False;   
                }
}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	
	}
		
	
		//$this->load->view('template', $d);

}
