<?php



class profileModel extends database
{

    public function add_fb($data)
    {
        if($this->Query("INSERT INTO feedback (complain_id,message) VALUES (?,?)",$data))
        {
            return true;
        }
    }

    public function getData($userId)
    {
        //$userId= $this->getSession('userId');
        if($this->Query("SELECT * FROM complain "))
        {
            $data= $this->fetchall();
            return $data;
        }
    }




}