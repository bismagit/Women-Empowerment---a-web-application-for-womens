<!DOCTYPE html>
<html>
<head>
	<title>WOMEN EMPOWERMENT</title>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<?php
     include('all.php');
	?>
</head>
<body>
   <div class='top1'> 
     <div style='padding-top:20px;word-spacing: 4px; font-size: 15px;'>womenempower572@gmail.com</div>
  </div>

  <div class='header'>
  	<div class="both" >
        <a class="women" href="index.php" style='margin-left:70px; '>Women Empowerment</a>  
   </div>
   <div class='both'>
   	<ul class='all_link'>
   		<li><a href="index.php">HOME</a> </li>
   		<li><a href="#about">ABOUT</a> </li>
      <li><a href="schemes.php">SCHEMES</a> </li>
   		<li><a href="acts.php">ACTS</a> </li>
   		<li><a href="#Quotes">QUOTES</a> </li>
      <li><a href="user/register.php">REGISTRATION</a> </li>
      <li><a href="user/login.php">LOGIN</a> </li>
   	</ul>
   </div>
   <div style="position: absolute; top: 30px; left: 85%; font-size: 15px;cursor: pointer; font-weight: 500; padding:5px;" id='btnsignin'><blink  style="color: #fe1122; "> Need Emergency Help? </blink></a></div>
   
  </div>



   <div class=" panel panel-primary" id="login" style="margin-left:33%">
      <div class="join">Emergency Help  </div>
       <br/> <br/><br/>
       <div class="mail-text" style=" clear:both; text-transform: capitalize; margin-left: 50px; margin-top: 10px; color: #e80a89"> We are here to help you. Please fill the deatils</div><br/>
     <div class="panel-body">
       <form action="" method="POST"   name="register">
            <input name="name"   required type="text" placeholder="Name* "   class="form-control input_all"  id='inputTextBox' />
            <input name="mobile"    required type="text"  id="Number" placeholder="Mobile number*"         class="form-control input_all" minlength="10" maxlength="12" />
            
            <input name="location"  required type="text"  placeholder="Current Location*"    class="form-control input_all" />
            <input type="submit"    value="Get Help" name="create_acc"                    class="btn btn-success form-control " style="margin-top: 20px;      font-size: 15px;"/>

         </form>
      </div> 
    
 </div>

</body>
</html>

<?php
    
    if(isset($_POST['create_acc']))
 {
    include('db.php');
    $n=$_POST['name'];
    $m=$_POST['mobile'];
    $l=$_POST['location'];
     mysqli_query($con,"insert into emergency(name,phone, location) values ('$n','$m' ,'$l') ");
    
     
      echo "<script > alert('Thanks for contacting us.! We will surely Help You');
            </script>";
  }


?>

<style type="text/css">
  
blink {
    -webkit-animation: 2s linear infinite condemned_blink_effect; // for android
    animation: 2s linear infinite condemned_blink_effect;
}
@-webkit-keyframes condemned_blink_effect { // for android
    0% {
        visibility: hidden;
    }
    50% {
        visibility: hidden;
    }
    100% {
        visibility: visible;
    }
}
@keyframes condemned_blink_effect {
    0% {
        visibility: hidden;
    }
    50% {
        visibility: hidden;
    }
    100% {
        visibility: visible;
    }
}



#login
{ 
top:25%;
width: 550px;
height:auto;
padding: 5px;
padding-bottom: 0px;
margin-bottom: 0px;
position: absolute;
background-color:#323233;
z-index: 9999990;
font-size: 17px;
margin-top: 10px;
padding: 7px;


}

.join {

float: left;
margin-left:70px;

font-size: 40px;
font-weight: 600;
color: #e60;
word-spacing: 7px;
text-decoration: none;
text-transform: capitalize;
font-family: 'Lobster', cursive;

}

.input_all
{
  
  border: 1px solid #d9d9d9; 
  padding: 8px 0px 8px 30px;
  outline:none;
 /* margin-top: 20px;*/
  margin-bottom: 24px;
  color: #9c9c9c;
  font-size: 16px;

}

.input_all:hover,
.input_all:active

{
  border: 3px solid #46b8da;
}
</style>



<script >
       
      $("#login").fadeOut(0);

      $("#btnsignin").click(function(){
        $("#login").fadeToggle(0);

      });

   


</script>