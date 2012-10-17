<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Products extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$tmp['arr'] = $this->admin_model->GetProduct();
		$tmp['title'] = '产品中心';
		$this->load->view('products_view',$tmp);
	}
}