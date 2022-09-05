<?php
  $connect = mysqli_connect("sql308.epizy.com", "epiz_32516760", "19KlzEHZdtu0ON", "epiz_32516760_mo_li_db");

  if($connect === false){
    die("ERROR: Could not connect. " 
      . mysqli_connect_error());
  }

  // form1 - signin
  if(isset($_POST['form1'])) {
    $nameq = $_POST['nameq'];
    $adultq = $_POST['adultq'];
    $emailq = $_POST['emailq'];
    $passwordq = $_POST['passwordq'];

    $sql = "SELECT Email FROM moli_user WHERE Email='$emailq'";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) > 0) {
      echo 'email exist';
    } else {
      $query = "INSERT INTO moli_user (Name, Adult, Email, Password) VALUES ('$nameq', $adultq, '$emailq', '$passwordq')";

      if(mysqli_query($connect, $query)) {
        echo "data inserted";
      } else {
        echo "error";
      }
    }
  }


  // form2 - login
  if(isset($_POST['form2'])) {
    $e_query = $_POST['equery'];
    $pw_query = $_POST['pwquery'];

    $sql = "SELECT * FROM moli_user WHERE Email='$e_query'";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) === 1) {

      $sql = "SELECT * FROM moli_user WHERE Email='$e_query' AND Password='$pw_query'";
      $result = mysqli_query($connect, $sql);

      if (mysqli_num_rows($result) === 1) { 
        $row = mysqli_fetch_assoc($result);
        $user_name = $row['Name'];
        $user_adult = $row['Adult'];
        $user_email = $row['Email'];  
        $user_id = $row['ID'];
        $answer = "$user_id, $user_name, $user_adult, $user_email";

        echo $answer;     
      } else {
        echo "error pw";
      }
    } else {
      echo "error email";
    }
  }

  // form3 - delete account
  if(isset($_POST['form3'])) {
    $ex_user = $_POST['exuser'];
    $ex_user_id = $_POST['exuserid'];

    $sqlrow = "DELETE FROM moli_user WHERE Name='$ex_user' AND ID='$ex_user_id'";
    $sqlrow2 = "DELETE FROM seen_movies WHERE ID='$ex_user_id'";
    $sqlrow3 = "DELETE FROM wanted_movies WHERE ID='$ex_user_id'";

    if(mysqli_query($connect, $sqlrow) && mysqli_query($connect, $sqlrow2) && mysqli_query($connect, $sqlrow3)) {
      echo "data deleted";
    } else {
      echo "error";
    }
  }
?>