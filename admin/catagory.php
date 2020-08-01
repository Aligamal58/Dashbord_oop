<?php
include "header.php";
include "../class/catagory.php";
$x=new catagory();

$do='';
if(isset($_GET['do'])){
    $do=$_GET['do'];
}
else{
    $do='manage';
}
if($do=='manage'){
    ?>
   
   <div class="graph-visual tables-main">


    <div class="graph">
    <h2 class="inner-tittle">Show Catagory</h2>
            <div class="tables">
                    
                    <table class="table">
                        <thead>
                            <tr>
                              <th>  id</th>
                              <th> Name</th>
                              <th>controller</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php

    
    

    
    
$all=$x->all_catagory();                                                                

while($row=mysqli_fetch_assoc($all)){
       
        
        echo "<tr>";
echo"<td>".$row['id']."</td>";
echo"<td>".$row['name']."</td>";


echo"<td><a href='?do=edit&id=" . $row['id']."'>Edit </a>
<a href='?do=delete&id=" . $row['id']."'> DELET</a> ";

echo"</tr>";
    }?>

    </tbody>




			
    </tbody>
</table>
</div>

</div>
    
    
    
    <?php
    
}
elseif($do=='add'){
    ?>
    
        <div class="forms-main">
					
						<div class="graph-form">
	<div class="form-body">
    <h2 class="inner-tittle">Add Catagory </h2>
        <form action="?do=insert"  method="POST"> <div class="form-group">

       

        <label for="exampleInputEmail1">Name</label> 
        <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="name"> </div>

        
          
             <input  class="btn" type="submit" value="check" name="send" />
             </form> 
		</div>

</div>
    <?php
    }
    
    elseif($do=='insert'){
       
        if($_SERVER['REQUEST_METHOD']=='POST'){
            echo"<h1 class='text-center'>insert</h1>";
            if(isset($_POST['send'])){
                $data=$_POST;
                $x->insert($data);
          
    
    }
}
    }
    
    elseif($do=='edit'){
    
        $id= isset($_GET['id']) && is_numeric($_GET['id'])? intval($_GET['id']):0;
       
        $res=$x->edit($id);
        $row=mysqli_fetch_assoc($res);
        $count=mysqli_num_rows($res);
        if($count>0){?>


<div class="forms-main">
					
                    <div class="graph-form">
<div class="form-body">
<h2 class="inner-tittle">Edit Catagory </h2>
    <form action="?do=update"  method="POST"> <div class="form-group">

    <input  class="con"type="hidden"  name="id" value="<?php echo$row['id']?>"/><br>

    <label for="exampleInputEmail1">Name</label> 
    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo$row['name']?>" name="name" placeholder="name"> </div>

    
      
         <input  class="btn" type="submit" value="check" name="send" />
         </form> 
    </div>

</div>



           
    
       <?php  }else{echo"no exists id";}
        }
        
        elseif($do=='update'){
            echo"<h1 class='text-centeh'>updit</h1>";
            if($_SERVER['REQUEST_METHOD']=='POST'){
                if(isset($_POST['send'])){
                    $data=$_POST;
                     $x->update($data);
                        
                    
                
                }
        }
    }
        elseif($do=='delete'){
            $id= isset($_GET['id']) && is_numeric($_GET['id'])? intval($_GET['id']):0;
   
            $delete=$x->delete($id);
           ?>
        <div class="graph-visual tables-main">
           <?php
            if(isset($delete)){
                ?>
                <div class="alert alert-danger" role="alert">
                    <?php
            echo "Done Delet";
                ?>
              </div>
              <?php
            }
            
            else{ ?>
                <div class="alert alert-danger" role="alert">
                    <?php
            echo "No Delete";
                ?>
              </div>
              <?php }
        }

        include "footer.php";