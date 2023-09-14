<?php
include 'connect.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h1>DATA TABLE</h1>
    <a href="user.php">Back</a>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">sl NO</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Password</th>

    </tr>
  </thead>
  <tbody>

  <?php

  $display_data = mysqli_query($conn,"select * from `crudtable`");
//   $number_rows = mysqli_num_rows($disply_data);
//   echo $number_rows;

if(mysqli_num_rows($display_data)>0){

    while($row = mysqli_fetch_assoc($display_data)){
        ?>

<tr>
      <td><?php echo $row['id']?></td>
      <td><?php echo $row['name']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['address']?></td>
      <td><?php echo $row['password']?></td>

      <td>
        <a href="update2.php? edit= <?php echo $row['id']?>">Edit</a>
        <a href="delete2.php? deletes= <?php echo $row['id']?>">Delete</a>

      </td>

    </tr>

<?php

    }
}
  
  ?>


  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>






