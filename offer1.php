
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

<font size=4 face='Algerian' color=#660066 >
<img src="clgimg/logo.jpg" align=left height=158px width=150px>
<center>
<a href="product2.php"><img style="float:right;margin-right:30px;" src=clgimg/user1.png height=50px width=50px></a>

<?php
session_start();
if(!isset($_SESSION['username']))
{
echo header("location:index.php");
}
?>
<h1>Welcome 
<?php
echo $_SESSION['username'];
echo " To PARI TOY'S SHOP";
?>
</h1>
</center>
</font>
<div align=right style="float:center" >
<h3>PROFILE&nbsp;&nbsp;&nbsp;</h3>
</div>
</div>
<div id=profile src=clgimg/bg3.jpg width=100 height=100 >
<table hspace=5px vspace=0px>
<tr>
<td>
<a href="musically.php"><img src=musictoys/drum1.jpg height=130px width=130px></a>
</td>
<td>
<a href="puzzel.php"><img src=puzzels/puz2.jpg height=130px width=130px></a>
</td>
<td>
<a href="avengers.php"><img src=avengers/av1.jpg height=130px width=130px></a>
</td>
<td>
<a href="barbie.php"><img src=barbie/b21.jpg height=130px width=130px></a>
</td>
<td>
<a href="animal.php"><img src=animals/an17.jpg height=130px width=130px></a>
</td>
<td>
<a href="playset.php"><img src=playset/ps1.jpg height=130px width=130px></a>
</td>
<td>
<a href="games.php"><img src=games/gm1.jpg height=130px width=130px></a>
</td>
<td>
<a href="soft.php"><img src=softtoys/st1.jpg height=130px width=130px></a>
</td>
<td>
<a href="vehicles.php"><img src=vehicles/railway/tr1.jpg height=130px width=130px></a>
</td>
<td>
<a href="special.php"><img src=special/baby3.jpg height=130px width=130px></a>
</td>


</tr>
<tr>
<td id=profile>&nbsp;&nbsp;Musically Toys</td>
<td id=profile>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Puzzel</td>
<td id=profile>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Avengers</td>
<td id=profile>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Barbie</td>
<td id=profile>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Animals</td>
<td id=profile>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Playsets</td>
<td id=profile>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Games</td>
<td id=profile>&nbsp;&nbsp;&nbsp;&nbsp;Soft Toys</td>
<td id=profile>&nbsp;&nbsp;&nbsp;&nbsp;Vehicles</td>
<td id=profile>&nbsp;&nbsp;&nbsp;Special</td>
</tr>
</table>





  </div>

<div id=product>



<div id=content style="left:10px;top:20px;width:100%;height:100%;background-image:URL('clgimg/bt9.jpg');scroll:yes;" ><br>
<?php
$cn=mysql_connect("localhost","root");
$db=mysql_select_db("toys",$cn);
$q="select * from baby";
$rs=mysql_query($q);
$i=0;
while($a=mysql_fetch_array($rs))
{
$id=$a['Productid'];
$nm=$a['Productname'];
$pr=$a['Productprice'];
$qty=$a['Productquantity'];
$im=$a['Image'];

echo "<div class=pr><img class=im src=special/$im width=150 height=170>
<br>ProductNo=$id<br>ProductName=$nm<br>Price=$pr<br>Quantity=$qty<br><br>
<a class=bu href=babybuy.php?pid=$id>Buy</a></div>";
$i++;
if($i==6)
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
