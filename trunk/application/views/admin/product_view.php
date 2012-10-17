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
		<div class="nl_title"><strong>产品列表</strong></div>
		<table>
			<thead>
				<tr>
					<th width="5%">序号</th>
                    <th width="15%">产品图片</th>
					<th width="15%">产品名称</th>
					<th width="33%">产品信息</th>
					<th width="10%">产品类别</th>
                    <th width="12%">时间</th>
					<th width="10%" style="border-right:none;">操作</th>
				</tr>
			</thead>
			<tbody>
			<?php if($arr){?>
				<?php foreach ($arr as $key=>$value){?>
				<tr>
	                <td><?php echo ($key+1)?></td>
	                <td><img alt="<?php echo $value->p_name?>" src="<?php echo '/uploads/products/thumbs/'.$value->img_path?>" /></td>
	                <td><?php echo $value->p_name?></td>
	                <td><?php echo $value->p_content?></td>
	                <td><?php echo $value->p_type?></td>
	                <td><?php echo $value->p_addtime?></td>
	                <td style="border-right:none;">
		                <a href="product/product_edit/<?php echo $value->p_id?>">修改</a>
		                <a href="product/product_delete/<?php echo $value->p_id?>">删除</a>
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
        <!--<div><?php echo $page?></div>
	--></div>
</div>
<?php echo $this->load->view("admin/footer") ?>