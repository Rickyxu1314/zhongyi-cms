<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Friend_link extends CI_Controller{
	public function __construct(){
        parent::__construct();
    }
    
    public function index(){
    	$data['arr'] = $this->admin_model->get_link();
    	$this->load->view('admin/friend_link_view',$data);
    }
    
	public function friend_link_add(){
		$submit = $this->input->post('submit');
		if($submit){
			if($this->admin_model->add_link()){
				redirect('index.php/admin/friend_link');
			}else{
				redirect('index.php/admin/friend_link/friend_link_add');
			}
		}else{
			$this->load->view('admin/friend_link_add');
		}
	}
	
	/* 修改友情链接*/
	public function friend_link_edit(){
		$submit = $this->input->post('submit');
		if($submit){
			if($this->admin_model->edit_link()){
				redirect('index.php/admin/friend_link');
			}
		}else{
			$id = $this->uri->segment(4);
			$query = $this->db->query('select * from friend_links where id = '.$id);
			$msg['arr'] = $query->row_array();

			$this->load->view('admin/friend_link_edit',$msg);
		}
	}
	
	/* 删除友情链接*/
	public function friend_link_delete(){
		if($this->admin_model->del_link()){
			$this->message->ShowMsgbox('删除成功!');
		}else{
			$this->message->ShowMsgbox('删除失败!');
		}
	}
}