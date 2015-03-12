 <?php 
 require 'db.php';
 if(isset($_POST['edit'])){
  $name= $_POST['name'];
  $e= implode(",", $name);
  header("location: edit.php?id=$e");
 }


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
      <form method="post">
  		<?php $q= mysql_query("select * from category");
  			while($r= mysql_fetch_assoc($q)){
           echo "<input type='checkbox' name='name[]' value='".$r['id']."'>"; 
  				echo $r['name'];
  				echo "<br>";
  			}
  		 ?>
       <input type="submit" value="Save" name="edit">
    </form>
  	</div>
  </body>
  </html>