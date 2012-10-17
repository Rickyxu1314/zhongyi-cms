<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class About_us extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$tmp['arr'] = $this->admin_model->get_about_row();
		$tmp['title'] = '关于中义';
		$this->load->view('about_us_view',$tmp);
	}
}