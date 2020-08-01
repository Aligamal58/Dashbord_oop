<?php

class user{

public function __construct(){

    $this->link=mysqli_connect("localhost","root","","oop");

}

public function check($date){
    $email=$date['email'];
    $password=$date['password'];
  
    $query="SELECT*FROM user where(email='$email' AND password='$password')";
  $res=mysqli_query($this->link,$query);
  $count=mysqli_num_rows($res);

if($count>0){
   
   $_SESSION['email']=$email;
   header("location:dashbord.php");
   exit();
}
  
else{
    ?>
    <div class="alert alert-danger" role="alert">
        <?php
echo "You are not Admin";
    ?>
  </div>
  <?php
}
}

/*public function save_user($date){
$name=$date['name'];
$email=$date['email'];
$password=$date['password'];
//print_r($date) ;
$query="INSERT INTO user(name,email,password) VALUE('$name','$email','$password')";
$res=mysqli_query($this->link,$query);
}
public function all_user(){
    $query="SELECT*FROM user";
    return $res=mysqli_query($this->link,$query);
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
 public function error($url=null,$scenod=3){

    if($url==null){
        $url='sign.php';
    }
    
    echo "will be you return after ".$scenod;
    header("refresh:$scenod url=$url");
    }*/
}