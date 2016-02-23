<!DOCTYPE html>
  <html>
    <head>
    <title>@yield('title')</title>
      <!--CSS-->
      <link type="text/css" rel="stylesheet" href="{!!URL::asset('css/materialize.css')!!}" media="screen,projection" />
      <link type="text/css" rel="stylesheet" href="{!!URL::asset('css/maintenance.css')!!}" media="screen,projection"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--JAVASCRIPT -->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </head>

<body style="background-color: #212121">

<div class="row">
 <!--*******************SIDE NAVIGATOR PANEL********************************************* -->


      <ul id="slide-out" class="side-nav fixed grey darken-3">
                <!-- admin info-->
              <div class="grey darken-3">
              <center> <img class="circle responsive-img z-depth-3" src="icons/1x1.jpg"></center>
              <center> Hello Sir!</center>
              </div>

        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="white-text collapsible-header">Maintenance<i class="mdi-navigation-arrow-drop-down right"></i></a>
              <div class="collapsible-body">
                  <div class="divider"></div>
                <ul>
                  <li><a class="white-text" href="/supplier">Supplier</a></li>
                  <li><a class="white-text" href="/category" >Category</a></li>
                  <li><a class="white-text" href="/subcategory" >Subcategory</a></li>
                  <li><a class="white-text" href="/item">Item</a></li>
                  <div class="divider"></div>
                </ul>
              </div>
            </li>
          </ul>
        </li>       
        <li><a class="white-text" href="/registerItem">Register Items</a></li>
        <li><a class="white-text" href="/bidEvent">Bidding Event</a></li>
        <li><a class="white-text" href="#!">Reports</a></li>
        <li><a class="right white-text" href="#!">Log out</a></li>
      </ul>
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="large mdi-navigation-menu"></i></a>
    

        <script>
        $('.button-collapse').sideNav({
            menuWidth: 250, // Default is 240
            edge: 'left', // Choose the horizontal origin
            closeOnClick: false // Closes side-nav on <a> clicks, useful for Angular/Meteor
        });

        </script>

 <!--*******************SIDE NAVIGATOR PANEL********************************************* -->
    <div class="col s10 push-s2 grey darken-4">
    @yield('title1')
    <div class="col s10 push-s1 white hoverable">
        @yield('supplier')
        @yield('accounts')
        @yield('category')
        @yield('subcategory')
        @yield('items')
        @yield('regItems')
        @yield('bidEvent')
    </div>
    </div>
    </div>
</body>
</html>
