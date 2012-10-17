<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('pagination');
    }
    /* 获取产品信息 */
    public function index(){
        $data['arr'] = $this->admin_model->GetProduct();
        $config['base_url'] = 'admin/product/page/';
        $config['use_page_numbers'] = TRUE;
        $config['total_rows'] = 200;
        $config['per_page'] = 2; 

        $this->pagination->initialize($config); 
        $data['page']=$this->pagination->create_links();
        
        $this->load->view('admin/product_view',$data);
    }
    
    /* 添加产品 */
    public function product_add(){
        $submit = $this->input->post('submit');
        if($submit){
            $this->do_upload();
            redirect('index.php/admin/product');
        }else{
            $query = $this->db->query('select * from products');
            $msg['error'] = '';
            $msg['arr'] = $query->result_array();
            $this->load->view('admin/product_add',$msg);
        }
    }
    
    /* 上传产品图片 */
    public function do_upload(){
        $config = array(
            'upload_path' => './uploads/products/',
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
                'new_image' => './uploads/products/thumbs/'
            );
            
            if($this->input->post('update')){ /*  判断是否修改产品信息 */
                $p_name = $this->input->post('product_name');
                $type_id = $this->input->post('type');
                $p_content = strip_tags($this->input->post('editorValue'));
                $id = $this->input->post('id');
                $data = array(
                    'p_name' => $p_name,
                    'p_content' => $p_content,
                    'p_type' => $type_id,
                    'img_path' =>  $data['upload_data']['file_name']
                );
                
                $this->db->where('p_id',$id);
                $this->db->update('products',$data);
            }else{
                $product_name = $this->input->post('product_name');
                $product_type = $this->input->post('type');
                $product_content = strip_tags($this->input->post('editorValue'));

                $data = array(
                    'p_name' => $product_name,
                    'p_content' => $product_content,
                    'p_addtime' => date("Y-m-d H:i:s",now()),
                    'p_type' => $product_type,
                    'img_path' =>  $data['upload_data']['file_name']
                );
                $this->db->insert('products', $data);
            }
            $this->load->library('image_lib',$config);
            $this->image_lib->resize();
        }
    }
    
    /* 修改产品信息 */
    public function product_edit(){
        $submit = $this->input->post('submit');
        if($submit){
            $this->do_upload();
            redirect('index.php/admin/product');
        }else{
            $id = $this->uri->segment(4);
            $query = $this->db->query('select * from products where p_id = '.$id);
            $msg['arr'] = $query->row_array();

            $q = $this->db->get('products');
            $msg['row'] = $q->result_array();
            $this->load->view('admin/product_edit',$msg);
        }
    }
    
    /* 删除产品信息 */
    public function product_delete(){
        $submit = $this->input->post('submit');
        if($this->admin_model->DelProduct()){
            $this->message->ShowMsgbox('删除成功!');
        }else{
            $this->message->ShowMsgbox('删除失败!');
        }
    }
}