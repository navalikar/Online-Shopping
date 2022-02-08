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

</style>
</head>
<body>



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
</head>
<body>
<div id=header style="left:10px;top:20px;width:100%;height:20%;background-image:URL('clgimg/bg1.jpg');vsapce=300">
<span style="font-size:30px;cursor:pointer" onClick="openNav()">&#9776;</span>
<div id="mysidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a>
<a href="index.php">Home</a>

<a href="admin.php">Admin Login</a>
<a href="about.php">About Us</a>
<a href="service.php">Services</a>
<a href="feedback1.php">Feedback</a>

</div>
<font size=8 face='Algerian' color=#660066 >
<img src="clgimg/logo.jpg" align=left height=129px width=135px>
<center><i>PARI TOYS SHOP</i><br></center>
</font>
<div align=right style="float:center" >
<a href="www.facebook.com"><img src=image/fb.png height=30px width=30px></a><a href="www.twitter.com"><img src=image/twitter.png height=27px width=30px></a><a href="www.instagram.com"><img src=image/insta.png height=25px width=30px></a>
<a href="www.google.com"><img src=image/google.png height=25px width=30px></a></div>
</div>
</div>



<div id=left2 style="height:100%;width:25%;float:left">
<br><br>
<img src="clgimg/doct.png" height=65% width=100%>

</div>

<div id=right2 style="height:100%;width:25%;float:right">
<center>
</center>

</div>

<div style="left:10px;top:20px;height:80%;background-image:URL('clgimg/.jpg')">
<center>

<?php
{
$cn=mysql_connect("localhost","root");
$db=mysql_select_db("toys",$cn);
$q="select * from feedback";
mysql_query($q);
$result=mysql_query($q);
?>
<fieldset style="border-radius:5px;width:40%">
<legend><h1>Comments</h1></legend>
<table align=center   border=0px dotted #4d0026>
<?php
while($a=mysql_fetch_array($result))
{
$m=$a['name'];
$f=$a['feedback'];
echo"<tr>";
echo"<td>&nbsp;<h3>$m</h3></td><td>&nbsp;</td>";
echo"</tr>";
echo"<tr>";
echo" <td>&nbsp;</td><td><h3>$f</h3></td>";
echo"</tr>";
}
echo"</table>";

echo"</fieldset>";
mysql_close($cn);
}
?>




</center>

</div>
</div>


</html>
</body>
