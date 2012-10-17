<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Editor extends CI_Model { 
   
    function __construct()
     {
         parent::__construct();
     }
	function kind($name,$text)
	{
		$string='<script charset="utf-8" type="text/javascript" src="'.base_url().'js/kindeditor/kindeditor.js"></script>';
		$string=$string.'<textarea id="'.$name.'" name="'.$name.'" cols="100" rows="8" style="width:690px;height:300px;">'.$text.'</textarea>';		$id="id:'".$name."'";
		$string=$string.'<script charset="utf-8" src="'.base_url().'editor/kindeditor.js"></script><script>        KE.show({           '.$id.',   allowFileManager : true     });</script>';
		return $string;
	}
      function shijian()
	  {
	  	date_default_timezone_set('PRC');
		$shijian=date("Y-m-d G:i:s");
		return $shijian;
	  } 
	  function show_list($table,$url,$uri,$start_row,$where,$order)
	{
		$table=$this->db->dbprefix($table);
		if($where!="")
		{
			$this->db->get_where($where);
		}
		if(!is_numeric($start_row))
		{
			$start_row=0;
		}
		$query=$this->db->get($table);
		$num=$query->num_rows();
		$conf['per_page']=20;//每页显示数
		$conf['total_rows']=$num;//总共多少行
		$conf['base_url']=$url;
		$conf['uri_segment']=$uri;	
		$conf['prev_link']="上一页";
		$conf['next_link']="下一页";
		$conf['first_link']="首页";
		$conf['last_link']="尾页";
		$conf['num_links']=5;
		$this->load->library('pagination',$conf);
		$links=$this->pagination->create_links();
		$perpage=20;//
		$start=$start_row;
		$sqla="select * from $table  order by $order  desc limit ".$start_row.",".$perpage;
		$resa = $this->db->query($sqla);
		$res=$resa->result();		
		return array('res'=>$res,'total_rows'=>$conf['total_rows'],'links'=>$links,'per_page'=>$conf['per_page']);
	}
  }
