<?php require "../config/config.php"; ?>
<?php require "../libs/App.php"; ?>
<?php require "../includes/header.php"; ?>
<?php

if(!isset($_SERVER['HTTP_REFERER'])){
    echo "<script>window.location.href='".APPURL."'</script>";
    exit;
}

$app = new App;

if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $zipcode = $_POST['zipcode'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $total_price = $_SESSION['total_price'];

    $user_id = $_SESSION['user_id'];

    $query = "INSERT INTO orders (name, email, city, country, zipcode, phone_number, address, total_price, user_id) VALUES (:name, :email, :city, :country, :zipcode, :phone_number, :address, :total_price, :user_id)";

    $arr = [
        ":name" => $name,
        ":email" => $email,
        ":city" => $city,
        ":country" => $country,
        ":zipcode" => $zipcode,
        ":phone_number" => $phone_number,
        ":address" => $address,
        ":total_price" => $total_price,
        ":user_id" => $user_id,

    ];


    // echo "<script>window.location.href='pay.php'</script>";
    $path = "pay.php";
    // $path = header('location: pay.php');

    // $app->insert($query, $arr, $path);
 }


?>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Paiement</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Paiement</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
            <div class="container">
                
                <div class="col-md-12 bg-dark">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Réservation</h5>
                        <h1 class="text-white mb-4">Paiement</h1>
                        <form  class="col-md-12" method="POST" action="checkout.php">
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Votre nom</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Votre E-mail</label>
                                    </div>
                                </div>
                               
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input name="city" type="text" class="form-control" id="city" placeholder="city">
                                        <label for="email">Ville</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input name="country" type="text" class="form-control" id="country" placeholder="Country">
                                        <label for="text">Pays</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input name="zipcode" type="text" class="form-control" id="zipcode" placeholder="Zipcode">
                                        <label for="text">Postal code</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input name="phone_number" type="text" class="form-control" id="phone_number" placeholder="Phone number">
                                        <label for="text">Numéro de téléphone</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea name="address" class="form-control" placeholder="Address" id="message" style="height: 100px"></textarea>
                                        <label for="message">Adresse</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="submit" class="btn btn-primary w-100 py-3">Commandez et payez maintenant</button> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        <!-- Service End -->
        


<?php require "../includes/footer.php" ?>