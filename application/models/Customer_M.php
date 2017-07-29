<?php
Class Customer_M extends CI_Model {
	private $table='dg_users';
	 public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
		 $this->load->helper('string');
    }
	

	public function add($info) {

	/* $this->db->select('address_id');
	$query = $this->db->get_where($this->table, array("invoice_id"=>$info['id']));
	$aid = ($query->row()->address_id); */
	unset($info['c_password']);
	unset($info['submit']);

	$this->db->insert($this->table,$info);
	 $insert_id = $this->db->insert_id();
	
	return $insert_id;

	}
	
	public function vauth($info) {

	/* $this->db->select('address_id');
	$query = $this->db->get_where($this->table, array("invoice_id"=>$info['id']));
	$aid = ($query->row()->address_id); */
	$this->db->where('email',$info['email']);
	$this->db->where('password',$info['password']);
    $query = $this->db->get('dg_users');
    if ($query->num_rows() > 0){
        return true;
    }
    else{
        return false;
    }
		

	}
	
	public function temp_data($info) {

	/* $this->db->select('address_id');
	$query = $this->db->get_where($this->table, array("invoice_id"=>$info['id']));
	$aid = ($query->row()->address_id); */
	$tdata['data']=serialize($info);
	if(!empty($this->session->userdata('email'))) {
		$tdata['email']=$this->session->userdata('email');
	}
	$tdata['page_url']=current_url();
	$this->db->insert('temp_data',$tdata);
		
	return true;

	}
	
	public function temp_reset_password($temp_pass){
    $data =array('reset_pass'=>$temp_pass);
                $email = $this->input->post('email');

    if($data){
        $this->db->where('email', $email);
        $this->db->update('dg_users', $data);  
        return TRUE;
    }else{
        return FALSE;
    }

	
}
public function reset_password($temp_pass){
    $data =array('password'=>$this->input->post('password'),'reset_pass'=>'');
             
    if($data){
        $this->db->where('reset_pass', $temp_pass);
        $this->db->update('dg_users', $data);  
        return TRUE;
    }else{
        return FALSE;
    }

	
}

public function is_temp_pass_valid($temp_pass){
    $this->db->where('reset_pass', $temp_pass);
    $query = $this->db->get('dg_users');
    if($query->num_rows() == 1){
        return TRUE;
    }
    else return FALSE;
}


	public function mail_exists($key)
{
    $this->db->where('email',$key);
    $query = $this->db->get('dg_users');
    if ($query->num_rows() > 0){
        return true;
    }
    else{
        return false;
    }
}
	
	
	
	
	public function plans_list_m() {

	$this->db->select('*');
	$this->db->where('plan_type','m');
	$query = $this->db->get($this->table);
	$plans = ($query->result());
	
	return $plans;

	}
	
	public function plans_list_y() {

	$this->db->select('*');
	$this->db->where('plan_type','y');
	$query = $this->db->get($this->table);
	$plans = ($query->result());
	
	return $plans;

	}
	
	public function userby_email($email) {

	$this->db->select('*');
	$this->db->where('email',$email);
	$query = $this->db->get($this->table);
	$user = ($query->row());
	
	return $user;

	}
	
	
	
	
	
	
	
}
		
	
	