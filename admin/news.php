 <?php 
 require 'db.php';
 if(isset($_POST['submit'])){
 	$category= $_POST['category'];
 	$title= $_POST['title'];
 	$description= $_POST['description'];

 	if(empty($category) || empty($title) || empty($description)){
 		echo "fill required fields";
 	}else{
 		$q= mysql_query("insert into news (category_id,title,description) values ('$category','$title','$description')");
 		if($q){
 			echo "news added";
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
  		<select name="category[]" multiple="multiple" id="">
  		<?php $q= mysql_query("select * from category");
  		while($r= mysql_fetch_assoc($q)){
  			echo '<option value="'.$r['id'].'">'.$r['name'].'</option>';
  			} ?>
  			
  		</select>	
		<br>
		<input type="text" name="title" id=""> <br>
		<textarea name="description"></textarea><br>
		<input type="submit" value="Save" name="submit">


  	</form>

  	<div>
  			<?php
  				$q= mysql_query("select * from news");
  				while($r= mysql_fetch_assoc($q)){
  					echo $r['title'];
  					echo "<br>";
  				}
  			 ?>


  	</div>
  </body>
  </html>