<?php echo $this->load->view("public/header") ?>
<style type="text/css">
.cr_content {
	padding-top: 20px;
	padding-left: 3px;
	width: 703px;
	padding-right: 20px;
	color: #666;
}
.titleFont {
	font-size: 18px;
	font-weight: bold;
}
.containFont {
	line-height: 24px;
	font-size: 14px;
	padding-top: 24px;
	padding-bottom: 24px;
}
.H60px {
	height: 60px;
}
</style>
<div class="ad"><img src="<?php echo base_url()?>images/ad6.png" width="1000" height="144" /></div>
 <div class="content">
  <div class="content_left">
     <h2><span class="big">人才招聘</span><br /><span class="small">Recruitment</span></h2>
     <div class="list">
        <ul>
          <li><a href="about_us">关于中义</a></li>
          <li><a href="credentials">资格证书</a></li>
          <li><a href="honor">企业荣誉</a></li>
        </ul>
     </div>
    <img src="<?php echo base_url()?>images/left_img.png" width="209" height="467" />
  </div>
  <div class="content_right">
    <div class="place"><h3><span>您现在的位置：</span><a href="index.html">首页</a>&nbsp;>>&nbsp;<a href="#">人才招聘</a></h3></div>
    <div class="cr_title"><span class="cr_left">人才招聘</span><span class="cr_right">RECRUITMENT</span></div>
      <!--各个分页的内容-->
    <div class="cr_content">
    	<?php echo $arr['content']?>
    </div>
    
  </div>
  
  <div class="clear"></div>
  <div class="H60px"></div>
 </div>
<?php echo $this->load->view("public/footer") ?>