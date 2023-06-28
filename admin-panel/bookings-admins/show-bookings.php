<?php require "../../config/config.php"; ?>
<?php require "../../libs/App.php"; ?>
<?php require "../layouts/header.php"; ?>
<?php 


$query = "SELECT * FROM bookings";
$app = new App;
$app->validateSessionAdminInside();

$bookings = $app->selectAll($query);


?>

          <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Bookings</h5>
            
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Réservation date</th>
                    <th scope="col">Personnes</th>
                    <th scope="col">Demande</th>
                    <th scope="col">Créé à</th>
                  <th scope="col">Statut</th>
                  <th scope="col">Changer statut</th>

                    <th scope="col">Supprimer</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($bookings as $booking) : ?>
                  <tr>

                    <td><?php echo $booking->name; ?></td>
                    <td><?php echo $booking->email; ?></td>
                    <td><?php echo $booking->date_booking; ?></td>
                    <td><?php echo $booking->num_people; ?></td>
                    <td><?php echo $booking->special_request; ?></td>
                    <td><?php echo $booking->created_at; ?></td>
                    <td><?php echo $booking->status; ?></td>
                    <td><a href="status.php?id=<?php echo $booking->id; ?>" class="btn btn-primary text-center ">Statut</a></td>
                     <td><a href="delete-bookings.php?id=<?php echo $booking->id; ?>" class="btn btn-danger  text-center ">Supprimer</a></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>

<?php require "../layouts/footer.php"; ?>
