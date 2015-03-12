<?php require 'db.php';
if(isset($_POST['submit']))
{
	$n=$_POST['cname'];
	// print_r($n);
	$a=$_GET['id'];
	// echo $a;
	$arr= explode(",", $a);
	// print_r($arr);
	for($i=0;$i<count($n);$i++){
		$name= $n[$i];
		$id =$arr[$i];
		mysql_query("update category set name='$name' where id='$id'");
	}
	header("location: category.php");


	//mysql_query("update category set name=")
}



 $ids= $_GET['id'];
 $q= mysql_query("select * from category where id in ($ids) ");
  echo '<form action="" method="post">';
 while($r= mysql_fetch_assoc($q)){
 	echo '<input type="text" name="cname[]" value="'.$r['name'].'">';

 }

 ?>
<br><button name="submit" type="submit">Edit</button>
	</form>
	
		