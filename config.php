<?php
  $host = 'localhost';
  $user = 'ns';
  $password = 'N3g@tivo99';
  $database = 'ns_dv_index';

  function intrare_db() {
    
    $conn = mysqli_connect($host, $user, $password, $database);

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    mysqli_close($conn);

  } // function intrare_db() {

?>