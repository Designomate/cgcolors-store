<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('getstatebyid'))
{
    function getstatebyid($id)
    {
		$ci=& get_instance();
        $ci->load->database(); 
        $ci->db->select('*');
		$ci->db->where('id',$id);
		$query = $ci->db->get('states');
		$state = ($query->row()->name);
	
		return $state;
    }  
function check_cart_addons($addons_id) {
		$ci=& get_instance();
 if(!empty($ci->session->userdata('addons'))) {

		$addons=$ci->session->userdata('addons');
		
			   foreach($addons as $addon) { 
				   if($addon->id==$addons_id) {
				   
						return true;
				   }
			   }
  }	else {
	return false;
  }
}

function get_notifications($email) {
	$ci=& get_instance();
	$ci->load->database(); 
	$ci->db->select('*');
	$ci->db->where('user',$email);
	$ci->db->where('status',0);
	$ci->db->order_by('date','desc');
	$query = $ci->db->get('users_notifications');
	$msgs = ($query->result());
	return $msgs;
}

function get_readnotifications($email) {
	$ci=& get_instance();
	$ci->load->database(); 
	$ci->db->select('*');
	$ci->db->where('user',$email);
	$ci->db->where('status',1);
	$ci->db->order_by('date','desc');
	$query = $ci->db->get('users_notifications');
	$msgs = ($query->result());
	return $msgs;
}

function get_notifications_by_id($id) {
	$ci=& get_instance();
	$ci->load->database(); 
	$ci->db->select('*');
	$ci->db->where('id',$id);
	$ci->db->order_by('date','desc');
	$query = $ci->db->get('users_notifications');
	$msgs = ($query->row());
	$ci->db->where('id',$id);
	$ci->db->update('users_notifications',array('status'=>1));  
	return $msgs;
}


function time_elapsed_string($datetime, $full = false) {
	date_default_timezone_set("Asia/Kolkata");
  $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}
}