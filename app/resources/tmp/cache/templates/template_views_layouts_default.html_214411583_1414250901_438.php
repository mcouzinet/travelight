<!doctype html>
<html>
<head>
	<?php echo $this->html->charset();?>
	<title>Travelight, Sell, buy...</title>
	<?php echo $this->html->style(array('bootstrap.min', 'travelight', 'font')); ?>
	<?php echo $this->scripts(); ?>
	<?php echo $this->styles(); ?>
	<?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
</head>
<body class="back">

	<div class="content">
		<?php echo $this->content(); ?>
	</div>

</body>
</html>