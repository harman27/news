 <?php 
 require 'db.php';
 if(isset($_POST['submit'])){
 	$name= $_POST['name'];
 	if(empty($name)){
 		echo "fill required fields";
 	}else{
 		$q= mysql_query("insert into category (name) values ('$name')");
 		if($q){
 			echo "category added";
 		}
 	}

 }

  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
  	<meta charset="UTF-8">
  	<title>Document</title>
  </head>
  <body>
  	<form action="" method="post">
  		<input type="text" name="name" id="">
  		<input type="submit" value="Save" name="submit">
  	</form>
  	<div>
  		<?php $q= mysql_query("select * from category");
  			while($r= mysql_fetch_assoc($q)){
  				echo $r['name'];
  				echo "<br>";
  			}
  		 ?>
  	</div>
  </body>
  </html>