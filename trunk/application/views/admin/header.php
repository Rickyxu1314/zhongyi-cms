<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理系统</title>
<link rel="stylesheet" href="<?php echo base_url()?>css/admin/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url()?>css/admin/invalid.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url()?>css/admin/style.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/facebox.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/simpla.jquery.configuration.js"></script>
</head>

<body>
<div id="body-wrapper">
  <!-- Wrapper for the radial gradient background -->
  <div id="sidebar">
    <div id="sidebar-wrapper">
      <!-- Sidebar with logo and menu -->
      <h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>
      <!-- Logo (221px wide) -->
      <a href="/admin/index.php"><img id="logo" src="/images/logo.gif" alt="Simpla Admin logo" /></a>
      <!-- Sidebar Profile links -->
	  
      <div id="profile-links">
		  <p class="tr"> 您好 
			  <a href="#"><?php echo $this->session->userdata('username')?></a>，您有 
			  <a href="/admin/user/user_message.php?action=unread_message_view" rel="modal"> 条消息</a>
		  </p>
		  <p class="tr pt5">
			  <a href="<?php echo base_url()?>" title="进入网站首页" target="_blank">网站首页</a>
			  <span class="pl5 pr5">|</span> 	
			  <a href="<?php echo base_url()?>index.php/admin/index" title="进入平台首页">管理平台首页</a>
			  <span class="pl5 pr5">|</span> 
			  <a href="<?php echo base_url()?>index.php/admin/login/logout" title="退出平台">退出</a>
		  </p>
	  </div>
	  
      <ul id="main-nav">
        <!-- Accordion Menu -->
        <li class="nav_li"> 
			<a href="<?php echo base_url()?>index.php/admin/news" class="nav-top-item">新闻管理</a>
			<ul class="disnone">
				<!--<li><a href="<?php echo base_url()?>index.php/admin/news/news_add_type">添加分类</a></li>-->
			    <li ><a href="<?php echo base_url()?>index.php/admin/news/news_add">发布新闻</a></li>
                <li ><a href="<?php echo base_url()?>index.php/admin/news">新闻列表</a></li>
			</ul>
		</li>
        <li class="nav_li"> 
			<a href="<?php echo base_url()?>index.php/admin/product" class="nav-top-item">产品管理</a>
			<ul class="disnone">
				<!--<li ><a href="<?php echo base_url()?>index.php/admin/product/product_add_type">添加产品分类</a></li>-->
				<li ><a href="<?php echo base_url()?>index.php/admin/product/product_add">添加产品</a></li>				
				<li ><a href="<?php echo base_url()?>index.php/admin/product">产品列表</a></li>
			</ul>
        </li>
		
        <li class="nav_li"> 
			<a href="<?php echo base_url()?>index.php/admin/cases" class="nav-top-item">案例管理</a>
            <ul class="disnone">
	          	<li ><a href="<?php echo base_url()?>index.php/admin/cases/cases_add">添加案例</a></li>
	            <li ><a href="<?php echo base_url()?>index.php/admin/cases">案例列表</a></li>
            </ul>
        </li>

        <li class="nav_li"> 
			<a href="<?php echo base_url()?>index.php/admin/about_us" class="nav-top-item">关于中义</a>
            <ul class="disnone">
	          	<li ><a href="<?php echo base_url()?>index.php/admin/about_us/about_add">添加中义信息</a></li>
	            <li ><a href="<?php echo base_url()?>index.php/admin/about_us">中义信息列表</a></li>
            </ul>
        </li>
        
        <li class="nav_li">
			<a href="<?php echo base_url()?>index.php/admin/contact_us" class="nav-top-item">联系我们</a>
            <ul class="disnone">
	          	<li ><a href="<?php echo base_url()?>index.php/admin/contact_us/contact_add">添加联系信息</a></li>
	            <li ><a href="<?php echo base_url()?>index.php/admin/contact_us">联系信息列表</a></li>
            </ul>
        </li>
        
        <li class="nav_li">
			<a href="<?php echo base_url()?>index.php/admin/messages" class="nav-top-item">留言管理</a>
            <ul class="disnone">
	          	<li ><a href="<?php echo base_url()?>index.php/admin/messages">留言列表</a></li>
            </ul>
        </li>
        
        <li class="nav_li">
			<a href="<?php echo base_url()?>index.php/admin/recruitment" class="nav-top-item">招聘管理</a>
            <ul class="disnone">
            	<li ><a href="<?php echo base_url()?>index.php/admin/recruitment/recruitment_add">添加招聘信息</a></li>
	          	<li ><a href="<?php echo base_url()?>index.php/admin/recruitment">人才招聘</a></li>
            </ul>
        </li>
        
        <li class="nav_li">
			<a href="<?php echo base_url()?>index.php/admin/friend_link" class="nav-top-item">友情链接管理</a>
            <ul class="disnone">
            	<li ><a href="<?php echo base_url()?>index.php/admin/friend_link/friend_link_add">添加友情链接</a></li>
	          	<li ><a href="<?php echo base_url()?>index.php/admin/friend_link">友情链接列表</a></li>
            </ul>
        </li>
        
        <li class="nav_li">
			<a href="<?php echo base_url()?>index.php/admin/honor" class="nav-top-item">荣誉证书管理</a>
            <ul class="disnone">
            	<li ><a href="<?php echo base_url()?>index.php/admin/honor/honor_add">添加荣誉证书</a></li>
	          	<li ><a href="<?php echo base_url()?>index.php/admin/honor">荣誉证书列表</a></li>
            </ul>
        </li>
        
        <li class="nav_li">
			<a href="<?php echo base_url()?>index.php/admin/credentials" class="nav-top-item">资质认证管理</a>
            <ul class="disnone">
            	<li ><a href="<?php echo base_url()?>index.php/admin/credentials/credentials_add">添加资质认证</a></li>
	          	<li ><a href="<?php echo base_url()?>index.php/admin/credentials">资质认证列表</a></li>
            </ul>
        </li>
        
        <li class="nav_li">
			<a href="<?php echo base_url()?>index.php/admin/cooperate" class="nav-top-item">品牌合作管理</a>
            <ul class="disnone">
            	<li ><a href="<?php echo base_url()?>index.php/admin/cooperate/cooperate_add">添加品牌合作</a></li>
	          	<li ><a href="<?php echo base_url()?>index.php/admin/cooperate">品牌合作列表</a></li>
            </ul>
        </li>
      </ul>
      <!-- End #main-nav -->
    </div>
  </div>
  <!-- End #sidebar -->
