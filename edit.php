<?php
  include "connection.php";
  $id="";
  $nume="";
  $email="";
  $telefon="";
  $membership="";

  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location:php-leg/index.php");
      exit;
    }
    $id = $_GET['id'];
    $sql = "select * from client where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location: php-leg/index.php");
      exit;
    }
    $nume=$row["nume"];
    $email=$row["email"];
    $telefon=$row["telefon"];
    $membership=$row["membership"];

  }
  else{
    $id = $_POST["id"];
    $nume=$_POST["nume"];
    $email=$_POST["email"];
    $telefon=$_POST["telefon"];
    $membership=$_POST["membership"];

    $sql = "update client set nume='$nume', email='$email', telefon='$telefon', membership='$membership' where id='$id'";
    $result = $conn->query($sql);
    
  }
  
?>
<!DOCTYPE html>
<html>
<head>
 <title>Get your membership now!</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" class="fw-bold">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Get your membership now!</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create.php">Add New</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-info">
 <h1 class="text-white text-center">  Update Member </h1>
 </div><br>

 <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>

 <label> NUME: </label>
 <input type="text" name="nume" value="<?php echo $nume; ?>" class="form-control"> <br>

 <label> EMAIL: </label>
 <input type="text" name="email" value="<?php echo $email; ?>" class="form-control"> <br>

 <label> TELEFON: </label>
 <input type="text" name="telefon" value="<?php echo $telefon; ?>" class="form-control"> <br>

 <label> MEMBERSHIP: </label>
 <input type="text" name="membership" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button> <br>
 
 <!-- <a  role="button" form action="/button-type" class="btn btn-info" type="submit" name="submit" href="index.php"> Submit </a><br> -->
 <a class="btn btn-secondary" type="submit" name="cancel" href="index.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>