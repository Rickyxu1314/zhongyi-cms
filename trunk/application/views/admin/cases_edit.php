<?php echo $this->load->view("admin/header") ?>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url()?>js/editor_config.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url()?>js/editor_all.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>js/themes/default/ueditor.css" />
<style type="text/css">
	.nd{float:left; width:99%; border:1px solid #ccc;border-radius:4px;}
	#main-content tbody{border-bottom:none;}
	table td{border-top:1px solid #ccc;}
	.nd_title{width:100%; height:40px; line-height:40px; font-size:14px; text-indent:10px; background:#ddd;}
	.input{float:left;}
	.pic{float:left; width:100px; height:100px; border:1px solid #ccc;}
	.product_sel{float:left;}
	#edui1_bottombar{display:none;}
	
	#editor{width:500px;}
</style>
<div id="content">
	<div class="nd">
		<div class="nd_title"><strong>修改案例信息</strong></div>
		<?php echo form_open_multipart("index.php/admin/cases/cases_edit")?>
                <input type="hidden" name="id" value="<?php echo $arr['id']?>" />
		<table>
			<tr>
				<td width="10%">案例名称:</td>
				<td width="80%"><input type="text" class="input" value="<?php echo $arr['title']?>" name="cases_name" /></td>
			</tr>
			<tr>
				<td width="10%">案例图片</td>
				<td width="80%">
                                    <img src="<?php echo '/uploads/cases/thumbs/'.$arr['img']?>" alt="<?php echo $arr['title']?>" style="float:left;" />
                                    <input type="file" name="userfile" style="float:left;" />
                                </td>
			</tr>
			<tr>
				<td>案例信息:</td>
				<td style="padding-right:5px;"><span id="editor"></span>
				<input type="hidden" value="" id="value" name="content" /></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="submit" id="sub" />
                    <input type="hidden" name="updata" value="updata" />
				</td>
			</tr>
		</table>
         <?php echo form_close()?>
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
    editor_a.setContent('<?php echo $arr['content']?>');

			
    $(function(){
		$('form').submit(function(){
			$('#value').attr('value',editor_a.getContent());
			//return false;
		})
	});
</script>	
<?php echo $this->load->view("admin/footer") ?>