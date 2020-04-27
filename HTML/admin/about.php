<?php                            
include_once('includes/apptop.php'); 
include_once('Classes/About.php');

//checkSession($_SESSION['log_id']);

$id=$_GET['id']; 

/*$sql= mysql_query("select * from logo_top_header where id ='".$id."'");
$arr= mysql_fetch_assoc($sql);*/

if(isset($_POST['submit'])){

    //$photo=trim($_POST['old_logo']);
	
 	//var_dump($_POST); die();
		$id = trim($_POST['id']);
	 	$image = trim($_FILES['image']['name']);
		$description = trim($_POST['description']);
		
if($image=="")
{
		$old_image=trim($_POST['old_image']);
		//echo $old_logo; die();
		$m= new About();
		$m->SetById($id);
		$m->setvalues(array('about'=>$description, 'image'=>$old_image));
		
		$res = $m->update();
		if($res)
		{
			 $_SESSION['add_status'] = "Updated Sucessfully.";
			    session_write_close(); 
		       header("location:about.php?id=1");	
		}
		
		else
		{
			$_SESSION['add_status'] = "Post Not Updated Sucessfully.";
			    session_write_close(); 
				echo "<script>alert('Failed to Update post. Please try again')</script>";
				 header("location:about.php?id=1");
		}
}
else
{
		
		$path= "../img/";
	  $path = $path .$_FILES["image"]["name"];
	  if(move_uploaded_file($_FILES['image']['tmp_name'], $path)) 
	  {
		  echo "yes";
	  }
	  else
	  {
		  echo "no";
	  }
		
		$m= new About();
		$m->SetById($id);
		$m->setvalues(array('about'=>$description, 'image'=>$image));
		
		$res = $m->update();
		if($res)
		{
			 $_SESSION['add_status'] = "Updated Sucessfully.";
			    session_write_close(); 
		       header("location:about.php?id=1");	
		}
		
		else
		{
			$_SESSION['add_status'] = "Post Not Updated.";
			    session_write_close(); 
				echo "<script>alert('Failed to Update post. Please try again')</script>";
				 header("location:about.php?id=1");
		}
	 
}
}

$n= new About();
$n->SetById($id);
$arr= $n->Display();
//print_r($arr);

require($ss_templatesDir.$ss_mainTemplateFile);

?>
