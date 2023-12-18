<?php
include "db_conn.php";
$id = $_GET["post_id"];
$sql = "DELETE FROM `posts` WHERE post_id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: index_posts.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
