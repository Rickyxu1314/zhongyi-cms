<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Messages_model extends CI_Model {

	public function msg_add(){
		$nickname = $this->input->post('nickname');
		$sex = $this->input->post('sex');
		$company = $this->input->post('company');
		$contact = $this->input->post('contact');
		$email = $this->input->post('email');
		$homepage = $this->input->post('homepage');
		$title = $this->input->post('title');
		$content = $this->input->post('content');
		
		$data = array(
			'm_nickname' => $nickname,
			'm_sex' => $sex,
			'company_name' => $company,
			'contact_type' => $contact,
			'email' => $email,
			'home_page' => $homepage,
			'm_title' => $title,
			'm_content' => $content
		);
		
		return $this->db->insert('messages',$data);
	}
}