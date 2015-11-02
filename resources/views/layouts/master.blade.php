<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
 <head>
  <!-- <base href="<?= URL::to('/') ?>/public/"> -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="author" content="Matthew Bull"/>
  <meta name="keywords" content="Matthew, Bull, web, design, development"/>
  <meta name="description" content="Personal Website of Matthew Bull showing his skills at webdesign development and his hobbies."/>
  <link rel="canonical" href="http://www.matthewbullweb.co.uk/<?=$page?>"/>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->

  <!-- STYLES GO HERE -->
  {{ HTML::style('http://fonts.googleapis.com/css?family=Roboto:300,500,700') }}
  {{ HTML::style('css/bootstrap.css') }}
  {{ HTML::style('css/non-responsive.css') }}
  {{ HTML::style('css/layout.css') }}
  {{ HTML::style('css/sticky-footer.css') }}
@yield('styles')
  <!-- END OF STYLES -->
  <link rel="shortcut icon" href="{{URL::to('favicon.png')}}">
  <title>Matthew Bull Web</title>
  <!-- ANALYTICS CODE GOES HERE -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-33355605-1', 'matthewbullweb.co.uk');
    ga('send', 'pageview');
  </script>  
  <!-- END OF ANALYTICS CODE -->
 </head>
 <body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header stactic">
          <a class="navbar-brand" href="#"><span>Matthew Bull Web</span></a>
        </div>
        <div class="navbar-collapse">
			<div class="container">
				<ol class="breadcrumb">
					<li<?php if($page=='home') echo ' class="active"';?>><a href="<?= URL::to('/') ?>">HOME</a></li>
					<li<?php if($page=='about-me') echo ' class="active"';?>><a href="<?= URL::to('/about-me') ?>">ABOUT ME</a></li>
					<li<?php if($page=='portfolio') echo ' class="active"';?>><a href="<?= URL::to('/portfolio') ?>">PORTFOLIO</a></li>
					<li<?php if($page=='hobbies') echo ' class="active"';?>><a href="<?= URL::to('/hobbies-and-interests') ?>">HOBBIES AND INTERESTS</a></li>
					<li<?php if($page=='contact') echo ' class="active"';?>><a href="<?= URL::to('/contact') ?>">CONTACT</a></li>
				</ol>
			</div>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<div id="wrap">
@yield('content')
	</div> <!-- /wrap -->

    <div id="footer">
		<div class="footer container">
			<div class="row sitemap" style="margin-bottom:75px;">
			  <div class="col-xs-4 col-md-4">
				<h4>ABOUT ME</h4>
				<a href="<?= URL::to('/about-me#statement') ?>">Persoanl statement</a>
                <a href="<?= URL::to('/about-me#employment') ?>">Employment</a>
				<a href="<?= URL::to('/about-me#skills') ?>">Skills and qualifications</a>
                <a href="<?= URL::to('/about-me#awards') ?>">Awards</a>
			  </div>
			  <div class="col-xs-4 col-md-4">
				<h4>PORTFOLIO</h4>
				<a href="<?= URL::to('/portfolio') ?>">Web design/development</a>
			  </div>
			  <div class="col-xs-4 col-md-4">
				<h4>HOBBIES AND INTERESTS</h4>
				<a href="<?= URL::to('/photos') ?>">Photography</a>
				<a href="<?= URL::to('/hobbies-and-interests') ?>">Art/Drawing</a>
				<a href="<?= URL::to('/hobbies-and-interests') ?>">Animation</a>
				<a href="<?= URL::to('/hobbies-and-interests') ?>">Literature</a>
			  </div>
			</div>
		</div>
		<div class="container">
			<div class="row" style="margin-top:24px;margin-bottom:24px;">
				<div class="col-xs-12 col-md-12 text-center">
					<span style="font-size: 12px;color:#000;">Site designed and developed by&nbsp;Mathew Bull</span>
				</div>
			</div>
		</div>
    </div>

    <!-- SCRIPT FILES GO HERE --> 
    {{HTML::script('js/jquery-2.1.1.min.js')}}
    {{HTML::script('js/bootstrap.min.js')}}
@yield('scripts')
    <!-- END OF THE SCRIPT FILES -->