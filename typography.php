<!doctype html>
<html class="no-js" lang='en'>
<head>
<meta charset='utf-8' />
<meta name='viewport' content='width=device-width initial-scale=1' />
<title>Orbit | A website theme</title>
<link rel='icon' href='favicon.ico'/>
<link rel='stylesheet' type='text/css' href='css/style.php'/>

</head>

<body>

<div id='wrapper' class='hovergrid'>

<div id='header'>
<?php include('includes/theme-header.html'); ?>
</div>

<div id='navbar'>
<?php include('includes/theme-navbar.html'); ?>
</div>

<div id='wrap-main'>
<div id='main'><article class="article1"><?php include('includes/typography.html'); ?></article></div>
<div id='sidebar'><article class="article1"><?php include('includes/typography.html'); ?></article></div>
</div>

<div id='footer'>
<?php include('includes/theme-site-footer.html'); ?>
</div>

</div>

<?php if(isset($jquery)):?><script src='<?=$this->url->asset($jquery)?>'></script><?php endif; ?>

<?php if(isset($javascript_include)): foreach($javascript_include as $val): ?>
<script src='<?=$this->url->asset($val)?>'></script>
<?php endforeach; endif; ?>

<?php if(isset($google_analytics)): ?>
<script>
  var _gaq=[['_setAccount','<?=$google_analytics?>'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif; ?>

</body>
</html>