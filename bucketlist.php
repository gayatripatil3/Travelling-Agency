<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="font-size:40px;">Your Travel Guide</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="display:flex">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="page1.php"><b>HOME</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="bucketlist.php"><b>MY BUCKET-LIST</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about.html"><b>ABOUT</b></a>
        </li>
    </div>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-white" style="height:250px;">
</nav>
<form action="/tutorial/bucketlist.php" method="post">
    <div class="mb-3">
    <label for="name" class="form-label" style="position:absolute;top:140px; left:300px; color:purple;font-size:25px"><b>Name of the Place</b></label>
    <input type="text" class="form-control" id="name" name="name" style="position:absolute;top:190px; left:300px; width:500px;">
  </div>
  <button type="submit" class="btn btn-primary" style="position:absolute;top:240px; left:300px" >Submit</button>
</form>
<?php

$servername = "localhost";
  $username="root";
  $password="";
  $database="travel_user_info";
  $conn=mysqli_connect($servername,$username,$password,$database);
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert" ">
  <strong><b></b><br>';
  $sql="SELECT `Name of Place` FROM `bucket_list`";
  $result=mysqli_query($conn,$sql);
  $num=mysqli_num_rows($result);
  while($num>0){
    $name=mysqli_fetch_assoc($result);
    echo var_dump($name),'<style="position:absolute;top:150px;">';
    echo "<br><br>";
    $num=$num-1;
  }
  
if ($_SERVER['REQUEST_METHOD']=='POST'){
  $name=$_POST['name'];
  $sql="INSERT INTO `bucket_list`(`Name of Place`) VALUES ('$name')";
  $result = mysqli_query($conn, $sql);

  if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert" ">
  <strong><b>Info Submitted.</b><br>';
  }
  else{
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert ">
  <strong><b>Info not Submitted.</b><br> ';
  }
  
}

?>


</body>
</html>