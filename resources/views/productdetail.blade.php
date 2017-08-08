<head>

<title>{{$productdata->title}}</title>
<link href = "css/bootstrap.css" rel = "stylesheet">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Title here -->


<!-- Bootstrap Core CSS -->
<link href="css1/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="css1/bootstrap-responsive.css">

<!-- Custom Css -->


<link rel="stylesheet" href="{{ asset('css1/custom-styles.css')}}">
<link rel="stylesheet" href="{{ asset('css/animate.css')}}" media="all"  />
<link href="{{ asset('css1/main.css')}}" rel="stylesheet">
<link href="{{ asset('css1/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('css1/theme.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css2/main.css')}}">
<link href="{{ asset('css2/custom.css')}}" rel="stylesheet">
<link href="{{ asset('css1/styled.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css1/custom-styles.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" media="all" />
      <link rel="stylesheet" href="{{ asset('css2/bootstrap.css')}}" media="all" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css')}}" media="all" />
      <link href="{{ asset('css/theme2.css')}}" rel="stylesheet">
       <link href="{{ asset('css2/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}" media="all" />  '

      <link rel="stylesheet" href="{{ asset('css/social.css')}}">
     {{-- <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> --}}
       {{-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script> --}}


<!-- Custom Fonts -->
{{-- <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"> --}}
       <link rel="stylesheet" href="{{ asset('css/style.css')}}" media="all" />

    <link rel="stylesheet" id="lz-switcher-style" href="{{ asset('css/switcher-default.css')}}" media="all" />


    <script src="{{ asset('js/vendor/modernizr-2.6.2.min.js')}}"></script>
</head>
<body>

  <div class="cblzbody-wrapper">
          <header>
          <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="padding-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
  <div class="container">

  	<div class="navbar-header">
  		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
  		<i class="fa fa-bars"></i>
  		</button>
  	<a class="navbar-brand" href="#">Mobile Repair</a>
  	</div>

  	<!-- Collect the nav links, forms, and other content for toggling -->
  	<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
  	     <ul class="nav navbar-nav navbar-right">
  		     <li class=""><a href="../">HOME</a> </li>
           <li class=""><a href="/products">STORE</a> </li>
  			   <li class=""><a href="#">CONTACT US</a> </li>
  			   <li class=""><a href="#">REPAIR</a> </li>
  			   <li class=""><a href="#">CONTACT</a> </li>
  		   </ul>
  	</div>
  	<!-- /.navbar-collapse -->
  </div>
  <!-- /.container -->
  </nav>


  	<!-- Intro Header -->
  	<div id="lz-headertop" class="lz-headertop" >
                  <div class="cbx-header-inner" style="height:300px">
                      <div class="container1" >
                          <div class="row">
                              <div class="col-xs-12">
                                  <div class="lz-heading text-center">
                                      <h1 class="lz-main-heading  wow bounceIn animated ">Mobile Shop</h1>
                                      <p class="lz-sub-heading wow slideInRight">Product Details</p>
                                  </div>
                              </div>
                          </div> <!-- //ROW headertop-->
                          <!-- Start Countdown row -->

                          </div>

                  </div> <!-- //HEADER inner -->
              </div> <!-- //HEADER TOP -->
          </header>

  	  <div class="section">
  	    	<div class="container1">
  				<div class="row">
  				<div class="col-sm-3">
  				<img class="img-responsive" src="/images/products/{{$productdata->imagename}}" onerror="this.src='/images/products/default.jpg'"  width="200%" alt="{{$productdata->title}}">
  				</div>
  				<div class="col-sm-6" style=" margin-bottom:30px;  border-radius:5px;">
  						<h2>{{$productdata->title}} </h2>
  						<h3> {{$productdata->brand}}</h3>
  						<div  style=" background-color:#c3c3c3; border-radius:5px; margin-left:20px; margin:0px 20px 20px 20px ; padding: 20px" >
  							<p style="  border-radius:5px; font-size:15px; font-weight:bold;"> Screen:{{$productdata->Sizeinch}}"</p>
  							<p style="  border-radius:5px; font-size:15px; font-weight:bold;"> Android:{{$productdata->Osvalue}}</p>
  							<p style="  border-radius:5px; font-size:15px; font-weight:bold; "> RAM:{{$productdata->RamSize}} GB</p>
                @if ($productdata->discount >0)
                  <div>
                    <span class="discount-price price  " style="font-size24; ">Rs. {{$productdata->price - ($productdata->discount * 0.01 *$productdata->price) }}</span>
                    <span class="old-price price " style="font-size:14;"> Rs {{$productdata->price}} </span>
                  </div>
                  {{-- <p style="  border-radius:5px; font-size:15px; font-weight:bold; "> Price:<strike>Rs. {{$productdata->price}} MP</strike></p> --}}
                  {{-- <p style="  border-radius:5px; font-size:15px; font-weight:bold; "> New Price:Rs. {{$productdata->price - ($productdata->discount * 0.01 *$productdata->price) }} </p> --}}
                @else
                  <p style="  border-radius:5px; font-size:15px; font-weight:bold; "> Price:Rs. {{$productdata->price}} MP</p>

                @endif


  							</div>



                <hr>

           <section  >
          <div class="container1 col-sm-8" >
              <div class="row" >
                  <div class="board" style="padding-left:80px;">
                      <!-- <h2>Welcome to IGHALO!<sup>�</sup></h2>-->
                      <div class="board-inner" >
                      <ul class="nav nav-tabs" id="myTab" >

                       <li class="active" style="width: 170px;">
                       <a href="#spec" data-toggle="tab" title="spec">
                        <span class="btn btn-main btn-lg">
                                <i class="glyphicon"><h6>Specification</h6></i>
                        </span>
                    </a></li>

                    <li style="width: 170px;"><a href="#rev" data-toggle="tab" title="reviews">
                       <span class="btn btn-main btn-lg">
                           <i class="glyphicon"><h6>Reviews</h6></i>
                       </span>
             </a> </li>

                       </ul></div>

                       <div class="tab-content col-md-12" style="text-align:center;">
                        <div class="tab-pane fade in active" id="spec" style="margin:10px">

                            <h2>Company And Model </h2>
  						<h3> Specifications</h3>
  						<div  style=" background-color:#EEE; border-radius:5px; margin-left:20px; margin:0px 20px 20px 20px ; padding: 20px" >
  							<p style="  border-radius:5px; font-size:15px; font-weight:bold;"> Spec:Bla</p>
  							<p style="  border-radius:5px; font-size:15px; font-weight:bold;"> Spec:Bla</p>
  							<p style="  border-radius:5px; font-size:15px; font-weight:bold; "> Spec:Bla</p>
  							<p style="  border-radius:5px; font-size:15px; font-weight:bold; "> Spec:Bla</p>
  							</div>



                        </div>
                        <div class="tab-pane fade" id="rev" style="margin:10px">

                            <h3 class="head text-center">blup</h3>
                            <p class="narrow text-center">
                                Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                            </p>



                        </div>

  <div class="clearfix"></div>
  </div>

  </div>
  </div>
  </div>

  </section>
  	</div>
  <hr>
   <div class="col-sm-3 blog-sidebar" style="width:23%;">
           <h3 style=" font-size:20px;" >Recommended Products</h3>
            <div class="grid">
                  @foreach ($suggestedproducts as $suggestedproduct)
                    @if ($suggestedproduct)
                      <figure class="portfolio-item" style="margin:10px; width:100%; ">
        								<img style"size:cover;" src="/images/products/{{$suggestedproduct->imagename}}" onerror="this.src='/images/products/default.jpg'"  alt="{{$suggestedproduct->title}}"/>
                        <b style="color:white; size:12px;">{{$suggestedproduct->price}}</b>
        								<figcaption style="text-align:center;">
        							<a href="/products/{{$suggestedproduct->productid}}" class=" c2a btn btn-main " style=" margin-bottom:20px; width:50%;">Read More</a>

        								</figcaption>
        									</figure>
        								<hr>
                    @endif
                  @endforeach


{{--
  								<figure class="portfolio-item" style="margin:10px; width:100%; ">
  								<img src="img/latest7.png" alt=""/> <b style="color:white; size:12px;">Discount 10%</b>
  								<figcaption style="text-align:center;">
  							<a href="#" class=" c2a btn btn-main " style=" margin-bottom:20px; width:50%;">Read More</a>

  								</figcaption>
  									</figure>
  								<hr>
  								<figure class="portfolio-item" style="margin:10px; width:100%; ">
  								<img src="img/latest7.png" alt=""/><b style="color:white; size:12px;">Discount 10%</b>
  								<figcaption style="text-align:center;">
  							<a href="#" class=" c2a btn btn-main " style=" margin-bottom:20px; width:50%;">Read More</a>

  								</figcaption>
  									</figure>
  								<hr>
  								<figure class="portfolio-item" style="margin:10px; width:100%; ">
  								<img src="img/latest7.png" alt=""/><b style="color:white; size:12px;">Discount 10%</b>
  								<figcaption style="text-align:center;">
  							<a href="#" class=" c2a btn btn-main " style=" margin-bottom:20px; width:50%;">Read More</a>

  								</figcaption>
  									</figure>
  								<hr> --}}

  								</div>
           </div>
           </div>
                </div>

                <footer>

              <div class="cblz-footer-bottom" >
                  <div class="cblz-footer-content wow fadeInDown animated">
                      <div class="container">
                          <div class="row">
                              <div class="col-xs-12">
                                  <p class="lz-copy text-center">Copyright 2017 © <a href=""> <strong>SERE</strong></a>.<p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </footer>


          <!-- Javascripts -->
          {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> --}}
          <script>window.jQuery || document.write('<script src="{{ asset('js1/jquery-1.9.1.min.js')}}"><\/script>')</script>
          <script src="{{ asset('js1/bootstrap.min.js')}}"></script>

  		<!-- Scrolling Nav JavaScript -->
  		<script src="{{ asset('js1/jquery.easing.min.js')}}"></script>
  		<script src="{{ asset('js1/scrolling-nav.js')}}"></script>

<style>

.price .old-price{
  color:#747474;
  text-decoration: line-through;
}
.price .discount-price{
  color:#e31711;

}
</style>


</body>
