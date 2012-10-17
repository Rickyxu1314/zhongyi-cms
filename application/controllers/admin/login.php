<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	
	//显示后台登录界面
	public function index()
	{
	   	$this->load->view('/admin/login_view');
	}
	
	//管理员登录
	public function submit(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('/admin/login_view');
		}
		else
		{
			if($this->admin_model->getAdmin()){
				$data['username'] = $this->input->post('username');
				$this->session->set_userdata($data);
				redirect('index.php/admin/index');
			}else{
				$this->load->view('/admin/login_view');
			}
		}
	}
	//显示注册界面
	public function signup(){
		$data['title'] = '会员注册';
		$this->load->view('/admin/signup',$data);
	}
	
	//注册插入数据
	public function insert(){
		
		$this->form_validation->set_rules('username', 'Username', 'required|max_length[12]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'required|matches[password]');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->signup();
		}
		else
		{
			if($this->admin_model->insert()){
				redirect('index.php/admin/login');
			}else{
				$this->signup();
			}
		}
	}
	
	//注销session退出登录状态
	public function logout(){
		$this->session->unset_userdata('username');
		redirect('index.php/admin/login');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */