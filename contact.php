<?php 

if (isset($_POST["firstName"]) && isset($_POST["lastName"]) && isset($_POST["email"]) && isset($_POST["email"])) {
	# code...
}
else{

	header("location:index.html");
	exit();
}

$fname = $_POST["firstName"];
$lname = $_POST["lastName"];
$msg = $_POST["message"];
$email = $_POST["email"];
$to = "sjnaveenkumar@gmail.com";
$headers = 'From: <sjnaveenkumar@gmail.com>' . "\r\n";
mail($to,"Naveen portfolio","Name: '$fname' '$lname' Message: '$msg'",$headers);
?>
<html>
<head>
 <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="image/naveen.jpg" sizes="194x194">
  <link rel="icon" type="image/png" href="image/naveen.jpg" sizes="96x96">
  <link rel="icon" type="image/png" href="image/naveen.jpg" sizes="192x192">
  <link rel="icon" type="image/png" href="image/naveen.jpg" sizes="16x16">
  
	  <!-- Compiled and minified CSS -->
            <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="styles/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
         <style type="text/css">

body{
	background-color: #fff;
}


         </style>

<script type="text/javascript">
function close_window() {
  
    close();
  
}
</script>
</head>
<body>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
   
	<div> 


  <center>
      <div class="col s12 m5">
        <div style="margin:32px" class="card-panel blue">
          <span class="black-text "><h1>Thank You For your Message <?php echo $fname; ?></h1></span>
           
<a href="javascript:close_window();" class="waves-effect red waves-light btn-large"><i class="material-icons left">close</i>Close this Window</a>


        </div>
      </div>




   
</center>
  

            </body>
</html>