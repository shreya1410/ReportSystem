<?php
class framework
{
    public function view($viewName,$data =[])
    {
        if(file_exists("../application/views/" .$viewName. ".php"))
        {
            require_once "../application/views/$viewName.php";
        }
        else
        {
            echo "<div style='margin: 0;padding: 10px;background-color: silver;'>sorry
                        $viewName.php not found</div>";
        }
    }

    public function model($modelName)
    {
        if(file_exists("../application/models/" .$modelName. ".php"))
        {
            require_once "../application/models/$modelName.php";
            return new $modelName;
        }
        else
        {
            echo "<div style='margin: 0;padding: 10px;background-color: silver;'>sorry
                        $modelName.php not found</div>";
        }
    }

    public function input($inputName)
    {
        if($_SERVER['REQUEST_METHOD']=="POST" || $_SERVER['REQUEST_METHOD'=='post'])
        {
          //  return trim(strip_tags($_POST[$inputName]));
            return trim($_POST[$inputName]);
        }
        else if($_SERVER['REQUEST_METHOD']=='GET' || $_SERVER['REQUEST_METHOD']=='get')
        {
           // return trim(strip_tags($_GET[$inputName]));
            return trim($_GET[$inputName]);
        }
    }

    public function helper($helperName)
    {
        if(file_exists("../system/helpers/".$helperName.".php"))
        {
            require "../system/helpers/".$helperName.".php";
        }
        else
        {
            echo "<div style='margin: 0;padding: 10px;background-color: silver;'>sorry
                        $helperName.php not found</div>";
        }
    }


    public function setSession($sessionName, $sessionValue)
    {
        if(!empty($sessionName) && !empty($sessionValue))
        {
            $_SESSION[$sessionName] = $sessionValue;
        }
    }

    public function getSession($sessionName)
    {
        if(!empty($sessionName))
        {
            return $_SESSION[$sessionName];
        }
    }

    public function unsetSession($sessionName)
    {
        if(!empty($sessionName))
        {
            unset($_SESSION[$sessionName]);
        }
    }

    public function destroy()
    {
        session_destroy();
    }

    public function setflash($sessionName,$msg)
    {
        if(!empty($sessionName) && !empty($msg))
        {
            $_SESSION[$sessionName] = $msg;
        }
    }

    public function flash($sessionName,$className)
    {
        $msg=$_SESSION[$sessionName];
        if(!empty($sessionName) && !empty($className) && isset($_SESSION[$sessionName]))
        {
            echo "<div class='".$className. "'>".$msg ."</div>";
            unset($_SESSION[$sessionName]);
        }
    }

    public function redirect($path)
    {
        header("location:" .BASEURL. "/".$path);
    }
}