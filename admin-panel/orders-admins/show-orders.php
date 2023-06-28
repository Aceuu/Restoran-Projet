<?php require "../../config/config.php"; ?>
<?php require "../../libs/App.php"; ?>
<?php require "../layouts/header.php"; ?>
<?php 

$query = "SELECT * FROM orders";
$app = new App;
$app->validateSessionAdminInside();


$orders = $app->selectAll($query);


?>
        <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Orders</h5>
            
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Ville</th>
                    <th scope="col">Pays</th>
                    <th scope="col">Numero de téléphone</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Statut Valeur</th>
                    <th scope="col">Statut</th>
                    <th scope="col">Supprimer</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($orders as $order) : ?>
                  <tr>
                    <th scope="row"><?php echo $order->id; ?></th>
                    <td><?php echo $order->name; ?></td>
                    <td><?php echo $order->email; ?></td>
                    <td><?php echo $order->city; ?></td>
                    <td><?php echo $order->country; ?></td>
                    <td><?php echo $order->phone_number; ?></td>
                    <td><?php echo $order->address; ?></td>
                    <td>$<?php echo $order->total_price; ?></td>
                    <td>$<?php echo $order->status; ?></td>

                    <a href="status.php?id=<?php echo $order->id; ?>" class="btn btn-primary  text-center ">Status</a>
                     <td><a href="delete-orders.php?=<?php echo $order->id; ?>" class="btn btn-danger  text-center ">Delete</a></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>

<?php require "../layouts/footer.php"; ?>