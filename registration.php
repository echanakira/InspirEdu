<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet"
      href="css/materialize.min.css"  media="screen,projection" />
      <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Quicksand" rel="stylesheet">
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->

      <link type="text/css" rel="stylesheet" href="css/register.css" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <header class="blue">
        <h1 > Inspir<span>Edu</span></h1>
      </header>

      <!-- Navigation Bar -->
      <nav>
        <div class="nav-wrapper">
          <a href="#" class="brand-logo"> inspire</a>
          <a href="#" data-activates="side-menu" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul id="main-menu" class="right hide-on-med-and-down">
            <li> <a href="#">About</a></li>
            <li> <a href="#">Contact</a></li>
          </ul>
          <!-- Broken Side Nav -->
          <ul class="side-nav" id="side-menu">
            <li> <a href="#">About</a></li>
            <li> <a href="#">Contact</a></li>
          </ul>
        </div>
      </nav>

      <form class="login-container container col s10 offset-s1 z-depth-2 grey lighten-3"
      action="assets/registration.inc.php" method="post">
        <div class="row">
        <h1> Registration Form</h1>
        <div id="name-container" class="input-field container col s10 offset-s1">
          <input id="uid" type="text" name="uid">
          <label class="active" >Full Name</label>
        </div>
        </div>

        <div class="row">
        <div class="input-field  col s10 offset-s1 ">
          <input  id="email" type="text" name="email" class="validate">
          <label class="active">Email Address</label>
        </div>
        </div>

        <div class="row">
        <div class="input-field col s10 offset-s1">
          <input id="careworker" type="text" name="careworker" class="validate">
          <label class="active">Care Worker Name</labname="name"el>
        </div>
        </div>

        <div class="row">
        <div class="input-field col s10 offset-s1">
          <input id="hospital" type="text" name="hospital" class="validate">
          <label class="active">Hospital Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s10 offset-s1">
          <input id="school_name" type="text" name="school" class="validate">
          <label class="active">Scool Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s10 offset-s1">
          <input id="grade" type="text" name="grade" class="validate">
          <label class="active">Grade</label>
        </div>
      </div>
      <div class="row">
        <button class="btn waves-effect waves-light col s3 offset-s4 login" type="submit" name="submit">Submit
        </button>
      </div>
      </form>
</body>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/functions.js"></script>


</html>
