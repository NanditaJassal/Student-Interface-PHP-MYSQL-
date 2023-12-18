<?php
include "db_conn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
body{
  background-color: #ffb3b3;
  opacity 0.6
}

h4{
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
.center {
  margin: auto;
  width: 20%;
  padding: 10px;
}
}
</style>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<title>STUDENT INTERFACE</title>
</head>

<body >
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" >
    <b>Hello!</b></nav>
  <pre>
  <h4><b>Choose the option below to get started! </b></h4>
    <div class="center">

    <a href="index_posts.php" class="btn btn-dark mb-3">Manage Posts</a>

    <a href="form.php" class="btn btn-dark mb-3">Contact Admin</a>


     <a href="logout.php" class="btn btn-dark mb-3">Logout</a>
   
  </div>
</pre>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>