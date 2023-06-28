<?php require "../config/config.php"; ?>
<?php require "../libs/App.php"; ?>
<?php require "../includes/header.php"; ?>
<?php 

    $query = "SELECT * FROM bookings WHERE user_id='$_SESSION[user_id]'";

    $app = new App;

    $bookings = $app->selectAll($query);

?>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Mes réservations</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo APPURL; ?>/users/booking.php?id=<?php echo $_SESSION['user_id']; ?>">Réservations</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
            <div class="container">
                
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Email</th>
                            <th scope="col">Réservation date</th>
                            <th scope="col">Nombre de personnes</th>
                            <th scope="col">Demande spéciale</th>
                            <th scope="col">Statut</th>
                            <th scope="col">Révision</th>
                          </tr>
                        </thead>
                        <tbody>

                        <?php foreach($bookings as $booking) : ?>
                          <tr>
                            <th><?php echo $booking->name; ?></th>
                            <td><?php echo $booking->email; ?></td>
                            <td><?php echo $booking->date_booking; ?></td>
                            <td><?php echo $booking->num_people; ?></td>
                            <td><?php echo $booking->special_request; ?></td>
                            <td><?php echo $booking->status; ?></td>
                            <?php if($booking->status == "Confirmed") : ?>
                              <td><a href="<?php echo APPURL; ?>/users/review.php" class="btn btn-success text-white">Temoignage</td>
                            <?php endif; ?>
                          </tr>
                        <?php endforeach; ?>
                        

                        </tbody>
                      </table>
                      
                </div>
            </div>
        <!-- Service End -->
        

<?php require "../includes/footer.php"; ?>