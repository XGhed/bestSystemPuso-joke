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

<body style="background-color: #64ffda">

<div class="row">
 <!--*******************SIDE NAVIGATOR PANEL********************************************* -->


      <ul id="slide-out" class="side-nav fixed teal accent-3">
                <!-- admin info-->
              <div class="teal accent-3">
              <center> <img class="circle responsive-img z-depth-3" src="icons/1x1.jpg"></center>
              <center> Hello Sir!</center>
              </div>

        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="collapsible-header">Maintenance<i class="mdi-navigation-arrow-drop-down right"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a  href="/supplier">Supplier</a></li>
                  <li><a  href="/">Accounts</a></li>
                  <li><a  href="/category" >Category</a></li>
                  <li><a  href="#!">Fourth</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>       
        <li><a href="#!">Transaction</a></li>
        <li><a class="right" href="#!">Log out</a></li>
      </ul>
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    

        <script>
        $('.button-collapse').sideNav({
            menuWidth: 240, // Default is 240
            edge: 'left', // Choose the horizontal origin
            closeOnClick: false // Closes side-nav on <a> clicks, useful for Angular/Meteor
        });

        </script>

 <!--*******************SIDE NAVIGATOR PANEL********************************************* -->
    <div class="col s10 push-s2 teal accent-2">
    @yield('title1')
    <div class="col s10 push-s1 white hoverable" style="height: 100%;">
    @yield('supplier')
    @yield('accounts')
    @yield('category')
    </div>
    </div>
    </div>
</body>
</html>
