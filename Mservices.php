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
<title>Services</title>
<style>
body{
margin:0;
padding:0;
background-image:url(oks.jpg);
background-size:101%;
background-repeat: no-repeat;
}
.container{
top:22%;
left:50%;
down:20%;
position:absolute;
transform:translate(-50%,-38%);
margin-top: 2px;
}
.container .card{
	height: 600px;
	width: 840px;
	margin-left: 40px;
	margin-top: 168px;
}
.card{
padding: 1px 250px 2px  150px; 
background:rgb(100,10,20);
border-radius:50px;
width:100%;
height:50%;
margin-left: -300px;
}
label{
width:450px;
display: inline-block;
font-size:18px;
margin-top: -533px;
margin-left: 55px;
color: green;
color: white;

}
text{
padding: 8px;
font-size: 18px;
font-color:#ffffff;
}
select{
padding: 0px;
font-size:12px;
margin-left: 19px;
}
span{
	margin-left: -100px;
}
h2{
text-align:left;
padding:0px;
font-family:sans-serif;
font-size:42px;
font-style:italic;
}
.card h2 p{
	margin-left: 11px;

}
div.card{
background-color:rgba(0,0,0,0.5);
width:500%;
font-size:15px;
border-radius:10px;
}
#button{
border-radius:20px;
padding:10px 20px;
background:greenyellow;
color:white;
margin-top: -159px;
margin-left: 390px;
}
.btn{
	margin-left: 200px;
	margin-top: 18px;
}
#button:hover{
background-color: dodgerblue;
color:black;
cursor:pointer;
}
#name{
	margin-left: 60px;
	margin-top: -8px;
	border-radius: 22px;
}
#ser{
	margin-left: 43%;
	margin-top: 3px;
}
#Fname{
	margin-left: 22px;
	border-radius: 22px;
}
#Mname{
	margin-left: 17px;
	border-radius: 22px;
}
#syblings{
	margin-left: 49px;
}
#Fstatus{
	margin-left: 14px;
	border-radius: 22px;
}
#Homeat{
	margin-left: 46px;
	border-radius: 22px;
}
#House{
	margin-left: 38px;
	border-radius: 22px;
}
#Pno{
	margin-left: -400px;
}
#height{
	margin-left: 20px;
	border-radius: 22px;
}
.con{
	margin-top: 44px;
}
#age{
	margin-left: 70px;
	margin-bottom: 190px;
	border-radius: 22px;
}
#Houseown{
	margin-left: 57px;
	margin-top: 12px;
	border-radius: 22px;
}
#Marital{
	margin-left: 15px;
	border-radius: 22px;
}
#syb{
	margin-left: 44px;
	border-radius: 22px;
}
#sy{
	margin-left: 10px;
	border-radius: 22px;
}
#birthplace{
	margin-left: 439px;
}
#ame{
	margin-left: 2px;
	border-radius: 20px;
}
#Zodi{
	margin-left: 48px;
	border-radius: 20px;
}
.Zodiac span{
	margin-left: 475px;
}
#star{
	margin-left: 59px;
	margin-top: -20px;
	border-radius: 22px;
}
.star span{
	margin-left: 475px;
}
#diagonal{
	margin-top: -19px;
	margin-left: 27px;
	border-radius: 22px;

}
#yogam{
	margin-left: 40px;
	border-radius: 22px;
}
#dosh{
	margin-left: 70px;
}
.dosh{
	margin-left: 1px;
}
.second {
	margin-left: 340px;
	margin-top: -422px;
}
#date{
	margin-left: 475px;
	margin-top: -220px;

}
#time{
	margin-left: 475px;

}
.time{
	margin-left: 430px;
}
.qualify{
	margin-left: 710px;
	margin-top: -365px;
}
#qualify {
	margin-left: 180px;
	margin-top: -20px;
	border-radius: 22px;
}
.work{
	margin-top: 25px;
	margin-left: 844px;
}
.work span{
	margin-left: 19px;
   
}
#locat{
	margin-top: -18px;
	margin-left: 45px;
	border-radius: 22px;
}
.Living{
	margin-top: 24px;
	margin-left: 877px;
}
.Living span{
	margin-left: 188px;
}
#Living{
	margin-left: -142px;
	margin-top: -12px;
	border-radius: 22px;
}
.annual{
	margin-top: 12px;
	margin-left: 742px;
}
.annual span{
	margin-left: 120px;
}
#annual{
	margin-left: 44px;
	margin-top: -14px;
	border-radius: 22px;

}
.job{
	margin-top: 12px;
	margin-left: 910px;
}
.job span{
	margin-left: -7px;
}
#job{
	margin-left: 45px;
	margin-top: -11px;
	border-radius: 22px;
}
.position{
	margin-left: 1209px;
	margin-top: 15px;
}
.position span{
	margin-top: 32px;
	margin-left: -350px;
}
#a{
	margin-left: 5px;
}
#b{
	margin-top: -30px;
	margin-left: 8px;
}
#btns{
	margin-left: 890px;
}
.second{
	margin-bottom: 55px;
	margin-left: 474px;
	margin-top: -592px;
}
#birthplace{
	margin-left: 575px;
}
.birthplace{
	margin-left: 390px;
}
#qualify{
	margin-left: 55px;
}
.qualify{
	margin-left: 770px;
	margin-top:-338px;
}
.imgbut{
	margin-left: 825px;
	margin-top: 32px;

}
#imgbut{
	margin-left: -80px;
	border-radius: 44px;
	cursor: pointer;
}
.cast{
	margin-left: 1010px;
	margin-top: -12
}
#cast{
	margin-top: -62px;
	margin-left: 5px;
	border-radius: 22px;
}
#religion{
	border-radius: 22px;
	margin-left: 2px;
}
#file{
	margin-top: -7px;
}
.addPhone{
	margin-top: 22px;
	margin-left: -22px;
}
#address span{
	margin-left: -20px;
	margin-top: -10px;
}
#address{
	margin-top: 10px;
	margin-left: 16px;
	border-radius: 10px;
	height: 68px;
}
#button{
	color: white;
	background-color: indigo;
	border: none;
	height: 48px;
	width: 200px;
	margin-left: 340px;
	font-size: 19px;
}
#button:hover{
	background-color: blue;
	color: white;
}
</style>



