


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="paymentform.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <style>
        body{
margin:0;
padding:0;
background: linear-gradient(rgba(0,0,0,.55),rgba(0,0,0,.99)),url(oks.jpg);
background-size:100%;
background-repeat: no-repeat;
}
.container{
top:22%;
left:50%;
down:20%;
position:absolute;
transform:translate(-50%,-31%);
margin-top: 2px;
}
.container .card{
    height: 570px;
    width: 160px;
    margin-left: 40px;
    margin-top: 102px;
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
margin-top: -498px;
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
font-size:32px;
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

#name{
    margin-left: -95px;
    margin-top: -96px;
    border-radius: 5px;
    height: 22px;
    width: 230px;
}
#ser{
    margin-left: 43%;
    margin-top: -5px;
}
#Fname{
    margin-top: 3px;
    margin-left: -95px;
    border-radius: 5px;
}
#Mname{
    margin-top: 3px;
    margin-left: -95px;
    border-radius: 5px;
}
.date{
    margin-left: -90px;
    margin-top: -40px;
}
h3{
    margin-left: -90px;
    margin-top: 8px;
}
span h3{
    font-size: 22px;
    font-weight:  55px;
    margin-left: -90px;
    margin-top: 15px;
}
#b1{
    margin-left: -90px;
}
.radio{
    margin-top: -22px;
    margin-left: 15px;
}
.cards{
    margin-left: -95px;
}
.cvc{
    margin-left: -95px;
    margin-top: 3px;
}

.EXP_Year{
    margin-top: 3px;
    margin-left: -95px;
}
.card h3{
    margin-top: 4px;
}
.day{
    margin-top: 9px;
    margin-left: -94px;
}
.month{
    margin-left: 2px;
}
.year{
    margin-top: -17px;
    margin-bottom: -93px;
    margin-left: 31px;
}
#add{
    margin-top: -249px;
    margin-left: 183px;
transform:translate(-9%,-272%);

}
#add2{
    margin-top: -44px;
    margin-left: 176px;
transform:translate(-5%,-222%);
}
#add3{
    margin-top: -189px;
    margin-left: 168px;
}
.add3{
    margin-top: -80px;
}
.submit{
    margin-left: 16px;
    background-color: blue;
    color: white;
    border: none;

}
.submit:hover{
    color: white;
    background-color: orange;

}
#submit{
transform:translate(-7%,-190%);
    margin-top: 93px;
    height: 37px;
    width: 192px;
    border-radius: 13px;

}
.homes{
transform:translate(-5%,-100%);
    margin-top: 45px;
    margin-left: 125px;
    height: 42px;
    width: 50px;
    border-radius: 23px;
    cursor: pointer;
}
#b2{
    margin-top: 4px;
    margin-left: -90px;
}
#b3{
    margin-top: 4px;
    margin-left: -90px;
}

#cards{
    margin-top: 2px;
    height: 20px;
    width: 229px;
}
#cvc{
    height: 20px;
    width: 229px;
}
#EXP_MM{
    margin-top: -222px;
    width: 78px;
        height: 20px;

}
#EXP_Year{
    margin-top: 5px;
    margin-left: 4px;
    height: 20px;
    width: 79px;
}
    .MM{
        margin-top: -180px;
        width: 79px;
    }
    #ser {
        margin-top: 8px;
    }   
    </style>
   <script>
       function validateform(){

         var name=document.myform.name.value;
         var payments=document.myform.payments.value;
         var card=document.myform.card.value;
         var cvc=document.myform.cvc.value;
         var EXP_Month=document.myform.EXP_Month.value;
         var EXP_Year=document.myform.EXP_Year.value;
         var dates=document.myform.dates.value;
         var months=document.myform.months.value;
         var years=document.myform.years.value;



        
         
         if(payments == null || payments == ""){
            alert("please select your payments method");
            return false;
         }
          if(name == null || name == ""){
            alert("please Enter your name");
            return false;
         }
         if(card.length<16 || card.length>16){
            alert("Enter your correct card Number");
            return false;
         }
         if(cvc.length<3 || cvc.length>3){
            alert(" Enter your correct cvc last 3 digits Number");
            return false;
        }
         if(EXP_Month.length<2 || EXP_Month.length>2){
            alert("Enter card correctn 'EXP_Month' in digits");
            return false;
         }
         if (EXP_Year.length<4 || EXP_Year.length>4) {
            alert("Enter card correct 'EXP_Year' in digits");
            return false;
         }
         if(dates == ""){
            alert("Select Today date");
            return false;
         }
         if(months == ""){
            alert("Select Today month");
            return false;
         }
         if(years == ""){
            alert("Select Today year");
            return false;
         }
         else
        alert("Thank you..Are you sure can we submit this detials in our database")
        return true;

                }          

   </script>



</head>
<body>
<form name="myform" method="post" action="Mpay.php" onsubmit="return validateform()">  

<div class="Register">
<div class="container">
<div class="card">
  <h2 align="center" id="ser"><b><font color="white">payment</b></h2>
    <br>
    

    <span><h3>Rs.2000/-</h3></span>
<h3>Payement Method</h3>
<input type="radio" id="b1" name="payments" class="radio" value="credit"><b>credit card</b><br>
<input type="radio" id="b2" name="payments" class="radio" value="paypal"><b>payTM</b><br>
<input type="radio" id="b3" name="payments" class="radio" value="Gpay"><b>Gpay</b><br>
<br>
<h3>Credit card payment</h3>

<input type="text" name="name" value="" placeholder="Card holder name" id="name"><br>

<input type="tel" name="card" value="" placeholder="Card Number" class="cards" id="cards"><br>
<input type="tel" name="cvc" value="" placeholder="Card CVV"  class="cvc" id="cvc"><br>
<div class="">
/ <input type="tel" name="EXP_Year" value="" placeholder="EXP_YYYY" class="EXP_Year" id="EXP_Year"><br>
<select name="dates" class="day" id="day">
    <option value="">--Day--</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
</select>
<select name="months" class="month" id="month">
    <option value="">--Month--</option>
    <option value="January">January</option>
    <option value="Febrary">Febrary</option>
    <option value="March">March</option>
    <option value="April">April</option>
    <option value="May">May</option>
    <option value="June">June</option>
    <option value="July">July</option>
    <option value="August">August</option>
    <option value="September">Septembar</option>
    <option value="October">Octobar</option>
    <option value="November">November</option>
    <option value="December">December</option>
</select>
<div class="year">
<select name="years" class="year" id="year">
    <option value="">--YEAR--</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
    <option value="2023">2023</option>
    <option value="2024">2024</option>
    <option value="2025">2025</option>    
</select>
<div class="add">
    <img src="ggpay.png" width="173" height="93" id="add">
</div>
<div class="add2">
    <img src="pay tm.jfif" width="173" height="93" id="add2">
</div>

<div class="add3">
    <img src="qr.jpg" width="173" height="135" id="add3">
</div>
    <input type="submit" name="payment" class="submit" id="submit" value="Rs.2000 pay">
</div>
<div class="homes">
    <a href="http://localhost/old/Mhome.php">
    <img src="home.jpg" width="33" height="33"  id="homes" class="homes">
   </a>
</div>
<div class="MM">
<input type="tel" name="EXP_Month" value="" placeholder="EXP_MM" class="EXP_Year" id="EXP_MM"><br>
</div>

</form>

</body>
</html>