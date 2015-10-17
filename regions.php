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

<div id='wrapper' class='regions hovergrid'>

<div id='header'>
<?php include('includes/theme-header.html'); ?>
</div>

<div id='navbar'>
<?php include('includes/theme-navbar.html'); ?>
</div>

<div id='wrap-flash'>
<div id='flash'>flash</div>
</div>

<div id='wrap-featured'>
 <div id='featured-1'>featured-1</div>
 <div id='featured-2'>featured-2</div>
 <div id='featured-3'>featured-3</div>
</div>

<div id='wrap-main'>
<div id='main'>main</div>
<div id='sidebar'>sidebar</div>
<div id='main-extended'>main-extended</div>

<div id='sidebar-reduced'>sidebar-reduced</div>

<div id='fullpage'>fullpage</div>
</div>

<div id='wrap-triptych'>
 <div id='triptych-1'>triptych-1</div>
 <div id='triptych-2'>triptych-2</div>
 <div id='triptych-3'>triptych-3</div>
</div>


<div id='wrap-footer-col'>
 <div id='footer-col-1'>footer-col-1</div>
 <div id='footer-col-2'>footer-col-2</div>
 <div id='footer-col-3'>footer-col-3</div>
 <div id='footer-col-4'>footer-col-4</div>
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