<script>
	
function validateform(){

	 var allowedExtension = ['jpeg', 'jpg'];
     var fileExtension = document.getElementById('file').value.split('.').pop().toLowerCase();
     var isValidFile = false;
	var name=document.myform.name.value;
    var fathername=document.myform.fathername.value;
    var mothername=document.myform.mothername.value;
    var Brothers=document.myform.Brothers.value;
    var Systers=document.myform.Systers.value;
    var Fstatus=document.myform.Fstatus.value;
    var Homeat=document.myform.Homeat.value;
    var Home=document.myform.Home.value;
    var HouseOwner=document.myform.HouseOwner.value;
    var Marital=document.myform.Marital.value;
    var Physical_challenged=document.myform.Physical_challenged.value;
    var height=document.myform.height.value;
    var age=document.myform.age.value;
    var Bdate=document.myform.Bdate.value;
    var Btime=document.myform.Btime.value;
    var Bplace=document.myform.Bplace.value;
    var zodic=document.myform.zodic.value;
    var star=document.myform.star.value;
    var diagonal=document.myform.diagonal.value;
    var yogam=document.myform.yogam.value;
    var Dosh=document.myform.Dosh.value;
    var education=document.myform.education.value;
    var workLocation=document.myform.workLocation.value;
    var livingPlace=document.myform.livingPlace.value;
    var annualIncome=document.myform.annualIncome.value;
    var jobType=document.myform.jobType.value;
    var position=document.myform.position.value;
    var img=document.myform.img.value;
    var cast=document.myform.cast.value;
    var religion=document.myform.religion.value;
    var address=document.myform.address.value;

	if(name == null || name ==""){
		alert("Name can't be blank");
		return false;
	}
	if(fathername == null || fathername == ""){
		alert("fathername can't be blank");
		return false;
	}
	if(mothername == null || mothername == ""){
		alert("mothername can't be blank");
		return false;
	}
	if (Brothers == ""){
	    alert("select your brother's sysblings");
	    return false;
	}
	if (Systers == ""){
	    alert("select your Systers's sysblings");
	    return false;
	}
	if(Fstatus == ""){
		alert("select your 'family status'");
		return false;
	}
	if(Homeat == ""){
		alert("select your 'Home at'");
		return false;
	}
	if(Home == ""){
		alert("select your 'Home'");
		return false;
	}if(HouseOwner == ""){
		alert("select your 'House Owner'");
		return false;
	}
	if(Marital == ""){
		alert("select your 'Marital'");
		return false;
	}
	if (Physical_challenged == ""){  
	alert("Please select your Physical_challenged without skip");
	return false;
	}
	if(height == ""){
	    alert("Please selec your height & weight with skip");
	    return false;
	}
    if(age == ""){
    	alert("select your age");
    	return false;
    }
    if(Bdate == null || Bdate == ""){
    	alert("Enter your Birth date ");
    	return false;
    }
    if(Btime == null || Btime == ""){
    	alert("Enter your birth time");
    	return false;
    }
    if(Bplace == null || Bplace == ""){
    	alert("Enter your birthplace");
    	return false;
    }
    if(zodic == ""){
    	alert("your Zodiac?");
    	return false;
    }
    if(star == null || star == ""){
    	alert("your star");
    	return false;
    }
    if(diagonal == null || diagonal == ""){
    	alert("Enter your diagonal");
    	return false;
    }
    if(yogam == null || yogam == ""){
    	alert("Enter your yogam");
    	return false;
    }
    if(Dosh == ""){
    	alert("you have any dosh");
    	return false;
    }
    if(education == ""){
    	alert("you educatin details");
    	return false;
    }
    if(workLocation == ""){
    	alert("your work Location");
    	return false;
    }
    if(livingPlace == null || livingPlace == ""){
    	alert("your livingPlace");
    	return false;
    }
    if (annualIncome == ""){
    	alert("select your annualIncome");
    	return false;
    } 
    if(jobType == ""){
    	alert("select your jobType");
    	return false;
    }
    if(position == ""){
    	alert("select your position");
    	return false;
    }
    
    if(cast == ""){
    	alert("select your cast");
    	return false;
    }
     if(religion == ""){
    	alert("select your religion");
    	return false;
    }if(address == null || address == ""){
    	alert("your address Please");
    	return false;
    }
    for(var index in allowedExtension) {

                    if(fileExtension === allowedExtension[index]) {
                        isValidFile = true; 
    	            alert("Are your sure can we submit your all details in our database..your all data are correct?");


                        break;
                    }
                }

                if(!isValidFile) {
                    alert('Allowed Extensions are : *.' + allowedExtension.join(', *.'));
                }
                return isValidFile;
            }
  


