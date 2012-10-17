<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contact_us extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data['arr'] = $this->admin_model->get_contact();
		$this->load->view('admin/contact_us_view',$data);	
	}
	
	public function contact_add(){
		$submit = $this->input->post('submit');
		if($submit){
			if($this->admin_model->add_contact()){
				redirect('index.php/admin/contact_us');
			}else{
				redirect('index.php/admin/contact_us/contact_us_add');
			}
		}else{
			$this->load->view('admin/contact_us_add');
		}
	}
	
	/* 修改联系我们 */
	public function contact_us_edit(){
		$submit = $this->input->post('submit');
		if($submit){
			if($this->admin_model->edit_contact()){
				redirect('index.php/admin/contact_us');
			}
		}else{
			$id = $this->uri->segment(4);
			$query = $this->db->query('select * from about_us where type = 1 and id = '.$id);
			$msg['arr'] = $query->row_array();

			$this->load->view('admin/contact_us_edit',$msg);
		}
	}
}