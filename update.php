<?php 
    include 'connect.php';
    $id=$_GET['updateid'];

    $sql="select * from crud where id=$id";
    $result = mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $name=$row['name'];
    $email=$row['email'];
    $mobile= $row['mobile'];
    $password=$row['password'];


    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $password=$_POST['password'];

        $sql="update crud set  id =$id, name='$name', email='$email', mobile='$mobile', password= '$password' where id=$id" ;

        $result = mysqli_query($conn,$sql);
        if($result){

            header('location:display.php');
        } else{
            die(mysqli_error($conn));
        }

    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <!-- <div class="container"></div>

    <form method="POST" action="">
    <div class="form-group" >
        <label >EName</label>
        <input type="text" class="form-group"
         placeholder="Enter Your Name" name="name">
         </div>
    </form> -->
    <div class="container my-5">
    <form method="POST" >
  <div class="mb-3">
    <label >Name</label>
    <input type="text" class="form-control" name="name" autocomplete="off" placeholder="Enter Name" value=<?php echo $name; ?> >
    </div>
  <div class="mb-3">
    <label >Email</label>
    <input type="email" class="form-control" name="email" autocomplete="off" placeholder="Enter Email" value=<?php echo $email; ?> >
    </div>
  <div class="mb-3">
    <label >Mobile</label>
    <input type="text" class="form-control"  name="mobile" autocomplete="off" placeholder="Enter Mobile number" value=<?php echo $mobile; ?>  >
    </div>
<div>
  <div class="mb-3">
    <label >Password</label>
    <input type="password" class="form-control" name="password" autocomplete="off" placeholder="Enter Password" value=<?php echo $password; ?>  >
</div>

  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
</div>
    
  </body>
</html>