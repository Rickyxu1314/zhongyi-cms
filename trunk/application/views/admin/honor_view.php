<?php echo $this->load->view("admin/header") ?>
<style type="text/css">
	table{ border-top:1px solid #ccc;}
	#main-content tbody{border-bottom:none;}
	table td{border:1px solid #ccc; border-bottom:none; border-left:none;}
	.nl{width:99%; float:left; border:1px solid #ccc;border-radius:4px;}
	.nl_title{float:left; width:100%; height:40px; line-height:40px; font-size:14px; text-indent:10px; background:#ddd;}
</style>
<div id="content">
	<div class="nl">
		<div class="nl_title"><strong>证书列表</strong></div>
		<table>
			<thead>
				<tr>
					<th width="5%">序号</th>
                    <th width="15%">证书图片</th>
					<th width="20%">证书名称</th>
					<th width="35%">证书信息</th>
                    <th width="15%">时间</th>
					<th width="10%" style="border-right:none;">操作</th>
				</tr>
			</thead>
			<tbody>
			<?php if($arr){?>
				<?php foreach ($arr as $key=>$value){?>
				<tr>
	                <td><?php echo ($key+1)?></td>
	                <td><img alt="<?php echo $value->title?>" src="<?php echo '/uploads/honor/thumbs/'.$value->img?>" /></td>
	                <td><?php echo $value->title?></td>
	                <td><?php echo $value->content?></td>
	                <td><?php echo $value->addtime?></td>
	                <td style="border-right:none;">
		                <a href="honor/honor_edit/<?php echo $value->id?>">修改</a>
		                <a href="honor/honor_delete/<?php echo $value->id?>">删除</a>
	                </td>
				</tr>
				<?php }?>
			<?php }else{?>
				<tr>
                	<td colspan="6" style="font-size:20px;"><strong>暂无产品</strong></td>
				</tr>
			<?php }?>
			</tbody>
		</table>
        <!--<div><?php echo $page?></div>-->
	</div>
</div>
<?php echo $this->load->view("admin/footer") ?>