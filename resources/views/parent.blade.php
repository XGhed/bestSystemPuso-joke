<!DOCTYPE html>
  <html>
    <head>
    <title>@yield('title')</title>
      <!--CSS-->
      <link type="text/css" rel="stylesheet" href="{!!URL::asset('css/materialize.css')!!}"/>
      <link type="text/css" rel="stylesheet" href="{!!URL::asset('css/maintenance.css')!!}"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--JAVASCRIPT -->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </head>

    <body> 
      <div class = "navbar-fixed">
    <nav>
        <div class="nav-wrapper  red accent-2">
     
          <a href="--TAG TO HOME PAGE--" class="brand-logo center">
          
           <img class = "circle" src="icons/Bidding.jpg" style = "width: 70px; height:63px; cursor:default">
          </a>
          <a href="--TAG TO HOME PAGE--" class="brand-logo" style ="left: 15px;">Bidding Management System</a>
        </div>
    </nav>
</div>

      <div class = "container">
        <center>@yield('Maintenance-title')</center>
      </div>


      @yield('Maintenance-body')





      
  <!-- FOOTER -->
  <div class= "page-footer footer-copyright">
  <div class="section grey darken-2">
    <div class="container">
      <h5 class="header">Contact Us</h5>
      <p>Call us: +639 26 735 4975</p>
      <p>Email: GwapoMuming@yahoo.com</p>
      <p>Site: jan lang sa tabi tabi</p>
    </div>
    </div>
  </div>
  <!-- END-FOOTER -->

    </body>
  </html>