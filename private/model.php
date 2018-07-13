<?php

  function make_connection() {
    $mysqli = mysqli_connect('localhost','24316','7C57iq8q!','24316_realdeal');
         if (!$mysqli) {
             die('Could not connect: ' . mysqli_error($mysqli));
         }
         return $mysqli;
  }

  function get_homepage_posts() {
    global $pageno;
    $title = array();
    $dates = array();
    $mysqli = make_connection();
    $number_of_pages = calculate_pages() or die ('Error calculating the number of pages.');
    $firstrow = ($pageno - 1) * ARTICLES_PER_PAGE;
    $query = "SELECT maincontent, postdates FROM myband_homepage ORDER BY ID DESC LIMIT $firstrow, 5";
    $stmt = $mysqli->prepare($query) or die ('Error preparing list');
    $stmt->bind_result($title, $dates) or die ("error binding result");
    $stmt->execute() or die ('error executing 1.');
    $results = array();
    while ($stmt->fetch()) {
      $results[] = "<p class='dates'>" . $dates . "</p>" . $title;
    }
    return $results;
  }

  function get_aboutus_content() {
    $mysqli = make_connection();
    $query = "SELECT content FROM myband_aboutus WHERE ID = 1";
    $stmt = $mysqli->prepare($query) or die ('Error preparing list');
    $stmt->bind_result($title) or die ("error binding result");
    $stmt->execute() or die ('error executing 1.');
    $results = array();
    while ($stmt->fetch()) {
      $results[] = $title;
    }
    return $results;
  }

function calculate_pages() {
  $mysqli = make_connection();
  $query = "SELECT * FROM myband_homepage";
  $result = $mysqli->query($query) or die ('Error querying. gay');
  $rows = $result->num_rows;
  $number_of_pages = ceil($rows / ARTICLES_PER_PAGE);

  return $number_of_pages;
}


 ?>
