<html>
<head>
<link rel="stylesheet" href="styles.css">
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
#img
{
opacity:0.3;
}
img:hover
{
opacity:1.0;
border-radius:80px;
}
.pr
{
float:left;
padding:10px 10px;
border:solid 1px grey;
border-radius:5px;
margin:10px 10px;
}


.bu
{
background-color:grey;
margin:10px 5px;
fint-size:10px;
color:white;
padding:5px 20px;
text-decoration:none;
border-radius:5px;
}
.bu:hover
{
background-color:maroon;
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
<img src="clgimg/logo.jpg" align=left height=132px width=135px>
<center><i>PARI TOYS SHOP</i><br></center>
</font>
<div align=right style="float:center" >
<a href="www.facebook.com"><img src=image/fb.png height=30px width=30px></a><a href="www.twitter.com"><img src=image/twitter.png height=30px width=30px></a><a href="www.instagram.com"><img src=image/insta.png height=30px width=30px></a>
<a href="www.google.com"><img src=image/google.png height=30px width=30px></a></div>
</div>





 

<div id=product>



<div id=content style="left:10px;top:20px;width:100%;height:100%;overflow:scroll;" ><br>
<?php
$cn=mysql_connect("localhost","root");
$db=mysql_select_db("toys",$cn);
$q="select * from product";
$rs=mysql_query($q);
$i=0;
while($a=mysql_fetch_array($rs))
{
$id=$a['Productid'];
$nm=$a['Productname'];
$pr=$a['Productprice'];
$qty=$a['Productquantity'];
$im=$a['Image'];

echo "<div class=pr><img class=im src=musictoys/$im width=150 height=170>
<br>ProductNo=$id<br>ProductName=$nm<br>Price=$pr<br>Quantity=$qty<br><br>
<form method=post><input type=submit class=bu name=btnbuy value=Buy></form></div>";

$i++;
if($i==6)
{
$i=0;
echo "<br style='clear:left'>";
}
}
?>
<?php
if(isset($_POST['btnbuy']))
{
echo"<script>alert('First Register on Website');</script>";
}
?>
</div>
</div>

</center>
</div>
</center>  
</body>
</html>
