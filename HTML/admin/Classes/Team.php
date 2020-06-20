<?php

class Team
{
	private  $id;
	private  $name;
	private  $title;
    private  $description;
    private  $image;
	private  $header;
	private  $main_description;
	
	
  public function __construct()
	{
		$this->id 			= NULL;
		$this->name = NULL;
		$this->title			= NULL;
        $this->description	= NULL;
		$this->image		= NULL;
		$this->header 		= NULL;
		$this->main_description		= NULL;
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
		$query = mysql_query("select id from team order by id desc limit 0,1");
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
		$name 	= mysql_real_escape_string($this->name);
		$title			= mysql_real_escape_string($this->title);
        $description	= mysql_real_escape_string($this->description);
		$image			= mysql_real_escape_string($this->image);
		$header 			= mysql_real_escape_string($this->header);
		$main_description			= mysql_real_escape_string($this->main_description);

        $insert = "Insert into team(name, title, description, image, header,  main_description, )
			values('$name', '$title', '$description','$image', '$header',  '$main_description')";
		
		//echo $insert; die();
		$res = mysql_query($insert);
  	    $last_id = mysql_insert_id();
		return $res;
		
	}
	
	
	public function update() 
	{
		
		$id 			= mysql_real_escape_string($this->id);
		$name 	= mysql_real_escape_string($this->name);
		$title			= mysql_real_escape_string($this->title);
        $description	= mysql_real_escape_string($this->description);
		$image			= mysql_real_escape_string($this->image);
		$header 			= mysql_real_escape_string($this->header);
		$main_description			= mysql_real_escape_string($this->main_description);

	   $query = "Update team set header='$name',
                                     title='$title',
                                     description='$description',
                                     image='$image',
									 header='$header',
									 main_description='$main_description'
	                                 where id='$id'"; 
	  // echo $query; die();								 
	   $res = mysql_query($query);	   
	   return $res;
	}


	public function SetById($id)
	{
	   $query = mysql_query("select * from team where id = $id");
	   $data = mysql_fetch_assoc($query);
	   $this->id 				= stripslashes($data['id']);
	   $this->name 		= stripslashes($data['name']);
		$this->title				= stripslashes($data['title']);
        $this->description		= stripslashes($data['description']);
		$this->image				= stripslashes($data['image']);
	   $this->header 			= stripslashes($data['header']);
	   $this->main_description				= stripslashes($data['main_description']);
	}
		
	public function Display()
	{
		$arr['id']           	=  $this->id;
		$arr['name']    =  $this->name;
		$arr['title']   			=  $this->title;
        $arr['description']   	=  $this->description;
		$arr['image']   		=  $this->image;
		$arr['header']         	=  $this->header;
		$arr['main_description']   		=  $this->main_description;
		return $arr;
	}
	
	
	public function PaginationfetchDisplay($statement,$limit,$startpoint)
	{		
	
	  $query=("select * from {$statement} LIMIT {$startpoint} , {$limit} ");
	 //echo $query; die();
	  $dsquery=mysql_query($query);
	  $count=mysql_num_rows($dsquery);
		
		for($i=0; $i<$count; $i++)
		{
		$dsdata=mysql_fetch_assoc($dsquery);
	
			  $arr[$i]['id']       		 =      stripslashes($dsdata['id']);
			  $arr[$i]['name'] 	 =	    stripslashes($dsdata['name']);
			  $arr[$i]['title']  	     =      stripslashes($dsdata['title']);
              $arr[$i]['description']  	 =      stripslashes($dsdata['description']);
			  $arr[$i]['image']			 =		stripslashes($dsdata['image']);
			  $arr[$i]['header']    		 =      stripslashes($dsdata['header']);
			  $arr[$i]['main_description']  	     =      stripslashes($dsdata['main_description']);

		}
		return $arr;
	}

	public function fetchDisplay($statement1)
	{
	  $arr = array();
	  if($statement1){
		$select = ("select * from team $statement1");
	  }else{
		$select = ("select * from team");
	  }
	// echo $select;
	  
		$dsquery=mysql_query($select);
		$count=mysql_num_rows($dsquery);
		
		for($i=0; $i<$count; $i++)
		{
		$dsdata=mysql_fetch_assoc($dsquery);
			  $arr[$i]['id']       		 =      stripslashes($dsdata['id']);
			  $arr[$i]['name'] 	 =	    stripslashes($dsdata['name']);
			  $arr[$i]['title']			 =		stripslashes($dsdata['title']);
              $arr[$i]['description']	 =		stripslashes($dsdata['description']);
			  $arr[$i]['image']			 =		stripslashes($dsdata['image']);
			  $arr[$i]['header']    		 =      stripslashes($dsdata['header']);
			  $arr[$i]['main_description']			 =		stripslashes($dsdata['main_description']);
 		}
//		count($arr);
		return $arr;
		
	 }
	
	public function update_selected($sel_id)
	{
		$array_id=explode(",",$sel_id);
		$status = mysql_real_escape_string($this->status);
		
		$id = mysql_real_escape_string($sel_id);		
		$query = "Update team set status='$status' where id in($id)";
		$res = mysql_query($query);
		
		return $res;
	}
	
	
	
	public function Delete_Selected()
	{
					 
		$sel_id = mysql_real_escape_string($this->id); 
		$query  = "delete from team where id in($sel_id);";
		$deletequery = mysql_query($query); 
		return $deletequery;
	}
	

}

?>
