<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Picceo</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('all');
		echo $this->Html->css('login');
		echo $this->Html->css('toast_jquery');
		echo $this->Html->css('admin');
		echo $this->Html->css('admin-expand');
        echo $this->Html->css('dataTables');
		echo $this->Html->script('dataTables');
		echo $this->Html->script('all');
		echo $this->Html->script('users');
		echo $this->Html->script('admin');
		//echo $this->Html->css('cake.generic');
		echo $this->Html->script('toast_jquery');
		echo $this->fetch('meta');
		echo $this->fetch('script');
	?>
</head>
<body>
			<?php echo $this->Flash->render(); ?>
			<?php echo $this->fetch('content'); ?>
</body>
</html>
