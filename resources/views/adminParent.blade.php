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

<div class="row">

      <div class="col s2">
      <!--*******************SIDE NAVIGATOR PANEL********************************************* -->
<ul class="side-nav fixed">
   <div class = "red lighten-3">	
        <center><img src="icons/Bidding_logo.png" alt="" class="circle responsive-img"></center>
        <center><p>Hello fucker!</p></center>
   </div>
   <div class ="grey lighten-2">
      <li><a href="#!">Dashboard</a></li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header"><i class="mdi-navigation-arrow-drop-down right"></i>Maintenance</a>
            <div class="collapsible-body grey lighten-2">
              <ul>
                <li><a href="#!">Suppliers</a></li>
                <li><a href="#!">Accounts</a></li>
                <li><a href="#!">Items</a></li>
                <li><a href="#!">Payment</a></li>
                <li><a href="#!">Bidding schedule</a></li>
                <li><a href="#!">Delivery</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
      <li><a href="#!">Queries</a></li>
      <li><a href="#!">Reports</a></li>
      <li><a href="#!">Utilities</a></li>
      <br>
      <br>
      <br>
      <li><a href="#!" class = "right">Log-Out</a></li>
    </div>
    </ul>
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      </div>
 <!--*******************SIDE NAVIGATOR PANEL********************************************* -->

      <div class="col s10 container" >
        <div class = "container">
				@yield('dashboard')
				@yield('supplier')
        @yield('accounts')
        @yield('items')
        @yield('payment')
		</div>
      </div>

    </div>

</body>
</html>
