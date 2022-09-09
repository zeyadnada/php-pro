<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleting</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
        <div class="form-container">

        <form action=""  method="post" enctype="multipart/form-data">

        <h3>delete</h3>
        <input type="text" name="name" required placeholder="enter member name">


        <input type="submit" name="delete" value="delete data " class="form-btn">
        <a href="../register&login\admin_page.php">admin page</a> <br>
        <a href="../register&login\login_form.php" class="btn">logout</a>

    </form>
</div>

</body>
</html>
<?php
$connection=$conn = mysqli_connect("localhost","root","");
$dp=mysqli_select_db($connection,'project_db');

if(isset($_POST['delete'])){
    $username=$_POST['name'];
    $query="DELETE FROM `doctors` WHERE name = '$username'";
    $query_run=mysqli_query($connection, $query);

   
    if($query_run){
        echo'<script type="text/javascript"> alert("Successfully deleted") </script>';
    }
    else{
        echo'<script type="text/javascript"> alert("Not deleted") </script>';
    }







}
?>




