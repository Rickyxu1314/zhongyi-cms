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
		<div class="nl_title"><strong>留言列表</strong></div>
		<table>
			<thead>
				<tr>
					<th width="5%">序号</th>
					<th width="15%">标题</th>
					<th width="50%">内容</th>
					<th width="10%">昵称</th>
					<th width="15%">联系方式</th>
					<th width="10%" style="border-right:none;">操作</th>
				</tr>
			</thead>
			<tbody>
			<?php if($arr){?>
				<?php foreach ($arr as $key=>$value){?>
				<tr>
					<td><?php echo ($key+1)?></td>
					<td><?php echo $value->m_title?></td>
					<td><?php echo $value->m_content?></td>
					<td><?php echo $value->m_nickname?></td>
					<td><?php echo $value->contact_type?></td>
					<td style="border-right:none;">
						<a href="messages/message_read/<?php echo $value->m_id?>">查看</a>
						<!--<a href="messages/news_delete/<?php echo $value->n_id?>">删除</a>-->
					</td>
				</tr>
				<?php }?>
			<?php }else{?>
				<tr>
					<td colspan="6" style="font-size:20px;"><strong>暂无留言</strong></td>
				</tr>
			<?php }?>
			</tbody>
		</table>
	</div>
</div>
<?php echo $this->load->view("admin/footer") ?>