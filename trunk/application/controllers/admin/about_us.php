<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class About_us extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data['arr'] = $this->admin_model->get_about();
		$this->load->view('admin/about_us_view',$data);	
	}
	
	public function about_add(){
		$submit = $this->input->post('submit');
		if($submit){
			if($this->admin_model->add_about()){
				redirect('index.php/admin/about_us');
			}else{
				redirect('index.php/admin/about_us/about_us_add');
			}
		}else{
			$this->load->view('admin/about_us_add');
		}
	}
	
	/* 修改关于我们*/
	public function about_us_edit(){
		$submit = $this->input->post('submit');
		if($submit){
			if($this->admin_model->edit_about()){
				redirect('index.php/admin/about_us');
			}
		}else{
			$id = $this->uri->segment(4);
			$query = $this->db->query('select * from about_us where type = 0 and id = '.$id);
			$msg['arr'] = $query->row_array();

			$this->load->view('admin/about_us_edit',$msg);
		}
	}
}