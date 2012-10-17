<?php echo $this->load->view("public/header") ?>
<div class="ad"><img src="<?php echo base_url()?>images/ad4.png" width="1000" height="144" /></div>
<div class="content">
  <div class="content_left">
     <h2><span class="big">关于我们</span><br /><span class="small">About us</span></h2>
     <div class="list">
        <ul>
          <li class="brown"><a href="about_us" class="es">关于中义</a></li>
          <li><a href="credentials">资质认证</a></li>
          <li><a href="honor">企业荣誉</a></li>
        </ul>
     </div>
    <img src="<?php echo base_url()?>images/left_img.png" width="209" height="467" />
  </div>
  <div class="content_right">
    <div class="place"><h3><span>您现在的位置：</span><a href="index.html">首页</a>&nbsp;>>&nbsp;<a href="#">关于中义</a></h3></div>
    <div class="cr_title"><span class="cr_left">关于中义</span><span class="cr_right">ABOUT &nbsp;ZHONGYI</span></div>
      <!--各个分页的内容-->
    <div class="cr_content">
    	<?php echo $arr['content']?>
    </div>
    <div class="H40px"></div>
  </div>
  <div class="clear"></div>
 </div>
<?php echo $this->load->view("public/footer") ?>