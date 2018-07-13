<?php

$con = mysqli_connect('localhost','24316','7C57iq8q!','24316_realdeal');
         if (!$con) {
             die('Could not connect: ' . mysqli_error($con));
         }

      $sql="SELECT * FROM `myband_homepage` WHERE ID < 10";
      $result = mysqli_query($con,$sql);
        if (!$result) {
          printf("Error: %s\n", mysqli_error($con));
          exit(); // get article
     

        while ($row = $result->fetch_assoc()) {
          echo $row['title'];
          echo $row['maincontent'];
        } // paste article
      }
      

      mysqli_close($con); // close connection when everything is done.
?>