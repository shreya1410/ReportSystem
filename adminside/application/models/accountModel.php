<?php

class accountModel extends database
{
    public function checkEmail($email)
    {
        if($this->Query("SELECT admin_email FROM admin where admin_email =?", [$email]))
        {
            if($this->rowCount() >0)
            {
                return false;
            }
            else
            {
                return true;
            }
        }
    }

    public function createAccount($data)
    {
        if($this->Query("INSERT INTO admin (admin_name,admin_email,admin_pass) VALUES (?,?,?)",$data))
        {
            return true;
        }
    }

    public function userLogin($email,$password)
    {
        if($this->Query("SELECT * FROM admin WHERE admin_email =?" , [$email]))
        {
            if($this->rowCount() >0)
            {
                $row=$this->fetch();
                $dbpassword= $row->admin_pass;
                $adminid= $row->admin_id;
                if(password_verify($password,$dbpassword))
                {
                    return['status' => 'ok','data'=>$adminid];
                }
                else
                {
                    return['status' => 'passwordnotmatched'];
                }
            }
            else
            {
                return['status' => 'emailNotFound'];
            }
        }
    }
}