</script>

</head>  
<body>
<form name="myform" method="post" action="Mserv.php" onsubmit="return validateform()">	

<div class="Register">
<div class="container">
<div class="card">
  <h2 align="center" id="ser"><b><font color="white">Services</b></h2>
  <p>
  	<div class="con">
   <span>Name :</span></b> <input type="text" name="name" placeholder="Enter name" id="name">
</p>
<span>Father Name :</span><input type="text" name="fathername" placeholder="Father name" id="Fname">
<br/>
<p><span>Mother Name :</span><input type="text" name="mothername" placeholder="mothername" id="Mname">
</p>	
<p><span>Syblings :</span>
	<select name="Brothers" id="syb">
	<option value="">--Select Please--</option>
	<option value="Nill">Nill</option>
    <option value="1 brother">1 brother</option>
	<option value="2 brother">2 brother</option>
	<option value="3 brother">3 brother</option>
	<option value="4 brother">4 brother</option>
</select> &<select name="Systers" id="sy">
	<option value="">--Select Please--</option>
	<option value="Nill">Nill</option>	
	<option value="1 sister">1 sister</option>
	<option value="2 sister">2 syster</option>
	<option value="3 sister">3 syster</option>
	<option value="4 sister">4 Sister</option>
	<option value="5 sister">5 syster</option>

