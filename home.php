<?php
require 'database.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Data</title>
  </head>
  <body>
    <table >
      <tr>
        <td>#</td>
        <td>Name</td>
        <td>email</td>
        <td>Image</td>
      </tr>
      <?php
      $i = 1;
      $rows = mysqli_query($conn, "SELECT * FROM users ORDER BY full_name DESC")
      ?>

      <?php foreach ($rows as $row) : ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row["full_name"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td> <img src="image/<?php echo $row["image"]; ?>" width = 200 title="<?php echo $row['image']; ?>"> </td>
      </tr>
      <?php endforeach; ?>
    </table>
    <br>
    
  </body>
</html>