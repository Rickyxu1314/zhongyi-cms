<?php echo $this->load->view("admin/header") ?>
<div id="content">
	<?php echo $this->session->userdata('username')?>登录成功
	<a href="<?php echo base_url()?>index.php/admin/login/logout">退出</a>
</div>
<?php echo $this->load->view("admin/footer") ?>
