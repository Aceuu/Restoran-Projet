<?php require "../config/config.php"; ?>
<?php require "../libs/App.php"; ?>
<?php require "layouts/header.php"; ?>
<?php 

$app = new App;
$app->validateSessionAdminInside();

$query = "SELECT COUNT(*) AS count_foods FROM foods";
$count_foods = $app->selectOne($query);

$query = "SELECT COUNT(*) AS count_orders FROM orders";
$count_orders = $app->selectOne($query);

$query = "SELECT COUNT(*) AS count_bookings FROM bookings";
$count_bookings = $app->selectOne($query);

$query = "SELECT COUNT(*) AS count_admins FROM admins";
$count_admins = $app->selectOne($query);

?>

      <div class="row">
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Articles</h5>
              <!-- <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6> -->
              <p class="card-text">Nombre d'articles: <?php echo $count_foods->count_foods; ?></p>
             
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Commandes</h5>
              
              <p class="card-text">Nombre de commandes: <?php echo $count_orders->count_orders; ?></p>
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Réservations</h5>
              
              <p class="card-text">Nombre de réservations: <?php echo $count_bookings->count_bookings; ?></p>
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Administrateur</h5>
              
              <p class="card-text">Nombre de administrateurs: <?php echo $count_admins->count_admins; ?></p>
              
            </div>
          </div>
        </div>
      </div>

<?php require "layouts/footer.php"; ?>