</div> 
<div id="main-content">
  <script language="javascript">  
/**   
 *  
 * @param {} sURL 收藏链接地址   
 * @param {} sTitle 收藏标题   
 */   
function AddFavorite(sURL, sTitle) {   
    try {   
        window.external.addFavorite(sURL, sTitle);   
    } catch (e) {   
        try {   
            window.sidebar.addPanel(sTitle, sURL, "");   
        } catch (e) {   
            alert("加入收藏失败，请使用Ctrl+D进行添加");   
        }   
    }   
}   
/**   
 *    
 * @param {} obj 当前对象，一般是使用this引用。   
 * @param {} vrl 主页URL   
 */   
function SetHome(obj, vrl) {   
    try {   
        obj.style.behavior = 'url(#default#homepage)';   
        obj.setHomePage(vrl);   
    } catch (e) {   
        if (window.netscape) {   
            try {   
                netscape.security.PrivilegeManager   
                        .enablePrivilege("UniversalXPConnect");   
            } catch (e) {   
                alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。");   
            }   
            var prefs = Components.classes['@mozilla.org/preferences-service;1']   
                    .getService(Components.interfaces.nsIPrefBranch);   
            prefs.setCharPref('browser.startup.homepage', vrl);   
        }   
    }   
}   

$(function(){

	//获取url最后一个PHP文件名
	 var path =window.location.pathname;
	 path = path.substr(1);
	 path = path.split("/");
	 var path_length = path.length;
	 $url = path[path_length-1];

    var name=""
	var i = 0;
	//遍历所有ul > a标签值
	 $('.nav_li').each(function(){
	 		$(this).find('ul a').each(function(){
				$href =$(this).attr('href');
				$href = $href.split("?");
				 $href = $href[0];
				 $href = $href.split("/");
	 			var href_length = $href.length;
				$href = $href[href_length-1];
				 //最后路径的PHP文件名等于遍历到的这个a标签的值，那么加上class='active'
				 if($href==$url)
				 {
					 $(this).parents("ul").show();
					 $(this).addClass('current');
					 $(this).parents(".nav_li").find(".nav-top-item").addClass('current')
					 i++;
				 }	 
			 });
	 });
	 
	 if(i==0)
	 {
		 $('.nav_li').find('ul').hide();
	 }
	 
	 
});

$(function(){
	//切隐左侧菜单
	
	$("#sider").toggle(function(){
		$("#sidebar").animate({opacity:'hide'}, 100);
		$("#main-content").css({"padding-left":"10px"});
		$(this).css({"left":"10px"}).find("a").removeClass("arrow_left").addClass("arrow_right");
		$("body").css("background","#f0f0f0");
		
	},function(){
		$("#sidebar").animate({opacity:'show'},1200);
		$("#main-content").css({"padding-left":"240px"});
		$(this).css({"left":"235px"}).find("a").removeClass("arrow_right").addClass("arrow_left");
		$("body").css("background","#f0f0f0 url('/images/bg-body.gif') top left repeat-y");
		
	});
});
</script>

