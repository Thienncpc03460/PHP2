<?php

/**
 * getUserByEmail. Hàm lấy người dùng bởi email
 * @param string $email
 * @return $user | null
 */
function getUserByEmail($email)
{
  global $conn;
  try {
    $stmt = $conn->prepare("SELECT * FROM `pc03460_users` WHERE email=:email");
    $stmt->execute(array(':email' => $email));
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user) {
      return $user;
    } else {
      return null;
    }
  } catch (PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
  }
}