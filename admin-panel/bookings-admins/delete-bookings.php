<?php require "../../config/config.php"; ?>
<?php require "../../libs/App.php"; ?>
<?php require "../layouts/header.php"; ?>

<?php 


if(!isset($_SERVER['HTTP_REFERER'])){
  echo "<script>window.location.href='".ADMINURL."'</script>";
  exit;
}

if(isset($_GET['id'])) {
  $id = $_GET['id'];

  $query = "SELECT * FROM bookings WHERE id='$id'";

  $one = $app->selectOne($query);

  unlink("foods-images/" . $one->image);

  $query = "DELETE FROM bookings WHERE id='$id'";
  $app = new App;
  $path = "show-bookings.php";
  $app->delete($query, $path);

}

?>