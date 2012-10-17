<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cases extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$tmp['arr'] = $this->admin_model->GetCases();
		$tmp['title'] = '工程案例';
		$this->load->view('cases_view',$tmp);
	}
}