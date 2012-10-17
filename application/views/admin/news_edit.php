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
		<div class="nd_title"><strong>资讯修改</strong></div>
		<?php echo form_open('index.php/admin/news/news_edit','name=form')?>
		<table style="border:none;">
			<tbody>
				<tr>
					<td width="10%" style="border-top:none;"><strong>标题:</strong></td>
					<td width="90%" style="border-top:none;"><input type="text" name="title" class="input_title" value="<?php echo $arr['n_title']?>" /></td>
				</tr>
				<tr>
					<td><strong>类别:</strong></td>
					<td>
						<select class="sel_type" name="type">
							<option value="<?php echo $arr['n_type'] ?>"><?php echo $arr['n_type']?></option>
							<?php foreach ($row as $rows){?>
								<?php if($arr['n_id'] != $rows['n_id']){?>
									<option value="<?php echo $rows['n_type']?>"><?php echo $rows['n_type']?></option>
								<?php }?>
							<?php }?>
						</select>
						<span id="tip"></span>
						<span class="hide" style="float:left; height:30px; line-height:30px; margin-left:5px;">
							<input type="text" id="msg_type" /><input type="button" value="提 交" class="ins_type" />
							<img class="close_type" alt="关闭" src="<?php echo base_url()?>images/write_close.gif" />
						</span>
						<span style="float:left; height:30px; line-height:30px; margin-left:5px;">
							如果需要更改类别请<span id="add_type"><font color="red">修改分类</font></span>
						</span>
					</td>
				</tr>
				<tr>
					<td><strong>内容:</strong></td>
					<td style="padding-right:5px;"><span id="editor"></span>
						<input type="hidden" value="<?php echo $this->uri->segment(4)?>" id="ids" name="ids" />
					</td>
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
	editor_a.setContent('<?php echo $arr['n_content']?>');

	$('form').submit(function(){
		if($('#type_id').val() =='选择分类'){
			$('#tip').html('请选择分类!');
			return false;
		}
		if($('.input_title').val()==''){
			alert('标题不能为空!');
			return false;
		}
		$('#value').attr('value',editor_a.getContent());
		/*if($('#value').attr('value','')){
			alert('内容不能为空!');
			return false;
		}*/
	})
	
	$('#add_type').click(function(){
		$('.hide').css('display','block');
	})
	
	$('.close_type').click(function(){
		$('.hide').css('display','none');
	})
	
	$('.ins_type').click(function(){
		var msg_type = $('#msg_type').attr('value');
		$('.sel_type:first').html('<option value='+msg_type+' checked="checked">'+msg_type+'</option>');
		$('#type_id').attr('value',msg_type);
		$('.hide').css('display','none');
	})
</script>
<?php echo $this->load->view("admin/footer") ?>