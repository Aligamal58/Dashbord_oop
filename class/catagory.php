<?php

class catagory{

public function __construct(){

    $this->link=mysqli_connect("localhost","root","","oop");

}

public function all_catagory(){
    $query="SELECT*FROM catagory";
    return $res=mysqli_query($this->link,$query);
}

public function insert($data){
$name=$data['name'];             
$query="INSERT INTO catagory (name) VALUES('$name')";
$res=mysqli_query($this->link ,$query);

if(isset($res)){
?>
<div class="alert alert-danger" role="alert">
    <?php
echo'yes insert';
?>
</div>
<?php


}

else{
?>
<div class="alert alert-danger" role="alert">
    <?php
echo"please inter by form";
?>
</div>
<?php


}

}




public function edit($id){


$query="SELECT*FROM catagory WHERE(id='$id')";
return $res=mysqli_query($this->link,$query);

}

public function update(){

    $id=$_POST['id'];
    $name=$_POST['name'];

    
    
    $query="UPDATE  catagory SET name='$name' WHERE id='$id'";
    $res=mysqli_query($this->link,$query);
    
    if(isset($res)){
       
       ?>
       <div class="alert alert-danger" role="alert">
           <?php
  echo'yes update';
       ?>
     </div>
     <?php
    }
    
    else{
    
        ?>
        <div class="alert alert-danger" role="alert">
            <?php
   echo'No update';
        ?>
      </div>
      <?php
    
    }


}


public function delete($id){
   
    $query="SELECT*FROM catagory WHERE(id='$id')";
    $res=mysqli_query($this->link,$query);
   
    $count=mysqli_num_rows($res);
if($count>0){
    $query="DELETE FROM catagory WHERE(id='$id')";
  return $res=mysqli_query($this->link,$query);
}


}

}