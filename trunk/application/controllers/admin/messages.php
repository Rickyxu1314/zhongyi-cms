<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Messages extends CI_Controller{
	public function __construct(){
        parent::__construct();
    }
    
    public function index(){
    	$data['arr'] = $this->admin_model->Get_Messages();
    	$this->load->view('admin/messages_view',$data);
    }
}