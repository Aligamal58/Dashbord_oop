<?php
include("header.php");
include "../class/post.php";
$x=new post();

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
    <h2 class="inner-tittle">Show Post</h2>
            <div class="tables">
                    
                    <table class="table">
                        <thead>
                            <tr>
                              <th>  id</th>
                              <th> title</th>
                             
                              <th>price</th>
                              <th>image</th>
                              <th>catagory</th>
                              <th>user</th>
                              <th>controller</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
   
       
    
   $all=$x->all_post();                                                                

   while($row=mysqli_fetch_assoc($all)){
    echo "<tr>";
    echo"<td>".$row['id']."</td>";
    echo"<td>".$row['title']."</td>";
   
    echo"<td>".$row['price']."</td>";
    echo"<td><img src=../upload/avatar/".$row['image']."></td>";
    echo"<td>".$row['cat_name']."</td>";
    echo"<td>".$row['user']."</td>";
    
    echo"<td><a href='?do=edit&id=" . $row['id']."'>Edit</a>
    <a href='?do=delet&id=" . $row['id']."'>DELET</a> ";
    
    echo"</tr>";
    }
    ?>
    
    </tbody>




			
    </tbody>
</table>
</div>

</div>
    
    
<?php        
        
    
     

}

elseif($do=='add'){
    ?>
     <div class="graph-visual tables-main">
     <div class="graph">
    <div class="forms-main">
					
                    <div class="graph-form">
<div class="form-body">
<h2 class="inner-tittle">Add post </h2>
    <form action="?do=insert"  method="POST" enctype="multipart/form-data"> <div class="form-group">

   

    <label for="exampleInputEmail1">title</label> 
    <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="title"> </div>

    <label for="exampleInputEmail1">price</label> 
    <input type="number" class="form-control" id="exampleInputEmail1" name="price" placeholder="price"> </div>

    <label for="exampleInputEmail1">image</label> 
    <input type="file" class="form-control" id="exampleInputEmail1" name="image" placeholder="image"> 

  


<div class="form-group">
			<label class="col-sm-2 control-label">catagory</label>
		<!--<div class="col-sm-8">-->
	<select name="catagory" class="form-control1">
   

	<option value="0">....</option>
    <?php
    $con=mysqli_connect("localhost","root","","oop");
$query="SELECT*FROM catagory";
$res=mysqli_query($con,$query);


while($cat=mysqli_fetch_assoc($res)){
echo " <option value='".$cat['id']."'>".$cat['name']."</option>";

}?>
    
        </select>
    	



<div class="form-group">
			<label class="col-sm-2 control-label">users</label>
		<!--<div class="col-sm-8">-->
	<select name="user" class="form-control1">
   

	<option value="0">....</option>
    <?php
$query="SELECT*FROM user";
$res=mysqli_query($con,$query);


while($use=mysqli_fetch_assoc($res)){
echo " <option value='".$use['id']."'>".$use['name']."</option>";

}?>
    
        </select>
    	</div>
        </div>
</div>
      
         <input  class="btn" type="submit" value="check" name="send" />
         </form> 
    </div>

</div>
       
<?php }

elseif($do=='insert'){
   
    if($_SERVER['REQUEST_METHOD']=='POST'){
        echo"<h1 class='text-center'>insert</h1>";
        if(isset($_POST['send'])){
            $data=$_POST;
            $x->insert($data);
      

}
    }
}


//////edit//////////////////
elseif($do=='edit'){
    
    $id= isset($_GET['id']) && is_numeric($_GET['id'])? intval($_GET['id']):0;
    
    
    $res=$x->edit($id);
    $row=mysqli_fetch_assoc($res);
    $count=mysqli_num_rows($res);
    if($count>0){
     
    ?>


<div class="graph-visual tables-main">
     <div class="graph">
    <div class="forms-main">
  
                    <div class="graph-form">
<div class="form-body">
<h2 class="inner-tittle">update post </h2>
    <form action="?do=update"  method="POST" enctype="multipart/form-data"> <div class="form-group">

    <input type="hidden" class="form-control" id="exampleInputEmail1" name="id" value=<?php echo$row['id']?> placeholder="name"> </div>


    <label for="exampleInputEmail1">Name</label> 
    <input type="text" class="form-control" id="exampleInputEmail1" name="title" value=<?php echo$row['title']?> placeholder="name"> </div>

    <label for="exampleInputEmail1">price</label> 
    <input type="number" class="form-control" id="exampleInputEmail1" name="price"  value=<?php echo$row['price']?> placeholder="price">

   
    <label for="exampleInputEmail1">image</label> 
    <input type="file" class="form-control" id="exampleInputEmail1" name="image" placeholder="image"> 
<div class="form-group">
			<label class="col-sm-2 control-label">catagory</label>
		<!--<div class="col-sm-8">-->
	<select name="catagory" class="form-control1">
   

	<option value="0">....</option>
    <?php
      $con=mysqli_connect("localhost","root","","oop");
$query="SELECT*FROM catagory";
$res=mysqli_query($con,$query);


while($cat=mysqli_fetch_assoc($res)){
    echo $cat['id'];
    echo"<option value='". $cat['id'] ."'";if($row['cat_id']==$cat['id']){echo'selected';}echo">".$cat['name']."</option>";


}?>
    
        </select>
    	



<div class="form-group">
			<label class="col-sm-2 control-label">users</label>
		<!--<div class="col-sm-8">-->
	<select name="user" class="form-control1">
   

	<option value="0">....</option>
    <?php
$query="SELECT*FROM user";
$res=mysqli_query($con,$query);


while($user=mysqli_fetch_assoc($res)){
    echo"<option value='" .$user['id']."'";if($row['user_id']==$user['id']){echo'selected';}echo">".$user['name']."</option>";


}?>
    
        </select>
    	</div>
        </div>
</div>
      
         <input  class="btn" type="submit" value="check" name="send" />
         </form> 
    </div>

</div>

<?php
}
}






    

        elseif($do=='update'){
    echo"<h1 class='text-centeh'>update post</h1>";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['send'])){
            $data=$_POST;
             $x->update($data);
                
            
        
        }
        
            
}
}

elseif($do=='delet'){
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



include("footer.php");
?>






















































