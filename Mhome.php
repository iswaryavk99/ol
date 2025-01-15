<?php
error_reporting(0);
include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(isset($_GET['logout'])){d
   unset($user_id);
   session_destroy();
   header('location:Mhome.php');
}

if(isset($_POST['update_profile'])){

   

   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = 'uploaded_img/'.$update_image;

   if(!empty($update_image)){
      if($update_image_size > 2000){
         $message[] = 'image is too large';
      }else{
         $image_update_query = mysqli_query($conn, "UPDATE `user_form` SET image = '$update_image' WHERE id = '$user_id'") or die('query failed');
         if($image_update_query){
            move_uploaded_file($update_image_tmp_name, $update_image_folder);
         }
         $message[] = 'image updated succssfully!';
      }
   }

}

?>
<!DOCTYPE html>
<!-- Create by ishu -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ishu Home page</title>
    <link rel="stylesheet" href="Mstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <script type="text/javascript">
      window.alert("welcome to Vaithiyar Matrimony!");
    </script>
</head>
<body>
      <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#"><span></span></a></div>
                <img src="LOGOS.jpg" id="logs">

            <ul class="menu">
                <li><a href="#home" class="menus-btn">Home</a></li>
                <li><a href="http://localhost/old/login.php" class="menus-btn">Login/Register</a></li>
                <li><a href="http://localhost/old/Mservices.php" class="menus-btn">Services</a></li>
                <li><a href="#home" class="menus-btn">Payment</a></li>
                <li><a href="#about" class="menus-btn">About</a></li>
                <li><a href="#contact" class="menus-btn">Contact us</a></li>
                
            </ul>
            <div class="action">
            <div class="profile" >
                
                
     
   
        
            <div class="men">
                <ul>
                    <li><img src="down.png" height="33" width="33"><a href="http://localhost/old/login.php">Login</a></li>
                    <li><img src="edit.png" height="33" width="33"><a href="http://localhost/old/update_profile.php">Edit Profile</a></li>
                    <li><img src="inbox.png" height="33" width="33"><a href="#">Inbox</a></li>
                    <li><img src="help.png" height="33" width="33"><a href="#">help</a></li>
                    <li><img src="logout.png" height="33" width="33"><a href="Mhome.php?logout=<?php echo $user_id; ?>" class="delete-btn">logout</a>



                </ul>
                </form>

</div>
                
            </div>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
    </div>

</div>
<div class="update-profiles" onclick="menToggle();" id="ups">

   <?php
      $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

   <form action="Mhome.php" method="post" enctype="multipart/form-data">


      <?php
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
  </form>
</div>
<script>
     function menToggle(){
      const toggleMenu = document.querySelector('.men');
      toggleMenu.classList.toggle('active')
  }

</script>
    </nav>
    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="card">
                    <div class="text">
                        <label><h1><b>welcome to</b></h1><br><h3>Velaudha Matrimony</span><h3></label>        
                    </div>
                    <div class="sub">
                    <a href="http://localhost/old/register.php"><i class="" id="btn"  ></i>Register now!</a>

                </div>
                    <label><h4>This Velayuthaa Matrimony Services joins community to register & search<br><span>the bride & groom of your choice from various cultural background located across the world.</span></h4></label>
                </div>

   
            </div>
            <div class="socials">
                <a href="#" class="x" >facebook<li class="fab fa-facebook" id="x"></li></a><br>
                <a href="#" class="y" >Twitter<li class="fab fa-twitter" id="y"></li></a><br>
                <a href="#" class="c" >Youtube<li class="fab fa-youtube" id="c"></li></a><br>
                <a href="#" class="d" >Instagram<li class="fab fa-instagram" id="d"></li></a>
            </div>
            
        </div>
        
        
    </section>
    <!-- rigisterr--->
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

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="2.jpeg" id="a" alt="">
                </div>
                <div class="column right">
                    <img src="3.jpeg" id="b" alt="">
                </div>
                <div class="column center">
                    <div class="text"><span> Matrimony Sites are not like dating sites. They work with a serious <br>purpose and therefore only genuine members who are serious about <br> finding their partners register their profiles with these sites. Hence, <br> is most likely that you get to meet the one keenly looking for a bride <br>or groom like you, using for this velayuthaa matrimony. This matrimony <br>sites register users, after which their profile onto a searchable <br>database maintained by the website.</span>
                    </div>
                        <div class="column middle">
                            <div class="text">
                        <span> Those users looking to find suitors search the database with customised <br>searches that typically include nationality, age, gender availability of the <br>photograph and ofter religion, geographic location and caste (mainly for <br>websites based in India). Thank you.  </span></div>
                    <p></p>
            
                </div>
            </div>
        </div>
    </section>
    <!-- Recent adding profile section start -->
    
    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>If you have any doubt..Please let me know about your're querie using this contact page. Also this site about any complaints please call given following address.</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Iswarya Dass</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">109/ North street</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">iswaryavk99@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                     <form name="conta"  action="Mcontact.php" method="post" onsubmit="return validateform()">
                    
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="name" placeholder="Name" >
                            </div>
                            <div class="field email">
                                <input type="email" name="email" id="mayile" placeholder="Email" >
                            </div>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" name="message" placeholder="Message.."></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit"> Send <i class="fas fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.454089961111!2d79.63028361439437!3d10.77649126214025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a55473c13294365%3A0xb63a303aec3a7ded!2sThiruvarur%20Temple%20Museum!5e0!3m2!1sen!2sin!4v1653572529334!5m2!1sen!2sin" width="1265" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <script>
            function validateform(){

                var name=document.conta.name.value;
                var email=document.getElementById('mayile');
                var filter= /^([a-zA-Z0-9_\.\-])+@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                var message=document.conta.message.value;  

                if(name == null || name == ""){
            alert("please Enter your name");
            return false;

           }
           if(!filter.test(mayile.value)){
            alert("Please enter valid mail id");
            mayile.focus;
            return false;
         }
         if(message == null || message == ""){
            alert("please enter your message");
            return false;
         }else{
            alert("Are you sure.. can we submit This message...");
            return true;
         }
}



        </script>
    </section>
    <!-- footer section start -->
    <footer>
        <span> Created By <a href="#">Iswarya Dass</a>  <span class="far fa-copyright"></span> 2022 All rights reserved.</span>
        <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
</div>
    </footer>
    <script src="script.js"></script>

</form>
</body>
</html>