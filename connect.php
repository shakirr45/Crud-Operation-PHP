<?php
$conn = mysqli_connect('localhost','root','','crud2');
if($conn){
    echo "connection successfull";
}else{
    echo die("faild to connection");
}
?>