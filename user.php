<?php
include 'connect.php';

if(isset($_POST['submit'])){
    // echo "success";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    // echo $password;
    $sql = "insert into `crudtable` (name,email,address,password) values ('$name','$email','$address','$password')";
    $result = mysqli_query($conn,$sql);

    if($result){
        header ('location:display2.php');
    }else{
        echo die("nooooo");
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
    <h1>Crud Operation</h1>

<form action = "" method = "post">
    <div class="mb-3">
    <input type="text" placeholder = "Enter your Name" class="form-control" required autocomplete = "off" name = "name">
    </div>
   <div class="mb-3">
    <input type="email" placeholder = "Enter your Email" class="form-control" required autocomplete = "off" name = "email">
    </div>
    <div class="mb-3">
    <input type="text" placeholder = "Enter your Address" class="form-control" required autocomplete = "off" name = "address">
    </div>
    <div class="mb-3">
    <input type="password" placeholder = "Enter your Password" class="form-control" required autocomplete = "off" name = "password">
    </div>
   <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
</form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>