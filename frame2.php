
<html>
  <head>
    <style>
      #ones{
        background-color: indigo;
        height: 80px;
        border: ridge;
        border-radius: 12px;
        margin-top: 2px;
      }
      #ones h2{
        margin-left: 40%;
        color: white;
        margin-top: 10px;
        font-size: 42px;
      }

    </style>

    <script>
      alert("after payment you can see more Details ..");

    </script>

  <title>frame2</title>
  </head>
  <link rel="stylesheet"  href="frame2.css">
  <body>
    <!----navbar--->
      <div id="ones" >
        <h2>Recent Profile</h2>
        
      











    <!-----nav close-->
       frame2
      <?php

      $id =$_GET['id'];
      //echo  $id;

      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "old";

      $conn = mysqli_connect($servername,$username,$password,$database);

     $sql = "SELECT * FROM `services` WHERE id=$id";
     $result = mysqli_query($conn, $sql);
     $row = mysqli_fetch_assoc($result);
     //print_r($row);

     $name = $row['name'];
     $fathername = $row['fathername'];
     $mothername = $row['mothername'];
     $Brothers = $row['Brothers'];
     $Systers = $row['Systers'];
     $Fstatus = $row['Fstatus'];
     $Homeat = $row['Homeat'];
     $Home =$row['Home'];
     $HouseOwner = $row['HouseOwner'];
     $Marital = $row['Marital'];
     $Physical_challenged = $row['Physical_challenged'];
     $height = $row['height'];
     $age = $row['age'];
     $education = $row['education'];
     $Bplace = $row['Bplace'];
     $Btime = $row['Btime'];
     $workLocation =$row['workLocation'];
     $jobType = $row['jobType'];
     $position = $row['position'];

     //print_r($row);

?>


       <div class="contained">
      <img src="<?php echo$row['img'] ?>" alt="" height="100" width="100">

       	

      <div class="contain">
      	<h3>Name<p>:<?php echo $name;?></p>
      	Father Name<p>:<?php echo $fathername;?></p>
        Mother Name<p>:<?php echo $mothername;?></p>
        Brother<p>:<?php echo $Brothers;?></p>
        Syster<p>:<?php echo $Systers;?></p>

        Family Status<p>:<?php echo $Fstatus;?></p>
        Home At<p>:<?php echo $Homeat;?></p>
        Home<p>:<?php echo $Home;?></p>
        House for<p>:<?php echo $HouseOwner;?></p>
        Marital status<p>:<?php echo $Marital;?></p>
        Height/Weight<p>:<?php echo $height;?></p>
        </h3>
      </div>
    </div>
  </div>
        <div class="con">
        <h3>Education<p>:<?php echo $education;?></p>
        Work At<p>:<?php echo $workLocation;?></p>
        age<p>:<?php echo $age;?></p>
        Birth place<p>:<?php echo $Bplace;?></p>
        Birth time<p>:<?php echo $Btime;?></p>
        Physical<br>challenged<p>:<?php echo $Physical_challenged;?></p>
        jobType<p>:<?php echo $jobType;?></p>
        position<p>:<?php echo $position;?></p>
        Religion<p>: ...</p>
        Caste<p>: ...</p>
        Address<p>: ...</p>
      <br><br>
        <span>click Here to see..</span>
        <br><br>
<a href="viewpay.php?id=<?php echo$row['id']; ?>">
 <input type="submit" name="submit" value= "More Details" id="but2" >
      </a>
      


        </div>

      
      	
      	
      </div>


       </div>
       <!---register list scrolling circle--->
        <section>
        <?php
include("connects.php");


if(isset($_POST['submit'])){
    $name =$_FILES['name'];
    $jobType =$_FILES['jobType'];
    $image_name = $_FILES['img']['name'];
    $image_tmp_name = $_FILES['img']['tmp_name'];

    $sql = " INSERT INTO services VALUES ('$image_name','$name','$jobType')";
    $result = mysqli_query($conn,$sql);

    if($result){
        move_uploaded_file($image_tmp_name,$image_name,$name,$jobType);
    }

}
?>
        <div class="slider">
             <?php
           $sql="SELECT * FROM services";
           $result = mysqli_query($conn,$sql);
           while ($row=mysqli_fetch_array($result)){

  


            ?>
             <div class="slide-track">
                <div class="slide">
                    <img src="<?php echo$row['img'] ?>" alt="" height="100" width="100">

                </div>
                <div class="captions">

          
                    <h2><?php echo$row['name']; ?></h2>

                    <p><?php echo$row['jobType']; ?></p>

                    <div class="Details-button">
                  <a href="frame2.php?id=<?php echo$row['id']; ?>">
<input type="submit" name="submit" id="but1" value="View">
</a>

<a href="viewpay.php?id=<?php echo$row['id']; ?>">
  
<input type="submit" name="submit" value= "More Details" id="but2">
</a>
                        <br>
                        <div class="sub">

                    

                          
                      </div>

                    </div>
                </div>
            </div>
    
          
            
  
  <?php

           }
       ?>

        <script src="./font-awesome/"></script>
    </section>
  </body>


</html>