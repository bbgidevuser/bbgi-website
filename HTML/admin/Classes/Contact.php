<?php


class Contact
{
    private  $id;
    private  $header;
    private  $location;
    private  $office;
    private  $address;
    private  $telephone;
    private  $email;

    public function __construct()
    {
        $this->id 			= NULL;
        $this->header = NULL;
        $this->location		= NULL;
        $this->office 		= NULL;
        $this->address			= NULL;
        $this->telephone		= NULL;
        $this->email	= NULL;
    }

    public function setvalues($array)
    {
        foreach($array as $key => $value)
        {
            $this->$key = $value;
        }
    }

    public function insert()
    {
        $header 	= mysql_real_escape_string($this->header);
        $location	= mysql_real_escape_string($this->location);
        $office 			= mysql_real_escape_string($this->office);
        $address			= mysql_real_escape_string($this->address);
        $telephone			= mysql_real_escape_string($this->telephone);
        $email			= mysql_real_escape_string($this->email);

        $insert = "Insert into contact(header, location, office, address, telephone, email)
			values('$header', '$location','$office', '$address','$telephone', '$email')";

        //echo $insert; die();
        $res = mysql_query($insert);
        $last_id = mysql_insert_id();
        return $res;

    }

    public function update()
    {

        $id 			= mysql_real_escape_string($this->id);
        $header 	= mysql_real_escape_string($this->header);
        $location	= mysql_real_escape_string($this->location);
        $office 			= mysql_real_escape_string($this->office);
        $address			= mysql_real_escape_string($this->address);
        $telephone			= mysql_real_escape_string($this->telephone);
        $email			= mysql_real_escape_string($this->email);


        $query = "Update contact set header='$header',
                                     description='$location',
									 main_one='$office',
									 title='$address',
									 image='$telephone',
									 main_two='$email'
									 
	                                 where id='$id'";
        // echo $query; die();
        $res = mysql_query($query);
        return $res;
    }

    public function SetById($id)
    {
        $query = mysql_query("select * from contact where id = $id");
        $data = mysql_fetch_assoc($query);
        $this->id 				= stripslashes($data['id']);
        $this->header 		= stripslashes($data['header']);
        $this->location		= stripslashes($data['location']);
        $this->office 			= stripslashes($data['office']);
        $this->address				= stripslashes($data['address']);
        $this->telephone				= stripslashes($data['telephone']);
        $this->email				= stripslashes($data['email']);
    }

    public function Display()
    {
        $arr['id']           	=  $this->id;
        $arr['header']    =  $this->header;
        $arr['location']   	=  $this->location;
        $arr['office']         	=  $this->office;
        $arr['address']   			=  $this->address;
        $arr['telephone']   		=  $this->telephone;
        $arr['email']   		=  $this->email;

        return $arr;
    }
}

?>
