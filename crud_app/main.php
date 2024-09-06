<form method="post">
<div class="w-50 mx-auto mt-5 p-5 ">
    <h2>Add New Tasks Here</h2>
<span class="bi bi-pencil"></span><input type="text" name="taskname" placeholder="new task"  style="border:none" class="ms-2">
<hr class="border border-dark border-2 w-50 ms-4 mt-1 mx-auto" />
<span class="bi bi-pencil"></span><input type="text" name="details" placeholder="details"  style="border:none" class="ms-2">
<hr class="border border-dark border-2 w-50 ms-4 mt-1 mx-auto" />
<button type="submit" name="create" value="add" >Create</button>

 
</div>
</form>

<h2 class="text-center"> Task List</h2>
<div class="w-50 mx-auto mt-5 p-1  shadow">
<table>
    <?php
    foreach($show as $row)
    {
        ?>
    
<tr> 
        <td><span class="bi bi-archive-fill ms-1 p-2"> </span>
        <?php echo $row["task"];?>
        <?php echo $row["details"];?>    
  </td>
    </tr>
    <?php
    }
    ?>
    </table>
</div>
