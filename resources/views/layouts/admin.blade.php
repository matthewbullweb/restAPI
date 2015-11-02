<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
 <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="author" content="Matthew Bull"/>
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
  <title>Matthew Bull Web - Admin</title>
 </head>
 <body>

	<div id="wrap">
@yield('content')
	</div> <!-- /wrap -->


    <!-- SCRIPT FILES GO HERE --> 
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
@yield('scripts')
    <!-- END OF THE SCRIPT FILES -->