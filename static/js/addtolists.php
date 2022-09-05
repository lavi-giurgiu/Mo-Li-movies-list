<?php
  $connect = mysqli_connect("sql308.epizy.com", "epiz_32516760", "19KlzEHZdtu0ON", "epiz_32516760_mo_li_db");

  if($connect === false){
    die("ERROR: Could not connect. " 
      . mysqli_connect_error());
  }

  // lists - wanted & seen
  if(isset($_POST['movie_type'])) {
    $movie_type = $_POST['movie_type'];
    $movie_id = $_POST['movie_id'];
    $user_id = $_POST['user_id'];

    $sql = "SELECT * FROM $movie_type WHERE User_id='$user_id' AND Movie_id='$movie_id'";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result)) {
      $query = "DELETE FROM $movie_type WHERE User_id='$user_id' AND Movie_id=$movie_id";

      if(mysqli_query($connect, $query)) {
        echo "movie deleted";
      } else {
        echo "error";
      }
    } else {
      $query = "INSERT INTO $movie_type (User_id, Movie_id) VALUES ('$user_id', $movie_id)";

      if(mysqli_query($connect, $query)) {
        echo "movie inserted";
      } else {
        echo "error";
      }
    }
  } 

  // get list
  if(isset($_POST['input_type'])) {
    $inp_type_val = $_POST['input_type'];
    $user_id_list = $_POST['user_id'];

    $sql = "SELECT * FROM $inp_type_val WHERE User_id='$user_id_list'";
    $result = mysqli_query($connect, $sql)or die(mysql_error());

    if (mysqli_num_rows($result) > 0) {
      $movies_ids = '';

      while ($row = mysqli_fetch_array($result)){
        $movies_ids = $movies_ids . ' ' . $row['Movie_id'];
      }
      echo $movies_ids;
    } else {
      echo "error list";
    }
  }
?>