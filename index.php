
<?php include 'assets/includes/header.php';
  include_once 'assets/dbh-inc.php'
?>
      <!-- Login form -->
      <div class="row login-container">
        <form class="col offset-s1 s10 m8 offset-m2 l6 offset-l3 z-depth-2 grey lighten-3">
          <div class="row">
            <h1> Login </h1>
            <div class="input-field  user">
              <input id="user" type="text" class="validate">
              <label class="active" for="user_name">User Name</label>
            </div>
            <div class="input-field pass">
              <input type="text" class="validate">
              <label class="active" for="password">Password</label>
            </div>
            <!-- Change button sizes on screens -->
            <button class="btn waves-effect waves-light col s4 offset-s1 login" type="submit" name="action">Submit
            </button>
            <a href="registration.php"><button class="btn waves-effect waves-light col s4 offset-s2 register" type="submit" name="action" action="registration.php">Register
            </button></a>
          </div>
        </form>
      </div>
      <a href="dashboard.php">Dashboard</a>
      <a href="registration.php"> Register </a>
    </body>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>


  </html>
