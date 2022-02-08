<html>
<head>
<link rel="stylesheet" href="styles.css">
<meta name="viewport" content="width=device-width,initial-scale=1">

</head>
<body>
<div id=page>
<div id="mysidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a>
<a href="admin.php">Admin Login</a>
<a href="about.php">About Us</a>
<a href="service.php">Services</a>
<a href="feedback.php">Feedback</a>
<a href="gallery.php">Gallery</a>

</div>


<span style="font-size:30px;cursor:pointer" onClick="openNav()">&#9776;</span>

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

<div id=header align=center style="left:10px;top:20px;width:100%;height:20%;background-image:URL('clgimg/bg1.jpg');vsapce=300">
<font size=8 face='Algerian' color=#660066 >
<img src="clgimg/logo.jpg" align=left height=135px width=135px>
<i>PARI TOYS SHOP</i><br>
</font>
<div align=right style="float:center" >
<a href="www.facebook.com"><img src=image/fb.png height=30px width=30px></a><a href="www.twitter.com"><img src=image/twitter.png height=30px width=30px></a><a href="www.instagram.com"><img src=image/insta.png height=30px width=30px></a>
<a href="www.google.com"><img src=image/google.png height=30px width=30px></a></div>
</div>
<div id=content style="left:10px;top:20px;width:100%;height:100%;overflow:scroll;background-image:URL('clgimg/bg7.jpg')" ><br>
<h1 align=center>GALLERY OF TOYS</h1>
</div>
</body>
</html>