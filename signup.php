<?php
  if($_POST){
    echo "Username is ". $_POST['username'];//name of the input field
    echo "<br/>";
    echo "Password is ". $_POST['password'];
    echo "<br/>";
    echo "Email is ". $_POST['email'];
  }
?>