<?php

      include "include/connect.php";

     if(isset($_POST['submit'])){
  $bid=$_POST['bid'];
  $bookname=$_POST['bookname'];
  $author=$_POST['author'];
  $catagory=$_POST['catagory'];
  $address=$_POST['address'];
  

  $addbook = "INSERT INTO books(bid, bookname, author, catagory, address) Values('$bid', '$bookname', '$author', '$catagory', '$address')";
  $result=mysqli_query($con,$addbook);

  if(!empty($result)){
    header("Location:index.php");
  }else{
    header("Location:register.php");
  }
}

?>