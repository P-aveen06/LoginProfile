<?php
    require "function.php";
    if(!is_logged_in())
    {
      redirect('login.html');
    }
    $id=$_GET['id'] ?? $_SESSION['PROFILE']['id'];
    $row= db_query("select * from users where id =:id limit 1",['id'=>$id]);
    if ($row) {
      $row = $row[0];
  }
  ?>