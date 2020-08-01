<?php
//include "log.php";

include("header.php");
include "../class/member.php";
$x=new user();
//$con=mysqli_connect("localhost","root","","shop");
$do='';
if(isset($_GET['do'])){
    $do=$_GET['do'];
}
else{
    $do='manage';
}
if($do=='manage'){
    
  

      
   
/*$query="SELECT*FROM users";
    //$query="SELECT*FROM user ";
    $res=mysqli_query($con,$query);*/
   
    
    ?>


                                          <div class="graph-visual tables-main">

											<h2 class="inner-tittle">Basic Table</h2>
												<div class="graph">
														<div class="tables">
																
																<table class="table">
																	<thead>
																		<tr>
																		  <th>  id</th>
																		  <th> Name</th>
																		  <th>email</th>
                                                                          <th>created_at</th>
                                                                          <th>controller</th>
																		</tr>
																	</thead>
																	<tbody>
  <?php
  $all=$x->all_user();                                                                

while($row=mysqli_fetch_assoc($all)){
    //echo"<img src='upload/avatar/foot.jpg'>";
    //$img=$row['image'];
    //echo$img;
   // echo"<img src=upload/avatar/".$row['image'].">";
echo "<tr>";
echo"<td>".$row['id']."</td>";
echo"<td>".$row['name']."</td>";
echo"<td>".$row['email']."</td>";
echo"<td>".$row['created']."</td>";

echo"<td><a href='?do=edit&id=" . $row['id']."'>Edit </a>
<a href='?do=delete&id=" . $row['id']."'> DELET</a> ";
if($row['active']==0){
echo"<a href='?do=active&id=" . $row['id']."'>active</a>";}
echo"</tr>";
}
															
?>
</tbody>




			
                                                                    </tbody>
																</table>
															</div>
												
										        </div>
    
    

<?php }

elseif($do=='edit'){
    $id= isset($_GET['id']) && is_numeric($_GET['id'])? intval($_GET['id']):0;
   $res=$x->edit($id);
   $row=mysqli_fetch_assoc($res);

   $count=mysqli_num_rows($res);
    if($count>0){
    ?>
  

	<div class="forms-main">
						<h2 class="inner-tittle">edit </h2>
						<div class="graph-form">
	<div class="form-body">
        <form action="?do=update"  method="POST"> <div class="form-group">

        <input type="hidden" class="form-control" name="id" id="exampleInputEmail1" value="<?php echo$row['id']?>"> </div>

        <label for="exampleInputEmail1">Name</label> 
        <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="name"value="<?php echo$row['name']?>"> </div>

             <label for="exampleInputEmail1">Email address</label> 
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email"value="<?php echo$row['email']?>">  

       
             <label for="exampleInputEmail1">Password</label>
 <input type="password" class="form-control" id="exampleInputEmail1" name="password" placeholder="Password"value="<?php echo$row['password']?>"> </div> 

    
          
             <input  class="btn" type="submit" value="check" name="send" />
             </form> 
		</div>

</div>

<?php }

else{echo"no exists id";}
}
elseif($do=='update'){
    echo"<h1 class='text-centeh'>updit</h1>";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['send'])){
    $data=$_POST;
     $x->update($data);
        
    

}

    }
?>

<button type="button" class="btn btn-danger"><a href="member.php">Back</a></button>
<?php
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


elseif($do=='active'){
    $id= isset($_GET['id']) && is_numeric($_GET['id'])? intval($_GET['id']):0;
    $x->active($id);
}


include("footer.php");

?>