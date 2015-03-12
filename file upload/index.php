<?php 
    error_reporting(E_ALL^E_DEPRECATED);
	mysql_connect("localhost","root","");
	mysql_select_db("images1");
	
	if(isset($_POST["submit"]))
	  {
	     $filename=$_FILES['gallery']['name'];
		 $arr=explode('.',$filename);
		 $ext=end($arr);
		 $allowed=["jpg","gif","png"];
		 
		 if(in_array($ext,$allowed))
		   {
		     $random=rand(1111111,9999999);
			 $new_name=$random.$filename;
			 	move_uploaded_file($_FILES['gallery']['tmp_name'],"gallery/".$new_name);
			 
				mysql_query("insert into gallery(name)value('$new_name')");
			}
	     
         else
            {
               echo "Invalid Extension";
             }
       }			 
			
	  
	
    
?>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<input type="file" name="gallery">
		<input type="submit" name="submit" value="upload">
	</form>
</body>
</html>