<?php echo $this->load->view("admin/header") ?>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url()?>js/editor_config.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url()?>js/editor_all.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>js/themes/default/ueditor.css" />
<style type="text/css">
	.nd{float:left; width:99%; border:1px solid #ccc;border-radius:4px;}
	#main-content tbody{border-bottom:none;}
	table td{border-top:1px solid #ccc;}
	.nd_title{width:100%; height:40px; line-height:40px; font-size:14px; text-indent:10px; background:#ddd; border-bottom:1px solid #ccc; position:relative;}
	
	#editor{ width:500px;}
	.input_title{padding:3px 0;}
	.sel_type{float:left;}
	#edui1_bottombar{display:none;}
	#tip{color:red; margin-left:10px; line-height:27px; float:left;}
	.hide{display:none;}
	#add_type{cursor:pointer;}
	.close_type{vertical-align: middle;}
</style>

<script>
	$(function(){
		$('.add').click(function(){
			$('.link:first').clone(true).insertAfter('.link:last');
		})
	})
</script>
<div id="content">
	<div class="nd">
		<div class="nd_title"><div><strong>添加友情链接</strong></div><div><a class="add" href="javascript:void(0)">添加</a></div></div>
		<?php echo form_open('index.php/admin/friend_link/friend_link_add','name=form')?>
		<table style="border:none;">
			<thead>
				<tr>
					<th width="10%" style="border-top:none;">选择</th>
					<th width="20%" style="border-top:none;">标题:</th>
					<th width="70%" style="border-top:none;">链接地址</th>
				</tr>
			</thead>
			<tbody>
				<tr class="link">
					<td style="border-top:none;"><input type="checkbox" class="check" /></td>
					<td style="border-top:none;"><input type="text" name="link_name" class="input_title" /></td>
					<td style="border-top:none;"><input type="text" name="url" class="input_title" /></td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="3"><input type="submit" name="submit" id="sub" /></td>
				</tr>
			</tfoot>
		</table>
	</div>
</div>
<?php echo $this->load->view("admin/footer") ?>