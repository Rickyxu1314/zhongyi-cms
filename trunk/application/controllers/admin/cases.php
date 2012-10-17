<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cases extends CI_Controller{
	public function __construct(){
        parent::__construct();
        $this->load->library('pagination');
    }
    /* 获取案例信息 */
    public function index(){
        $data['arr'] = $this->admin_model->GetCases();
        $config['base_url'] = 'admin/product/page/';
        $config['use_page_numbers'] = TRUE;
        $config['total_rows'] = 200;
        $config['per_page'] = 2; 

        $this->pagination->initialize($config); 
        $data['page']=$this->pagination->create_links();
        
        $this->load->view('admin/cases_view',$data);
    }
    
    /* 添加案例 */
    public function cases_add(){
        $submit = $this->input->post('submit');
        if($submit){
            $this->do_upload();
            redirect('index.php/admin/cases');
        }else{
            $query = $this->db->query('select * from cases where type="cases"');
            $msg['error'] = '';
            $msg['arr'] = $query->result_array();
            $this->load->view('admin/cases_add',$msg);
        }
    }
    
    /* 上传案例图片 */
    public function do_upload(){
        $config = array(
            'upload_path' => './uploads/cases/',
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
                'new_image' => './uploads/cases/thumbs/'
            );
            
            if($this->input->post('updata')){ /*  判断是否修改案例信息 */
                $cases_title = $this->input->post('cases_name');
                $cases_content = strip_tags($this->input->post('content'));
                $id = $this->input->post('id');
                $data = array(
                    'title' => $cases_title,
                	'content' => $cases_content,
                    'img' =>  $data['upload_data']['file_name']
                );
                $this->db->where('id',$id);
                $this->db->update('cases',$data);
            }else{
                $cases_title = $this->input->post('cases_name');
                $cases_content = strip_tags($this->input->post('editorValue'));

                $data = array(
                    'title' => $cases_title,
                	'content' => $cases_content,
                	'addtime' => date('Y-m-d H:i:s',now()),
					'type' => 'case',
                    'img' =>  $data['upload_data']['file_name']
                );
                $this->db->insert('cases', $data);
            }
            $this->load->library('image_lib',$config);
            $this->image_lib->resize();
        }
    }
    
    /* 修改案例信息 */
    public function cases_edit(){
        $submit = $this->input->post('submit');
        if($submit){
            $this->do_upload();
            redirect('index.php/admin/cases');
        }else{
            $id = $this->uri->segment(4);
            $query = $this->db->query('select * from cases where id = '.$id);
            $msg['arr'] = $query->row_array();

            $this->load->view('admin/cases_edit',$msg);
        }
    }
    
    /* 删除案例信息 */
    public function cases_delete(){
        $submit = $this->input->post('submit');
        if($this->admin_model->DelCases()){
            $this->message->ShowMsgbox('删除成功!');
        }else{
            $this->message->ShowMsgbox('删除失败!');
        }
    }
}