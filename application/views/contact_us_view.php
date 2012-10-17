<?php echo $this->load->view("public/header") ?>
<style type="text/css">
.cr_content {
	width: 726px;
}
.li_style {
	width: 700px;
	display: block;
	float: left;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #999;
	padding-top: 24px;
	font-size: 12px;
	line-height: 22px;
	font-weight: bold;
	padding-left: 26px;
}
.endLi {
	height: 148px;
	width: 700px;
	display: block;
	float: left;
	padding-top: 24px;
	font-size: 12px;
	line-height: 22px;
	font-weight: bold;
	padding-left: 26px;
}
.H60px {
	height: 60px;
}
</style>
<div class="ad"><img src="<?php echo base_url()?>images/ad5.png" width="1000" height="144" /></div>
 <div class="content">
  <div class="content_left">
     <h2><span class="big">联系我们</span><br /><span class="small">CONTECT</span></h2>
     <div class="list">
        <ul>
          <li class="brown"><a class="es" href="contact_us">联系我们</a></li>
          <li><a href="guestbook">给我留言</a></li>
        </ul>
     </div>
    <img src="<?php echo base_url()?>images/left_img.png" width="209" height="467" />
  </div>
  <div class="content_right">
    <div class="place">
      <h3><span>您现在的位置：</span><a href="index.html">首页</a>&nbsp;>>&nbsp;<a href="#">联系我们</a></h3></div>
    <div class="cr_title"><span class="cr_left">联系我们</span><span class="cr_right">CONTACT &nbsp;US</span></div>
      <!--各个分页的内容-->
    <div class="cr_content">
    	<ul>
        	<li class="li_style">
   	    	  <?php echo $arr['content']?>
            </li>
        </ul>
      <img src="<?php echo base_url()?>images/contact_img.png" width="720" height="387" /></div>
    
  </div>
  <div class="clear"></div>
  <div class="H60px"></div>
 </div>
<?php echo $this->load->view("public/footer") ?>