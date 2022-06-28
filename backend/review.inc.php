<?php

  require_once 'dbh.review.inc.php';

  $review = $_POST["review"];    /*[name of the input table]*/

  $sql = "INSERT INTO reviews (reviewtext) VALUES ('$review');";
  mysqli_query($connection, $sql);


 header("Location: ../index.php"); /* After submitting review, this takes user back to index page */
