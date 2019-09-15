@extends('layouts.dashboard')

@section('content')
<section id="main-content">
	<section class="wrapper">
		<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3 p404 centered">
        <img src="{{asset('assets/img/404.png')}}" alt="">
        <h1>DON'T PANIC!!</h1>
        <h3>The page you are looking for doesn't exist.</h3>
        <br>
       
        <h5 class="mt">Hey, maybe you will be interested in these pages:</h5>
        <p><a href="index.html">Index</a> | <a href="#">Sitemap</a> | <a href="contact.html"> Contact</a></p>
      </div>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
</body>
	</section>
	
</section>
@endsection