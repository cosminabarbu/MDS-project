<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Get your membership now!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Get your membership now!</a>
        <a class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a type="button" class="btn btn-primary nav-link active"  href="create.php">Add new</a>
</li>
</ul>
</div>

</div>
</nav>
<div class="container my-4">
<table class="table">
  <thead>
    <tr>
      <th >ID</th>
      <th >Nume</th>
      <th >Telefon</th>
      <th >Email</th>
      <th> Inscriere </th>
      <th> Tip de membership </th>
      <th> Editeaza </th>
    </tr>
  </thead>
  <tbody>
    
    <?php

    include "connection.php";
    $sql = "select * from client";
    $result = $conn->query($sql);
if(!$result){
    die("");
}
while( $row = $result->fetch_assoc()){
    echo "

    <tr>
    <th >$row[id]</th>
    <th >$row[nume]</th>
    <th >$row[telefon]</th>
    <th >$row[email]</th>
    <th> $row[inscriere] </th>
    <th >$row[membership]</th>
    <td>
    <a class='btn btn-success' href='edit.php?id=$row[id]'>Edit</a>
    <a class='btn btn-danger' href='delete.php?id=$row[id]'>Delete</a>
    </td>
    </tr> ";
}
?>
  </tbody>
</table>
</div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>