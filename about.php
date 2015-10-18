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

<div id='wrapper'>

<div id='header'>
<?php include('includes/theme-header.html'); ?>
</div>

<div id='navbar'>
<?php include('includes/theme-navbar.html'); ?>
</div>

<div id='wrap-main'>
<div id='main'><article class="article1">
<h1>About the Orbit theme</h1>
<p>A template with regions for webpages/frameworks built with PHP.</p>

<p><a href='https://github.com/helikopterspark/orbit-theme'>Get the theme on github</a></p>

<p>Demo <a href='http://www.student.bth.se/~carb14/phpmvc/orbit-theme/index.php'>here</a></p>
<hr>

<p>Based on The Semantic Grid System.</p>

<p>Remember to give write rights to the css folder in order for stylephp to create the css file: <code>chmod 777 css</code></p>
 
<p>Built by Carl Ramsell as a part of the phpmvc course at Blekinge Tekniska Högskola.</p>

<p>Photos from the NASA Image Gallery.</p>

<hr>
 
<h3>License</h3>
 
<p>This software is free software and carries a MIT license.</p>

<hr>

<h3>Use of external libraries</h3>

<p>The following external modules are included and subject to its own license.</p>

<h4>lessphp</h4>
<p>with function autocompile by mosbth<br/>
* Website: <a href='https://github.com/mosbth/stylephp'>https://github.com/mosbth/stylephp</a></p>

<h4>Font-Awesome</h4>
<p>* Website: <a href='http://fortawesome.github.io/Font-Awesome/'>http://fortawesome.github.io/Font-Awesome/</a></p>

<h4>The Semantic Grid System</h4>
<p>* Website: <a href='http://tylertate.github.io/semantic.gs/'>http://tylertate.github.io/semantic.gs/</a></p>
</article>
</div>
<div id='sidebar'><article class="article1"><img src='img/blastoff.jpg' alt='Rocket launch' width='100%'/></article></div>
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