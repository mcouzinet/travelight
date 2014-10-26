<!doctype html>
<html>
<head>
	<?php echo $this->html->charset();?>
	<title>Travelight, Sell, buy...</title>
	<?php echo $this->html->style(array('bootstrap.min', 'travelight', 'bootstrap-slider', 'bootstrap-checkbox')); ?>
	<?php echo $this->scripts(); ?>
	<?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
</head>
<body class="back">

	<div class="content">
		<?php echo $this->content(); ?>
	</div>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&sensor=false&key=AIzaSyDmtOKA8ckDlwGGCqojSTcsX-j00gdg8iI"></script>
    <script src="//cdn.jsdelivr.net/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/algoliasearch/latest/algoliasearch.min.js"></script>
    <script src="//cdn.jsdelivr.net/hogan.js/3.0.0/hogan.common.js"></script>
    <script src="/js/bootstrap-slider.js"></script>
    <script src="/js/bootstrap-checkbox.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/travelight.js"></script>

</body>
</html>