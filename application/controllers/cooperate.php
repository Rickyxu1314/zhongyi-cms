<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cooperate extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$tmp['arr'] = $this->admin_model->GetCooperate();
		$tmp['title'] = '合作机会';
		$this->load->view('cooperate_view',$tmp);
	}
}