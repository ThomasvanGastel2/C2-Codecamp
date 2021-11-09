<!DOCTYPE html>

<!--[if lte 8]><html class="pre-ie9" lang="en"><![endif]-->

<!--[if gte IE 9]><!--><html lang="en"><!--<![endif]-->

<head>

  <title>Hello, world!</title>

  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width,initial-scale=1" />

  <meta name="description" content="" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="style.css" />

  <link rel="icon" href="img/favicon.png">

  <meta name="theme-color" content="">

  <meta property="og:title" content="" />

  <meta property="og:description" content="" />

  <meta property="og:image" content="" />

  <meta name="twitter:card" content="">

  <meta name="twitter:site" content="">

  <meta name="twitter:title" content="">

  <meta name="twitter:description" content="">

  <meta name="twitter:image" content="">

</head>

<body>

  <div id="loader"></div>

  <style>

    /* For best practice, move CSS below to an external CSS file. */

    @keyframes fadeinall {

    0% {

      opacity: 1; }

    97% {

      opacity: 0; }

    98% {

      opacity: 0;

      -webkit-transform: translateY(0);

      transform: translateY(0); }

    99% {

      opacity: 0;

      -webkit-transform: translateY(-100%);

      transform: translateY(-100%); }

    100% {

      opacity: 0;

      z-index: -1; } }

    #loader {

      opacity: 1;

      position: fixed;

      width: 100%;

      height: 100%;

      -webkit-transform: translateY(0);

      -ms-transform: translateY(0);

      transform: translateY(0);

      background-color: #fff;

      z-index: 999;

      -webkit-animation-fill-mode: forwards;

      animation-fill-mode: forwards;

      -webkit-animation: fadeinall 1s normal both;

      animation: fadeinall 1s normal both;

      -webkit-animation-delay: 0.3s;

      animation-delay: 0.3s; }

  </style>

  <div id="cookie-notice" class="w-100 bg-dark text-white pt-3 px-4 pb-1 position-fixed" style="z-index: 1000; bottom: 0;">

    <div class="container p-2">

      <div class="row">

        <div class="col-sm-8 col-md-9">

          <p class="p-2">This website uses cookies so that we can provide you with the best website experience. By clicking “I Accept” you acknowledge the use of cookies and to our <a href="#"><u>Privacy Policy</u></a>.</p> 

        </div>

        <div class="col-sm-4 col-md-3">

          <a class="i-accept btn btn-primary m-2">I Accept</a>

        </div>

      </div>

    </div>

  </div>

  <!--[if IE]><div class="w-100 text-center bg-dark text-white pt-3 px-4 pb-1 position-fixed" style="z-index: 1000; bottom: 0;"><p onClick="parentNode.remove()">Please use a modern browser for a better browsing experience. <span class="float-right">X</span></p></div><![endif]-->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

  <script type="text/javascript">

    (function($){

      $('.i-accept').on('click', function() {   

        if(localStorage.noshow !== '1') {

          $('#cookie-notice').addClass('d-none');

           localStorage.noshow='1';

        }  

      });

      if(localStorage.noshow == '1') {

        $('#cookie-notice').addClass('d-none');

      };

    })(jQuery);

  </script>

  <script type="text/javascript">

  window.onload = function(){

    setTimeout(function(){

      document.getElementById("loader").remove();

    },1000);

  };

  </script>

</body>

</html>