<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contact_us extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$tmp['arr'] = $this->admin_model->get_contact_array();
		$tmp['title'] = '联系我们';
		$this->load->view('contact_us_view',$tmp);
	}
}