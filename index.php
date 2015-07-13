<?php
$all_dirs = scandir('/usr/local/projects');

$hide_dirs = array(
  '.',
  '..',
  'workshop',
  'current',
  'example',
  'geoserver',
  'henshaw',
  'holsinger',
  'hotchkiss',
  'lovecraft',
  'maps',
  'neatline',
  'neatline_staging',
  'neatline-uva.org',
  'sandbox',
  'scholarslab.org',
  'static.scholarslab.org',
  'to_delete',
  'uvasci.org',
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
    <p>Scholars' Lab at the University of Virginia Library supports UVa faculty who wish to use Omeka + Neatline in their classrooms by setting up class sites and providing focused training and ongoing support for the faculty member, their TA, and their students.</p>
  <p>Departments and programs of our faculty collaborators include African American Studies, American Studies, Architecture, Architectural History, Art, English, Urban and Environmental Planning, and Women Gender and Sexuality.
</p>
  <p>If you are a UVa faculty member or instructor and would like to consult with us about integrating Omeka + Neatline into a class, please email us at <a href="mailto:scholarslab@virginia.edu">scholarslab@virginia.edu</a>.</p>
    <div id="projects">
    <?php foreach($dirs as $dir): ?>
      <div class="project"><a class="btn action orange" href="http://<?php echo $dir;  ?>.neatline-uva.org/"><?php echo strtoupper($dir); ?></a></div>
    <?php endforeach; ?>
    </div>

  </div>
</div>

<footer class="footer">
<div class="container">
  <p class="pull-right"><a href="#">Back to top</a></p>
  <p><a href="http://neatline.org">Neatline</a> is a project of the <a href="http://scholarslab.org">Scholars' Lab</a> at the <a href="http://www.virginia.edu">University of Virginia</a></p>
</div>
</footer>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>

<script>
$(document).ready(function() {
  $('#projects').isotope({
    itemSelector: '.project',
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
