<?php
class userModel extends database
{
    public function userSignup($fullName,$email,$password)
    {

      if( $this->Query("INSERT INTO users(fullName,email,password)
VALUES(?,?,?)",[$fullName,$email,$password]))
      {
          return true;
      }
      else
      {
          return false;
      }

    }
}