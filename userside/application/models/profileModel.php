<?php



class profileModel extends database
{

    public function addReport($data)
    {
        if($this->Query("INSERT INTO complain (name,contact,flat_no,title,description,userId) 
VALUES (?,?,?,?,?,?)",$data))
        {
            return true;
        }
    }

    public function getData($userId)
    {
        //$userId= $this->getSession('userId');
        if($this->Query("SELECT * FROM complain WHERE userId=?", [$userId]))
        {
            $data= $this->fetchall();
            return $data;
        }
    }


    public function edit_data($id,$userId)
    {
        if($this->Query("SELECT * FROM complain WHERE complain_id= ? && userId =?",[$id,$userId]))
        {
            $row= $this->fetch();
            return $row;
        }
    }

    public function updateReport($updateData)
    {
        if($this->Query("UPDATE complain SET name=?, contact=?, flat_no =? ,title=?,description= ? WHERE complain_id=? AND userId=? ", $updateData))
        {
            return true;
        }
    }

    public function deleteReport($id,$userId)
    {
        if($this->Query("DELETE FROM complain WHERE complain_id=?  && userId =?",[$id,$userId]))
        {
            return true;
        }
    }
}