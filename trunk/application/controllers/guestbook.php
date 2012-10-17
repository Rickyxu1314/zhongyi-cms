<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Guestbook extends CI_Controller{
	public function __construct(){
		parent::__construct();
		//$this->load->model('messages_model');
	}
	
	public function index(){
		$tmp['title'] = '给我留言';
		$this->load->view('guestbook_view',$tmp);
	}
	
	public function msg_add(){
		$submit = $this->input->post('submit');
		if($submit){
			if($this->messages_model->msg_add()){
				$this->message->ShowMsgbox('留言成功!');
				redirect('index.php/guestbook');
			}else{
				$this->message->ShowMsgbox('留言失败!');
			}
		}else{
			$this->load->view('guestbook_view');
		}
	}
	
	public function yzm()
	{
	  $conf['name']='yzm'; //作为配置参数
	  $this->load->library('captcha_code',$conf);
	  $this->captcha_code->show();
	  $yzm_session=$this->session->userdata('yzm');//将验证码放在了缓存中
	}
}