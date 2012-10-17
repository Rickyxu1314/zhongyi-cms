<?php echo $this->load->view("public/header") ?>
<style type="text/css">
.cr_content {
	width: 726px;
}
.li_style {
	height: 148px;
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
.cr_content td{ padding:5px;}
</style>
<script type="text/javascript">
function reloadCode() {
 var Pnk = document.getElementById("checkCodeImg");
 Pnk.src = "<?php echo site_url('index.php/guestbook/yzm')?>?tempstr=" + Math.random();
}
</script>
<div class="ad"><img src="<?php echo base_url()?>images/ad5.png" width="1000" height="144" /></div>
  <div class="content">
    <div class="content_left">
      <h2><span class="big">联系我们</span><br />
        <span class="small">CONTECT</span></h2>
      <div class="list">
        <ul>
          <li><a href="contact_us">联系我们</a></li>
          <li class="brown"><a class="es" href="guestbook">给我留言</a></li>
        </ul>
      </div>
      <img src="<?php echo base_url()?>images/left_img.png" width="209" height="467" /> </div>
    <div class="content_right">
      <div class="place">
        <h3><span>您现在的位置：</span><a href="index.html">首页</a>&nbsp;>>&nbsp;<a href="#">给我留言</a></h3>
      </div>
      <div class="cr_title"><span class="cr_left">给我留言</span><span class="cr_right">Guest Book</span></div>
      <!--各个分页的内容-->
      <div class="cr_content">
		<form method="post" action="<?php echo base_url()?>index.php/guestbook/msg_add">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="15%" align="right">昵称：</td>
					<td width="85%"><input type="text" name="nickname" size="15" /></td>
				</tr>
				<tr>
					<td align="right">性别：</td>
					<td><input type="radio" name="sex" value="0" checked="checked" />男<input type="radio" name="sex" value="1" />女</td>
				</tr>
				<tr>
					<td align="right">公司：</td>
					<td><input type="text" name="company" size="25" /></td>
				</tr>
				<tr>
					<td align="right"><span class="lianxi">联系方式：</span></td>
					<td><input type="text" name="contact" size="15" /></td>
				</tr>
				<tr>
					<td align="right">邮箱：</td>
					<td><input type="text" name="email" size="18" /></td>
				</tr>
				<tr>
					<td align="right">主页：</td>
					<td><input type="text" name="homepage" size="25" /></td>
				</tr>
				<tr>
					<td align="right">标题：</td>
					<td><input type="text" name="title" size="25" /></td>
				</tr>
				<tr>
					<td align="right" valign="middle"><span class="neirong">内容：</span></td>
					<td><textarea name="content" cols="47" rows="10"></textarea></td>
				</tr>
				<tr>
					<td align="right"><span class="yanzheng">验证码：</span></td>
					<td><input type="text" name="yzcode" size="4" maxlength="4" />
						<a href="javascript:reloadCode();">
						<img src="<?php echo site_url("index.php/guestbook/yzm");?>" name="checkCodeImg" id="checkCodeImg" border="0" /></a>
					</td>
				</tr>
				<tr>
					<td align="right">&nbsp;</td>
					<td><input type="submit" name="submit" value="提交" />&nbsp;&nbsp;<input type="reset" value="重置" /></td>
				</tr>
			</table>
		</form>
      </div>
    </div>
    <div class="clear"></div>
    <div class="H60px"></div>
  </div>
<?php echo $this->load->view("public/footer") ?>