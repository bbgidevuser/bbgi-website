<?php

class About
{
	private  $id;
	private  $header;
    private  $description;
    private  $main_one;
	private  $title;
    private  $image;
	private  $main_two;
	
	
  public function __construct()
	{
		$this->id 			= NULL;
		$this->header = NULL;
        $this->description	= NULL;
		$this->main_one 		= NULL;
		$this->title			= NULL;
        $this->image		= NULL;
		$this->main_two		= NULL;
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
		$query = mysql_query("select id from about order by id desc limit 0,1");
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
		$header 	= mysql_real_escape_string($this->header);
        $description	= mysql_real_escape_string($this->description);
		$main_one 			= mysql_real_escape_string($this->main_one);
		$title			= mysql_real_escape_string($this->title);
        $image			= mysql_real_escape_string($this->image);
		$main_two			= mysql_real_escape_string($this->main_two);

        $insert = "Insert into about(header, description, main_one, title, image, main_two, )
			values('$header', '$description','$main_one', '$title','$image', '$main_two')";
		
		//echo $insert; die();
		$res = mysql_query($insert);
  	    $last_id = mysql_insert_id();
		return $res;
		
	}
	
	
	public function update() 
	{
		
		$id 			= mysql_real_escape_string($this->id);
		$header 	= mysql_real_escape_string($this->header);
        $description	= mysql_real_escape_string($this->description);
		$main_one 			= mysql_real_escape_string($this->main_one);
		$title			= mysql_real_escape_string($this->title);
		$main_two			= mysql_real_escape_string($this->main_two);
		$image			= mysql_real_escape_string($this->image);
		
	   
	   
	   $query = "Update about set header='$header',
                                     description='$description',
									 main_one='$main_one',
									 title='$title',
									 main_two='$main_two',
									 image='$image'
	                                 where id='$id'"; 
	  // echo $query; die();								 
	   $res = mysql_query($query);	   
	   return $res;
	}


	public function SetById($id)
	{
	   $query = mysql_query("select * from about where id = $id");
	   $data = mysql_fetch_assoc($query);
	   $this->id 				= stripslashes($data['id']);
	   $this->header 		= stripslashes($data['header']);
        $this->description		= stripslashes($data['description']);
	   $this->main_one 			= stripslashes($data['main_one']);
	   $this->title				= stripslashes($data['title']);
	   $this->main_two				= stripslashes($data['main_two']);
	   $this->image				= stripslashes($data['image']);
	  
	}
		
	public function Display()
	{
		$arr['id']           	=  $this->id;
		$arr['header']    =  $this->header;
        $arr['description']   	=  $this->description;
		$arr['main_one']         	=  $this->main_one;
		$arr['title']   			=  $this->title;
		$arr['main_two']   		=  $this->main_two;
		$arr['image']   		=  $this->image;
		
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
			  $arr[$i]['header'] 	 =	    stripslashes($dsdata['header']);
              $arr[$i]['description']  	 =      stripslashes($dsdata['description']);
			  $arr[$i]['main_one']    		 =      stripslashes($dsdata['main_one']);
			  $arr[$i]['title']  	     =      stripslashes($dsdata['title']);
			  $arr[$i]['main_two']  	     =      stripslashes($dsdata['main_two']);
			  $arr[$i]['image']			 =		stripslashes($dsdata['image']);
			   
		}
		return $arr;
	}

	public function fetchDisplay($statement1)
	{
	  $arr = array();
	  if($statement1){
		$select = ("select * from about $statement1");
	  }else{
		$select = ("select * from about");
	  }
	// echo $select;
	  
		$dsquery=mysql_query($select);
		$count=mysql_num_rows($dsquery);
		
		for($i=0; $i<$count; $i++)
		{
		$dsdata=mysql_fetch_assoc($dsquery);
			  $arr[$i]['id']       		 =      stripslashes($dsdata['id']);
			  $arr[$i]['header'] 	 =	    stripslashes($dsdata['header']);
              $arr[$i]['description']	 =		stripslashes($dsdata['description']);
			  $arr[$i]['main_one']    		 =      stripslashes($dsdata['main_one']);
			  $arr[$i]['title']			 =		stripslashes($dsdata['title']);
			  $arr[$i]['main_two']			 =		stripslashes($dsdata['main_two']);
			  $arr[$i]['image']			 =		stripslashes($dsdata['image']);
			   
 		}
//		count($arr);
		return $arr;
		
	 }
	
	public function update_selected($sel_id)
	{
		$array_id=explode(",",$sel_id);
		$status = mysql_real_escape_string($this->status);
		
		$id = mysql_real_escape_string($sel_id);		
		$query = "Update about set status='$status' where id in($id)";
		$res = mysql_query($query);
		
		return $res;
	}
	
	
	
	public function Delete_Selected()
	{
					 
		$sel_id = mysql_real_escape_string($this->id); 
		$query  = "delete from about where id in($sel_id);";
		$deletequery = mysql_query($query); 
		return $deletequery;
	}
	

}

?>
