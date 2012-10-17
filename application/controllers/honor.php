<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Honor extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$tmp['arr'] = $this->admin_model->GetHonor();
		$tmp['title'] = '企业荣誉';
		$this->load->view('honor_view',$tmp);
	}
}