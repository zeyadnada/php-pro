<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
        <div class="form-container">

        <form action=""  method="post" enctype="multipart/form-data">

        <h3>book now</h3>
        
        <input type="text" name="name" placeholder="enter your name">

        <input type="text" name="age" placeholder="enter your age">

        <select name="gender" >
            <option value="male">male</option>
            <option value="female">female</option>
        </select>

    
        <input type="text" name="phone" placeholder="enter your phone number">

        <input type="text" name="doc_name" placeholder="enter doctor's name">

        <input type="datetime-local" name="time" >

        <input type="submit" name="upload" value="book " class="form-btn">

    </form>
</div>

</body>
</html>
<?php
$connection=$conn = mysqli_connect('localhost','root','');
$dp=mysqli_select_db($connection,'project_db');

if(isset($_POST['upload'])){
    $username=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
    $doc_name=$_POST['doc_name'];
    $time=$_POST['time'];
    $query="INSERT INTO `book_table`(`name`,`age`,`gender`,`phone`,`doc_name`,`time`)
     VALUEs(' $username',' $age',' $gender','  $phone','$doc_name','  $time')";
    $query_run=mysqli_query($connection, $query);

    if($query_run){
        echo'<script type="text/javascript"> alert("Successfully Uploaded") </script>';
    }
    else{
        echo'<script type="text/javascript"> alert("Not Uploaded") </script>';
    }
}





?>
