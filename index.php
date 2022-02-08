<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
.button 
{
border:30%;
border-spacing:30%;
font-family:Arial;
text-transform:uppercase;
width:20%;
height:6%;
border-radius:20px;
}
</style>

</head>
<body>
<div id=page>





<script>
function openNav()
{
document.getElementById("mysidenav").style.width="250px";
}

function closeNav()
{
document.getElementById("mysidenav").style.width="0px";
}
</script>

<div id=header style="left:10px;top:20px;width:100%;height:20%;background-image:URL('clgimg/bg1.jpg');vsapce=300">
<span style="font-size:30px;cursor:pointer" onClick="openNav()">&#9776;</span>
<div id="mysidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a>
<a href="admin.php">Admin Login</a>
<a href="about.php">About Us</a>
<a href="service.php">Services</a>
<a href="feedback1.php">Feedback</a>

</div>
<font size=8 face='Algerian' color=#660066 >
<img src="clgimg/logo.jpg" align=left height=128px width=135px>
<center><i>PARI TOYS SHOP</i><br></center>
</font>
<div align=right style="float:center" >
<a href="www.facebook.com"><img src=image/fb.png height=30px width=30px></a><a href="www.twitter.com"><img src=image/twitter.png height=30px width=30px></a><a href="www.instagram.com"><img src=image/insta.png height=30px width=30px></a>
<a href="www.google.com"><img src=image/google.png height=30px width=30px></a></div>
</div>
<div id=main style="background-image:URL('clgimg/fullblue.jpg');">
<div id=courses>
<center>
<h1><font size=6  face='Monotype Corsiva'>
GALLERY</font></h1><hr>
</center>
<ul type=disc>
<li><h3><a href="mgallery1.php">Musically Toys</a></h3><br><br>
<li><h3><a href="wgallery1.php">Wood Toys</a></h3><br><br>
<li><h3><a href="bgallery1.php">Barbie</a></h3><br><br>
</ul>
</div>
<div id=contact >
<center><h1>Contact Us</h1>

<h1><font size=5  face='Monotype Corsiva' color=#660066>Darshan Nagodi<br>9561546798</font></h1></center><br>


<center><h1>Address</h1>
<font size=5  face='Monotype Corsiva' color=#660066>2,Malharpeth,<br>Shete chowk<br>
satara.415002.</center>
</font>



</div>
<center>
<div id=content style="left:10px;top:20px;width:100%;height:100%;" ><br>
<br>
<br>
<h1>Welcome To Pari Toys Shop </h1>
<form name=f1 id=f1 method="post" action="">
<fieldset style="border-radius:5px;width:40%">
<legend><h3>Login Here</h3></legend>
<br><input type=text name=txtnm id=txtnm placeholder="enter your name" pattern="\D+" required ><br><br>
<input type=password name=txtps id=txtps placeholder="enter your password" required ><br><br>
<input type=submit value=login class=button name=btnlog><br><br>
</fieldset>
</form>

<br>
<a href="register2.php"><font size=5>Register Here</font></a>
</div>
</div>
</center>
<div id=footer style="left:10px;top:20px;width:100%;height:10%;background-image:URL('clgimg/bg1.jpg');" >
<marquee><font color=black>
<h3>@2019 Created By Pari Toy's Shop.</h3></marquee>
</div>
</div>
</center>
</body>
</html>
<?php
$cn=mysql_connect("localhost","root");
$db=mysql_select_db("toys",$cn);
if(isset($_POST["btnlog"]))
{
$u=$_POST["txtnm"];
$p=$_POST["txtps"];
$q="select * from register where username='$u' and password='$p'";
$result=mysql_query($q);
if($a=mysql_fetch_array($result))
{
$_SESSION['username']=$u;
echo header("location:profile.php");
}
else
{
echo"<script>alert('Incorrect Username or Password')</script>";
mysql_close($cn);
}
}
?>