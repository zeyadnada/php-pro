<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="stylesheet" href="servicesPagrStyle.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- <link rel="stylesheet"href="https://unpkg.com/swiper/swiper-bundle.min.css"
    /> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<!--  -->
<!-- <link rel="stylesheet" href="alaa\css.css"> -->
</head>

<body>

    <header class="header" id="main">
        <img src="logo.png" id="logo" alt="">

        <nav class="navbar">
            
<a href="../register&login\book.php" >book</a>
            <a href="Cardio.php">Cardiology</a>
            <a href="pulomonary.php">Pulomonary</a>
            <a href="Neurology.php">Neurology</a>
            <a href="Dental.php">Dental</a>
            <a href="Ophthalmology.php">Ophthalmology</a>
            <a href="Hepatology.php">Hepatology</a>
            <a href="Paediatric.php">Paediatric</a>
            <a href="Orthopedics.php">Orthopedics</a>
            <a href="Nutrition.php">Nutrition</a>
            <a href="index.php" class="toHome">Home</a>
        </nav>


    </header>


 

  


    <form action="" method="POST" enctype="multipart/form-data">
    
    <div id="box">
    
        <?php
            $connection = mysqli_connect("localhost","root","");
            $db = mysqli_select_db($connection,'project_db');
            $query= "SELECT * FROM doctors WHERE tt='Cardiology and Vascular Disease'";
            $query_run = mysqli_query ($connection,$query);
            while($row =mysqli_fetch_array($query_run)){
            
                ?>
               <div id="one" >
                       <div class="two" >
                            <?php echo '<img src="data: image;base64,'. base64_encode($row['image']).'" alt= "Image" style = "width:100px;height:100px border: gray;border-radius:50%;">';?>
                       </div>
            
            
                     <div  class="two"> <?php 
                     echo "Docor Name:";
                     echo $row['name'] ?>      </div>
                     <div  class="two">
                     <i style="font-size:24px ;    color: rgb(0, 112, 205);" class="fa">&#xf095;</i>
                        <?php echo $row['telephone'] ?>    </div>
            
                     <div  class="two"> <i style='font-size:24px   ;;  color: rgb(0, 112, 205);'  class='far'>&#xf017;</i>
            
                     <?php echo $row['time'] ?>      </div>
                     <div  class="two"> <i style="font-size:24px   ;  color: rgb(0, 112, 205);" class="fa">&#xf0f1;</i>
                      <?php echo $row['description'] ?></div>
                     <div  class="two"> <i style='font-size:24px   ;  color: rgb(0, 112, 205);' class='fas'>&#xf3c5;</i>
                     <?php echo $row['location'] ?>  </div>
                     <!-- <div style="height: 10px; width:auto"></div> -->
                     <div class="three">
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star checked"></span>
            
                      <span class="fa fa-star"></span>
                    
                    
                    </div>
                       <div style="height: 10px; width:auto"></div>
            
                </div>
            
            <div style="height: 10px; width:auto">
            
            </div>
                <?php
            }
        
        
        ?>
    
        
        
                    
                    
                
                
                

</div>



</form>





</body>
</html>