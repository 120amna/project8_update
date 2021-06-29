<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if($errors=$this->session->flashdata('Login Failed')): ?>
		<div style="color: red;">
			<?php echo $errors; ?>
		</div>
	<?php endif; ?> 
<?= form_open('admin/login'); ?>
<?= form_label('USER NAME'); ?>
<br><br>
<?= form_input(['type'=>'text','placeholder'=>'USER NAME','name'=>'user']); ?>
<div style="margin-top: -35px; margin-left:180px; color: red;">
<span><?= form_error('user'); ?></span>
</div>
<br><br>
<?= form_label('PASSWORD'); ?>
<br><br>
<?= form_input(['type'=>'password','placeholder'=>'PASSWORD','name'=>'pass']); ?>
<div style="margin-left: 180px; margin-top:-35px; color: red;">
<span><?= form_error('pass'); ?></span>
</div>
<br><br>
<?= form_submit(['type'=>'submit','value'=>'Login']); ?>
</body>
</html>