<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class News extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$tmp['arr'] = $this->admin_model->getnews();
		$tmp['title'] = '新闻中心';
		$this->load->view('news_view',$tmp);
	}
}