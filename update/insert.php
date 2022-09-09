<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
        <div class="form-container">

        <form action=""  method="post" enctype="multipart/form-data">

        <h3>add new member</h3> <br>
        <input type="file" name="image" id="image" ><br>

        <input type="text" name="name" required placeholder="enter member name"><br>

        <input type="text" name="description" required placeholder="description"><br>

        <input type="text" name="time" required placeholder="enter waiting time"><br>

        <input type="text" name="location" required placeholder="enter location"><br>

        <input type="text" name="telephone" required placeholder="enter telephone"><br>

         <input type="text" name="tt" required placeholder="enter major"><br> 
        <!-- <select name="tt"> -->
                <!-- <option value="Cardiology and Vascular Disease">Cardiology and Vascular Disease</option> -->
                <!-- <option value="Pulomonary">Pulomonary</option> -->
                <!-- <option value="Neurosurgery">Neurosurgery</option> -->
                <!-- <option value=" Dental">Dental</option> -->
                <!-- <option value="Ophthalmology">Ophthalmology</option> -->
                <!-- <option value="Hepatology">Hepatology</option> -->
                <!-- <option value="Paediatric">Paediatric</option> -->
                <!-- <option value="Orthopedics">Orthopedics</option> -->
                <!-- <option value=" Nutrition">Nutrition</option> -->

            <!-- </select> -->

        <input type="submit" name="upload" value="Upload " class="form-btn"><br>
        <a href="../register&login\admin_page.php">admin page</a> <br>

        <a href="../register&login\login_form.php" class="btn">logout</a>

        <?php
$connection=$conn = mysqli_connect('localhost','root','');
$dp=mysqli_select_db($connection,'project_db');

if(isset($_POST['upload'])){
                $file =addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

    $file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $username=$_POST['name'];
    $description=$_POST['description'];
    $time=$_POST['time'];
    $location=$_POST['location'];
    $telephone=$_POST['telephone'];
    $major=$_POST['tt'];
    $query="INSERT INTO `doctors`(`image`,`name`,`description`,`time`,`location`,`telephone`,`tt`)
     VALUEs('$file','$username',' $description','$time',' $location','$telephone',' $major')";
    $query_run=mysqli_query($connection, $query);


 

 

 
 
 



    if($query_run){
        echo'<script type="text/javascript"> alert("Successfully Uploaded") </script>';
    }
    else{
        echo'<script type="text/javascript"> alert("Not Uploaded") </script>';

    }}
    ?>
}


       





        
    </form>
   
</div>

</body>
</html>

