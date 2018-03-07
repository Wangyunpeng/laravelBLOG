<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/png" href="favicon.png">

	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./css/feather.min.css">
	<link rel="stylesheet" type="text/css" href="./css/linecons.min.css">
	<link rel="stylesheet" type="text/css" href="./css/ionicons.min.css">
	<link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

	<script src="./js/jquery-2.1.0.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/blocs.min.js"></script>
	<script src="./js/jqBootstrapValidation.js"></script>
	<script src="./js/formHandler.js"></script>
	<script src="./js/jquery.touchSwipe.min.js" defer></script>
  <title> @yield('title')</title>
</head>
<body>
<!-- Main container -->
<div class="page-container">

<!-- bloc-0 -->
@include('layouts._header')
<!-- bloc-0 END -->
<!-- bloc-1 -->
<div class="bloc bgc-ghost-white l-bloc " id="bloc-1">
	<div class="container bloc-sm">
		<div class="row" id="container">
      <div class="col-sm-8">
        @yield('left')
  </div>
  <div class="col-sm-4">
        @include('layouts._right')

    </div>
		</div>
	</div>
</div>
<!-- bloc-1 END -->

<!-- ScrollToTop Button -->
<a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1')"><span class="fa fa-chevron-up"></span></a>
<!-- ScrollToTop Button END-->


<!-- Footer - bloc-9 -->
@include('layouts._footer')
<!-- Footer - bloc-9 END -->

</div>
<!-- Main container END -->


</body>
</html>
