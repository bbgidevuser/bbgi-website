<?php


class Events
{
    private  $id;
    private  $image;

    public function __construct()
    {
        $this->id 			= NULL;
        $this->image		= NULL;
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
        $image			= mysql_real_escape_string($this->image);

        $insert = "Insert into events(image)
			values('$image')";

        //echo $insert; die();
        $res = mysql_query($insert);
        $last_id = mysql_insert_id();
        return $res;

    }

    public function update()
    {
        $id 			= mysql_real_escape_string($this->id);
        $image			= mysql_real_escape_string($this->image);

        $query = "Update events set image='$image',
	                                 where id='$id'";
        // echo $query; die();
        $res = mysql_query($query);
        return $res;
    }

    public function SetById($id)
    {
        $query = mysql_query("select * from events where id = $id");
        $data = mysql_fetch_assoc($query);
        $this->id 				= stripslashes($data['id']);
        $this->image				= stripslashes($data['image']);
    }

    public function Display()
    {
        $arr['id']           	=  $this->id;
        $arr['image']   		=  $this->image;
        return $arr;
    }


}

?>
