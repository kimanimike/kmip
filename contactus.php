


<!DOCTYPE html>
<html lang= "en">

<?php
$servername = "localhost";
$username="root";
$password= "";
$dbname= "kmip";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
die("Connection Failed :" .mysqli_connect_error());

}
if (isset($_POST['submit'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$date = date("Y-m-d H:i:s");


$sql = "Insert into feedback (name,email,subject, date,message)
VALUES('$name', '$email', '$subject','$date', '$message')";
if($conn->query($sql)==TRUE){
  ?>
  <script type = "text/javascript">
alert("Registration Successful : Please Login to continue");

</script>
<?php

}
else{
  ?>
  <script type = "text/javascript">
  alert("Not sent. Please try again later");

  </script>
  <?php



}
}
?>

<head>
  <meta charset = "utf-8">
  <meta http-equiv ="X-UA-Compatible" content="IE = edge">
 <meta name = "viewport" content="width = device-width, initial-scale = 1">
<title>KMIP Technologies</title>
<!-- Bootstrap -->
     <link href = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel = "stylesheet">
     <link href ="bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel = "stylesheet">
     <link href = "slider/flexslider.css" rel = "stylesheet">
<link href = "kmi-p.css" rel = "stylesheet">
<script type="text/javascript" src = "bootstrap/bootstrap-3.3.7-dist/js/jquery-2.2.3.min.js"></script>
<script  type="text/javascript" src="slider/jquery.flexslider-min.js"></script>

  <script type="text/javascript" src = "bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<body class = "contactus">
<div class="container">
  <div class ="row"  style = "height:5px"></div>
<div class ="row statement">
  <div class="col-xs-3 "></div>
  <div class="col-xs-6 mission_stmt" >World leading Web Developers and System Engineers</div>
<div class = "col-xs-3 ">Social</div>
</div>
<!--Logo Row-->
<div class = "row logo-row">
    <div class = "col-xs-4">
    KMIP Technologies
</div>
<div class = "col-xs-8 logo-col_2">
  <span class ="logo-col_2-span_1" style = "margin-left:5% ">+254(0)719248847 / + 254(0)731692320</span>
</div>
</div>
<!--Menu Row-->
<div class = "row menu-row">
    <div class = "col-xs-12" style ="padding: 0px">

    <nav class="navbar" role="navigation">

      <div class="navbar-header col-xs-6">

        <span>  <a class="navbar-brand" href="index.php">KMIP Technologies</a></span>
<!--Toggle button -->

<!--Toggle end of  button -->
      </div>
      <button type="button"  style="background-color: white; "class="navbar-toggle" data-toggle= "collapse"
       data-target = "#example-navbar-collapse">
       <span></span>
          <span class="sr-only">Toggle navigation</span>
            <span class = "icon-bar" style="background-color : grey"></span>
               <span class = "icon-bar"></span>
                  <span class = "icon-bar"></span>

      </button>

    <div class ="col-xs-6">

      <div>
<!--Test toggle button-->

      <!--test toggle end of button-->
        <div class="collapse navbar-collapse" id = "example-navbar-collapse">

      <ul class="nav navbar-nav">
        <li class="active">
    <a class = "home" href = "index.php">Home</a>
        </li>
        <li>
    <a class ="aboutus" href="aboutus.php">About Us</a>
        </li>
        <li>
    <a class = "services" href="ourservices.php">Services</a>
        </li>
        <li>
    <a class ="contactus" href="contactus.php">Contact Us</a>
        </li>
      </ul>
</div>
    </div>
    </div>
    </nav>

</div>
</div>

<!--menu end of row-->

<div>
</div>
<div class ="row ">
<div class = "col-xs-2 "></div>
<div class = "col-xs-8  page-heading">TALK<span style="color: blue">  TO US</span></div>
<div class = "col-xs-2 "></div>
</div>

<div class = "row">
    <!--1ST SIDE INFO-->
  <div class="col-md-3 side-info">
<div class = "like_span"> Contacts </div>
<div class = "like_span">+254719248847 </div>
<div class = "like_span">OR </div>
<div class = "like_span">+254731692320 </div>
<br/>
<div class = "like_span"> Email </div>
<div class = "like_span">info@kmip.co.ke </div>
<div class = "like_span"> mkimani9@gmail.com</div>
   </div>
   <!-- END OF 1ST SIDE INFO-->
  <div class="col-md-6 our-services">
      <form method="post" action="">
    <ul id = "id-services" type ="none">

      <div style="font-weight : bold; font-size: 18px; color: blue; text-align: center">Contact Us</div><br>
      Name *
      <li><input type="text" name="name"  placeholder="Please enter your name"required=""  style=" width : 98%"/></li>
      Email*
        <li><input type="email" name="email" placeholder="please enter your email" required=""  style=" width : 98%"/></li>
        Subject
        <li><input type="text" name="subject" placeholder="Please enter subject"   style=" width : 98%"/></li>
        Message
          <li><textarea placeholder="Enter your message here" style="width : 98%; height : 150px ;"></textarea></li>

            <input type = "submit" class="btn-send" id = "id_btn-submit" value="Send" />

        </ul>
      </form>
   </div>


  <!--2ND SIDE INFO-->
  <div class="col-md-3 side-info">
<div class = "like_span">KMIP TECHNOLOGIES </div>
<div class = "like_span">P.O. BOX 174, </div>
<div class = "like_span"> KIAMBU - KENYA.</div>
<div class = "like_span"> 0719248847</div>
<div class = "like_span">mkimani9@gmail.com</div>

  </div>
    <!-- END OF 2ND SIDE INFO-->
</div>


<div class="row modules-row_2">

  </div>
<!--footer Row_1-->
<div class ="row footer-row">
<div class ="col-md-7 row1-part1" ><span></span><br>
  <span  class = "footer-row1-header"><strong><u>Contacts</u></strong> </span><br>
  <span  class = "footer-row1-info"> Cell  :   0719248847<br><span>
  <span  class = "footer-row1-info"> Email :  info@kmip.co.ke<br><span>
  <span  class = "footer-row1-info"> P.O. BOX 174-00900<br><span>
  <span  class = "footer-row1-info">KIAMBU- KENYA.<br><br><span>
</div>
<br>
<div class ="col-md-5 row1-part1"><span><strong><u>KMI-P Technologies</u></strong></span><br>
<span><a href="aboutus.php">About us</a></span><br>
<span><a href="ourservices.php">Our Services</a></span><br>
<span><a href="contactus.php">Contact Us</a></span><br>
</div>
</div>

  <div class ="col-sm-12 footer-col">
    <div class="col-sm-1"></div>
    <div class = "footer-containter col-sm-10" style="text-align: center">
    <br><br>
<span class ="footer-span" style = "">&copy 2017 KMIP Technologies ||-|| info@kmip.co.ke |-| 0719248847 </span>
</div>
  <div  class="col-sm-1"></div>
</div>
</div>


</body>


</html>






                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
