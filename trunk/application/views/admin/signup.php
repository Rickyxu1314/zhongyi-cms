<title>会员注册</title>
<?php echo form_open('index.php/admin/member/register')?>
<p>用户名:<?php echo form_input('m_name',set_value('username'))?><?php echo form_error('username'); ?></p>
<p>密码:<?php echo form_password('m_pwd')?><?php echo form_error('password'); ?></p>
<p>重复密码:<?php echo form_password('m_pwdcomf')?><?php echo form_error('password2'); ?></p>
<p><?php echo form_submit('submit','注册')?></p>
<?php echo form_close()?>
<?php echo anchor('index.php/login','登录')?>