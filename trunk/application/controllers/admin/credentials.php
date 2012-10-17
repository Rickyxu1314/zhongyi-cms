<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Credentials extends CI_Controller{
	public function __construct(){
        parent::__construct();
    }
    
    public function index(){
    	$data['arr'] = $this->admin_model->GetCredentials();
    	$this->load->view('admin/credentials_view',$data);
    }
    
	public function credentials_add(){
		$submit = $this->input->post('submit');
        if($submit){
            $this->do_upload();
            redirect('index.php/admin/credentials');
        }else{
            $query = $this->db->query('select * from cases where type="credentials"');
            $msg['error'] = '';
            $msg['arr'] = $query->result_array();
            $this->load->view('admin/credentials_add',$msg);
        }
	}
	
	/* 上传图片 */
    public function do_upload(){
        $config = array(
            'upload_path' => './uploads/credentials/',
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
                'new_image' => './uploads/credentials/thumbs/'
            );
            
            if($this->input->post('updata')){ /*  判断是否修改 */
                $credentials_title = $this->input->post('credentials_name');
                $credentials_content = strip_tags($this->input->post('content'));
                $id = $this->input->post('id');
                $data = array(
                    'title' => $credentials_title,
                	'content' => $credentials_content,
                    'img' =>  $data['upload_data']['file_name']
                );
                $this->db->where('id',$id);
                $this->db->update('cases',$data);
            }else{
                $credentials_title = $this->input->post('credentials_name');
                $credentials_content = strip_tags($this->input->post('editorValue'));

                $data = array(
                    'title' => $credentials_title,
                	'content' => $credentials_content,
                	'addtime' => date('Y-m-d H:i:s',now()),
					'type' => 'credentials',
                    'img' =>  $data['upload_data']['file_name']
                );
                $this->db->insert('cases', $data);
            }
            $this->load->library('image_lib',$config);
            $this->image_lib->resize();
        }
    }
	
	/* 修改 */
    public function credentials_edit(){
        $submit = $this->input->post('submit');
        if($submit){
            $this->do_upload();
            redirect('index.php/admin/credentials');
        }else{
            $id = $this->uri->segment(4);
            $query = $this->db->query('select * from cases where type = "credentials" and id = '.$id);
            $msg['arr'] = $query->row_array();

            $this->load->view('admin/credentials_edit',$msg);
        }
    }
    
    /* 删除 */
    public function credentials_delete(){
        $submit = $this->input->post('submit');
        if($this->admin_model->DelCredentials()){
            $this->message->ShowMsgbox('删除成功!');
        }else{
            $this->message->ShowMsgbox('删除失败!');
        }
    }
}