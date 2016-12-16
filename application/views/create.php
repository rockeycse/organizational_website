<?php $this->load->helper('form'); ?>
<html>
<head>
    <title><?php echo $title; ?></title>
</head>
<body>
<?php echo form_open('users/create');?>
<p><?php echo form_input('username');?></p>
<p><?php echo form_input('email');?></p>

<?php echo form_textarea('about');?>
<p><?php echo form_submit('submit','Create');?></p>
</form>
</body>
</html>