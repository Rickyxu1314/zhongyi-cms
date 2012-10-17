<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cooperate extends CI_Controller{
	public function __construct(){
        parent::__construct();
    }
    
    public function index(){
    	$data['arr'] = $this->admin_model->GetCooperate();
    	$this->load->view('admin/cooperate_view',$data);
    }
    
	public function cooperate_add(){
		$submit = $this->input->post('submit');
        if($submit){
            $this->do_upload();
            //$this->do_upload_small();
            redirect('index.php/admin/cooperate');
        }else{
            $query = $this->db->query('select * from cases where type="cooperate"');
            $msg['error'] = '';
            $msg['arr'] = $query->result_array();
            $this->load->view('admin/cooperate_add',$msg);
        }
	}
	
	/* 上传大图片 */
    public function do_upload(){
        $config = array(
            'upload_path' => './uploads/cooperate/',
            'allowed_types' =>  'doc|png|gif|jpg',
            'file_name' => date("YmdHis"),
            'max_size' => 2048
        );
                
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload())
        {
            $error = array('error' => $this->upload->display_errors());
        }
        else
        {
            $data['upload_data'] = $this->upload->data();
            
            $config = array(
                'width' => 150,
                'height' => 100,
                'maintain_ration' => TRUE,
                'source_image' => $data['upload_data']['full_path'],
                'new_image' => './uploads/cooperate/thumbs/',
            );
            
            if($this->input->post('updata')){ /*  判断是否修改 */
                $cooperate_title = $this->input->post('cooperate_name');
                $cooperate_content = strip_tags($this->input->post('content'));
                $id = $this->input->post('id');
                $data = array(
                    'title' => $cooperate_title,
                	'content' => $cooperate_content,
                    'img' =>  $data['upload_data']['file_name']
                );
                $this->db->where('id',$id);
                $this->db->update('cases',$data);
            }else{
                $cooperate_title = $this->input->post('cooperate_name');
                $cooperate_content = strip_tags($this->input->post('editorValue'));

                $data = array(
                    'title' => $cooperate_title,
                	'content' => $cooperate_content,
                	'addtime' => date('Y-m-d H:i:s',now()),
					'type' => 'cooperate',
                    'img' =>  $data['upload_data']['file_name']
                );
                $this->db->insert('cases', $data);
            }
            $this->load->library('image_lib',$config);
            $this->image_lib->resize();
        }
    }
    
	/* 上传小图片 */
    public function do_upload_small(){
        if ( ! $this->upload->do_upload_small())
        {
            $error = array('error' => $this->upload->display_errors());
        }
        else
        {
            $data['upload_data'] = $this->upload->data();
            $config = array(
                'width' => 100,
                'height' => 100,
                'maintain_ration' => TRUE,
                'source_image' => $data['upload_data']['full_path'],
                'new_image' => './uploads/cooperate/small_pic/',
            );
            $this->load->library('image_lib',$config);
            $this->image_lib->resize();
        }
    }
	
	/* 修改 */
    public function cooperate_edit(){
        $submit = $this->input->post('submit');
        if($submit){
            $this->do_upload();
            //$this->do_upload_small();
            redirect('index.php/admin/cooperate');
        }else{
            $id = $this->uri->segment(4);
            $query = $this->db->query('select * from cases where type = "cooperate" and id = '.$id);
            $msg['arr'] = $query->row_array();

            $this->load->view('admin/cooperate_edit',$msg);
        }
    }
    
    /* 删除 */
    public function cooperate_delete(){
        $submit = $this->input->post('submit');
        if($this->admin_model->DelCcooperate()){
            $this->message->ShowMsgbox('删除成功!');
        }else{
            $this->message->ShowMsgbox('删除失败!');
        }
    }
}