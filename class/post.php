<?php

class post{

public function __construct(){

    $this->link=mysqli_connect("localhost","root","","oop");

}


public function all_post(){
    $query="SELECT post.*,catagory.name 
    AS cat_name,user.name AS user FROM post
     INNER JOIN catagory ON catagory.id=post.cat_id 
     INNER JOIN user ON user.id=post.user_id 
     ";
    return $res=mysqli_query($this->link,$query);
}

public function edit($id){


$query="SELECT*FROM post WHERE(id='$id')";
return $res=mysqli_query($this->link,$query);

}

public function insert($data){

    $image_name=$_FILES['image']['name'];
    $image_size=$_FILES['image']['size'];
    $image_tmp=$_FILES['image']['tmp_name'];
    $image_type=$_FILES['image']['type'];
$image_allow_extnation=array("jpg","png","jpeg");
//$image_extnation=end(explode(".",$image_name));


    $title=$data['title'];
   
    $price=$data['price'];
    $cat=$data['catagory'];
    $user=$data['user'];
    

   
    $formeror=array();
    if(empty($image_name)/*&& !in_array($image_extnation,$image_allow_extnation)*/){
        $formeror[]='please inter image';
    }
    if(empty($name)){
$fohmeror[]='please inter name';
    }
    
    
    if(empty($price)){
        $formeror[]='please intre price';
    }
    
    if(empty($cat)){
        $formeror[]='please intre class';}

   
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
        $image=rand(0,10000000).'_'.$image_name;
        move_uploaded_file($image_tmp,"../upload\avatar\\".$image);
        $query="INSERT INTO post(title,price,image,cat_id,user_id)VALUE('$title','$price','$image','$cat','$user')";
        $res=mysqli_query($this->link,$query);}
    
    if(isset($res)){
        ?>
        <div class="alert alert-danger" role="alert">
            <?php
    echo 'yes insert proudct';
        ?>
      </div>
      <?php
       
    
    }
    
}

public function update($data){


    $image_name=$_FILES['image']['name'];
    $image_size=$_FILES['image']['size'];
    $image_tmp=$_FILES['image']['tmp_name'];
    $image_type=$_FILES['image']['type'];
$image_allow_extnation=array("jpg","png","jpeg");
$image_extnation=end(explode(".",$image_name));






    $id=$data['id'];
    $title=$data['titlle'];
   
    $price=$data['price'];
    $cat=$data['catagory'];
    $post=$data['post'];
    $formeror=array();
    if(!empty($image_name)&& !in_array($image_extnation,$image_allow_extnation)){
        $formeror[]='please inter onter image';
    }
    if(empty($name)){
$fohmeror[]='please inter name';
    }
    
    
    if(empty($price)){
        $formeror[]='please intre price';
    }
    
    if(empty($cat)){
        $formeror[]='please intre class';
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
        $image=rand(0,10000000).'_'.$image_name;
        move_uploaded_file($image_tmp,"../upload\avatar\\".$image);
        $query="UPDATE post SET title='$title',price='$price',image='$image',cat_id='$cat',post_id='$post'
        WHERE id='$id'";
    $res=mysqli_query($this->link,$query);
    if(isset($res)){
        ?>
        <div class="alert alert-danger" role="alert">
            <?php
    echo "yes update";
        ?>
      </div>
      <?php
    }
}


}



public function delete($id){
   
    $query="SELECT*FROM post WHERE(id='$id')";
    $res=mysqli_query($this->link,$query);
   
    $count=mysqli_num_rows($res);
if($count>0){
    $query="DELETE FROM post WHERE(id='$id')";
  return $res=mysqli_query($this->link,$query);
}


}

}