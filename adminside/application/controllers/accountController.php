<?php

class accountController extends framework
{
    public function __construct()
    {
        if($this->getSession('admin_id'))
        {
            $this->redirect("profile");
        }
        $this->helper("link");

      $this->accountmodel=$this->model('accountModel');
    }

    public function index()
    {
        $this->view("signup");
    }

    public function loginform()
    {
        $this->view('login');
    }
    public function createAccount()
    {
        $userData =[
            'fullName' => $this->input('fullName'),
            'email' =>$this->input('email'),
            'password' =>$this->input('password'),
            'fullNameError'=>'',
            'emailError'=> '',
            'passwordError' =>''
        ];

        if(empty($userData['fullName'])){
            $userData['fullNameError']= "name is required";
        }
        if(empty($userData['email'])){
            $userData['emailError']= "email is required";
         }
        else
        {
            if(!$this->accountmodel->checkEmail($userData['email']))
            {
             $userData['emailError'] = 'email already exists';
            }
        }

        if(empty($userData['password']))
        {
            $userData['passwordError']= "password is required";
        }
        elseif (strlen($userData['password']) <5)
        {
            $userData['passwordError']= "password must be 5 characters long";
        }

        if(empty($userData['fullNameError']) && empty($userData['emailError'])  && empty($userData['passwordError'])){
            $password =password_hash($userData['password'],PASSWORD_DEFAULT);
            $data =[$userData['fullName'],$userData['email'] , $password];
            if($this->accountmodel->createAccount($data))
            {
                $this->setflash("accountCreated","Your account created successfully");

                $this->redirect("accountController/loginForm");
            }
        }
        else
        {
            $this->view('signup',$userData);
        }

    }
    public function userLogin()
    {

        $userData =[
            'email' =>$this->input('email'),
            'password' => $this->input('password'),
            'emailError'=>'',
            'passwordError' =>''
        ];
        if(empty($userData['email'])){
            $userData['emailError']= "email is required";
        }
        if(empty($userData['password'])){
            $userData['passwordError']= "password is required";
        }

        if(empty($userData['emailError'])   && empty($userData['passwordError']))
        {
           $result= $this->accountmodel->userLogin($userData['email'], $userData['password']);
           if($result['status']=== 'emailNotFound')
           {
               $userData['emailError']="sorry invalid email";
               $this->view('login',$userData);
           }
           elseif ($result['status']=== 'passwordnotmatched')
            {
                $userData['passwordError']="sorry invalid password";
                $this->view('login',$userData);
            }
            elseif ($result['status']=== 'ok')
            {
                $this->setSession("admin_id",$result['data']);
                $this->redirect("profile");
            }
        }
        else
        {
            $this->view('login',$userData);
        }

    }
}