<?php
class profile extends framework
{
    public function __construct()
    {
        if(!$this->getSession('admin_id'))
        {
            $this->redirect("accountController/loginForm");
        }
            $this->helper("link");

        $this->profileModel =$this->model("profileModel");
    }

    public function index()
    {
        $adminid= $this->getSession('admin_id');
        $data =$this->profileModel->getData($adminid);
        $this->view("profile", $data);
    }


    public function logout()
    {
        $this->destroy();
        $this->redirect("accountController/loginForm");
    }



    public function reportForm()
    {
       // $cId= $this->input('complain_id');
//        $idData =[
//            'id' =>$this->input('complain_id'),
//        ];

        $this->view("addFeedback");
    }

    public function feedback_report()
    {
//       var_dump($this->input('complain_id'));
//       exit();
        $userData =[
            'complain_id' =>$this->input('complain_id'),
            'msg' =>$this->input('msg'),
            'msgError'=> ''
        ];

        if(empty($userData['msg'])){
            $userData['msgError']= "msg is required";
        }

        if(empty($userData['msgError']) )
        {
            $data= [$userData['complain_id'],$userData['msg']];
          if($this->profileModel->add_fb($data))
          {
               $this->setflash('repportAdded',"Your feedback has been added successfully");
               $this->redirect("profile/index");
          }
        }
        else
        {
            $this->view("addFeedback",$userData);
        }
    }
}













