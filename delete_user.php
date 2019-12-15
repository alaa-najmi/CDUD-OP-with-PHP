<?php
include_once 'config.php';
if(isset($_GET['id']))
{
  $id = $_GET['id'];
  $del_user = $conn->query("DELETE FROM users WHERE id='$id'");

  if ($del_user === TRUE)
  {
    echo "تم حذف الصف بنجاح";
  }
  else
  {
    echo "يوجد خطأ: " . $conn->error;
  }
  header('Location: users.php');
}
?>
