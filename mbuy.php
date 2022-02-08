<html>
<head>
<link rel="stylesheet" href="styles.css">
<style>
.button 
{
border:30%;
border-spacing:30%;
font-family:Arial;
text-transform:uppercase;
width:15%;
height:7%;
border-radius:20px;
}
a
{
float:center;
}
</style>
</head>
<body>
<div style="height:10%; width:100%; background-color:pink">
<h1 align=center> musically toys</h1>
</div>
<div style="height:90%; width:100%;">

<?php
$pid=$_GET['txtpid'];
$cn=mysql_connect("localhost","root");
$db=mysql_select_db("toys",$cn);
$q="select * from product where Productid='$pid'";
$rs=mysql_query($q);
if($a=mysql_fetch_array($rs))
{
$pid=$a['Productid'];
$pnm=$a['Productname'];
$pr=$a['Productprice'];
$qty=$a['Productquantity'];
$im=$a['Image'];
echo "<div id=rt>ProductId=$pid<br><br><br>ProductName=$pnm<br><br><br>Price=$pr<br><br><br>
Quantity=$qty<br><br><br>";
}
mysql_close($cn);
?>
<div>
<?php
echo "<a href=booking1.php?txtpid=$pid>BOOK</a>";
?>
</div>

</div>
<div id=lt>
<?php
echo "<img src=musictoys/$im height=500px width=450px border=1px>";
?>
</div>

</div>




</body>
</html>