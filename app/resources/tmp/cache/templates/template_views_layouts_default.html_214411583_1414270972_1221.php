<!doctype html>
<html>
<head>
	<?php echo $this->html->charset();?>
	<title>Travelight, Sell, buy...</title>
	<?php echo $this->html->style(array('bootstrap.min', 'travelight', 'font')); ?>
	<?php echo $this->scripts(); ?>

	<script src="//cdn.jsdelivr.net/algoliasearch/latest/algoliasearch.min.js"></script>
	<?php echo $this->styles(); ?>

 <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-checkbox.css">

  <link rel="stylesheet" type="text/css" href="css/style.css">

	<?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
</head>
<body class="back">

	<div class="content">
		<?php echo $this->content(); ?>
	</div>

	  <script src="//cdn.jsdelivr.net/jquery/1.11.1/jquery.min.js"></script>
  <script src="//cdn.jsdelivr.net/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="//cdn.jsdelivr.net/algoliasearch/latest/algoliasearch.min.js"></script>
  <script src="//cdn.jsdelivr.net/hogan.js/3.0.0/hogan.common.js"></script>
  <script src="js/bootstrap-slider.js"></script>
  <script src="js/bootstrap-checkbox.js"></script>
  <!-- /Dependencies -->
  <script src="js/app.js"></script>


</body>
</html>