</select>

	
</select>
	<p><span>Family Status :</span>
	<select name="Fstatus" id="Fstatus">
      <option value="">-Select Please-</option>
      <option value="Middle class">Middle Class</option>
      <option value="Rich">Rich</option>
      <option value="Poor">Poor</option>
  </select>

  </select>
	<p><span>Home At :</span>
	<select name="Homeat" id="Homeat">
      <option value="">-Select Please-</option>
      <option value="City">City</option>
      <option value="Town">Town</option>
      <option value="Village">Village</option>
  </select>

</select>
	<p><span>House for :</span>
	<select name="Home" id="House">
      <option value="">-Select Please-</option>
      <option value="Terraced house"> Terraced house</option>
      <option value="Form house">Form house</option>
      <option value="Roof house">Roof house</option>
  </select>

  </select>
	<p><span> Owner :</span>
	<select name="HouseOwner" id="Houseown" >
      <option value="">-Select Please-</option>
      <option value="Own house">Own house</option>
      <option value="Rent house">Rent house</option>
  </select>

  <div class="input-box">
	<p><span>Marital status :</span>
	<select name="Marital" id="Marital">
      <option value="">-Select Please-</option>
      <option value="Single">Single</option>
      <option value="Already Married">Already Married</option>
  </select>
</p>

  <br>
   <span>Physically chellanged :</span>
    Yes<input type="radio" name="Physical_challenged" value="Yes">
    No<input type="radio" name="Physical_challenged" value="No">
    <br>
    <br>
	<span>Height & weight:</span><input type="text" name="height" placeholder="Enter Height" id="height" value="" >
	
</div>
 </div>
</div>
</p>
</p>
<br>
<br>
<a href="">
	<div class="btn">
<input type="submit" name="submit" value= "Register now!" id="button">
</div>
</a>
<div class="second">
<h>Age:</h><select name="age" id="age">
	<option value="">--SELECT--</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
	<option value="32">32</option>
	<option value="33">33</option>
	<option value="34">34</option>
	<option value="35">35</option>
	<option value="36">36</option>
	<option value="37">37</option>
	<option value="38">38</option>
	<option value="39">39</option>
	<option value="40">40</option>
</select>
	</div>
	<div class="date" id="date">
		Date Of Birth:
    <input type="date" name="Bdate" value="">
    <br><br>
	</div>	
	<div class="time" id="time">
		Birth Of Time:
    <input type="time" name="Btime" value="">
    <br>
	</div>
	<div class="birthplace" id="birthplace">
	<p>
   <span>Birth of Place:</span></b> <input type="text" name="Bplace" placeholder="Enter birth plces" id="ame" value="" >
</p>
</p>
</div>
<div class="Zodiac">
   <span>Zodiac:</span><select name="zodic" id="Zodi">
	<option value="">--SELECT--</option>
	<option value="Aries">Aries</option>
	<option value="Taurus">Taurus</option>
	<option value="Gemini">Gemini</option>
	<option value="Cancer">Cancer</option>
	<option value="Leo">Leo</option>
	<option value="Virgo">Virgo</option>
	<option value="Libra">Libra</option>
	<option value="Scorpio">Scorpio</option>
	<option value="Siggitarius">Siggitarius</option>
	<option value="Aquarius">Aquarius</option>
	<option value="Pisces">Pisces</option>
</select><br><br>
<div class="star">
   <span>Star :</span></b> <input type="text" name="star" placeholder="Enter your star" id="star" value="">
</div><br>
<div class="diagonal">
   <span>Diagonal :</span></b> <input type="text" name="diagonal" placeholder="Enter your Diagonal" id="diagonal" value="">
</div><br>
<div class="yogam">
   <span>Yogam :</span></b> <input type="text" name="yogam" placeholder="Enter your Yogam" id="Yogam" value="">
</div><br>
<div class="dosh">
<span>Dosh any :</span>
    <input type="radio" name="Dosh" value="Yes">Yes
    <input type="radio" name="Dosh" value="No">No
