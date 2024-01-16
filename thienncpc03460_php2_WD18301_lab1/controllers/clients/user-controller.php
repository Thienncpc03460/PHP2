<?php

include("models/user.php");
if (isset($_POST['email'])) {
  $email = $_POST['email'];
  $user = getUserByEmail($email);

  if ($user === null) {
    $msg = "Không tồn tại user có email là $email";
  } else {
    $msg = $user['first_name'] . " " . $user['last_name'];
  }
} else {
  $msg = 'Chưa nhập';
}