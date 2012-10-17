<?php echo $this->load->view("public/header") ?>
<style type="text/css">
<!--
.cr_content {
	width: 726px;
	padding-top:0px;
}
.cr_content ul {
	margin-right: 3px;
	margin-left: 5px;
}
.cr_content ul li {
	height: 38px;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #CACACA;
}
.cr_content ul li a {
	color: #595959;
	font-size: 14px;
	float: left;
	line-height: 38px;
	width:550px;
	height:38px;
	overflow: hidden;
}
.cr_content ul li .date {
	font-size: 14px;
	color: #595959;
	float: right;
	line-height: 38px;
}
.cr_content li a:hover {
	color: #681300;
	text-decoration: underline;
}
.cr_content ul li .number{
	float:left;
	font-size: 14px;
	color: #595959;
	float: left;
	margin-right:10px;
	line-height: 38px;
}

-->
</style>
<div class="ad"><img src="<?php echo base_url()?>images/ad9.png" width="1000" height="144" /></div>
<div class="content">
  <div class="content_left">
     <h2><span class="big">新闻中心</span><br /><span class="small">News</span></h2>
     <div class="list">
        <ul>
          <li><a href="about_us">公司简介</a></li>
          <li class="brown"><a class="es" href="news">行内动态</a></li>
        </ul>
     </div>
    <img src="<?php echo base_url()?>images/left_img.png" width="209" height="467" />
  </div>
  <div class="content_right">
    <div class="place"><h3><span>您现在的位置：</span><a href="index.html">首页</a>&nbsp;>>&nbsp;<a href="#">公司动态</a></h3></div>
    <div class="cr_title"><span class="cr_left">公司动态</span><span class="cr_right">NEWS</span></div>
    <!--各个分页的内容-->
    <div class="cr_content">
       <ul>
		 <?php foreach ($arr as $key=>$value){?>
         <li><span class="number"><?php echo ($key+1)?></span><a title="<?php echo $value->n_content?>" href="#"><?php echo $value->n_content?></a><span class="date">(<?php echo $value->n_addtime?>)</span></li>
		 <?php }?>
       </ul>
    </div>
    <div class="clear"></div>
    <div class="page"><a href="#">上一页</a>&nbsp;<a href="#">1</a>&nbsp;<a href="#">下一页</a></div>
  </div>
  <div class="clear"></div>
 </div>
<?php echo $this->load->view("public/footer") ?>