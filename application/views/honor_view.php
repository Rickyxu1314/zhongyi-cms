<?php echo $this->load->view("public/header") ?>
<style type="text/css">
.cr_content {
	padding-top: 22px;
	padding-left: 2px;
	width: 724px;
}
.cr_content ul li {
	float: left;
	height: 218px;
	width: 309px;
	margin-right: 26px;
	_margin-right:13px;
	margin-bottom: 20px;
	margin-left: 26px;
	_margin-left:13px;
}

.page{
    font-size:12px;
    height:30px;
    text-align:right;
    padding-right:120px;
}
.pg_pre,.pg_next{
    border:1pxsolid#ccc;
    margin:03px;
    background-image:url("../image/icon_pg.gif");
    background-repeat:no-repeat;
}
.pg_pre{
    padding:3px8px3px20px;
    background-position:7px3px;
}
a.pg_pre{
    background-position:7px-19px;
}
.pg_next{
    padding:3px20px3px8px;
    background-position:-22px3px;
}
a.pg_next{
    background-position:-22px-19px;
}
  
.pg_link{
    padding:3px8px;
    margin:03px;
    border:1pxsolid#ccc;
}
.pg_link:hover,a.pg_next:hover,a.pg_pre:hover{
    border:1pxsolid#A9C9E2;
    color:#137cce;
}
.pg_curr{
    padding:3px8px;
    margin:03px;
    color:#137cce;
    background-color:#E8F5FE;
    border:1pxsolid#A9C9E2;
  
}
.pg_select{
    border:1pxsolid#ccc;
    padding:2px;
    margin:05px;
</style>
<div class="ad"><img src="<?php echo base_url()?>images/ad8.png" width="1000" height="144" /></div>
 <div class="content">
  <div class="content_left">
     <h2><span class="big">关于我们</span><br /><span class="small">About us</span></h2>
     <div class="list">
        <ul>
          <li><a href="about_us">关于中义</a></li>
          <li><a href="credentials">资质认证</a></li>
          <li class="brown"><a href="honor" class="es">企业荣誉</a></li>
        </ul>
     </div>
    <img src="<?php echo base_url()?>images/left_img.png" width="209" height="467" />
  </div>
  <div class="content_right">
    <div class="place"><h3><span>您现在的位置：</span><a href="index.html">首页</a>&nbsp;>>&nbsp;<a href="#">企业荣誉</a></h3></div>
    <div class="cr_title"><span class="cr_left">企业荣誉</span><span class="cr_right">COMPANY &nbsp;HONORS</span></div>
      <!--各个分页的内容-->
    <div class="cr_content">
    	<ul>
			<?php foreach($arr as $value){?>
        	<li><a href="#"><img src="<?php echo '/uploads/honor/'.$value->img?>" width="309" height="218" /></a></li>
			<?php }?>
        </ul>
        <div class="clear"></div>
    </div>
    
    <!--分页-->
    <div class="page"><?php echo $this->mypage_class->show(2); ?></div>
  </div>
  <div class="clear"></div>
 </div>
<?php echo $this->load->view("public/footer") ?>