<?php
$running_status = "Started";
$time_start = 1460951266.1134;
$time_complete = null;
require_once(__DIR__."/status.inc.php");

if(empty($time_complete))
  $time_diff = time() - $time_start;
else
  $time_diff = $time_complete - $time_start;
if($running_status == "Complete"){
  $running_class = "success";
  $background_color = "#dff0d8";
} else {
  $running_class = "danger";
  $background_color = "#f2dede";
}

function secondsToTime($s)
{
    $h = floor($s / 3600);
    $s -= $h * 3600;
    $m = floor($s / 60);
    $s -= $m * 60;
    return $h.':'.sprintf('%02d', $m).':'.sprintf('%02d', $s);
}
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">robocopylogs</a>
        </div>

      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" style="background-color: <?php echo "$background_color"; ?>;">
      <div class="container">
        <h1><?php echo "$running_status"; ?></h1>
        <p><strong>Started:</strong> <?php echo date("Y-m-d D H:i:s",$time_start); ?></p>
        <p><strong>Complete:</strong> <?php if(!empty($time_complete)) echo date("Y-m-d D H:i:s",$time_complete); ?></p>
        <p><a class="btn btn-<?php echo $running_class; ?> btn-lg" href="#" role="button"><?php echo secondsToTime($time_diff); ?></a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <?php include(__DIR__."/NetworkShares.inc"); ?>
          <p><a class="btn btn-default" href="NetworkShares-backup.log" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <?php include(__DIR__."/MediaArchive.inc"); ?>
          <p><a class="btn btn-default" href="MediaArchive-backup.log" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <?php include(__DIR__."/robocopylogs.inc"); ?>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2015</p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>
