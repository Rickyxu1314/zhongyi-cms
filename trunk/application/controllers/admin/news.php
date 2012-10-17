<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class News extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	//默认显示资讯内容
	public function index(){
		$data['arr'] = $this->admin_model->getnews();
		$this->load->view('admin/news_view',$data);
	}
	
	//添加资讯
	public function news_add(){
		$submit = $this->input->post('submit');
		if($submit){
			if($this->admin_model->addnews()){
				redirect('index.php/admin/news');
			}else{
				redirect('index.php/admin/news/news_add');
			}
		}else{
			$query = $this->db->query('select * from news');
			$msg['arr'] = $query->result_array();
			$this->load->view('admin/news_add',$msg);
		}
	}
	
	public function news_delete(){
		if($this->admin_model->DeleteNews()){
			$this->message->ShowMsgbox('删除成功!');
		}else{
			$this->message->ShowMsgbox('删除失败!');
		}
	}
	
        /* 修改资讯 */
	public function news_edit(){
		$submit = $this->input->post('submit');
		if($submit){
			if($this->admin_model->EditNews()){	
				redirect('index.php/admin/news');
			}
		}else{
			$id = $this->uri->segment(4);
			$query = $this->db->query('select * from news where n_id = '.$id);
			$msg['arr'] = $query->row_array();
			
			$row = $this->db->get('news');
			$msg['row'] = $row->result_array();

			$this->load->view('admin/news_edit',$msg);
		}
	}
}