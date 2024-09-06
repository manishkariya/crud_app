<?php
//$mainurl="http://localhost/php/crud_app/";
//$baseurl="http://localhost/php/crud_app/assets/";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Page Title</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<!-- bootstrap cdn call here -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel='stylesheet' type='text/css' media='screen' href="<?php echo $baseurl;?>css/style.css">
<!-- bootstrap js CDN -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>

    <div class="container-fluid bg-secondary mx-auto  p-3 shadow">
        <div class="row">
         <div class="col-md-7 shadow fs-5">   
        <button type="submit" ><span class="bi bi-list text-black"></span></button><span class="bi bi-power text-white ms-3"><h> Task manger </h></span>
        </div>  
            <div class="col-md-5 shadow">
            <button type="submit" name="task" >Task</button>
            <button type="submit"  name="delete task" class="ms-5" >Delete Task</button>

</div>


</div>
</div>
</body>
</html>