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
		<div class="nd_title"><strong>添加产品</strong></div>
		<?php echo form_open_multipart("index.php/admin/product/product_edit")?>
                <input type="hidden" name="id" value="<?php echo $arr['p_id']?>" />
		<table>
			<tr>
				<td width="10%">产品名称:</td>
				<td width="80%"><input type="text" class="input" value="<?php echo $arr['p_name']?>" name="product_name" /></td>
			</tr>
			<tr>
				<td width="10%">产品图片</td>
				<td width="80%">
                                    <img src="<?php echo '/uploads/products/thumbs/'.$arr['img_path']?>" alt="<?php echo $arr['p_name']?>" style="float:left;" />
                                    <input type="file" name="userfile" style="float:left;" />
                                </td>
			</tr>
			<tr>
				<td>产品类别:</td>
				<td colspan="2">
					<select class="product_sel" name="type">
						<option value="<?php echo $arr['p_type']?>"><?php echo $arr['p_type']?></option>
						<?php foreach ($row as $key){?>
                            <?php if($arr['p_id'] != $key['p_id']){?>
								<option value="<?php echo $key['p_type']?>"><?php echo $key['p_type']?></option>
                            <?php }?>
						<?php }?>
					</select>
				</td>
			</tr>
			<tr>
				<td>产品介绍:</td>
				<td style="padding-right:5px;"><span id="editor"></span></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="submit" id="sub" />
                                        <input type="hidden" name="update" value="update" />
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
        editor_a.setContent('<?php echo $arr['p_content']?>');
</script>	
<?php echo $this->load->view("admin/footer") ?>