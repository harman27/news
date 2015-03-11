<?php 
	require 'db.php';

	if(isset($_POST['submit'])){
		$u= trim($_POST['username']);
		$p= sha1($_POST['password']);
		if(empty($u)){
			echo "fill username";
		}elseif(empty($p)){
			echo "fill password";
		}else{
			$q= mysql_query("select * from admin where username='$u' and password='$p'");
			
			$count= mysql_num_rows($q);
			if($count==1){
				$_SESSION['name']=$u;
				header("location: index.php");
			}else{
				echo "invalid username/password";
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
 	<form method="post">
 		<h1>Login Page</h1>
 		<table>
 			<tr>
 				<th>Username</th>
 				<td><input type="text" name="username"></td>
 			</tr>
 			<tr>
 				<th>Password</th>
 				<td><input type="password" name="password"></td>
 			</tr>
 			<tr>
 				<th></th>
 				<td><input type="submit" value="Login" name="submit"></td>
 			</tr>
 		</table>
 	</form>
 </body>
 </html>