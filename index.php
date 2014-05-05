<?php
$all_dirs = scandir('/usr/local/projects');
$hide_dirs = array(
  '.',
  '..',
  'workshop',
  'current',
  'geoserver',
  'henshaw',
  'holsinger',
  'hotchkiss',
  'lovecraft',
  'maps',
  'neatline',
  'neatline-uva.org',
  'sandbox',
  'to_delete'
);
$dirs = array_diff($all_dirs, $hide_dirs);
?>
<!doctype html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Neatline@UVa Projects</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/custom.css">
<style>
.project { width: 25%; }
</style>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<div class="jumbotron masthead">
  <div class="container">
    <h1>UVA Faculty Neatline Projects</h1>
    <p>Neatline in the Classroom</p>

    <div id="projects">
    <?php foreach($dirs as $dir): ?>
      <div class="project"><a class="btn action orange" href="http://<?php echo $dir;  ?>.neatline-uva.org/"><?php echo strtoupper($dir); ?></a></div>
    <?php endforeach; ?>
    </div>

  </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>

<script>
$(document).ready(function() {
  $('#projects').isotope({
    itemSelector: '.item',
    layoutMode: 'masonry'
  });
});
</script>

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-50671828-1', 'neatline-uva.org');ga('send', 'pageview');
</script>
    </body>
</html>
