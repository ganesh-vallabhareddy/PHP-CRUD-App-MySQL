<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
<div class="container my-5">
    <button class="btn btn-primary my-5" ><a class="text-light" style="text-decoration:none" href="user.php">Add User</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">S. No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
  include 'connect.php';
 $sql="select * from crud ";
 $result=mysqli_query($conn,$sql);
if ($result){

    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile= $row['mobile'];
        $password=$row['password'];

        echo '
        <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$password.'</td>
      <td>
<button class="btn btn-primary"><a href="update.php?updateid='.$id.'" style="text-decoration:none" class="text-light">Update</a></button>


<button class="btn btn-danger"> <a href="delete.php?deleteid='.$id.' " style="text-decoration:none" class="text-light">Delete</a></button>
</td>
    </tr>
        ';
    }
}


  ?>


  </tbody>
</table>
</div>
</body>
</html>