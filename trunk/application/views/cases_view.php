<?php echo $this->load->view("public/header") ?>
<style type="text/css">
.cr_content {
	padding-top: 22px;
	width: 692px;
	padding-left: 34px;
}
.cr_content li {
	height: 220px;
	width: 311px;
	margin-right: 35px;
	_margin-right: 18px;
	margin-bottom: 19px;
	display: block;
	float: left;
}
</style>
<div class="ad"><img src="<?php echo base_url()?>images/ad2.png" width="1000" height="144" /></div>
 <div class="content">
  <div class="content_left">
     <h2><span class="big">工程案例</span><br /><span class="small">CASES</span></h2>
     <div class="list">
        <ul>
          <li><a href="about_us">关于中义</a></li>
          <li><a href="credentials">资质认证</a></li>
          <li><a href="honor">企业荣誉</a></li>
        </ul>
     </div>
    <img src="<?php echo base_url()?>images/left_img.png" width="209" height="467" />
  </div>
  <div class="content_right">
    <div class="place"><h3><span>您现在的位置：</span><a href="index.html">首页</a>&nbsp;>>&nbsp;<a href="#">工程案例</a></h3></div>
    <div class="cr_title"><span class="cr_left">工程案例</span><span class="cr_right">CASES</span></div>
      <!--各个分页的内容-->
    <div class="cr_content">
    	<ul>
		<?php foreach($arr as $value){?>
       	  <li><a href="#"><img src="<?php echo '/uploads/cases/'.$value->img?>" width="311" height="220" /></a></li>
		<?php }?>
        </ul>
        <div class="clear"></div>
    </div>
    
    <!--分页-->
    <div class="page"><a href="#">上一页</a>&nbsp;<a href="#">1</a>&nbsp;<a href="#">下一页</a></div>
  </div>
  <div class="clear"></div>
 </div>
<?php echo $this->load->view("public/footer") ?>