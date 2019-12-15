<?php
include_once 'config.php';
$get_data = $conn->query("SELECT * FROM users WHERE id = '$id'");
$get_info = mysqli_fetch_assoc($get_data);

if(empty($get_info))
{
  header('Location: users.php');
}

if(isset($_POST['edit_user']))
{
  $f_name = $_POST['f_name'];
  $l_name = $_POST['l_name'];
  $username = $_POST['username'];

  $upd_user = $conn->query("UPDATE users SET f_name = '$f_name',l_name = '$l_name',
    username = '$username' WHERE id = '$id'");

    if ($upd_user === TRUE)
    {
      echo "تم تحديث الصف بنجاح";
    }
    else
    {
      echo "يوجد خطأ: " . $conn->error;
    }
  }
  ?>
  <html>
  <head>
    <title> Edit User </title>
  </head>
  <body>
    <form method="POST">
      <input type="text" name="f_name"  placeholder="First Name">
      <br>
      <input type="text" name="l_name" value="<?php echo $get_info['l_name'];?>" placeholder="Last Name">
      <br>
      <input type="text" name="username" value="<?php echo $get_info['username'];?>" placeholder="UserName">
      <br>
      <button name="edit_user"> Save Data </button>
    </form>
  </body>
  </html>
