<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Credentials extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$tmp['arr'] = $this->admin_model->GetCredentials();
		$tmp['title'] = '资质认证';
		$this->load->view('credentials_view',$tmp);
	}
}