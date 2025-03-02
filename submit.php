<?php
    $con=mysqli_connect('localhost','root','','record');
    if(isset($_POST['sbmt']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['message'];
        $query="INSERT INTO register(NAME,EMAIL,MESSAGE) VALUES ('$name','$email','$message')";
        $run=mysqli_query($con,$query);
    }
?>