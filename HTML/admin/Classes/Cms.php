<?php

class Cms
{
	private  $id;
	private  $about;
	private  $image;
	private  $address;
	private  $email;
	private  $office_email;
	private  $phone;
	private  $mobile;
	
	
	
  public function __construct()
	{
		$this->id 			= NULL;
		$this->about = NULL;
		$this->image		= NULL;
		$this->address 		= NULL;
		$this->email			= NULL;
		$this->office_email		= NULL;
		$this->phone	= NULL;
		$this->mobile	= NULL;
		
		
		
	}
	
  public function setvalues($array)
	{
		foreach($array as $key => $value)
        {
			$this->$key = $value;			
		}		
	}
	
   public function getlatestId()
	{
		$query = mysql_query("select id from cms order by id desc limit 0,1");
		$data = mysql_fetch_assoc($query);
       
        if(mysql_num_rows($query)>0)
		{
	      $id = $data['id']; 		  
        	
		}
        else
		{
          $id = 0;
        }

	return $id;
	}
	

	public function insert()
	{
		$about 	= mysql_real_escape_string($this->about);
		$image			= mysql_real_escape_string($this->image);
		$address 			= mysql_real_escape_string($this->address);
		$email			= mysql_real_escape_string($this->email);
		$office_email			= mysql_real_escape_string($this->office_email);
		$phone	= mysql_real_escape_string($this->phone);
		$mobile			= mysql_real_escape_string($this->mobile);
		
		
		
        $insert = "Insert into cms(about, image, address, email, office_email, phone, mobile)
			values('$about', '$image', '$address', '$email', '$office_email', '$phone', '$mobile')"; 
		
		//echo $insert; die();
		$res = mysql_query($insert);
  	    $last_id = mysql_insert_id();
		return $res;
		
	}
	
	
	public function update() 
	{
		
		$id 			= mysql_real_escape_string($this->id);
		$about 	= mysql_real_escape_string($this->about);
		$image			= mysql_real_escape_string($this->image);
		$address 			= mysql_real_escape_string($this->address);
		$email			= mysql_real_escape_string($this->email);
		$office_email			= mysql_real_escape_string($this->office_email);
		$phone	= mysql_real_escape_string($this->phone);
		$mobile			= mysql_real_escape_string($this->mobile);
		
	   
	   
	   $query = "Update cms set about='$about',
									image='$image',
									 address='$address',
									 email='$email',
									 office_email='$office_email',
		                             phone='$phone',
									 mobile='$mobile'
									 
	                                 where id='$id'"; 
	  // echo $query; die();								 
	   $res = mysql_query($query);	   
	   return $res;
	}


	public function SetById($id)
	{
	   $query = mysql_query("select * from cms where id = $id");
	   $data = mysql_fetch_assoc($query);
	   $this->id 				= stripslashes($data['id']);
	   $this->about 		= stripslashes($data['about']);
	   $this->image				= stripslashes($data['image']);
	   $this->address 			= stripslashes($data['address']);
	   
	   $this->email				= stripslashes($data['email']);
	   $this->office_email				= stripslashes($data['office_email']);
       $this->phone		= stripslashes($data['phone']);
	   $this->mobile				= stripslashes($data['mobile']);
	  
	}
		
	public function Display()
	{
		$arr['id']           	=  $this->id;
		$arr['about']    =  $this->about;
		$arr['image']   		=  $this->image;
		$arr['address']         	=  $this->address;
		$arr['email']   			=  $this->email;
		$arr['office_email']   		=  $this->office_email;
		$arr['phone']   	=  $this->phone;
		$arr['mobile']   		=  $this->mobile;
		
		return $arr;
	}

	public function fetchDisplay($statement1)
	{
	  $arr = array();
	  if($statement1){
		$select = ("select * from cms $statement1");
	  }else{
		$select = ("select * from cms");
	  }
	// echo $select;
	  
		$dsquery=mysql_query($select);
		$count=mysql_num_rows($dsquery);
		
		for($i=0; $i<$count; $i++)
		{
		$dsdata=mysql_fetch_assoc($dsquery);
			  $arr[$i]['id']       		 =      stripslashes($dsdata['id']);
			  $arr[$i]['about'] 	 =	    stripslashes($dsdata['about']);
			  $arr[$i]['image']			 =		stripslashes($dsdata['image']);
			  $arr[$i]['address']    		 =      stripslashes($dsdata['address']);		  
			  $arr[$i]['email']			 =		stripslashes($dsdata['email']);
			  $arr[$i]['office_email']			 =		stripslashes($dsdata['office_email']);
			  $arr[$i]['phone']	 =		stripslashes($dsdata['phone']);
			  $arr[$i]['mobile']			 =		stripslashes($dsdata['mobile']);
			   
 		}
//		count($arr);
		return $arr;
		
	 }
	
	public function update_selected($sel_id)
	{
		$array_id=explode(",",$sel_id);
		$status = mysql_real_escape_string($this->status);
		
		$id = mysql_real_escape_string($sel_id);		
		$query = "Update cms set status='$status' where id in($id)"; 
		$res = mysql_query($query);
		
		return $res;
	}

}

?>