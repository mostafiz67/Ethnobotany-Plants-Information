<!DOCTYPE html>
<html>
<title>BEOD</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
.w3-sidenav a,.w3-sidenav h4{padding:12px;}
.w3-navbar a{padding-top:12px !important;padding-bottom:12px !important;}
</style>
<body>

<!-- Navbar -->
<ul class="w3-navbar w3-theme w3-top w3-left-align w3-large" style="z-index:4;">
  <li class="w3-opennav w3-right w3-hide-large">
    <a class="w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
  </li>
  
   <li class="w3-hide-small"><img src="logo.jpg" style="padding-right:20px;" width="100px;"  height="100px;" /></li>
  <li class="w3-hide-small" style="padding-top:15px;"><a href="index.php" class="w3-hover-white">About Ethnobotany</a></li>
  <li class="w3-hide-small" style="padding-top:15px;"><a href="search_tree.php" class="w3-hover-white">Search Ethnobotany Tree</a></li>
  <li class="w3-hide-small" style="padding-top:15px;"><a href="#" class="w3-hover-white">News</a></li>
  <li class="w3-hide-small" style="padding-top:15px;"><a href="#" class="w3-hover-white">Contact Us</a></li>
    <li class="w3-hide-small" style="padding-top:15px;"><a href="login.php" class="w3-hover-white">Admin</a></li>
</ul>

<!-- Sidenav -->
<nav class="w3-sidenav w3-collapse w3-theme-l5 w3-animate-left" style="z-index:3;width:150px;margin-top:51px;" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="close menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4><b>Menu</b></h4>
  <div class="w3-dropdown-click">
    <a onclick="myDropFunc()" href="#">
      Dictionary <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoDrop" class="w3-dropdown-content w3-white w3-card-4">
      <a href="view_dictionary_botanical_user.php">Botanical Dictionary</a>
      <a href="view_dictionary_Indigenous_user.php">Indigenous Dictionary</a>
      <a href="view_dictionary_pharmacological_user.php">Pharmacological Dictionary</a>
    </div>
  </div>
  <a href="#" class="w3-hover-black">Indigenous Community</a>
  <a href="#" class="w3-hover-black">Tools</a>
  <a href="#" class="w3-hover-black">Photography</a>
</nav>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidenav is visible -->
<div class="w3-main" style="margin-left:150px">
<!-- END MAIN -->
</div>




<script>
// Get the Sidenav
var mySidenav = document.getElementById("mySidenav");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidenav, and add overlay effect
function w3_open() {
    if (mySidenav.style.display === 'block') {
        mySidenav.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidenav.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidenav with the close button
function w3_close() {
    mySidenav.style.display = "none";
    overlayBg.style.display = "none";
}

function myDropFunc() {
    var x = document.getElementById("demoDrop");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-green";
    } else {
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className =
        x.previousElementSibling.className.replace(" w3-green", "");
    }
}
</script>

</body>
</html>

