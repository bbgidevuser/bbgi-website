<?php
include_once('includes/apptop.php');
include_once('Classes/PastEvents.php');

//checkSession($_SESSION['log_id']);

$id=$_GET['id'];

/*$sql= mysql_query("select * from logo_top_header where id ='".$id."'");
$arr= mysql_fetch_assoc($sql);*/

if(isset($_POST['submit'])){

    //$photo=trim($_POST['old_logo']);

    //var_dump($_POST); die();
    $id = trim($_POST['id']);
    $header = trim($_POST['header']);
    $description = trim($_POST['description']);
    $event_date = trim($_POST['event_date']);
    $venue = trim($_POST['venue']);
    $event_description = trim($_POST['event_description']);
    $image = trim($_FILES['image']['name']);

    if($image=="")
    {
        $old_image=trim($_POST['old_image']);
        //echo $old_logo; die();
        $m= new PastEvents();
        $m->SetById($id);
        $m->setvalues(array('header'=>$header,'description'=>$description, 'event_date'=>$event_date,'venue'=>$venue,'event_description'=>$event_description, 'image'=>$old_image));

        $res = $m->update();
        if($res)
        {
            $_SESSION['add_status'] = "Updated Sucessfully.";
            session_write_close();
            header("location:pastevents.php?id=3");
        }

        else
        {
            $_SESSION['add_status'] = "Post Not Updated Sucessfully.";
            session_write_close();
            echo "<script>alert('Failed to Update post. Please try again')</script>";
            header("location:pastevents.php?id=3");
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

        $m= new PastEvents();
        $m->SetById($id);
        $m->setvalues(array('header'=>$header,'description'=>$description,'event_date'=>$event_date,'venue'=>$venue,'event_description'=>$event_description,'image'=>$image));

        $res = $m->update();
        if($res)
        {
            $_SESSION['add_status'] = "Updated Sucessfully.";
            session_write_close();
            header("location:pastevents.php?id=3");
        }

        else
        {
            $_SESSION['add_status'] = "Post Not Updated.";
            session_write_close();
            echo "<script>alert('Failed to Update post. Please try again')</script>";
            header("location:pastevents.php?id=3");
        }

    }
}

$n= new PastEvents();
$n->SetById($id);
$arr= $n->Display();
//print_r($arr);

require($ss_templatesDir.$ss_mainTemplateFile);

?>
