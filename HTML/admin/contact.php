<?php
include_once('includes/apptop.php');
include_once('Classes/Contact.php');

//checkSession($_SESSION['log_id']);

$id=$_GET['id'];

/*$sql= mysql_query("select * from logo_top_header where id ='".$id."'");
$arr= mysql_fetch_assoc($sql);*/

if(isset($_POST['submit'])){

    //$photo=trim($_POST['old_logo']);

 	//var_dump($_POST); die();
		$id = trim($_POST['id']);
		$header = trim($_POST['header']);
		$location = trim($_POST['location']);
		$office = trim($_POST['office']);
		$address = trim($_POST['address']);
		$telephone = trim($_POST['telephone']);
        $email = trim($_POST['email']);


		$m= new Contact();
		$m->SetById($id);
		$m->setvalues(array('header'=>$header, 'location'=>$location, 'office'=>$office, 'address'=>$address, 'telephone'=>$telephone, 'email'=>$email));

		$res = $m->update();
		if($res)
		{
			 $_SESSION['add_status'] = "Updated Sucessfully.";
			    session_write_close();
		       header("location:contact.php?id=5");
		}

		else
		{
			$_SESSION['add_status'] = "Post Not Updated.";
			    session_write_close();
				echo "<script>alert('Failed to Update post. Please try again')</script>";
				 header("location:contact.php?id=5");
		}

}

$n= new Contact();
$n->SetById($id);
$arr= $n->Display();
//print_r($arr);

require($ss_templatesDir.$ss_mainTemplateFile);

?>
