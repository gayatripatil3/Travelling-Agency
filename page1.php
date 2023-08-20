<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Get and Post</title>
  </head>
  <body>

<style>
  .contain1{
    height:255vh;
  }
  </style>


  <div class="contain1">
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
<marquee behavior="" direction="" class="mar"><b>WELCOME TO TRAVELLING WEBSITE...ENJOY AND SHARE THE BEST MOMENTS OF YOUR WITH US!!! </b></marquee>
<div class="group1">
<div class="card" style="width: 25rem;">
  <img src="london.jpg" class="card-img-top" alt="..." style="height:300px">
  <div class="card-body">
    <h5 class="card-title">London</h5>
    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
    <a href="https://en.wikipedia.org/wiki/London" class="btn btn-primary">More Info</a>
  </div>
</div>
<div class="card" style="width: 25rem;">
  <img src="switzerland.jfif" class="card-img-top" alt="..." style="height:300px">
  <div class="card-body">
    <h5 class="card-title">Switzerland</h5>
    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
    <a href="https://en.wikipedia.org/wiki/Switzerland" class="btn btn-primary">More Info</a>
  </div>
</div>
<div class="card" style="width: 25rem;">
  <img src="ladakh.jfif" class="card-img-top" alt="..." style="height:300px">
  <div class="card-body">
    <h5 class="card-title">Ladakh</h5>
    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
    <a href="https://en.wikipedia.org/wiki/Ladakh" class="btn btn-primary">More Info</a>
  </div>
</div>
<div class="card" style="width: 25rem;">
  <img src="jammu_kashmir.jfif" class="card-img-top" alt="..." style="height:300px">
  <div class="card-body">
    <h5 class="card-title">Jammu-Kashmir</h5>
    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
    <a href="https://en.wikipedia.org/wiki/Jammu_and_Kashmir_(state)" class="btn btn-primary">More Info</a>
  </div>
  </div>
 
</div>
<div class="group2">
<div class="card" style="width: 25rem;">
  <img src="paris.jfif" class="card-img-top" alt="..." style="height:300px">
  <div class="card-body">
    <h5 class="card-title">Paris</h5>
    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
    <a href="https://en.wikipedia.org/wiki/Paris" class="btn btn-primary">More Info</a>
  </div>
</div>
<div class="card" style="width: 25rem;">
  <img src="japan.jpg" class="card-img-top" alt="..." style="height:300px">
  <div class="card-body">
    <h5 class="card-title">Japan</h5>
    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
    <a href="https://en.wikipedia.org/wiki/Japan" class="btn btn-primary">More Info</a>
  </div>
</div>
<div class="card" style="width: 25rem;">
  <img src="thailand.jfif" class="card-img-top" alt="..." style="height:300px">
  <div class="card-body">
    <h5 class="card-title">Thailand</h5>
    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
    <a href="https://en.wikipedia.org/wiki/Thailand" class="btn btn-primary">More Info</a>
  </div>
</div>
<div class="card" style="width: 25rem;">
  <img src="kedarnath.jfif" class="card-img-top" alt="..." style="height:300px">
  <div class="card-body">
    <h5 class="card-title">Kedarnath</h5>
    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
    <a href="https://en.wikipedia.org/wiki/Kedarnath" class="btn btn-primary">More Info</a>
  </div>
</div>
</div>
<div class="info"><p><b>Let us Know if you are interested to visit any place</b></p></div>

<div class="container">
    <form action="/tutorial/page1.php" method="post">
    <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="wishlist" class="form-label">Wish List Place </label>
    <input type="text" class="form-control" id="wishlist" name="wishlist">
  </div>
  <div class="mb-3">
    <label for="feedback" class="form-label">Feedback</label>
    <input type="text" class="form-control" id="feedback" name="feedback">
  </div>
  <div class="mb-3">
    <label for="contact" class="form-label">Contact No.</label>
    <input type="text" class="form-control" id="contact" name="contact">
  </div><span id="contact_error" style="color:red; position:absolute; top:1700"></span>
  <button type="submit" class="btn btn-primary" onsubmit="validation()">Submit</button>
</form>
    </div>

<div class="footer" style="position:absolute; top:2100px; left:900px;">
 <p id="line1" style="color:black; font-size:40px;"><b> Contact Us At </b></p></div>
 <div class="footer1" style="position:absolute; top:2175px; left:550px;">
 <p id="line2" style="color:black; font-size:25px;">Mail : worldoftravel@gmail.com | Gokul Colony, Shanivar Peth, Pune | Phone no. 0233-934567/934568 </p></div>
 



    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<?php
// Connect to DB
// $servername = "localhost";
// $username="root";
// $password="";
// Create connection obj and database
// $conn=mysqli_connect($servername,$username,$password);
// $sql="CREATE DATABASE db_name_travel1";
// $result = mysqli_query($conn, $sql);
// echo "Result:".var_dump($result);
// Die if connction is not successful.
// if(!$conn){
//   die("Sorry we failed to connect.".mysqli_connect_error());
// }
// else{
//   echo "Connection Successful";
// }

//Creating Table
// $servername = "localhost";
// $username="root";
// $password="";
// $database="travel_user_info";
// $conn=mysqli_connect($servername,$username,$password,$database);
// $sql= "CREATE TABLE `trial1`(`email` varchar(40) NOT NULL,`password` varchar(40) NOT NULL)";
// $result = mysqli_query($conn, $sql);
// if($result){
//   echo" Table Created";
// }
// else{
//   echo "Table already exists";
// }

// Inserting Records
$servername = "localhost";
  $username="root";
  $password="";
  $database="travel_user_info";
  $conn=mysqli_connect($servername,$username,$password,$database);
if ($_SERVER['REQUEST_METHOD']=='POST'){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $wishlist=$_POST['wishlist'];
  $feedback=$_POST['feedback'];
  $contact=$_POST['contact'];
  $sql="INSERT INTO `user_info`(`Name`,`Email`,`Wishlist_Place`,`Feedback`,`Contact Number`) VALUES ('$name','$email','$wishlist','$feedback','$contact')";
  $result = mysqli_query($conn, $sql);
  if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong><b>Info Submitted.</b> Your email: '.$email.' & password '.$password.' is submitted</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
  }
  else{
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong><b>Info not Submitted.</b> Your email: '.$email.' & password '.$password.' is submitted</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
  }
  
}

//Alert Message on Form Submission
// if ($_SERVER['REQUEST_METHOD']=='POST'){
//   $email=$_POST['email'];
//   $password=$_POST['pass'];
  // echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  // <strong><b>Info Submitted.</b> Your email: '.$email.' & password '.$password.' is submitted</strong>
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
// }
// [''];
?>

<script>
            function validation()  
            {  
                var id=document.f1.name.value;  
                var ps=document.f1.email.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
          
</script>
</body>
</html>