<?php 
	error_reporting(E_ALL^E_DEPRECATED);
	mysql_connect("localhost","root","");
	mysql_select_db("images1");

	$q= mysql_query("Select * from gallery");
	while($r= mysql_fetch_assoc($q))
	{
		echo "<img src='gallery/".$r['name']."' width='100'>";
	 }
	?>