<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
      <link rel="stylesheet" href="style.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <nav>
        <div class="nav-wrapper light-blue darken-4">
          <a href="index.html" class="brand-logo">Ship Overground</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="loginpage.html">Log In</a></li>
              <li><a href="accountcreation.html">Sign Up</a></li>
              <li><a href="search.html">Search</a></li>
              <li><a href="createProfessor.html">Add Professor</a></li>
              <li><a href="review.html">Demo Review Form</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
              <li><a href="sass.html">Log In</a></li>
              <li><a href="badges.html">Sign Up</a></li>
              <li><a href="search.html">Search</a></li>
              <li><a href="createProfessor.html">Add Professor</a></li>
              <li><a href="review.html">Demo Review Form</a></li>
            </ul>
        </div>
      </nav>
    
      <div class="parallax-container valign-wrapper">
        <div class="parallax"><img src="horton.jpeg"></div>
      </div>
      <div class="section red darken-3">
        <div class="row container">
          <h2 class="header white-text text-darken-3  lighten-3">Rate Your Professors</h2>
          <p class="white-text text-darken-3 lighten-3">Ship Overground gives students an opportunity to review and rate their professors in an updated way.
            Ship Overground also gives professors the chance to respond to criticisms in a professional manner.
          </p>
        </div>
      </div>
      <div class="parallax-container">
        <div class="parallax"><img src="cub.jpeg"></div>
      </div> 

      <!-- INFO SECTION -->
      


      
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
      <script type="text/javascript" src="main.js"></script>
      <script>
        $(".button-collapse").sideNav();
      </script>
    </body>
  </html>