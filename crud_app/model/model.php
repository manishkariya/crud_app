<?php
class model 
{

    public $conn="";
    public function __construct()
    {   
        try
        {
              $this->conn=new mysqli("localhost","root","","crud_operation");
        }
        catch(Exeption $e)
        {
                 die(mysqli($this->conn,$e));
        }


    }

//inser data 
   public function insertalldata($table,$data)
   {
    $key=array_keys($data);
    $key1=implode(",",$key);

    $value=array_values($data);
    $value1=implode("','",$value);

    $insert="insert into $table($key1) values('$value1')";
    $query=mysqli_query($this->conn,$insert);
    return $query;

   }

   // display
   public function selectalldata($table)
   {
              $select="select * from $table";
              $query=mysqli_query($this->conn,$select);
              while($fetch=mysqli_fetch_array($query))
              {
                $arr[]=$fetch;
              }
              return $arr;
   }

}
?>