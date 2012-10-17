<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Recruitment extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$tmp['arr'] = $this->admin_model->get_recruitment_array();
		$tmp['title'] = '人才招聘';
		$this->load->view('talents_view',$tmp);
	}
}