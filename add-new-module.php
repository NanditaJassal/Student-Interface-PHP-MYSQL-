<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $mod_id = $_POST['mod_id'];
   $name = $_POST['name'];
   
   $sql = "INSERT INTO `module`(`mod_id`, `name`) VALUES (NULL,'$name')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index_module.php?msg=New record created successfully");
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
         <h3><b>Add New Module</b></h3>
         <br>
         <p class="text-muted">Complete the form below to add a new module</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Name:</label>
                  <input type="text" class="form-control" name="name" placeholder="">
                  <br>
               </div>

         

            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index_module.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>