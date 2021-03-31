<?php

class userController extends framework
{

    public function __construct()
    {
        $this->helper('link');
    }

    public function index()
    {

       $this->view('userView');
    }
    public function signup()
    {
        $userModel = $this->model('userModel');
       $fullName=$this->input('fullName');
       $email= $this->input('email');
       $password=$this->input('password');
      if( $userModel->userSignup($fullName,$email,$password))
      {
          echo "account created";
      }
    }
}