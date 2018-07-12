<?php

  function make_connection() {
    $mysqli = mysqli_connect('localhost','24316','7C57iq8q!','24316_realdeal');
         if (!$mysqli) {
             die('Could not connect: ' . mysqli_error($mysqli));
         }
         return $mysqli;
  }

  function get_homepage_posts() {
    $con = make_connection();
    $page = (float) $_REQUEST["page"];
    $page = $page * 10;

    for($i = $page; $i > 0; $i--)
    {
      $sql="SELECT * FROM `myband_homepage` WHERE ID = " . $i;
      $result = mysqli_query($con,$sql);
        if (!$result) {
          printf("Error: %s\n", mysqli_error($con));
          exit(); // get article
        }

        while ($row = $result->fetch_assoc()) {
          echo $row['title'];
          echo $row['maincontent'];
        } // paste article
      }
      echo "<button id='pagebck'></button><button id='pagefwd'></button>";

      mysqli_close($con); // close connection when everything is done.
  }


 ?>
