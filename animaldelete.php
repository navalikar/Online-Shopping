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
input[type=button]
{
height:10%;
width:120px;
font-size:15px;
}
input[type=submit]
{
height:35px;
width:120px;
font-size:15px;
align:center;
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

<div id=header style="left:10px;top:20px;width:100%;height:24%;background-image:URL('clgimg/bg1.jpg');vsapce=300">
<span style="font-size:30px;cursor:pointer" onClick="openNav()">&#9776;</span>
<div id="mysidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a>
<a href="index.php">Home</a>
<a href="about.php">About Us</a>
<a href="service.php">Services</a>
<a href="feedback.php">Feedback</a>
<a href="orderdisplay.php">Order Cancel</a>

</div>
<font size=8 face='Algerian' color=#660066 >
<img src="clgimg/logo.jpg" align=left height=159px width=140px><br>
<a href="product.php"><img style="float:right;margin-right:30px;" src=clgimg/user3.png height=50px width=50px></a>
<center><i>PARI TOYS SHOP</i><br></center>
</font>
<div align=right style="float:center" >
<a href="www.facebook.com"><img src=image/fb.png height=30px width=30px></a><a href="www.twitter.com"><img src=image/twitter.png height=30px width=30px></a><a href="www.instagram.com"><img src=image/insta.png height=30px width=30px></a>
<a href="www.google.com"><img src=image/google.png height=30px width=30px></a></div>
</div>

<div id=profilee src=clgimg/bg3.jpg width=100 height=100 >
<table hspace=5px vspace=0px>
<tr>
<td>
<a href="musicallydelete.php"><img src=musictoys/drum1.jpg height=130px width=130px></a>
</td>

<td>
<a href="puzzeldelete.php"><img src=puzzels/puz2.jpg height=130px width=130px></a>
</td>
<td>
<a href="avengersdelete.php"><img src=avengers/av1.jpg height=130px width=130px></a>
</td>
<td>
<a href="barbiedelete.php"><img src=barbie/b21.jpg height=130px width=130px></a>
</td>
<td>
<a href="animaldelete.php"><img src=animals/an17.jpg height=130px width=130px></a>
</td>
<td>
<a href="playsetdelete.php"><img src=playset/ps1.jpg height=130px width=130px></a>
</td>
<td>
<a href="gamesdelete.php"><img src=games/gm1.jpg height=130px width=130px></a>
</td>
<td>
<a href="softdelete.php"><img src=softtoys/st1.jpg height=130px width=130px></a>
</td>
<td>
<a href="vehiclesdelete.php"><img src=vehicles/railway/tr1.jpg height=130px width=130px></a>
</td>
<td>
<a href="specialdelete.php"><img src=special/baby3.jpg height=130px width=130px></a>
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
</tr>
<tr>
<td> <a href="mdeldisplay.php"><input type=button  value=Delete ></a></td>
<td> <a href="pdeldisplay.php"><input type=button  value=Delete ></a></td>
<td> <a href="avdeldisplay.php"><input type=button  value=Delete ></a></td>
<td> <a href="bdeldisplay.php"><input type=button  value=Delete ></a></td>
<td> <a href="anideldisplay.php"><input type=button  value=Delete ></a></td>
<td> <a href="psdeldisplay.php"><input type=button  value=Delete ></a></td>
<td> <a href="gdeldisplay.php"><input type=button  value=Delete ></a></td>
<td> <a href="sdeldisplay.php"><input type=button  value=Delete ></a></td>
<td> <a href="vdeldisplay.php"><input type=button  value=Delete ></a></td>
<td> <a href="spdeldisplay.php"><input type=button  value=Delete ></a></td>
</tr>



</table>








  </div>

<div id=product>



<div id=content style="left:10px;top:20px;width:100%;overflow:flow;height:100%;background-image:URL('clgimg/bt9.jpg')" ><br>
<?php
$cn=mysql_connect("localhost","root");
$db=mysql_select_db("toys",$cn);
$q="select * from animal";
$rs=mysql_query($q);
$i=0;
while($a=mysql_fetch_array($rs))
{
$id=$a['Productid'];
$nm=$a['Productname'];
$pr=$a['Productprice'];
$qty=$a['Productquantity'];
$im=$a['Image'];

echo "<div class=pr><img class=im src=animals/$im width=150 height=170>
<br>ProductNo=$id<br>ProductName=$nm<br>Price=$pr<br>Quantity=$qty<br><br>
<a class=bu href=anbuy1.php?pid=$id>Buy</a></div>";
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
