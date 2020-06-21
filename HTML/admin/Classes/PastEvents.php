<?php


class PastEvents
{
    private  $id;
    private  $header;
    private  $description;
    private  $event_date;
    private  $venue;
    private  $event_description;
    private  $image;

    public function __construct()
    {
        $this->id 			= NULL;
        $this->header		= NULL;
        $this->description		= NULL;
        $this->event_date		= NULL;
        $this->venue		= NULL;
        $this->event_description		= NULL;
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
        $id			= mysql_real_escape_string($this->id);
        $header			= mysql_real_escape_string($this->header);
        $description			= mysql_real_escape_string($this->description);
        $event_date			= mysql_real_escape_string($this->event_date);
        $venue			= mysql_real_escape_string($this->venue);
        $event_description			= mysql_real_escape_string($this->event_description);
        $image			= mysql_real_escape_string($this->image);

        $insert = "Insert into past_events(id, header, description, event_date, venue, event_description, image)
			values($id, $header, $description, $event_date, $venue, $event_description, '$image')";

        //echo $insert; die();
        $res = mysql_query($insert);
        $last_id = mysql_insert_id();
        return $res;

    }

    public function update()
    {
        $id 			= mysql_real_escape_string($this->id);
        $header 			= mysql_real_escape_string($this->header);
        $description 			= mysql_real_escape_string($this->description);
        $event_date 			= mysql_real_escape_string($this->event_date);
        $venue 			= mysql_real_escape_string($this->venue);
        $event_description 			= mysql_real_escape_string($this->event_description);
        $image			= mysql_real_escape_string($this->image);

        $query = "Update past_events set id='$id',header='$header',description='$description',event_date='$event_date',venue='$venue',event_description='$event_description',image='$image',
	                                 where id='$id'";
        // echo $query; die();
        $res = mysql_query($query);
        return $res;
    }

    public function SetById($id)
    {
        $query = mysql_query("select * from past_events where id = $id");
        $data = mysql_fetch_assoc($query);
        $this->id 				= stripslashes($data['id']);
        $this->header 				= stripslashes($data['header']);
        $this->description 				= stripslashes($data['description']);
        $this->event_date 				= stripslashes($data['event_date']);
        $this->venue 				= stripslashes($data['venue']);
        $this->event_description 				= stripslashes($data['event_description']);
        $this->image				= stripslashes($data['image']);
    }

    public function Display()
    {
        $arr['id']           	=  $this->id;
        $arr['header']   		=  $this->header;
        $arr['description']   		=  $this->description;
        $arr['event_date']   		=  $this->event_date;
        $arr['venue']   		=  $this->venue;
        $arr['event_description']   		=  $this->event_description;
        $arr['image']   		=  $this->image;
        return $arr;
    }


}

?>
