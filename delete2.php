<?php
include 'connect.php';
if(isset($_GET['deletes'])){
    $delete_id = $_GET['deletes'];
    // echo $delete_id;
    //delete query

    $delete_data = mysqli_query($conn, "Delete from `crudtable` where id = $delete_id") or die ("query faild");
    if($delete_data){
        header ('location:display2.php');

    }else{
        header ('location:display2.php');
    }
}
?>