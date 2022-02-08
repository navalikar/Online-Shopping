<?php
session_start();
?>
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
$_SESSION['username']='$u';
echo"<script>window.location='profile.php'</script>";
}
else
{
echo"<script>alert('Incorrect Username or Password')</script>";
mysql_close($cn);
}
}
?>