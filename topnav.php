<?php
  session_start();
 ?>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/" class="navbar-brand">TheAgeBlog</a>
    </div>
    <div class="collapse navbar-collapse" id="navigation">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Home</a></li>
        <li><a href="#ask">Ask</a></li>
        <li><a href="#read">Answer</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Strategies <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#krush">Fast Castle</a></li>
            <li><a href="#flush">Feudal Rush</a></li>
            <li><a href="#drush">Dark Age Rush</a></li>
            <li><a href="#trush">Tower Rush</a></li>
          </ul>
        </li>
        <li>
          <form class="navbar-form" role="search">
            <div class="input-group">
              <input type="text" placeholder="Search" class="form-control" name="nav_search">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
              </div>
            </div>
          </form>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
          if(isset($_SESSION['logged']))
            echo "<li><a href='index.php'>", $_SESSION['username'], "</a></li><li><a href='logout.php'>Log out</a></li>";
          else {
            echo '<li><a href="#register" id="register"><span class="glyphicon glyphicon-user"></span> Register</a></li>';
            echo '<li><a href="#login" id="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
          }
         ?>
      </ul>
    </div>
  </div>
</nav>

<div class="container" id="logmod">
  <div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="padding: 35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="POST" action="login.php">
            <div class="form-group">
              <label for="usrname">Username</label>
              <input type="text" class="form-control" id="usrname" name="username" placeholder="username">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyhpicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
            <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#" id="signup" data-dismiss="modal">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
    </div>
  </div>

</div>

<div class="container" id="regmod">
  <div class="modal fade" id="registerModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="padding: 35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-user"></span> Register</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <form role="form" method="POST" action="register.php">
              <div class="form-group">
                <label for="name">Name<font color="red">*</font></label>
                <input type="text" class="form-control" id="Name" name="name" placeholder="FirstName LastName" required>
              </div>
              <div class="form-group">
                <label for="usern">Username<font colot="red">*</font></label>
                <input type="text" class="form-control" id="usern" name="usern" placeholder="Can contain any character" required>
              </div>
              <div class="form-group">
                <label for="passw">Password<font color="red">*</font></label>
                <input type="password" class="form-control" id="passw" placeholder="6-16 characters" name="passw" required>
              </div>
              <div class="form-group">
                <label for="email">Email<font color="red">*</font></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="someone@xyz.com" required></small>
              </div>
              <div class="form-group">
                <label for="dob">Date of Birth<font color="red">*</font></label>
                <div class='input-group date' id='datepick' data-provide="datepicker">
                    <input type='text' class="form-control" placeholder="yyyy-mm-dd" name='dob' required>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </span>
                </div>
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone">
              </div>
              <button type="submit" class="btn btn-success btn-block">Register</button>
            </form>
            </div>
            <div class="col-md-6 col-sm-6">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<script>
$(document).ready(function(){
    $("#login").click(function(){
        $("#loginModal").modal();
    });
});

$(document).ready(function(){
  $("#register").click(function(){
    $("#registerModal").modal();
  });
});

$(document).ready(function(){
  $("#signup").click(function(){
    $("#registerModal").modal();
  });


  $(document).ready(function(){
    $("#phone").intlTelInput({
      preferredCountries: [],
      nationalMode: false
    });
  });

  $(document).ready(function(){
    $('#datepick').datepicker({
      format:'yyyy-mm-dd',
      startDate: '1900-01-01'
    }).on('changeDate', function(ev){
      $(this).datepicker('hide');
    });
  });
});
</script>
