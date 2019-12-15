<?php
include_once 'config.php';
$get_data = $conn->query("SELECT * FROM users");
?>
<html>
  <head>
    <title> Show Users </title>
  </head>
  <body>
    <table border="1">
      <tr>
        <th> First Name </th>
        <th> Last Name </th>
        <th> Username </th>
        <th> Actions </th>
      </tr>
      <?php foreach($get_data as $get_info){?>
        <tr>
          <td><?php echo $get_info['f_name'];?></td>
          <td><?php echo $get_info['l_name'];?></td>
          <td><?php echo $get_info['username'];?></td>
          <td>
            <a href="edit_user.php?id=<?php echo $get_info['id'];?>"> Edit User </a>
            <br>
            <a href="delete_user.php?id=<?php echo $get_info['id'];?>"> Delete User </a>
          </td>
        </tr>
      <?php }?>
    </table>
  </body>
</html>
