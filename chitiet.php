<?php
include("header.php");
$strid=$_GET["id"];
$arrid=explode("-",$strid);
$id=end($arrid);


$result=mysqli_query($link,"select * from baiviet where id='$id'");
while($row=mysqli_fetch_array($result))
{
	echo '<div><b><a href="chitiet.php">'.$row["tenbaiviet"].'</a></b></div>';
	echo '<div>'.$row["chitiet"].'</div>';
}
echo "<p /><div><b>Bai viet lieen quan khacs</b></div>";
echo '<ul>';
$result=mysqli_query($link,"select * from baiviet where id!='$id'");
while($row=mysqli_fetch_array($result))
{
	echo '<li><a href="chitiet.php?id='.$row["id"].'">'.$row["tenbaiviet"].'</a></li>';	
}
echo '</ul>';
include("footer.php");
?>