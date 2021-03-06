<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="AdminDesigns">
<meta name="keywords" content="Classic Admin HTML5 Bootstrap 3 Admin Template UI Theme">
<meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">
<title>ClassicAdmin - A Responsive HTML5 Admin UI Framework</title>

<link rel="shortcut icon" href="<?php echo site_url('assets/img/favicon.ico');?>">

<link rel="stylesheet" type="text/css" href="<?php echo site_url('theme/assets/admin-tools/admin-forms/css/admin-forms.css');?>">

<link rel="stylesheet" type="text/css" href="<?php echo site_url('theme/assets/skin/default_skin/css/theme.css');?>">

<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="external-page sb-l-c sb-r-c">

<div id="main" class="animated fadeIn">

<section id="content_wrapper">

<div id="canvas-wrapper">
<canvas id="demo-canvas"></canvas>
</div>

<section id="content">
<div class="admin-form theme-info mw600" style="margin-top: 13%;" id="login">
<div class="row mb15 table-layout">
<div class="col-xs-6 pln">
<a href="<?php echo site_url('dashboard.html');?>" title="Return to Dashboard">
<img alt="image" src="<?php echo site_url('theme/assets/img/logos/logo_white.png');?>" title="AdminDesigns Logo" class="img-responsive w250 hidden">
</a>
</div>
<div class="col-xs-6 text-right va-b pr5">
<div class="login-links">
<a href="#" class="" title="False Credentials">Not Michael Rowls?</a>
</div>
</div>
</div>
<form class="" id="screenlock">
<div class="panel panel-info panel-border border-top">
<div class="panel-body bg-light pn br-n">
<div class="row table-layout">
<div class="col-xs-3 p20 pv15 va-m br-r bg-light">
<img alt="image" class="br-a bw4 br-grey img-responsive center-block" src="<?php echo site_url('theme/assets/img/avatars/3.jpg');?>" title="AdminDesigns Logo">
</div>
<div class="col-xs-9 p20 pv15 va-m bg-light">
<h3 class="mb5"> Michael Rowls
<small> - logged out for</small>
<b> 5 hours </b>
</h3>
<p class="text-muted"><a href="#" class="__cf_email__" data-cfemail="600d09030801050c120f170c1320030f0d10010e194e030f0d">[email&#160;protected]</a></p>
<div class="section mt25">
<label for="Email" class="field prepend-icon">
<input type="email" name="email" id="email" class="gui-input" placeholder="Enter Email">
<label for="email" class="field-icon">
<i class="fa fa-lock"></i>
</label>
</label>
</div>

</div>
</div>
</div>

</div>
</form>
<input type="submit" name="submit" class="button btn-info pull-right"/>
</div>
</section>

</section>


<div id="dropmenu" class="">
<div class="topbar-menu row">
<div class="col-xs-4 col-sm-2">
<a class="dropmenu-tile tile-danger" href="#">
<div class="tile-inner">
<div class="tile-icon">
<span class="glyphicon glyphicon-inbox"></span>
</div>
<span class="tile-title">Messages</span>
</div>
</a>
</div>
<div class="col-xs-4 col-sm-2">
<a class="dropmenu-tile tile-warning" href="#">
<div class="tile-inner">
<div class="tile-icon">
<span class="glyphicon glyphicon-cog"></span>
</div>
<span class="tile-title">User Settings</span>
</div>
</a>
</div>
<div class="col-xs-4 col-sm-2">
<a class="dropmenu-tile tile-success" href="#">
<div class="tile-inner">
<div class="tile-icon">
<span class="glyphicon glyphicon-user"></span>
</div>
<span class="tile-title">Profile</span>
</div>
</a>
</div>
<div class="col-xs-4 col-sm-2">
<a class="dropmenu-tile tile-primary" href="#">
<div class="tile-inner">
<div class="tile-icon">
<span class="glyphicon glyphicon-book"></span>
</div>
<span class="tile-title">Directory</span>
</div>
</a>
</div>
<div class="col-xs-4 col-sm-2">
<a class="dropmenu-tile tile-alert" href="#">
<div class="tile-inner">
<div class="tile-icon">
<span class="glyphicon glyphicon-pencil"></span>
</div>
<span class="tile-title">Projects</span>
</div>
</a>
</div>
<div class="col-xs-4 col-sm-2">
<a class="dropmenu-tile tile-system" href="#">
 <div class="tile-inner">
<div class="tile-icon">
<span class="glyphicon glyphicon-home"></span>
</div>
<span class="tile-title">Settings</span>
</div>
</a>
</div>
</div>
</div>

</div>



<script data-cfasync="false" src="../../../cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script><script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="<?php echo site_url('theme/vendor/jquery/jquery_ui/jquery-ui.min.js');?>"></script>


<script src="<?php echo site_url('theme/vendor/plugins/canvasbg/canvasbg.js');?>"></script>

<script src="<?php echo site_url('theme/assets/js/utility/utility.js');?>"></script>
<script src="<?php echo site_url('theme/assets/js/demo/demo.js');?>"></script>
<script src="<?php echo site_url('theme/assets/js/main.js');?>"></script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        "use strict";
        
       

        // Init Demo JS
        Demo.init();

        // Init Theme Core
        Core.init();

        // Init CanvasBG and pass target starting location
        CanvasBG.init({
            Loc: {
                x: window.innerWidth / 2.1,
                y: window.innerHeight / 2.3
            },
        });

    });
    </script>

</body>

<!-- Mirrored from admindesigns.com/demos/classic/theme/pages_screenlock.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Apr 2018 10:06:44 GMT -->
</html>