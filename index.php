<?php
  session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>The Age Blog</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <link rel="stylesheet" href="telephones/css/intlTelInput.css">
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <script src="telephones/js/intlTelInput.js"></script>

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> -->
  <style>
  .modal-header, h4, .close
  {
    background-color: #26c281;
    color: white !important;
    text-align: center;;
    font-size: 30px;
  }
  .btn-success, .btn-success:active, .btn-success:visited
  {
    background-color: #26c281 !important;
  }
  .btn-success:hover
  {
    background-color: #1e824c !important;
  }

  /*For Navigation Bar*/
  .navbar-inverse {
  background-color: #26c281;
  border-color: #1e824c;
}
.navbar-inverse .navbar-brand {
  color: #ffffff;
}
.navbar-inverse .navbar-brand:hover,
.navbar-inverse .navbar-brand:focus {
  color: #ffffff;
}
.navbar-inverse .navbar-text {
  color: #ffffff;
}
.navbar-inverse .navbar-nav > li > a {
  color: #ffffff;
}
.navbar-inverse .navbar-nav > li > a:hover,
.navbar-inverse .navbar-nav > li > a:focus {
  color: #ffffff;
}
.navbar-inverse .navbar-nav > li > .dropdown-menu {
  background-color: #26c281;
}
.navbar-inverse .navbar-nav > li > .dropdown-menu > li > a {
  color: #ffffff;
}
.navbar-inverse .navbar-nav > li > .dropdown-menu > li > a:hover,
.navbar-inverse .navbar-nav > li > .dropdown-menu > li > a:focus {
  color: #ffffff;
  background-color: #1e824c;
}
.navbar-inverse .navbar-nav > li > .dropdown-menu > li > .divider {
  background-color: #1e824c;
}
.navbar-inverse .navbar-nav .open .dropdown-menu > .active > a,
.navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover,
.navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus {
  color: #ffffff;
  background-color: #1e824c;
}
.navbar-inverse .navbar-nav > .active > a,
.navbar-inverse .navbar-nav > .active > a:hover,
.navbar-inverse .navbar-nav > .active > a:focus {
  color: #ffffff;
  background-color: #1e824c;
}
.navbar-inverse .navbar-nav > .open > a,
.navbar-inverse .navbar-nav > .open > a:hover,
.navbar-inverse .navbar-nav > .open > a:focus {
  color: #ffffff;
  background-color: #1e824c;
}
.navbar-inverse .navbar-toggle {
  border-color: #1e824c;
}
.navbar-inverse .navbar-toggle:hover,
.navbar-inverse .navbar-toggle:focus {
  background-color: #1e824c;
}
.navbar-inverse .navbar-toggle .icon-bar {
  background-color: #ffffff;
}
.navbar-inverse .navbar-collapse,
.navbar-inverse .navbar-form {
  border-color: #ffffff;
}
.navbar-inverse .navbar-link {
  color: #ffffff;
}
.navbar-inverse .navbar-link:hover {
  color: #ffffff;
}

@media (max-width: 767px) {
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
    color: #ffffff;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #ffffff;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #ffffff;
    background-color: #1e824c;
  }
/*z index of datepicker in modal*/
  body.modal-open .datepicker
  {
    z-index: 1200 !important;
  }
}

</style>
</head>
<body>
<div id="top">
</div>

<script>
  $('#top').load('topnav.php');
</script>

</body>
</html>
