
<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin=true;
}
else{
  $loggedin = false;
}
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">iSecure</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active mb-0 h4" aria-current="page" href="/glassmorph/login.php">Home</a>
        </li>';

        if(!$loggedin){
        echo '<li class="nav-item">
          <a class="nav-link mb-0 h4" href="/glassmorph/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mb-0 h4" href="/glassmorph/signup.php">Signup</a>
        </li>';
        }
        if($loggedin){
        echo '<li class="nav-item">
          <a class="nav-link mb-0 h4s" href="/glassmorph/logout.php">Logout</a>
        </li>';
        }
     
      echo '</ul>
      <form class="d-flex">
        
      </form>
    </div>
  </div>
</nav>';
?>