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
		<div class="nl_title"><strong>友情链接列表</strong></div>
		<table>
			<thead>
				<tr>
					<th width="5%">序号</th>
					<th width="15%">链接名称</th>
					<th width="33%">链接地址</th>
                    <th width="12%">时间</th>
					<th width="10%" style="border-right:none;">操作</th>
				</tr>
			</thead>
			<tbody>
			<?php if($arr){?>
				<?php foreach ($arr as $key=>$value){?>
				<tr>
	                <td><?php echo ($key+1)?></td>
	                <td><?php echo $value->link_name?></td>
	                <td><a href="<?php echo $value->url?>" title="<?php echo $value->link_name?>"><?php echo $value->url?></a></td>
	                <td><?php echo $value->addtime?></td>
	                <td style="border-right:none;">
		                <a href="friend_link/friend_link_edit/<?php echo $value->id?>">修改</a>
		                <a href="friend_link/friend_link_delete/<?php echo $value->id?>">删除</a>
	                </td>
				</tr>
				<?php }?>
			<?php }else{?>
				<tr>
                	<td colspan="6" style="font-size:20px;"><strong>暂无友情链接</strong></td>
				</tr>
			<?php }?>
			</tbody>
		</table>
        <!--<div><?php echo $page?></div>
	--></div>
</div>
<?php echo $this->load->view("admin/footer") ?>