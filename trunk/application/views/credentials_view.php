<?php echo $this->load->view("public/header") ?>
<style type="text/css">
.cr_content {
	padding-top: 22px;
	padding-left: 3px;
	clear: both;
	padding-right: 3px;
	width: 720px;
}
.H60px {
	height: 60px;
}
</style>
<div class="ad"><img src="<?php echo base_url()?>images/ad7.png" width="1000" height="144" /></div>
 <div class="content">
  <div class="content_left">
     <h2><span class="big">关于我们</span><br /><span class="small">About us</span></h2>
     <div class="list">
        <ul>
          <li><a href="about_us">关于中义</a></li>
          <li class="brown"><a href="credentials" class="es">资质认证</a></li>
          <li><a href="honor">企业荣誉</a></li>
        </ul>
     </div>
    <img src="<?php echo base_url()?>images/left_img.png" width="209" height="467" />
  </div>
  <div class="content_right">
    <div class="place"><h3><span>您现在的位置：</span><a href="index.html">首页</a>&nbsp;>>&nbsp;<a href="#">资质认证</a></h3></div>
    <div class="cr_title"><span class="cr_left">资质认证</span><span class="cr_right">DEVELOPMENT</span></div>
      <!--各个分页的内容-->
    <div class="cr_content">
    	<?php foreach ($arr as $value){?>
        	<img src="<?php echo '/uploads/credentials/'.$value->img?>" />
        <?php }?>
    </div>
    <div class="page"></div>
  </div>
  <div class="clear"></div>
  <div class="H60px"></div>
 </div>
<?php echo $this->load->view("public/footer") ?>