<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $user_name = $_POST['user_name'];
   $name = $_POST['name'];
   $password = $_POST['password'];
   $email = $_POST['email'];
   $role = $_POST['role'];

   $sql = "INSERT INTO `users`(`id`, `user_name`, `name`, `password`, `email`,`role`) VALUES (NULL,'$user_name','$name','$password','$email','$role')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index_user.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
body{
  background-color: #ffb3b3;
  opacity 0.6
}

h3{
  font font-family: serif;
  text-align: center;

}

nav {
  font-family: serif;}

  }
  div
  {column-count: 3;
    column-gap: 10px;

}

}
</style>
   <title></title>
</head>

<body>

   <div class="container">
      <div class="text-center mb-4">
         <br><br><br><br>
         <h3><b>Add New User<b></h3>
            <br>
         <p class="text-muted">Complete the form below to add a new user</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">User Name:</label>
                  <input type="text" class="form-control" name="user_name" placeholder="">
               </div>

               <div class="col">
                  <label class="form-label">Name:</label>
                  <input type="text" class="form-control" name="name" placeholder="">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Password</label>
               <input type="password" class="form-control" name="password" placeholder="password">
            </div>
           
            <div class="mb-3">
               <label class="form-label">Email</label>
               <input type="email" class="form-control" name="email" placeholder="name@example.com">
            </div>
            

            <div class="form-group mb-3">
               <label>Role:</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="role" id="admin" value="admin">
               <label for="admin" class="form-input-label">Admin</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="role" id="user" value="user">
               <label for="user" class="form-input-label">User</label>
            </div>

            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index_user.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>