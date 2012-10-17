<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Recruitment extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
    	$data['arr'] = $this->admin_model->get_recruitment();
    	$this->load->view('admin/recruitment_view',$data);
    }
    
    public function recruitment_add(){
    	$submit = $this->input->post('submit');
		if($submit){
			if($this->admin_model->add_recruitment()){
				redirect('index.php/admin/recruitment');
			}else{
				redirect('index.php/admin/recruitment/recruitment_add');
			}
		}else{
			$this->load->view('admin/recruitment_add');
		}
    }
    
    public function recruitment_edit(){
    	$submit = $this->input->post('submit');
		if($submit){
			if($this->admin_model->edit_recruitment()){
				redirect('index.php/admin/recruitment');
			}
		}else{
			$id = $this->uri->segment(4);
			$query = $this->db->query('select * from recruitment where id = '.$id);
			$msg['arr'] = $query->row_array();

			$this->load->view('admin/recruitment_edit',$msg);
		}
    }
}