<?php

class statistics{

public function __construct(){

    $this->link=mysqli_connect("localhost","root","","oop");

}
public function get_data($row){

    $query="SELECT*FROM $row";
   $res=mysqli_query($this->link,$query);
   $count=mysqli_num_rows($res);
   return  $count;

}

}