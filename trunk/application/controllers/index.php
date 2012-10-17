<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$temp['arr'] = $this->admin_model->get_link();
		$temp['row'] = $this->admin_model->GetProduct_array();
		$temp['honor'] = $this->admin_model->GetHonor();
		$temp['row'] = $this->admin_model->GetProduct_array();
		$temp['case'] = $this->admin_model->GetCases();
	    $temp['title'] = '首页';
	    $this->load->view('index_view',$temp);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */