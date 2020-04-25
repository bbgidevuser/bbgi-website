<?php
function generateUnique()
{
	$key = "".time().rand()."";
	$key = base64_encode($key);
	$key = str_replace("=", "", $key);
	$key = substr($key, -6).rand();
	$key = strtoupper($key);
	return $key;
}

function generatePriceValue($val)
{
	$arr = array();	
	$arr = explode(",",$val);
	$noele = count($arr);
	if($noele==4)
		$value = $arr[0].".".$arr[1]." Cr";
		
	else if($noele==3)	
		$value = $arr[0].".".substr($arr[1],0,2)." Lac";
		
	else if($noele==2)	
		$value = $val;	
	else
		$value = $val;
		
	return ($value)	;
}


function redirectTo($scriptFile = "")
{
	global $ss_rootRedirectPath;
	$path = $ss_rootRedirectPath.$scriptFile;
	header('Location: '.$path);
	return true;
}

function getScriptFileName()
{
	$retval = $_SERVER['SCRIPT_NAME'];
	$arr = explode('/', $retval);
	$retval = $arr[(count($arr)-1)];
	$retval = str_replace(".php", "", $retval);
	return $retval;
}

function colheadlink($value, $title)
{
	global $ss_inc, $sort;
	if(isset($sort))
	{
		if($sort == $value)
		{ return $title; }
	}
	return '<a href="'.$_SERVER['SCRIPT_NAME'].'?sort='.$value.'">'.$title.'</a>';
}

function connectDB()//for connecting to the database
{
	global $ss_DbInfoFile;
	$file = file($ss_DbInfoFile);  //retrieving database name and login information
	$arr = explode(",", $file[0]);
	//print_r($arr);							  die();
	//$conn = @mysql_connect($arr[0], $arr[2], $arr[3]);
	$conn = @mysql_connect("localhost:3306","bbgicgch_admin","Ch4ng31sg00d");
	if(!$conn)
	{ printerr("Error While Connecting To Databse", mysql_error()); die; }
	else
	{
		//$res = @mysql_select_db($arr[1]);
		$res = @mysql_select_db("bbgicgch_bbgi");
		if(!$res)
		{ printerr("Error While Accessing Databse", mysql_error()); die; }
	}
}

function printmsg($str, $query = false)
{	
	print '<link href="style.css" rel="stylesheet" type="text/css" />'."\r\n";
	print '<p><table border="0" align="center" cellspacing="0" cellpadding="0" class="msgtableborder">'."\r\n";
		print '<tr><td class="successmsghead">';
			print $str;
		print '</td></tr>'."\r\n";
		if($query)
		{
			$vdisp = false;
			if(isset($_GET['qry']) && $_GET['qry'] == 'y')
			{	$vdisp = true;	}
			else if(isset($_POST['qry']) && $_POST['qry'] == 'y')
			{	$vdisp = true;	}
			
			if($vdisp)
			{	
				print '<tr><td class="successmsgtext">';
					print "<strong>Query</strong>: $query";
				print '</td></tr>'."\r\n";
			}
		}
	print '<tr><td class="successmsgtext" align="right"><a href="index.php">Return</a></td></tr>'."\r\n";
	print '</table></p>'."\r\n";
}

function printerr($msg, $errmsg = false, $query = false)
{
	print '<link href="style.css" rel="stylesheet" type="text/css" />'."\r\n";
	print '<p><table border="0" align="center" cellspacing="0" cellpadding="0" class="msgtableborder">'."\r\n";
		print '<tr><td class="errormsghead">'.$msg.'</td></tr>'."\r\n";
		if($errmsg != false)
		{
			print '<tr><td class="errormsgtext">';
				print "<strong>Error Message</strong>: $errmsg</p>";
			print '</td></tr>'."\r\n";
		}
		if($query)
		{
			$vdisp = false;
			if(isset($_GET['qry']) && $_GET['qry'] == 'y')
			{	$vdisp = true;	}
			if(isset($_POST['qry']) && $_POST['qry'] == 'y')
			{	$vdisp = true;	}
			
			if($vdisp)
			{	
				print '<tr><td class="errormsgtext">';
					print "<strong>Query</strong>: $query";
				print '</td></tr>'."\r\n";
			}
		}
	print '<tr><td class="errormsgtext" align="right"><a href="index.php">Back</a></td></tr>'."\r\n";
	print '</table></p>'."\r\n";
}

function checkdup($tbname, $fieldname, $value, $addqry = "") //to check duplicate string in database table field
{
	$query = "SELECT * FROM $tbname WHERE $fieldname = '$value' ";
	//print($query);
	///die;
	if(strlen($addqry) > 0)
	{ $query .= $addqry; }
	$res = mysql_query($query);
	if(mysql_num_rows($res) > 0)
	{ return true; }
	else
	{ return false; }
}

