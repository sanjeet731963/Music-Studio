<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['signup'])) {
    // Redirect to signup page
    header("Location: signup.php");
    exit();
  } elseif (isset($_POST['login'])) {
    // Redirect to login page
    header("Location: login.php");
    exit();
  }
}
?>
