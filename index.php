<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="styles/homepage.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="homepagecontent">
        <?php
        // Connect to database or cancel operation.

        $con = mysqli_connect('localhost','24316','7C57iq8q!','24316_realdeal');
        if (!$con) {
            die('Could not connect: ' . mysqli_error($con));
        }

        // If the first name or last name are similar to $q, return result, else print error.

        $sql="SELECT * FROM `myband_homepage` WHERE 1";
        $result = mysqli_query($con,$sql);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($con));
            exit();
        }

        while ($row = $result->fetch_assoc()) {
          echo $row['maincontent'];
        } // OUTPUT

        mysqli_close($con); // close connection when everything is done.
        ?>
      </div>


      <div class="navbar">
        <table>
          <tr>
            <th><a href="/index.php">Homepage</a></th>
          </tr>
          <tr>
            <th><p>test</p></th>
          </tr>
        </table>
      </div>
    </div>



































  </body>
</html>
