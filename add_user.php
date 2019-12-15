<?php
include_once 'config.php';
if (isset($_POST['add_user'])){
  $f_name = $_POST['f_name'];
  $l_name = $_POST['l_name'];
  $username = $_POST['username'];

  $add_user = $conn->query("INSERT INTO users (f_name, l_name, username)
  VALUES ('$f_name', '$l_name', '$username')");

  if ($add_user === TRUE)
  {
    echo "تم إضافة المعلومات بنجاح";
  }
  else
  {
    echo "يوجد خطأ: " . $add_user . "<br>" . $conn->error;
  }
}
?>
<html>
  <head>
    <title> Add User</title>
  </head>
  <body>
    <form method="POST">
      <input type="text" name="f_name" placeholder="First Name">
      <br>
      <input type="text" name="l_name" placeholder="Last Name">
      <br>
      <input type="text" name="username" placeholder="UserName">
      <br>
      <button name="add_user"> Add Data </button>
    </form>
  </body>
</html>
