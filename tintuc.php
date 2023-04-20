<?php
include("header.php");

$result=mysqli_query($link,"select * from baiviet order by id desc");
while($row=mysqli_fetch_array($result))
{
	echo '<div><b><a href="chitiet.php?id='.$row["id"].'">'.$row["tenbaiviet"].'</a></b></div>';
	echo '<div>'.$row["gioithieu"].'</div>';
	echo '<hr />';
}


include("footer.php");
?>