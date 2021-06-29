<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> 
	<?php if($error = $this->session->flashdata('Login Failed')): ?>
		<div style="color: red;">
		 <?php echo  $error; ?>
		</div>
	<?php endif; ?>
<?= form_open('admin/user_login'); ?>
<?= form_label('USER NAME'); ?>
<br><br>
<?= form_input(['type'=>'text','placeholder'=>'USER NAME','name'=>'username']); ?>
<div style="margin-top:-35px; margin-left:180px; color:red; ">
	<span><?= form_error('username'); ?></span>
</div>
<br><br>
<?= form_label('PASSWORD'); ?>
<br><br>
<?= form_input(['type'=>'password','placeholder'=>'PASSWORD','name'=>'password']); ?>
<div style="margin-left: 180px; margin-top: -35px; color: red;">
	<span><?= form_error('password'); ?></span>
</div>
<br><br>
<?= form_submit(['type'=>'submit','value'=>'Login']); ?>
</body>
</html>