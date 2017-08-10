<head>

<title>{{$productdata[0]->title}}</title>
<link href = "css/bootstrap.css" rel = "stylesheet">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Title here -->
<meta name="csrf-token" content="{{ csrf_token() }}">

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
           <!-- Right Side Of Navbar -->
           <ul class="nav navbar-nav navbar-right">
               <!-- Authentication Links -->
               @if (Auth::guest())
                 <li class=""><a href="/home">CART<span class="badge">0</span></a></li>

                   <li><a href="{{ route('login') }}">Login</a></li>
                   <li><a href="{{ route('register') }}">Register</a></li>
               @else
                 <li class=""><a href="/home">CART<span class="badge">{{ Auth::user()->cart}}</span></a></li>

                   <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                           {{ Auth::user()->name }} <span class="caret"></span>
                       </a>

                       <ul class="dropdown-menu" role="menu">
                           <li>
                               <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                   Logout
                               </a>

                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                   {{ csrf_field() }}
                               </form>
                           </li>
                       </ul>
                   </li>
               @endif
           </ul>

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
  				<img class="img-responsive" src="/images/products/{{$productdata[0]->imagename}}" onerror="this.src='/images/products/default.jpg'"  width="200%" alt="{{$productdata[0]->title}}">
  				</div>
  				<div class="col-sm-6" style=" margin-bottom:30px;  border-radius:5px;">
  						<h2>{{$productdata[0]->title}} </h2>
  						<h3> {{$productdata[0]->brand}}</h3>
  						<div  style=" background-color:#dba8a8; border-radius:5px; margin-left:20px; margin:0px 20px 20px 20px ; padding: 20px" >
                <div style="display:flex">

  							<p style="  border-radius:5px; font-size:15px; font-weight:bold;"> Screen:{{$productdata[0]->Sizeinch}}"</p>
                <p  style="margin-left:40%; border-radius:5px; font-size:15px; font-weight:bold;"> Stock:
                  @if($productdata[0]->stock>0)
                  {{$productdata[0]->stock}}
                @else
                  Out of Stock
                @endif
                </p>

              </div>
  							<p style="  border-radius:5px; font-size:15px; font-weight:bold;"> {{$productdata[0]->osname}}:{{$productdata[0]->osvalue}} ({{$productdata[0]->osdetail}})</p>
  							<p style="  border-radius:5px; font-size:15px; font-weight:bold; "> RAM:{{$productdata[0]->RamSize}} GB</p>
                @if ($productdata[0]->discount >0)
                  <div>
                    <strong><span class="bg-success" style="font-size:24px; ">Rs. {{$productdata[0]->price - ($productdata[0]->discount * 0.01 *$productdata[0]->price) }}</span></strong>
                    <s><span class="bg-info" style="font-size:14px;"> Rs {{$productdata[0]->price}} </span></s>
                  </div>
                  {{-- <p style="  border-radius:5px; font-size:15px; font-weight:bold; "> Price:<strike>Rs. {{$productdata[0]->price}} MP</strike></p> --}}
                  {{-- <p style="  border-radius:5px; font-size:15px; font-weight:bold; "> New Price:Rs. {{$productdata[0]->price - ($productdata[0]->discount * 0.01 *$productdata[0]->price) }} </p> --}}
                @else
                  <p style="  border-radius:5px; font-size:24px; ">Rs. {{$productdata[0]->price}}</p>

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

                       <div class="tab-content col-md-16" style="text-align:center;width:150%">
                        <div class="tab-pane fade in active" id="spec" style="margin:10px">
                          {{--
                          ##############################
                          This is specification section
                          ##############################
                          --}}

                            {{-- <h2>Company And Model </h2>
  						<h3> Specifications</h3>
  						<div  style=" background-color:#EEE; border-radius:5px; margin-left:20px; margin:0px 20px 20px 20px ; padding: 20px" >
  							<p style="  border-radius:5px; font-size:15px; font-weight:bold;"> Spec:Bla</p>
  							<p style="  border-radius:5px; font-size:15px; font-weight:bold;"> Spec:Bla</p>
  							<p style="  border-radius:5px; font-size:15px; font-weight:bold; "> Spec:Bla</p>
  							<p style="  border-radius:5px; font-size:15px; font-weight:bold; "> Spec:Bla</p>
  							</div> --}}
                        <table class="table" align="left">

                            <tr>
                              <th>Model</th>
                              <th>{{$productdata[0]->title}}</th>
                            </tr>
                            <tr>
                              <th>Manufacturer</th>
                              <th>{{$productdata[0]->brand}}</th>
                            </tr>
                            <tr>
                              <th>OS</th>
                              <th>{{$productdata[0]->osname}}</th>
                            </tr>
                            <tr>
                              <th>OS Version</th>
                              <th>{{$productdata[0]->osvalue}}({{$productdata[0]->osdetail}})</th>
                            </tr>
                            <tr>
                              <th>Network</th>
                              <th>{{$productdata[0]->Network}}</th>
                            </tr>
                            <tr>
                              <th>Dimension</th>
                              <th>{{$productdata[0]->Dimensions}}</th>
                            </tr>
                            <tr>
                              <th>Screen</th>
                              <th>{{$productdata[0]->Sizeinch}}"</th>
                            </tr>
                            <tr>
                              <th>Resolution</th>
                              <th>{{$productdata[0]->Resolution}}</th>
                            </tr>
                            <tr>
                              <th>SIM</th>
                              <th>{{$productdata[0]->SIM}}</th>
                            </tr>
                            <tr>
                              <th>Weight</th>
                              <th>{{$productdata[0]->Weight}}</th>
                            </tr>
                            <tr>
                              <th>CPU</th>
                              <th>{{$productdata[0]->CPU}}</th>
                            </tr>
                            <tr>
                              <th>GPU</th>
                              <th>{{$productdata[0]->GPU}}</th>
                            </tr>
                            <tr>
                              <th>Internal Memory</th>
                              <th>{{$productdata[0]->InternalSize}} GB</th>
                            </tr>
                            <tr>
                              <th>Externam Memory</th>
                              <th>{{$productdata[0]->External}}</th>
                            </tr>
                            <tr>
                              <th>RAM</th>
                              <th>{{$productdata[0]->RamSize}} GB</th>
                            </tr>
                            <tr>
                              <th>Primary Camera</th>
                              <th>{{$productdata[0]->PrimaryMP}} MP</th>
                            </tr>
                            <tr>
                              <th>Secondary Camera</th>
                              <th>{{$productdata[0]->Secondary}}</th>
                            </tr>
                            <tr>
                              <th>Features</th>
                              <th>{{$productdata[0]->Features}}</th>
                            </tr>

                            <tr>
                              <th>WLAN</th>
                              <th>{{$productdata[0]->WLAN}}</th>
                            </tr>
                            <tr>
                              <th>Bluetooth</th>
                              <th>{{$productdata[0]->Bluetooth}}</th>
                            </tr>
                            <tr>
                              <th>GPS</th>
                              <th>{{$productdata[0]->GPS}}</th>
                            </tr>
                            <tr>
                              <th>Radio</th>
                              <th>{{$productdata[0]->Radio}}</th>
                            </tr>
                            <tr>
                              <th>USB</th>
                              <th>{{$productdata[0]->USB}}</th>
                            </tr>
                            <tr>
                              <th>Sensors</th>
                              <th>{{$productdata[0]->Sensors}}</th>
                            </tr>
                            <tr>
                              <th>Battery</th>
                              <th>{{$productdata[0]->battery}} mAh</th>
                            </tr>

                            <tr>
                              <th>Views</th>
                              <th>{{$productdata[0]->popularity}}</th>
                            </tr>
                        </table>



                        </div>
                        <div class="tab-pane fade" id="rev" style="margin:10px">
{{--
                            <h3 class="head text-center">blup</h3>
                            <p class="narrow text-center">
                                Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                            </p> --}}
                            {{--
                            #######################
                            This is review section
                            #######################
                            --}}
                            <div class="container" style="width:inherit">
                              <div class="row">
                                @foreach ($reviews as $review)


                                <div class=" col-md-5 block-text rel zmin" style="margin:5px; background-color:#dba8a8; border-radius:5px; margin-left:20px; margin:0px 20px 20px 20px ; padding: 20px">
                                        <p title="" class="font-awesome text-primary" >{{$review->username}}</p>
                                               <div class="mark text-warning">rating:{{$review->rating}}

                                              </div>
                                                 <p>{{$review->reviewtext}}</p>

                                </div>
                              @endforeach

                              </div>
                            </div>

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
