<?php echo $this->load->view("admin/header") ?>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url()?>js/editor_config.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url()?>js/editor_all.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>js/themes/default/ueditor.css" />
<style type="text/css">
	.nd{float:left; width:99%; border:1px solid #ccc;border-radius:4px;}
	#main-content tbody{border-bottom:none;}
	table td{border-top:1px solid #ccc;}
	.nd_title{width:100%; height:40px; line-height:40px; font-size:14px; text-indent:10px; background:#ddd; border-bottom:1px solid #ccc;}
	
	#editor{ width:500px;}
	.input_title{float:left; padding:3px 0;}
	.sel_type{float:left;}
	#edui1_bottombar{display:none;}
	#tip{color:red; margin-left:10px; line-height:27px; float:left;}
	.hide{display:none;}
	#add_type{cursor:pointer;}
	.close_type{vertical-align: middle;}
</style>
<div id="content">
	<div class="nd">
		<div class="nd_title"><strong>关于中义</strong></div>
		<?php echo form_open('index.php/admin/about_us/about_add','name=form')?>
		<table style="border:none;">
			<tbody>
				<tr>
					<td width="10%" style="border-top:none;"><strong>标题:</strong></td>
					<td width="90%" style="border-top:none;"><input type="text" name="title" class="input_title" /></td>
				</tr>
				<tr>
					<td><strong>内容:</strong></td>
					<td style="padding-right:5px;"><span id="editor"></span><input type="hidden" value="" id="value" name="content" /></td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="2"><input type="submit" name="submit" id="sub" /></td>
				</tr>
			</tfoot>
		</table>
	</div>
</div>
<script type="text/javascript">

	var editorOption = {
        //focus时自动清空初始化时的内容
        autoClearinitialContent:true,
        //关闭字数统计
        wordCount:false,
        //关闭elementPath
        elementPathEnabled:false,
        //更多其他参数，请参考editor_config.js中的配置项
        minFrameHeight:200
    };
	var editor_a = new baidu.editor.ui.Editor(editorOption);
	editor_a.render( 'editor' );

	$(function(){
		$('form').submit(function(){
			$('#value').attr('value',editor_a.getContent());
		})
	});
</script>
<?php echo $this->load->view("admin/footer") ?>