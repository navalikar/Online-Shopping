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
<a href="feedback.php">Feedback</a>

</div>
<font size=8 face='Algerian' color=#660066 >
<img src="clgimg/logo.jpg" align=left height=132px width=135px><br>
<a href="product.php"><img style="float:right;margin-right:30px;" src=clgimg/user1.png height=50px width=50px></a>
<center><i>PARI TOYS SHOP</i><br></center>
</font>
<div align=right style="float:center" >
<a href="www.facebook.com"><img src=image/fb.png height=30px width=30px></a><a href="www.twitter.com"><img src=image/twitter.png height=30px width=30px></a><a href="www.instagram.com"><img src=image/insta.png height=30px width=30px></a>
<a href="www.google.com"><img src=image/google.png height=30px width=30px></a></div>
</div>

<div id=profile src=clgimg/bg3.jpg width=100 height=100 >
<table hspace=5px vspace=0px>
<tr>
<td>
<a href="amusically.php"><img src=musictoys/drum1.jpg height=130px width=130px></a>
</td>
<td>
<a href="apuzzel.php"><img src=puzzels/puz2.jpg height=130px width=130px></a>
</td>
<td>
<a href="aavengers.php"><img src=avengers/av1.jpg height=130px width=130px></a>
</td>
<td>
<a href="abarbie.php"><img src=barbie/b21.jpg height=130px width=130px></a>
</td>
<td>
<a href="aanimal.php"><img src=animals/an17.jpg height=130px width=130px></a>
</td>
<td>
<a href="aplayset.php"><img src=playset/ps1.jpg height=130px width=130px></a>
</td>
<td>
<a href="agames.php"><img src=games/gm1.jpg height=130px width=130px></a>
</td>
<td>
<a href="asoft.php"><img src=softtoys/st1.jpg height=130px width=130px></a>
</td>
<td>
<a href="avehicles.php"><img src=vehicles/railway/tr1.jpg height=130px width=130px></a>
</td>
<td>
<a href="aspecial.php"><img src=special/baby3.jpg height=130px width=130px></a>
</td>


</tr>
<tr>
<td id=profile>&nbsp;&nbsp;Musically Toys</td>
<td id=profile>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Puzzel</td>
<td id=profile>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Avengers</td>
<td id=profile>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Barbie</td>

<td id=profile>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Animal</td>
<td id=profile>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Playsets</td>
<td id=profile>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Games</td>
<td id=profile>&nbsp;&nbsp;&nbsp;&nbsp;Soft Toys</td>
<td id=profile>&nbsp;&nbsp;&nbsp;&nbsp;Vehicles</td>
<td id=profile>&nbsp;&nbsp;&nbsp;Special</td>
</tr></table>





  </div>

<div id=product>



<div id=content style="left:10px;top:20px;width:100%;height:100%;overflow:scroll;background-image:URL('clgimg/bt9.jpg')" ><br>
<?php
$cn=mysql_connect("localhost","root");
$db=mysql_select_db("toys",$cn);
$q="select * from barbie";
$rs=mysql_query($q);
$i=0;
while($a=mysql_fetch_array($rs))
{
$id=$a['Productid'];
$nm=$a['Productname'];
$pr=$a['Productprice'];
$qty=$a['Productquantity'];
$im=$a['Image'];

echo "<div class=pr><img class=im src=barbie/$im width=150 height=170>
<br>ProductNo=$id<br>ProductName=$nm<br>Price=$pr<br>Quantity=$qty<br><br>
<a class=bu href=bbuy1.php?pid=$id>Buy</a></div>";
$i++;
if($i==4)
{
$i=0;
echo "<br style='clear:left'>";
}
}
?>
</div>
</div>
</center>
</div>
</center>
</body>
</html>