function doAdminLogin($pass_user, $pass_pwd)
{
	global $ss_logErr;
	 $query = "SELECT id,username,password FROM godfather WHERE username = '".mysql_real_escape_string($pass_user)."' LIMIT 1";
	
	$res = mysql_query($query);
	if(!$res)
	{	printerr("Error, Admin - Select Query. While admin member login action", mysql_error(), $query);	}
	else
	{
		if(mysql_num_rows($res) == 1)
		{
			$row = mysql_fetch_assoc($res);
			if(md5($pass_pwd) === $row['password'])
			{
				$_SESSION['log_id'] = $row['id'];
				return true;
			}
			else
			{ printerr("Incorect Password", "The password does not matched with the username, try again"); }
		}
		else
		{ printerr("Invalid Username", "Username does not exist in the database, try again"); }
	}
}


function thumbnail($image_path,$thumb_path,$image_name,$new_width,$new_height) 
			{ 
				
				$image_type = strstr($image_name,  '.'); 
		
				$image_type = strtolower($image_type);
				//echo "$image_path/$image_name";
				 $image_name =  strtolower($image_name); 
    		//SWITCHES THE IMAGE CREATE FUNCTION BASED ON FILE EXTENSION 
     		  switch($image_type) { 
           		 case '.jpg': 
              	 $src_img = imagecreatefromjpeg("$image_path/$image_name"); 
				//echo "jpg"; die;
                break;  
				 case '.jpeg': 
				// echo "jpge"; die;
                $src_img = imagecreatefromjpeg("$image_path/$image_name"); 
				//echo "jpg"; die;
                break;
				
            	case '.png': 
               $src_img = imagecreatefrompng("$image_path/$image_name"); 
                break; 
         		case '.gif': 
                $src_img = imagecreatefromgif("$image_path/$image_name"); 
                break; 
            	default: 
            	 echo("Error Invalid Image Type"); 
             //  die; 
               break; 
            } 
				//$src_img = imagecreatefromjpeg("$image_path/$image_name"); 
					list($owidth,$oheight) = getimagesize("$image_path/$image_name"); 
				
				
				$width_scale =  $owidth/$new_width;
				$height_scale = $oheight/$new_height;
				if($height_scale > $width_scale){
				$new_width = 	round($owidth/$height_scale);
				$new_height =   round($oheight/$height_scale);
				}
				
				else{
					
					$new_width = 	round($owidth/$width_scale);
					$new_height =   round($oheight/$width_scale);
				}
				
				
				$dst_img = imagecreatetruecolor($new_width,$new_height); 
				imagecopyresampled($dst_img,$src_img,0,0,0,0,$new_width,$new_height,$owidth,$oheight); 
				imagejpeg($dst_img, "$thumb_path/$image_name"); 
			   return true; 
			} 
function forceDownload($filepath, $filename)
{
	header('Content-Type: application/force-download');
	header('Content-Disposition: attachment; filename="'.$filename.'"');
	header("Content-Transfer-Encoding: binary");
	header('Accept-Ranges: bytes');
	readfile($filepath);
	
}
function Download($filename)
{
	header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($filename));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filename));
    ob_clean();
    flush();
    readfile($filename);
}
function checkSession($session_value){
	
		if(!isset($session_value))
		{redirectTo($ss_rootRedirectPath."login.php"); }
	
	
	
}
	//cheeck in a table a value is exist or not if exist return value otherwise N/A.
function getValuefromTable($fieldname,$table,$key,$keyval){
	// $fieldname = name of column in table
	//$table = name of table 
	// $key = compariosn
	// $keyval = value of comparision
	$sql = " SELECT $fieldname  FROM  $table WHERE $key = '".$keyval."'";
	$res = mysql_query($sql);
	if($res){
	//print($sql); die;
		if(mysql_num_rows($res) > 0){ 
		$data = mysql_fetch_assoc($res);
		$fieldValue = $data[$fieldname];
		if($fieldValue!=''){
		return $fieldValue;
		}else {
		echo "";	
		}
		}
		else {
		echo "";
		}
	}
	else
{printerr("Error - Find query ", mysql_error(), $sql);}
}


function UpdateSortOrder($insertid , $value , $table)
	{
		$query  = "update ".$table." set sort_order=".$value." where id = ".$insertid." ";
		$update = mysql_query($query);
       
        if($update)
		{
	      $id = 1; 		  
        }
        else
		{
          $id = 0;
        }
		return $id;
}
function PublishUnpublish($update_id , $status , $table)
	{
		$query  = "update ".$table." set status='".$status."' where id = ".$update_id." ";
		$update = mysql_query($query);
       
        if($update)
		{
	      $id = 1; 		  
        }
        else
		{
          $id = 0;
        } 
		return $id;
}



?>
