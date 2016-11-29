use Phalcon\Mvc\Url;

$url = new Url();

echo $url->getBaseUri();


<html>
<?php echo $this->partial('partials/header'); ?>

<body>

	<div class="body clearfix">
			
			<p style="font-size:12px;">
			Contact
			</p>
		</div>
	</div>
<?php echo $this->partial('partials/footer'); ?>

</body>
</html>