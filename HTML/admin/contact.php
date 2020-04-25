<?php                            
include_once('includes/apptop.php'); 
include_once('Classes/Cms.php');

//checkSession($_SESSION['log_id']);

$id=$_GET['id']; 

/*$sql= mysql_query("select * from logo_top_header where id ='".$id."'");
$arr= mysql_fetch_assoc($sql);*/

if(isset($_POST['submit'])){

    //$photo=trim($_POST['old_logo']);
	
 	//var_dump($_POST); die();
		$id = trim($_POST['id']);
		$email = trim($_POST['email']);
		$office_email = trim($_POST['office_email']);
		$phone = trim($_POST['phone']);
		$mobile = trim($_POST['mobile']);
		$address = trim($_POST['address']);

	
		$m= new Cms();
		$m->SetById($id);
		$m->setvalues(array('address'=>$address, 'email'=>$email, 'office_email'=>$office_email, 'phone'=>$phone, 'mobile'=>$mobile));
		
		$res = $m->update();
		if($res)
		{
			 $_SESSION['add_status'] = "Updated Sucessfully.";
			    session_write_close(); 
		       header("location:contact.php?id=2");	
		}
		
		else
		{
			$_SESSION['add_status'] = "Post Not Updated.";
			    session_write_close(); 
				echo "<script>alert('Failed to Update post. Please try again')</script>";
				 header("location:contact.php?id=2");
		}
	 
}

$n= new Cms();
$n->SetById($id);
$arr= $n->Display();
//print_r($arr);

require($ss_templatesDir.$ss_mainTemplateFile);

?>