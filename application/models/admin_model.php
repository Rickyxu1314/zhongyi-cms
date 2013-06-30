<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model {
	/*登录后台*/
	public function getAdmin()
	{
		$this->db->where('username',$this->input->post('username'));
		$this->db->where('password',md5($this->input->post('password')));
		
		$q = $this->db->get('admin');
		if($q->num_rows()==1){
			return $q->row();
		}
	}
	/* 注册 */
	public function insert(){
		$data['username'] = $this->input->post('username');
		$data['password'] = md5($this->input->post('password'));
		$data['password2'] = md5($this->input->post('password2'));
		
		return $this->db->Insert('admin',$data);
	}
	/* 添加资讯 */
	public function addnews(){
		$this->db->select('n_id, n_title, n_content');
		$query = $this->db->get('news');
		$row = $query->result();
		
		$data['n_title'] = $this->input->post('title');
		$data['n_content'] = strip_tags($this->input->post('content'));
		if($row['n_id'] > 0){
			$data['parent_id'] = $row['n_id'];
		}
		$data['n_type'] = $this->input->post('type');
		$data['n_addtime'] = date("Y-m-d H:i:s",now());
		
		return $this->db->Insert('news',$data);
	}

	/* 获取资讯内容 */
	public function getnews(){
		$query = $this->db->get('news');
		return $query->result();
	}
	
	/* 获取类别产品 */
	public function GetTypeProducts($type){
		$this->db->where('p_type',$type);
		$query = $this->db->get('products');
		return $query->result();
	}
	
	/* 删除资讯内容 */
	public function DeleteNews(){
		$id = $this->uri->segment(4);
		return $this->db->delete('news', array('n_id' => $id));
	}
	/* 修改资讯内容 */
	public function EditNews(){
		$title = $this->input->post('title');
		$content = strip_tags($this->input->post('editorValue'));
		$typeid = $this->input->post('type');
		$ids = $this->input->post('ids');
		$data = array(
			'n_title' => $title,
			'n_content' => $content,
			'n_type' => $typeid
		);
		$this->db->where('n_id', $ids);
		return $this->db->update('news',$data);
	}
	
	/* 获取产品信息 */
    public function GetProduct(){
        $q = $this->db->get('products');
        return $q->result();
    }
    
	public function GetProduct_array(){
        $q = $this->db->get('products');
        return $q->row_array();
    }
        
    /*  删除产品信息 */
    public function DelProduct(){
       $id = $this->uri->segment(4);
        return $this->db->delete('products', array('p_id' => $id));
    }
    
	/* 添加关于中义*/
	public function add_about(){
		$data['content'] = $this->input->post('content');
		$data['addtime'] = date("Y-m-d H:i:s",now());
		$data['type'] = 0;
		
		return $this->db->Insert('about_us',$data);
	}
	
	/* 获取关于中义 */
	public function get_about(){
		$this->db->select('id, content, type');
		$this->db->where('type',0);
		$query = $this->db->get('about_us');
		return $query->result();
	}
	
	public function get_about_row(){
		$this->db->select('id, content, type');
		$this->db->where('type',0);
		$query = $this->db->get('about_us');
		return $query->row_array();
	}
	
	/* 修改关于中义*/
	public function edit_about(){
		
		$content = $this->input->post('editorValue');
		$id = $this->input->post('id');
		
		$data = array(
			'content' => $content,
		);
		$this->db->where(array('id'=> $id,'type' => 0));
		return $this->db->update('about_us',$data);
	}
	
	
	
	/* 添加联系我们*/
	public function add_contact(){
		$data['content'] = $this->input->post('content');
		$data['addtime'] = date("Y-m-d H:i:s",now());
		$data['type'] = 1;
		
		return $this->db->Insert('about_us',$data);
	}
	
	/* 获取联系我们 */
	public function get_contact(){
		$this->db->select('id, content, type');
		$this->db->where('type',1);
		$query = $this->db->get('about_us');
		return $query->result();
	}
	
	public function get_contact_array(){
		$this->db->select('id, content, type');
		$this->db->where('type',1);
		$query = $this->db->get('about_us');
		return $query->row_array();
	}
	
	/* 修改联系我们*/
	public function edit_contact(){
		
		$content = $this->input->post('editorValue');
		$id = $this->input->post('id');
		
		$data = array(
			'content' => $content,
		);
		$this->db->where(array('id'=> $id,'type' => 1));
		return $this->db->update('about_us',$data);
	}
	
	
	/* 获取案例 */
    public function GetCases(){
		//$this->db->select('title, img, content, type, addtime');
		$this->db->where('type','case');
        $q = $this->db->get('cases');
        return $q->result();
    }
        
    /*  删除案例 */
    public function DelCases(){
       $id = $this->uri->segment(4);
        return $this->db->delete('cases', array('id' => $id));
    }
	
	/* 获取荣誉证书 */
    public function GetHonor($num="", $offset=""){
		$this->db->where('type','honor');
		$query = $this->db->get('cases', $num, $offset); 
		return $query->result();
    }

	/* 获取总条数 */
	public function GetHonor_num(){
		$this->db->where('type','honor');
        $q = $this->db->get('cases');
        return $q->num_rows();
    }

        
    /*  删除荣誉证书 */
    public function DelHonor(){
       $id = $this->uri->segment(4);
        return $this->db->delete('cases', array('id' => $id));
    }
    
	/* 获取资质认证*/
    public function GetCredentials($limit, $offset){
		$this->db->limit($limit, $offset);
		$this->db->where('type','credentials');
        $q = $this->db->get('cases');
        return $q->result();
    }
    
    /* 获取总条数 */
	public function GetCredentials_num(){
		$this->db->where('type','credentials');
        $q = $this->db->get('cases');
        return $q->num_rows();
    }
        
    /*  删除资质认证 */
    public function DelCredentials(){
       	$id = $this->uri->segment(4);
        return $this->db->delete('cases', array('id' => $id));
    }
    
	/* 获取品牌合作*/
    public function GetCooperate(){
		$this->db->where('type','cooperate');
        $q = $this->db->get('cases');
        return $q->result();
    }
        
    /*  删除品牌合作 */
    public function DelCcooperate(){
       	$id = $this->uri->segment(4);
        return $this->db->delete('cases', array('id' => $id));
    }
    
    /* 获取留言信息 */
    public function Get_Messages(){
    	$q = $this->db->get('messages');
    	return $q->result();
    }
    
    
	/* 添加招聘信息*/
	public function add_recruitment(){
		$data['content'] = $this->input->post('content');
		$data['addtime'] = date("Y-m-d H:i:s",now());
		
		return $this->db->Insert('recruitment',$data);
	}
	
	/* 获取招聘信息*/
	public function get_recruitment(){
		$this->db->select('id, content, addtime');
		$query = $this->db->get('recruitment');
		return $query->result();
	}
	
	public function get_recruitment_array(){
		$this->db->select('id, content, addtime');
		$query = $this->db->get('recruitment');
		return $query->row_array();
	}
	
	/* 修改招聘信息*/
	public function edit_recruitment(){
		$content = $this->input->post('editorValue');
		$id = $this->input->post('id');
		
		$data = array(
			'content' => $content,
		);
		$this->db->where(array('id'=> $id));
		return $this->db->update('recruitment',$data);
	}
	
	
	/* 添加友情链接*/
	public function add_link(){
		$data['link_name'] = $this->input->post('link_name');
		$data['url'] = $this->input->post('url');
		$data['addtime'] = date("Y-m-d H:i:s",now());
		
		return $this->db->Insert('friend_links',$data);
	}
	
	/* 获取友情链接*/
	public function get_link(){
		$query = $this->db->get('friend_links');
		return $query->result();
	}
	
	/* 修改友情链接*/
	public function edit_link(){
		$link_name = $this->input->post('link_name');
		$url = $this->input->post('url');
		$id = $this->input->post('id');
		
		$data = array(
			'link_name' => $link_name,
			'url' => $url
		);
		$this->db->where(array('id'=> $id));
		return $this->db->update('friend_links',$data);
	}
	
	/* 删除友情链接*/
	public function del_link(){
		$id = $this->uri->segment(4);
		
		return $this->db->delete('friend_links',array('id'=> $id));
	}
}














