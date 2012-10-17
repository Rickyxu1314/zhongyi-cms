<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title?></title>
<link href="<?php echo base_url()?>css/style.css" rel=stylesheet>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.6.2.min.js"></script>
</head>
<style type="text/css">
.cr_content {
	padding-top: 22px;
	width: 703px;
	padding-right: 20px;
	padding-left: 3px;
}
.cr_content p {
	line-height: 24px;
	color: #333;
	padding-bottom: 14px;
	word-break:break-all;
	word-wrap:break-word;
	overflow: hidden;
}
.H40px {
	height: 40px;
}
</style>
<body>
<div class="container">
	<div class="header">
		<div class="logo"><a href="#"><img src="<?php echo base_url()?>images/logo.png" width="77" height="96" /></a></div>
		<div class="subject"></div>
		<div class="clear"></div>
	</div>
	<div class="nav">
		<div class="nav_1">
			<div class="nav_1_circle1"></div>
			<div class="nav_1_main">
				<ul class="nav_li">
					<li><a href="/"><span class="chinese">首页</span><span class="english" id="point_down">HOME</span></a></li>
					<li><a href="about_us" class="hid"><span class="chinese">关于我们</span><span class="english">ABOUT</span></a></li>
					<li><a href="news" class="hid"><span class="chinese">新闻中心</span><span class="english">NEWS</span></a></li>
					<li><a href="products" class="hid"><span class="chinese">产品中心</span><span class="english">PRODUCTS</span></a></li>
					<li><a href="cases" class="hid"><span class="chinese">工程案例</span><span class="english">CASES</span></a></li>
					<li><a href="contact_us" class="hid"><span class="chinese">联系我们</span><span class="english">CONTECT</span></a></li>
				</ul>
			</div>
			<div class="nav_1_circle2"></div>
			<div class="clear"></div>  
		</div>
		
		<div class="nav_2">
			<div class="nav_2_circle1"></div>
			<div class="nav_2_main">
				<ul>
					<li><a href="cooperate"><span class="chinese">合作机会</span><span class="english">OPPORTUNITY</span></a></li>
					<li><a href="recruitment"><span class="chinese">人才招聘</span><span class="english">RECRUITMENT</span></a></li>
				</ul>
			</div>
			<div class="nav_2_circle2"></div>
			<div class="clear"></div> 
		</div>
		<div class="clear"></div>
	</div>
	
<script language="javascript">
$(function(){

	//获取url最后一个PHP文件名
	 var path =window.location.pathname;
	 path = path.substr(11);
	 path = path.split("/");
	 var path_length = path.length;
	 $url = path[path_length-1];
	
    var name="";
	var i = 0;
	//遍历所有ul > a标签值
	 $('.nav_li').each(function(){
 		$(this).find('a').each(function(){
			$href =$(this).attr('href');
			$href = $href.split("?");
			 $href = $href[0];
			 $href = $href.split("/");
 			var href_length = $href.length;
			$href = $href[href_length-1];
			//alert($href);
			 //最后路径的PHP文件名等于遍历到的这个a标签的值，那么加上class='active'
			 if($href==$url)
			 {
				 //$('.nav_li li').children('.chinese').removeattr('id','first');
				 //alert(aa);
				 $(this).children('.chinese').attr('id','first');
				 i++;
			 }	 
		 });
	 });	 	 
});
</script>	