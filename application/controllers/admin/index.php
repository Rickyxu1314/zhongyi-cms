<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		if($this->session->userdata('username')){
	   		$this->load->view('/admin/index_view');
		}else{
			echo '<title>信息提示</title>你没有权限,'.anchor('index.php/admin/login','登录').'去,或者'.anchor('index.php/admin/login/signup','注册').'去!';
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */