<?php
include 'connect.php';
if(isset($_POST['submit_btn'])){
    $data_id = $_POST['data_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    // echo $data_id;
    $sql = "update `crudtable` set name = '$name',email= '$email',address = '$address',password = '$password' where id=$data_id";
    $result = mysqli_query($conn,$sql);

    if($result){
        header ('location:display2.php');
    }


}
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
    <h1>Edit</h1>
    <a href="display2.php">View Data</a>
<?php
if(isset($_GET['edit'])){
    $edit_id = $_GET['edit'];
    // echo $edit_id;
    $get_data = mysqli_query($conn,"Select * from `crudtable` where id = $edit_id");
    if(mysqli_num_rows($get_data)>0){
        $fetch_data = mysqli_fetch_assoc($get_data);
        ?>



<form action = "" method = "post">
<div class="mb-3">
    <input type="hidden" class="form-control" required autocomplete = "off" name = "data_id" value = "<?php echo $fetch_data['id']?>">
    </div>
    <div class="mb-3">
    <input type="text"  class="form-control" required autocomplete = "off" name = "name" value = "<?php echo $fetch_data['name']?>">
    </div>
   <div class="mb-3">
    <input type="email"  class="form-control" required autocomplete = "off" name = "email" value = "<?php echo $fetch_data['email']?>">
    </div>
    <div class="mb-3">
    <input type="text" class="form-control" required autocomplete = "off" name = "address" value = "<?php echo $fetch_data['address']?>">
    </div>
    <div class="mb-3">
    <input type="password"  class="form-control" required autocomplete = "off" name = "password" value = "<?php echo $fetch_data['password']?>">
    </div>
   <button type="submit" class="btn btn-primary" name = "submit_btn" value = "update">Update</button>
</form>

<?php

    }
}
?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>