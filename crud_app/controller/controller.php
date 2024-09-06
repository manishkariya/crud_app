<?php
require_once("model/model.php");
class controller extends model 
{
    public function __construct()
    {

            parent:: __construct();
            if(isset($_POST["create"]))

            {
                echo "hello";
                $task=$_POST["taskname"];
                $details=$_POST["details"];
                $data=array("task"=>$task,"details"=>$details);
                $store=$this->insertalldata('crud',$data);
                if($store)
                {
                    echo "<script>
                      alert('task add successfully')
                      window.location='./';
                      </script>";
                           
                }
            }

            $show=$this->selectalldata('crud');
    
    if(isset($_SERVER["PATH_INFO"]))
    {
        switch($_SERVER["PATH_INFO"])
        {
            case '/':
                require_once('index.php');
                require_once('navbar.php');
                require_once('main.php');
                break;

                default:
                require_once('index.php');
                require_once('header.php');
                require_once('404.php');
                break;
        }
    }
}
}
$obj=new controller;
?>