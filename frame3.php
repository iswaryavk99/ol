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

<html>
  <head>
  <title>frame3</title>
    <link rel="stylesheet" href="frame.css">

  </head>
  <body>
    
      <div class="mains">
        <?php
           $sql="SELECT * FROM services";
           $result = mysqli_query($conn,$sql);
           while ($row=mysqli_fetch_array($result)){

            ?>
        <div class="profile-card">
            <div class="img">
                    <img src="<?php echo$row['img'] ?>" alt="" height="158" width="100">
                
            </div>
            <div class="caption">
                <h2><?php echo$row['name']; ?></h2>

                    <p><?php echo$row['jobType']; ?></p>
                <div class="Details-button">
<input type="submit" name="submit" value= "view" id="but1">
<input type="submit" name="submit" value= "More Details" id="but2">
                </div>
            </div>
        </div>
     <?php

           }
       ?>      

    <script src="./Font-Awesome/all.min.js"></script>
</body>
  </body>


</html>
