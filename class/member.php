<?php

class user{

public function __construct(){

    $this->link=mysqli_connect("localhost","root","","oop");

}

public function all_user(){
    $query="SELECT*FROM user";
    return $res=mysqli_query($this->link,$query);
}

public function edit($id){


$query="SELECT*FROM user WHERE(id='$id')";
return $res=mysqli_query($this->link,$query);

}

public function update($data){
    $id=$data['id'];
    $name=$data['name'];
    $email=$data['email'];
    $pass=$data['password'];
    $formeror=array();
    if(empty($name)){
$formeror[]='please inter the name';
    }
    if(strlen($name)<4){

        $formeror[]='please atleast name 5';
    }
    if(empty($email)){
        $formeror[]='please inter  email';
    }

    if(empty($pass)){
        $formeror[]='please inter the password';
    }
    foreach($formeror as $error){
        ?>
        <div class="alert alert-danger" role="alert">
            <?php
    echo $error;
        ?>
      </div>
      <?php
    }
    if(empty($formeror)){
        //$check= item("user",$name);
       // if($check==1){echo"please inter other any name";}
        //else{
    $query="UPDATE user SET name='$name',email='$email',password='$pass' WHERE id='$id'";
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
}
}
public function delete($id){
   
    $query="SELECT*FROM user WHERE(id='$id')";
    $res=mysqli_query($this->link,$query);
   
    $count=mysqli_num_rows($res);
if($count>0){
    $query="DELETE FROM user WHERE(id='$id')";
  return $res=mysqli_query($this->link,$query);
}


}


public function active($id){

    $query="SELECT*FROM user WHERE(id='$id')";
    $res=mysqli_query($this->link,$query);
   
    $count=mysqli_num_rows($res);
if($count>0){
    $query="UPDATE user SET active=1";
    $res=mysqli_query($this->link,$query);}
    ?>
  <div class="graph-visual tables-main">
    <?php
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




 


}