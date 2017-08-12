
<html lang="{{ config('app.locale') }}">

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mobile repair</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fallback For IE 9 [ Media Query and html5 Shim] -->
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>

    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!-- Bootstrap 3.0.3 added, change to bootstrap.min.css and bootstrap-theme.min.css if you need the minified version -->

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="css/animate.css" media="all"  />

    <link rel="stylesheet" href="css/bootstrap.min.css" media="all" />
    {{-- <link rel="stylesheet" href="css/bootstrap-theme.min.css" media="all" /> --}}


    {{-- <link rel="stylesheet" href="css/font-awesome.min.css" media="all" />  ' --}}
    {{-- <link rel="stylesheet" href="css/theme.css"  /> --}}
    {{-- <link href="css/theme2.css" rel="stylesheet"> --}}

    <!-- <link rel="stylesheet" href="css/animate.css"> -->
    <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->

    {{-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:300, 400,600,700|Raleway:400,300,500,700,600,900' rel='stylesheet' type='text/css'> --}}

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css" media="all" />

    {{-- <link rel="stylesheet" id="lz-switcher-style" href="css/switcher-default.css" media="all" /> --}}


    {{-- <script src="js/vendor/modernizr-2.6.2.min.js"></script> --}}
    <!-- DNS Prefetch for Google Hosted libraries, Remove if you don't need that. -->
    {{-- <link rel="dns-prefetch" href="//ajax.googleapis.com"> --}}


</head>
<body >
<!--[if lt IE 7]>
    <p class="browsehappy">We are Extreamly sorry, But the browser you are using is probably from when civilization started. Which is way behind to view this site properly. Please update to a modern browser, At least a real browser. </p>
    <![endif]-->


      @component('headings')

      @endcomponent


    <div class="cblzbody-wrapper">
    <header>
      <!-- Collect the nav links, forms, and other content for toggling -->
    	{{-- <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
    	     <ul class="nav navbar-nav navbar-right">
    		     <li class=""><a href="#">HOME</a> </li>
             <li class=""><a href="/products">STORE</a> </li>
    			   <li class=""><a href="#">CONTACT US</a> </li>
    			   <li class=""><a href="#">REPAIR</a> </li>
    			   <li class=""><a href="#">CONTACT</a> </li>
    		   </ul>
    	</div> --}}
    	<!-- /.navbar-collapse -->
        <div id="lz-headertop" class="lz-headertop" style="margin-top: -20px;">
            <div class="cbx-header-inner" >
                <div class="container" style="height:300px;">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lz-heading text-center" style="margin-top:80px">
                                <h1 class="lz-main-heading  wow bounceIn animated ">Mobile Repair</h1>
                                <p class="lz-sub-heading wow slideInRight">Enter your Voucher Number</p>
                            </div>
                        </div>
                    </div> <!-- //ROW headertop-->
                    <!-- Start Countdown row -->

                    </div>
                    <div class="row " style="margin-bottom:100px; ">
                        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6  ">
                            <div class="lz-subscribe wow slideInRight animated">
                                <form action="/" class="repairstatusform subscribe-form cbx-subscribe-form" role="form">
                                    <div class="input-group cbx-input-group">
                                        <input class="lz-input form-control ticketvalue" type="number" name="ticketno" id="subscribe" placeholder="Enter Your Bill Number(Eg. 5)" required="required">
                                            <span class="input-group-btn">

                                                <button class="btn lz-submit-btn  "   type="submit">
                                                  <div class="loadingimage" style="position:absolute; left:40%; top:30%; display:none;" >

                                                    <img src="/images/products/loading.gif" />
                                                  </div>
                                                  Search</button>



                                            </span>
                                    </div><!-- /input-group -->
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Result detail for ticket number-->
                    <div align="center" class"resultdetail">
                      <div class="resultdata">

                      </div>

                    </div>
                   <footer>
                    <div class="cblz-footer-bottom">
            <div class="cblz-footer-content fadeInDown animated">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <p class="lz-copy text-center">Copyright 2017 © <a href="bla.com"> <strong>Sere</strong></a>.<p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>
    <!-- End Your site ******* or ******* application content here -->
    </div><!-- lzbbones-body end here -->

    <!--  ####### site script content here ######## -->
  </body>
  </html>
    <script type="text/javascript" src="js/vendor/jquery-1.11.1.min.js"></script>
    <!-- load if our contact form or email subscribe options is used -->

    <!-- load bootstrap js -->
    <script src="/js/bootstrap.js" type="text/javascript"></script>

  <script src="/js/jquery-3.2.1.js" type="text/javascript"></script>

<script>
// $(document).ready(function(){
//   $('.loadingimage').hide();
// });

/* attach a submit handler to the form */
          $(".repairstatusform").submit(function(event) {
              $('.loadingimage').show();
            //  $('.searchbar').hide(); //to hide the search bar
              /* stop form from submitting normally */
              event.preventDefault();

              /* get some values from elements on the page: */
              var $form = $(this),
                  term = $form.find('input[name="ticketno"]').val(),
                  url = $form.attr('action');
                  getResult(term);
              // /* Send the data using post */
              // var posting = $.post(url, {
              //     s: term
              // });
              //
              // /* Put the results in a div */
              // posting.done(function(data) {
              //   $('.resultdata').html(data);
              //     // var content = $(data).find('#content');
              //     // $("#result").empty().append(content);
              // });
          });


// $('.repairbtn').on('click',function(e){
//    console.log($(this).attr('action'));
//    var page=$(this).attr('action');
//    var ticketNo=$(".ticketvalue").val(); //fetch the ticketnumber from the form
//    console.log(ticketNo);
//    getResult(ticketNo);
//
//   //  alert($(this).attr('action'));
//
// });

//get the results for given ticket number

function getResult(ticketNo){
  $.ajax({
    asyns:true,
    type:'get',
    url:'/result/?ticketno='+ticketNo

  }).done(function (data){
    $('.resultdata').html(data);
    $('.loadingimage').hide();

    //to remove div when close button clicked
    $(document).on('click','.closestatus',function(){

        $('.resultdata').text('');
        $(".ticketvalue").val("");
        //$('.searchbar').show();
        //location.hash=page;
      //  console.log(data);

    });
    //location.hash=page;
    console.log(data);
  });
}

</script>
