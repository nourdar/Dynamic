<?php

if(isset($_SESSION['404Error'])){

  echo "<center>
  <h1> ".$_SESSION['404Error']." </h1>
  </center>";

  // delete the error from session
  unset($_SESSION['404Error']);
}
