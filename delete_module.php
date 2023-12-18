<?php
include "db_conn.php";
$id = $_GET["mod_id"];
$sql = "DELETE FROM `module` WHERE mod_id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: index_module.php?msg=Data deleted successfully");
  
} else {
  echo "Failed: " . mysqli_error($conn);
}
