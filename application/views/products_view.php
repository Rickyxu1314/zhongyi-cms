<?php echo $this->load->view("public/header") ?>
<style type="text/css">
<!--
.cr_content {
	width: 691px;
	margin-top: 14px;
	padding-left: 35px;
}
.cr_content ul li {
	float: left;
	margin-bottom: 20px;
	position: relative;
	margin-right:34px;
	_margin-right:17px;
	width: 311px;
}
.cr_content ul li span {
	position: absolute;
	height: 25px;
	filter:alpha(opacity=50);
	-moz-opacity:0.5;
	opacity:0.5;
	width: 309px;
	left: 1px;
	top: 194px;
	background-color: #000;
	text-align: center;
}
.cr_content ul li span a {
	line-height: 25px;
	text-align: center;
	color: #FFF;
}
.cr_content ul li span a:hover{
	text-decoration:underline;
	color: #FFD600;
}

-->
</style>
<script>
	$(function(){
		$('#list li').each(function(){
			$(this).click(function(){
				$('#list li').removeClass();
				$(this).addClass('brown');
			})
		})
	})
</script>
<div class="ad"><img src="<?php echo base_url()?>images/ad1.png" width="1001" height="144" /></div>
 <div class="content">
  <div class="content_left">
     <h2><span class="big">产品中心</span><br /><span class="small">Products</span></h2>
     <div class="list">
        <ul id="list">
          <li class="brown"><a href="<?php echo base_url()?>index.php/products?type=fangshui"" class="es">防水材料</a></li>
          <li><a href="<?php echo base_url()?>index.php/products?type=baowen">保温材料</a></li>
        </ul>
     </div>
    <img src="<?php echo base_url()?>images/left_img.png" width="209" height="467" />
  </div>
  <div class="content_right">
    <div class="place"><h3><span>您现在的位置：</span><a href="index.html">首页</a>&nbsp;>>&nbsp;<a href="#">产品中心</a></h3></div>
    <div class="cr_title"><span class="cr_left">产品中心</span><span class="cr_right">PRODUCTS</span></div>
    <!--各个分页的内容-->
    <div class="cr_content">
      <ul>
	  <?php foreach($arr as $key=>$value){?>
       <li><img src="<?php echo '/uploads/products/'.$value->img_path?>" width="311" height="220" />
       <span><a href="#"><?php echo $value->p_name?></a></span></li>
	   <?php }?>
     </ul>
  </div>
  <div class="clear"></div>
  <div class="page"><a href="#">上一页</a>&nbsp;<a href="#">1</a>&nbsp;<a href="#">下一页</a></div>
  </div>
  <div class="clear"></div>
 </div>

<?php echo $this->load->view("public/footer") ?>