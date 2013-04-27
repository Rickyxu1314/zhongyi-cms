<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Honor extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$tmp['title'] = '企业荣誉';
		
		$page_config['perpage']=2;   //每页条数
		$page_config['part']=2;//当前页前后链接数量
		$page_config['url']='index.php/honor/';//url
		$page_config['seg']=2;//参数取 index.php之后的段数，默认为3，即index.php/control/function/18 这种形式
		$page_config['nowindex']=$this->uri->segment($page_config['seg']) ? $this->uri->segment($page_config['seg']):1;//当前页
		$this->load->library('mypage_class');
		$countnum=$this->admin_model->GetHonor_num();//得到记录总数
		$page_config['total']=$countnum;
		$this->mypage_class->initialize($page_config);

		$tmp['arr'] = $this->admin_model->GetHonor($page_config['perpage'],$this->uri->segment(2));
		$this->load->view('honor_view',$tmp);
	}
}