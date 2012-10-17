<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title?></title>
<link href="<?php echo base_url()?>css/index.css" rel=stylesheet>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/Xslider.js"></script>
</head>
<style type="text/css">
body {
	background-image: url(images/body_bg.png);
	background-repeat: repeat-x;
}
</style>

<script type="text/javascript">
	$(function(){
		$("#cases_box").Xslider({
			unitdisplayed:1,
			numtoMove:1,
			autoscroll:2000
		});
	});
</script>
<body>
<div id="head">
	<div class="empty"></div>
	<div class="nav">
		<div class="nav_1">
			<div class="nav_1_circle1"></div>
			<div class="nav_1_main">
				<ul>
					<li><a href="<?php echo base_url()?>"><span class="chinese" id="first">首页</span><span class="english" id="point_down">HOME</span></a></li>
					<li><a href="<?php echo base_url()?>index.php/about_us" class="hid"><span class="chinese">关于我们</span><span class="english">ABOUT</span></a></li>
					<li><a href="<?php echo base_url()?>index.php/news" class="hid"><span class="chinese">新闻中心</span><span class="english">NEWS</span></a></li>
					<li><a href="<?php echo base_url()?>index.php/products" class="hid"><span class="chinese">产品中心</span><span class="english">PRODUCTS</span></a></li>
					<li><a href="<?php echo base_url()?>index.php/cases" class="hid"><span class="chinese">工程案例</span><span class="english">CASES</span></a></li>
					<li><a href="<?php echo base_url()?>index.php/contact_us" class="hid"><span class="chinese">联系我们</span><span class="english">CONTECT</span></a></li>
				</ul>
			</div>
			<div class="nav_1_circle2"></div>
			<div class="clear"></div>  
		</div>
		<div class="nav_2">
			<div class="nav_2_circle1"></div>
			<div class="nav_2_main">
				<ul>
					<li><a href="<?php echo base_url()?>index.php/cooperate"><span class="chinese">合作机会</span><span class="english">OPPORTUNITY</span></a></li>
					<li><a href="<?php echo base_url()?>index.php/talents"><span class="chinese">人才招聘</span><span class="english">RECRUITMENT</span></a></li>
				</ul>
			</div>
			<div class="nav_2_circle2"></div>
			<div class="clear"></div> 
		</div>
		<div class="clear"></div>
	</div>
</div>
<div id="main">
  <div id="main_left">
    <div id="title_one">
	<div class="title_box">
            <div class="title_left"></div>
            <div class="title_center">示例工程
                <span class="title_EN">CASES</span>
            </div>
            <div class="title_right"></div>
        </div>
      <div class="more_box"><a href="<?php echo base_url()?>index.php/cases">&gt;&gt;更多</a></div>
    </div>
    <div class="box">
	    <div id="cases_box">
	    	<div class="scrollcontainer">
	    		<ul>
	    			<?php foreach ($case as $value){?>
		    		<li>
		    			<span id="imgInfo"><a href="<?php echo base_url()?>index.php/cases"><?php echo $value->title?></a></span>
						<img src="<?php echo '/uploads/cases/'.$value->img?>" width="272" height="147" />
		    		</li>
		    		<?php }?>
				</ul>
			</div>
			<a id="leftBtn" href="#left" class="aleft"><img src="images/index_imgBtn_left.gif" width="39" height="44" /></a>
		    <a id="rightBtn" href="#right" class="aright"><img src="images/index_imgBtn_right.gif" width="39" height="44" /></a>
	    </div>
	  </div>
  </div>
  
  <div id="main_center">
  	<div id="title_two">
      <div class="title_box">
            <div class="title_left"></div>
            <div class="title_center">产品介绍
                <span class="title_EN">PRODUCTS</span>
            </div>
            <div class="title_right"></div>
      </div>
      <div class="more_box"><a href="<?php echo base_url()?>index.php/products">&gt;&gt;更多</a></div>
 	</div>
    <div id="products_box">
    	<img src="<?php echo '/uploads/products/'.$row['img_path']?>" width="355" height="152" />
      <p><?php echo $row['p_content']?></p>
    </div>
  </div>
  
  <div id="main_right">
  	<div id="title_three">
    	<div class="title_box">
            <div class="title_left"></div>
            <div class="title_center">企业荣誉
                <span class="title_EN">HONORS</span>
            </div>
            <div class="title_right"></div>
    	</div>
    </div>
<div id="honors_box">
    	<ul>
    		<?php foreach ($honor as $key){?>
        		<li><a href="<?php echo base_url()?>index.php/honor"><?php echo $key->title?></a></li>
        	<?php }?>
        </ul>
    </div>
    
    <div id="title_four">
    	<div class="title_box">
            <div class="title_left"></div>
            <div class="title_center">品牌见证
                <span class="title_EN">BRANDS</span>
            </div>
            <div class="title_right"></div>
    	</div>
    </div>
    <div id="brands_box">
    	<ul>
        	<li><a href="#" title="合生创展"><img src="images/index_p1.png" width="108" height="22" /></a></li>
            <li><a href="#" title="桥鑫集团"><img src="images/index_p2.png" width="100" height="22" /></a></li>
            <li><a href="#" title="时代地产"><img src="images/index_p3.png" width="104" height="23" /></a></li>
            <li><a href="#" title="雅居乐"><img src="images/index_p4.png" width="97" height="21" /></a></li>
            <li><a href="#" title="恒大地产集团"><img src="images/index_p5.png" width="116" height="22" /></a></li>
            <li><a href="#" title="祈福集团"><img src="images/index_p6.png" width="102" height="22" /></a></li>
            <li><a href="#" title="万科"><img src="images/index_p7.png" width="91" height="22" /></a></li>
            <li><a href="#" title="碧桂园"><img src="images/index_p8.png" width="104" height="22" /></a></li>
        </ul>
    </div>
    
  </div>
  
  <div id="linkBox">
  	<ul>
		<?php foreach($arr as $value){?>
    	<li><a href="<?php echo $value->url?>"><?php echo $value->link_name?></a></li>
		<?php }?>
	</ul>
  </div>
</div>
<div class="bottom">
	<div class="bottom_oneLine"></div>
	<div class="bottom_twoLine">
		<ul class="left_ul">
			<li class="firstLi"><a href="#">版权声明</a></li>
			<li class="otherLi"><a href="#">网站地图</a></li>
			<li class="otherLi"><a href="<?php echo base_url()?>index.php/contact_us">联系中义</a></li>
			<li class="lastLi"></li>
			<li><a href="http://www.zy18.com">http://www.zy18.com</a></li>
		</ul>
		<ul class="right_ul">
			<li>版权所有：广州中义防水保温工程有限公司</li>
			<li>E-mail:zy@zy18a.com</li>
		</ul>
	</div>
</div>
</body>
</html>