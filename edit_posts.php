<?php
include "db_conn.php";
$id = $_GET["post_id"];

if (isset($_POST["submit"])) {
  $Title = $_POST['Title'];
  $info = $_POST['info'];
  $mod_id = $_POST['mod_id'];

  $sql = "UPDATE `posts` SET `Title`='$Title',`info`='$info',`mod_id`='$mod_id' WHERE post_id = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: index_posts.php?msg=Data updated successfully");
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

  <title>STUDENT INTERFACE</title>
  <style>
body{
  background-color: #ffb3b3;
  opacity 0.6
}
h3 {
  font-family: serif;
text-align: center;}

  }

}
</style>
</head>

<body>
  

  <div class="container">
    <div class="text-center mb-4">
      <pre>
      <h3>Edit Posts</h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>

    <?php
    $sql = "SELECT * FROM `posts` WHERE post_id = $id LIMIT 1";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          <div class="col">
            

          <div class="col">
            <label class="form-label">Title:</label>
            <input type="text" class="form-control" name="Title" value="<?php echo $row['Title'] ?>">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Question:</label>
          <input type="text" class="form-control" name="info" value="<?php echo $row['info'] ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Module ID:</label>
          <input type="number" class="form-control" name="mod_id" value="<?php echo $row['mod_id'] ?>">
        </div>

        

        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="index_posts.php" class="btn btn-danger">Cancel</a>
        </pre>
        </div>
        <
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>