<!DOCTYPE html>
  <html>
    <head>
    <title>#PusoSystem</title>
      <!--CSS-->
      <link type="text/css" rel="stylesheet" href="{!!URL::asset('css/materialize.css')!!}"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--JAVASCRIPT -->
      <script type="text/javascript" src="{!!URL::asset('https://code.jquery.com/jquery-2.1.1.min.js')!!}"></script>
      <script type="text/javascript" src="{!!URL::asset('js/materialize.min.js')!!}"></script>



      <script>
       $(document).ready(function(){
      $('.parallax').parallax();
    });
      </script>
    </head>

    <body> 

    <!-- LOGO-->
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


    <!-- BID-PIC-HOME -->
   <div class="parallax-container">
      <div class="parallax"><img src="icons/home_screen3.png"></div>
      


    <!-- LOG IN -->
    <ul class="collapsible hoverable" data-collapsible="accordion" style = "position: relative; left: 60em; top: 90px;width: 350px;">
          <li>
            <div class="collapsible-header white-text">
           <i class="material-icons">perm_identity</i><span class="new badge"></span>Login</div>
            <div class="collapsible-body"> 
            <!-- LOGIN FORM -->
              <div class="row">
                  <form class="col s12">
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                      </div>
                      <div class = "right-align">
                      <a class="waves-effect waves-green btn-flat">LOGIN</a>
                      </div>
                    </div>
                  </form>
             </div>
             </div>
             </li>  
    </ul>
    <!-- LOG IN -->
    </div>
    <!-- END BID PIC HOME -->


    <!-- HOW TO BID SECTION -->
    <div class="section grey darken-2">
    <div class="row container">
      <h2 class="white-text header center">How to bid?</h2>
      <p class="white-text text-darken-3 lighten-3 center">Just follow these easy steps to join in the bidding.</p>
    </div>


    <div class="row gray lighten-4">

    <div class = "col red container s4">
      <div class="col s6">
            <img src="icons/Account.png" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
      </div>
      <div class ="col s6">
      <h3>Step 1:</h3>
      <blockquote>
        <h5>Register</h5>
      </blockquote>
        <span class="black-text">
                   Get an account on our site. Our staff will register you on our system.
        </span>
      </div>
      </div>


    <div class = "col blue container s4">
      <div class="col s6">
            <img src="icons/login.png" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
      </div>
      <div class ="col s6">
      <h3>Step 2:</h3>
      <blockquote>
        <h5>Log in</h5>
      </blockquote>
        <span class="black-text">
                   Log in online where you can see the items, schedule and etc.
        </span>
      </div>
      </div>
      
      <div class = "col green container s4">
      <div class="col s6">
            <img src="icons/bid.png" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
      </div>
      <div class ="col s6">
      <h3>Step 3:</h3>
      <blockquote>
        <h5>Bid</h5>
      </blockquote>
        <span class="black-text">
                   Click on the item you want to bid and click the "Bid" button.
        </span>
      </div>
      </div>

      <div class = "col deep-orange container s4 offset-s2">
        <div class="col s6">
              <img src="icons/payment.png" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
        </div>
          <div class ="col s6">
          <h3>Step 4:</h3>
            <blockquote>
              <h5>Pay</h5>
            </blockquote>
          <span class="black-text">
                     Pay the items that you bid by depositing the money on our bank.
          </span>
        </div>
      </div>

      <div class = "col yellow container s4">
        <div class="col s6">
            <img src="icons/login.png" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
        </div>
        <div class ="col s6">
          <h3>Step 6:</h3>
            <blockquote>
          <h5>Redeem items</h5>
            </blockquote>
          <span class="black-text">
                     Redeem your items by picking it up or have it delivered.
          </span>
        </div>
      </div>
    </div>
  </div>
  <!-- HOW TO BID SECTION -->



  <!-- FOOTER -->
  <div class="parallax-container">
    <div class="parallax"><img src="icons/home_screen.jpg"></div>
  </div>

  <div class= "page-footer">
  <div class="section grey darken-2 ">
    <div class="row container">
      <h2 class="header">Contact Us</h2>
      <p>Call us: +639 26 735 4975</p>
      <p>Email: BestSystemSanaTo@yahoo.com</p>
      <p>Site: jan lang sa tabi tabi</p>
    </div>
    </div>
  </div>
  <!-- END-FOOTER -->

    </body>
  </html>