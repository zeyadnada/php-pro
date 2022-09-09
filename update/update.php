<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updating</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
        <div class="form-container">

        <form action=""  method="post" enctype="multipart/form-data">

        <h3>update</h3>


        <input type="text" name="name" requried placeholder="enter name to update">

        <input type="text" name="description" required placeholder="description">

        <input type="text" name="time" required placeholder="enter waiting time">

        <input type="text" name="location" required placeholder="enter location">

        <input type="text" name="telephone" required placeholder="enter telephone">

        <input type="text" name="tt" required  placeholder="enter major">

        <input type="submit" name="upload" value="Upload " class="form-btn">
        <a href="../register&login\admin_page.php">admin page</a> <br>

        <a href="../register&login\login_form.php" class="btn">logout</a>
    </form>
</div>

</body>
</html>
 <?php 
 
    $connection=$conn = mysqli_connect("localhost","root","");
     $dp=mysqli_select_db($connection,'project_db');

     if(isset($_POST['upload']))
     {
         $name=$_POST['name'];
            
         $query="UPDATE  `doctors` SET  description ='$_POST[description]',time ='$_POST[time]',
         location ='$_POST[location]',tt ='$_POST[tt]' where name = '$_POST[name]'";
        $query_run=mysqli_query($connection, $query);

        if($query_run){
            echo'<script type="text/javascript"> alert("Successfully deleted") </script>';
        }
        else{
            echo'<script type="text/javascript"> alert("Not deleted") </script>';
        }
    
           
     }
?> 