</div>
</div>
<div class="qualify">
<h>your Education/Qualification:</h><select name="education" id="qualify">
	<option value="">--SELECT--</option>
	<option value="B,sc(cs)">B,Sc(CS)</option>
	<option value="B,Sc(IT)">B,Sc(IT)</option>
	<option value="BBA">BBA</option>
	<option value="BCA">BCA</option>
	<option value="M,Sc(cs)">M,Sc(cs)</option>
	<option value="M,Sc(IT)">M,Sc(IT)</option>
	<option value="MBA">MBA</option>
	<option value="MCA">MCA</option>
	<option value="B,TECH">B,TECH</option>
	<option value="BE">BE</option>
	<option value="CSE">CSE</option>
	<option value="ITI">ITI</option>
	<option value="ME">ME</option>
	<option value="MBBS">MBBS</option>
</select>
</div>
<div class="work">
<span>Work Location:</span><select name="workLocation" id="locat">
	<option value="">--SELECT--</option>
	<option value="WORK FROM HOME">WORK FROM HOME</option>
	<option value="India">India</option>
	<option value="USA">USA</option>
	<option value="UAE">UAE</option>
	<option value="South Africa">South Africa</option>
	<option value="London">London</option>
	<option value="China">China</option>
	<option value="Asia">Asia</option>
	<option value="Malaysia">Malaysia</option>
	<option value="Astraliya">Astraliya</option>
	<option value="Jappan">Jappan</option>
	<option value="spain">spain</option>
</select><br>
</div><div class="Living">
	<spanL>Living Place:<span><input type="text" name="livingPlace" placeholder="type your Living Place" id="Living">
</div>
<div class="annual">
<span>Annual Income:</span><select name="annualIncome" id="annual">
	<option value="">--SELECT--</option>
	<option value="below 50,000"> below 50,000</option>
	<option value="1 Lakhs">1 Lakhs</option>
	<option value="2 Lakhs">2 Lakhs</option>
	<option value="3 Lakhs">3 Lakhs</option>
	<option value="4 Lakhs">4 Lakhs</option>
	<option value="5 Lakhs">5 Lakhs</option>
	<option value="6 Lakhs">6 Lakhs</option>
	<option value="7 Lakhs">7 Lakhs</option>
	<option value="8 Lakhs">8 Lakhs</option>
	<option value="9 Lakhs">9 Lakhs</option>
	<option value="10 Lakhs">10 Lakhs</option>
	<option value="below 50 Lakhs">below 50 Lakhs</option>
	<option value="Abow 50 Lakhs">Abow 50 Lakhs</option>
</select><br>
</div>
<div class="job">
<span>Job Type:</span><select name="jobType" id="job">
	<option value="">--SELECT--</option>
	<option value="Government Employee">Government Employee</option>
	<option value="Private Employee">Private Employee</option>
	<option value="Owner">Owner</option>
	<option value="Doctor">Doctor</option>
	<option value="Civil Engineer">Engineer</option>
	<option value="Software">Software Engineer</option>
	<option value="Marine Engineer">Marine Engineer</option>
	<option value="pilet">pilet</option>
	<option value="Teacher">Teacher</option>
	<option value="HR">HR</option>
	<option value="Manager">Manager</option>
	<option value="Developer">Developer</option>
	<option value="Police">Police</option>

</select><br>
</div>
<div class="position">
   <span>Position Type :</span>
    <input type="radio" name="position" id="a" value="Temporary">Temporary
    <input type="radio" name="position" id="b" value="Permanent">Permanent
    <br><br><br>
    <span>Bride / Groom Picture :</span>
    <input type="file" name="img" id="file" value="" ><br><br><br>
</div>
<div class="cast">
<span>cast / religion:</span>
	<select name="cast" id="cast">
	<option value="">-cast-</option>
    <option value="SC/ST">SC/ST</option>
	<option value="BC">BC</option>
	<option value="MBC">MBC</option>
	<option value="OC">OC</option>
</select> &<select name="religion" id="religion">
	<option value="">-Religion-</option>
	<option value="Hindu">Hindu</option>
	<option value="Muslim">Muslim</option>
	<option value="Cristian">Cristian</option>

</select>
<div class="addPhone">
<span>Address/ Phone:</span><textarea name="address" placeholder="Address & Phone number" id="address" value="" ></textarea><br><br>
</div>
</div>

<div class="imgbut">
<a href="http://localhost/old/Mhome.php">
<img src="home.jpg" height="55" width="55" id="imgbut">
</div>
<label>Please give  following Bride or Groom Details:</label>



</form>

</body>
</html>
