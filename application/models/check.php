<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Check extends CI_Model { 
	
	/* ajax检查分类是否存在 */
	public function check_type_name(){
		$typename = $this->input->post('typename');
		$q = $this->db->get('news_type');
		$row = $q->result_array();
		$mag['type'] = 'ok';
		$msg['data'] = '好';
		/*if($row['typename'] != $typename){
			$msg['type'] = 'ok';
			$msg['data'] = '此分类可以使用';
		}else{
			$msg['type'] = 'error';
			$msg['data'] = '此分类已存在,请更改';
		}*/
		exit(json_encode($msg));
	}
}