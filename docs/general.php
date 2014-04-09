<?php include('includes/head.php'); ?>

<div class="page-header" style="height:200px;">
	<div class="container">
		<div class="page-header-content column-1"><h1 class="page-title">General</h1></div>
	</div>
</div>

<div id="general" class="content" class="row">
<div class="container">
<div class="row">

<div class="column-1-4">
	<div class="side-nav">
		<ul>
			<li><a href="#general">General</a></li>
			<li><a href="#template">Basic Template</a></li>
			<li><a href="#media-queries">Media Queries</a></li>
			<li><a href="#typography">Typography</a></li>
		</ul>
	</div>
</div>

<div class="column-3-4">


<!-- Structure -->
<div class="panel">
	<h2 id="general" class="section-title">General</h2>
	<h3 class="section-sub-title">Structure</h3>
	<pre><code class="hljs html"><?php echo htmlentities('<div class="[element] [behaviour] [style]">...</div>'); ?></code></pre>

	<h3 class="section-sub-title">Viewport</h3>
	<p>To ensure proper rendering and touch zooming, add the viewport meta tag to your <code>&lt;head&gt;</code>.</p>
	<pre><code class="hljs html"><?php echo htmlentities('<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">'); ?></code></pre>

	<h3 class="section-sub-title">Responsive Images</h3>
	<p>Images in Turret can be made responsive-friendly via the addition of the <code>.responsive</code> class. This applies <code>max-width: 100%;</code> and <code>height: auto;</code> to the image so that it scales nicely to the parent element.</p>
	<pre><code class="hljs html"><?php echo htmlentities('<img src="..." class="responsive" />'); ?></code></pre>
</div>

<!-- Media Queries -->
<div class="panel">
	<h2 id="media-queries" class="section-title">Media Queries</h2>
	<p>We use the following media queries in LESS files to create the key breakpoints.</p>
	<pre><code class="hljs css">
<?php echo htmlentities('@small: ~"(max-width: 767px)";
@medium: ~"(max-width: 1024px)";
@only_medium: ~"(min-width: 768px) and (max-width: 1024px) and (orientation: portrait)";
@medium_landscape: ~"(min-width: 768px) and (max-width: 1024px) and (orientation: landscape)";
@large: ~"(min-width: 1025px)";
@only_large: ~"(min-width: 1025px) and (max-width: 1279px)";
@extra_large: ~"(min-width: 1280px)";

@retina: ~"only screen and (-webkit-min-device-pixel-ratio: 1.5)",
~"only screen and (min--moz-device-pixel-ratio: 1.5)",
~"only screen and (-o-min-device-pixel-ratio: 3/2)",
~"only screen and (min-device-pixel-ratio: 1.5)";'); ?>
</code></pre>
</div>

<!-- Basic Template -->
<div class="panel">
	<h2 id="template" class="section-title">Basic Template</h2>
	<p>Turret styles are compiled into <code>main.css</code> in the <code>/css</code> directory. Mobile first responsive styles require the viewport to be <code>width=device-width</code>, <code>initial-scale=1.0</code>, <code>maximum-scale=1.0</code>, and <code>user-scalable=no</code>. Turret components require JQuery. Optional support for IE8 requires <code>HTML5Siv.js</code> and <code>respond.js</code></p>
<pre><code class="hljs html"><?php echo htmlentities('<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Turret Template</title>

	<!-- Turret -->
	<link rel="stylesheet" type="text/css" href="css/main.css" />

	<!-- Respond.js IE8 support of media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<h1>Hello, world!</h1>

	<!-- JQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script>window.jQuery || document.write(\'<script src="../lib/jquery-1.10.1.min.js"><\/script>\')</script>

	<!-- Components -->
	<script src="../js/jquery.easing.js"></script>
	<script src="../js/jquery.scrolltop.js"></script>
	<script src="../js/jquery.gmap.js"></script>
	<script src="../js/jquery.slides.js"></script>
</body>
</html>'); ?></code></pre>
</div>

<!-- Typography -->
<div class="panel">
	<h2 id="typography" class="section-title">Typography</h2>
	<h3 class="section-sub-title">Headings</h2>
	<h1>Heading 1</h1>
	<h2>Heading 2</h2>
	<h3>Heading 3</h3>
	<h4>Heading 4</h4>
	<h5>Heading 5</h5>
	<h6>Heading 6</h6>
	<h3 class="section-sub-title">Paragraph Styles</h3>
	<p>Lorem ipsum dolor sit amet, consectetur <strong>strong</strong> adipisicing elit, sed do eiusmod tempor <em>italicized</em> incididunt ut labore et dolore magna aliqua.</p>
	<pre><code class="hljs html"><?php echo htmlentities('<p>Lorem ipsum dolor sit amet, consectetur <strong>strong</strong> adipisicing elit, sed do eiusmod tempor <em>italicized</em> incididunt ut labore et dolore magna aliqua.</p>'); ?></code></pre>
	<h3 class="section-sub-title">Paragraph Lead Style</h3>
	<p class="lead">Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
	<pre><code class="hljs html"><?php echo htmlentities('<p class="lead">Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>'); ?></code></pre>
	<h3 class="section-sub-title">Blockquote</h2>
	<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</blockquote>
	<pre><code class="hljs html"><?php echo htmlentities('<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</blockquote>'); ?></code></pre>
</div>

<!-- Colours -->
<div class="panel">
	<h2 id="colours" class="section-title">Colours</h2>
	<h3 class="section-sub-title">General</h3>
	<div class="row">
		<div class="color column-1-6">
			<div class="swatch white"></div>
			<small>White</small>
		</div>
		<div class="color column-1-6">
			<div class="swatch lightgrey"></div>
			<small>Light Grey</small>
		</div>
		<div class="color column-1-6">
			<div class="swatch midgrey"></div>
			<small>Mid Grey</small>
		</div>
		<div class="color column-1-6">
			<div class="swatch grey"></div>
			<small>Grey</small>
		</div>
		<div class="color column-1-6">
			<div class="swatch darkgrey"></div>
			<small>Dark Grey</small>
		</div>
		<div class="color column-1-6">
			<div class="swatch black"></div>
			<small>Black</small>
		</div>
	</div>

	<!-- Indicators -->
	<h3 class="section-sub-title">Indicators</h3>
	<div class="row">
		<div class="color column-1-6">
			<div class="swatch error"></div>
			<small>Error</small>
		</div>
		<div class="color column-1-6">
			<div class="swatch warning"></div>
			<small>Warning</small>
		</div>
		<div class="color column-1-6">
			<div class="swatch success"></div>
			<small>Success</small>
		</div>
	</div>

	<!-- Palette -->
	<h3 class="section-sub-title">Palette</h3>
	<div class="row">
		<div class="color column-1-6">
			<div class="swatch light"></div>
			<small>Light</small>
		</div>
		<div class="color column-1-6">
			<div class="swatch primary"></div>
			<small>Primary</small>
		</div>
		<div class="color column-1-6">
			<div class="swatch secondary"></div>
			<small>Secondary</small>
		</div>
		<div class="color column-1-6">
			<div class="swatch dark"></div>
			<small>Dark</small>
		</div>
	</div>
</div>

</div>
</div>

<?php include('includes/footer.php'); ?>