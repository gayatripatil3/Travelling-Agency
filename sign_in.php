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

<style>
    .final_cont{
        background-image: linear-gradient(305deg, aqua, white,rgb(211, 43, 226));
        width:100%;
        height:86vh;
        
    }
    .large_container{
       
        width:100%;
        height:50vh;
        display: flex;
        justify-content: center;
        
     
    }
    .cont1{
        display: flex;
        justify-content: center;
        border: 1px solid black;
        width:500px;
        height:500px;
        margin-top: 20px;
        background-color: greenyellow;
        border-radius: 20px;

    }
    h1{
        display: flex;
        justify-content: center;
        margin-top:35px;
        color: rgb(214, 142, 36);
        text-shadow:2px 2px black;
    }
    
    label{
        margin-top: 70px;
    }
    .btn.btn-primary{
            background-color: green;
            color: white;
            width:120px;
            height:40px;
            font-size: 20px;
            justify-content: center;
            margin-top: 40px;
            margin-left: 40px;
            
    }
    .fir{
        position: relative;
    /* top:-110px; */
    left:10px;
width:2048px;
background-color: purple;
height:123px;
margin-left: -10px;

    }
.first1{
    position: relative;
    top:10px;
    left:10px;
    padding-top: 5px;
width:300px;
background-color: purple;
height:100px;
border: 1px solid;
animation-name: anime;
animation-duration: 10s;
animation-iteration-count: infinite;

}

@keyframes anime {
    from{ 
            left:0px; 
    }
    to{
    left:1720px;
    }
}

</style>
<div class="final_cont">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="font-size:40px;">Your Travel Guide</a>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="display:flex">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="" onclick="alert1()"><b>HOME</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php"><b>LOGIN</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="sign_in.php" ><b>SIGN-IN</b></a>
        </li>
    </div>
  </div>
</nav>
<h1>SIGN PAGE</h1>
<div class="large_container">
    
<div class="cont1">
    <form action="/tutorial/sign_in.php" method="post">
    <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">SIGN-IN</button>
  </form>
  </div>
  </div>
  </div>
  <div class="fir">
  <div class="first1">
    <img src="bus_final.PNG" alt="bus" style="width:300px; height:100px" >
  </div>
  </div>
<?php
$servername = "localhost";
$username="root";
$password="";
$database="travel_user_info";
$conn=mysqli_connect($servername,$username,$password,$database);

if($_SERVER['REQUEST_METHOD']=='POST'){
  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
  
        //to prevent from mysqli injection 
        $localhost="localhost"; 
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
       
        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
          
        if($count == 1){  
        echo '<script>alert("You already have account, just login to account.")</script>';
            
        }  
        else{  
            $username = $_POST['username'];  
            $password = $_POST['password']; 
            $database="travel_user_info";
            $conn=mysqli_connect($servername,$username,$password,$database);
            $sql="INSERT INTO `login`(`username`,`password`) VALUES ('$username','$password')";
            $result = mysqli_query($conn, $sql);
            if($result){
              echo '<div class="alert alert-success alert-dismissible fade show" role="alert" ">
            <strong><b>Info Submitted.</strong></b><br><script>alert("Account created")</script> </div>';
            }
            else{
              echo '<div class="alert alert-success alert-dismissible fade show" role="alert ">
            <strong><b>Info not Submitted.</b><br>';
            }
            
        
        }     
    }
?>
    <script>
        function alert1(){
            alert("First Login to the website");
        }
    </script>
</body>
</html>