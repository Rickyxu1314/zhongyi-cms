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
	#tip{color:red; margin-left:10px; line-height:27px; float:left;}
	.hide{display:none;}
	#add_type{cursor:pointer;}
	.close_type{vertical-align: middle;}
</style>
<div id="content">
	<div class="nd">
		<div class="nd_title"><strong>添加产品</strong></div>
		<?php echo form_open_multipart("index.php/admin/product/product_add")?>
		<table>
			<tr>
				<td width="10%">产品名称:</td>
				<td width="80%"><input type="text" class="input" name="product_name" /></td>
			</tr>
			<tr>
				<td width="10%">产品图片</td>
				<td width="80%">
                                    <input type="file" name="userfile" value="" style="float:left;" />
                                </td>
			</tr>
			<tr>
				<td>产品类别:</td>
				<td colspan="2">
					<select class="product_sel" name="type">
						<option value="选择分类">选择分类</option>
						<?php foreach ($arr as $key){?>
							<option value="<?php echo $key['p_type']?>"><?php echo $key['p_type']?></option>
						<?php }?>
					</select>
					<span id="tip"></span>
					<span class="hide" style="float:left; height:30px; line-height:30px; margin-left:5px;">
						<input type="text" id="msg_type" /><input type="button" value="提 交" class="ins_type" />
						<img class="close_type" alt="关闭" src="<?php echo base_url()?>images/write_close.gif" />
					</span>
					<span style="float:left; height:30px; line-height:30px; margin-left:5px;">
						如果没有你所需要的类别请<span id="add_type"><font color="red">添加分类</font></span>
					</span>
					<input type="hidden" value="选择分类" id="type_id" />
				</td>
			</tr>
			<tr>
				<td>产品介绍:</td>
				<td style="padding-right:5px;"><span id="editor"></span></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="submit" id="sub" />
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

	$(function(){
		$('.product_sel option').each(function(){
			$(this).click(function(){
				if($(this).attr('chedked','checked')){
					$('#type_id').attr('value',$(this).attr('value'));	
				}
			})
		});
		
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
		})
		
		$('#add_type').click(function(){
			$('.hide').css('display','block');
		})
		
		$('.close_type').click(function(){
		$('.hide').css('display','none');
	})
		
		$('.ins_type').click(function(){
			var msg_type = $('#msg_type').attr('value');
			$('.product_sel:first').html('<option value='+msg_type+' checked="checked">'+msg_type+'</option>');
			$('#type_id').attr('value',msg_type);
			$('.hide').css('display','none');
		})
	});
</script>	
<?php echo $this->load->view("admin/footer") ?>