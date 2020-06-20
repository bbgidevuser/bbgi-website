<?php


class Faq
{
    private  $id;
    private  $header;
    private  $description;

    public function __construct()
    {
        $this->id 			= NULL;
        $this->header		= NULL;
        $this->description		= NULL;
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
        $header			= mysql_real_escape_string($this->header);
        $description			= mysql_real_escape_string($this->description);

        $insert = "Insert into faq_header(header,description)
			values('$header','$description')";

        //echo $insert; die();
        $res = mysql_query($insert);
        $last_id = mysql_insert_id();
        return $res;

    }

    public function update()
    {
        $id 			= mysql_real_escape_string($this->id);
        $header			= mysql_real_escape_string($this->header);
        $description			= mysql_real_escape_string($this->description);

        $query = "Update faq_header set header='$header',description='$description'
	                                 where id='$id'";
        // echo $query; die();
        $res = mysql_query($query);
        return $res;
    }

    public function SetById($id)
    {
        $query = mysql_query("select * from faq_header where id = $id");
        $data = mysql_fetch_assoc($query);
        $this->id 				= stripslashes($data['id']);
        $this->header				= stripslashes($data['header']);
        $this->description				= stripslashes($data['description']);
    }

    public function Display()
    {
        $arr['id']           	=  $this->id;
        $arr['header']   		=  $this->header;
        $arr['description']   		=  $this->description;
        return $arr;
    }
}
