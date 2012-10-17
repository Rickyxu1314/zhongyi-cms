<?php echo $this->load->view("public/header") ?>
<style type="text/css">
.cr_content {
	background-color: #FEF6D1;
	width: 683px;
	padding-top: 64px;
	padding-left: 44px;
	padding-right:0px;
}
.cr_content li {
	height: 133px;
	width: 133px;
	margin-right: 36px;
	_margin-right: 18px;
	margin-bottom: 36px;
	display: block;
	float: left;
}
.H100px {
	height: 80px;
}
</style>
<div class="ad"><img src="<?php echo base_url()?>images/ad3.png" width="1000" height="144" /></div>
 <div class="content">
  <div class="content_left">
     <h2><span class="big">合作机会</span><br /><span class="small">Opportunity</span></h2>
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
    <div class="place"><h3><span>您现在的位置：</span><a href="index.html">首页</a>&nbsp;>>&nbsp;<a href="#">选择中义</a></h3></div>
    <div class="cr_title"><span class="cr_left">选择中义</span><span class="cr_right">COOPERATION</span></div>
      <!--各个分页的内容-->
    <div class="cr_content">
    	<ul>
    		<?php foreach ($arr as $value){?>
        		<li><a href="#" title="保利地产"><img src="<?php echo '/uploads/cooperate/'.$value->img?>" width="133" height="133" /></a></li>
        	<?php }?>
        </ul>
        <div class="clear"></div>
    </div>
    <div class="H100px"></div>
  </div>
  <div class="clear"></div>
 </div>
<?php echo $this->load->view("public/footer") ?>