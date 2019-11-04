<?php

if(isset ($_POST['submit'])) {
   
    $vardas = trim($_POST['vardas']); 
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

        if(!empty($vardas) && !empty($email) && !empty($message)){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $from = "$email";
                $to = "zemaitisvirginijus@gmail.com";
                $subject = "Nauja zinute";
                $autorius = 'Nuo: ' . $vardas . ', ' . $email;
                $zinute = htmlspecialchars($message);
                mail($to, $subject, $autorius, $zinute, $from);
                echo "<script>alert('Dėkojame. Jūsų žinutė gauta.');</script>";
    }
}

include('connect.php');
}

?>

<?php
    session_start();
    $database_name = "Product_details";
    $con = mysqli_connect("localhost","root","",$database_name);
    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                );
                $_SESSION["cart"][$count] = $item_array;
            }else{
                echo '<script>alert("Prekė jau pridėta į krepšelį!")</script>';  
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }
    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Pasirinkta prekė buvo pašalinta iš krepšelio...!")</script>';
                }
            }
        }
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--main css-->
    <link rel="stylesheet" href="css/style.css">
    <!--font awesome-->
    <script src="https://kit.fontawesome.com/e3f07595d9.js" crossorigin="anonymous"></script>
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Kalam:700" rel="stylesheet">
</head>

<body>
    <header id="header">
        <div class="container-fluid d-flex justify-content-between">
            <a class="navbar-brand" href="#"><img src="img/logo_3.png"></a>
            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-toggle='collapse' data-target='#navbarNav'>
                <span class="navbar-icon">
                <i class="fas fa-bars"></i>
                </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#header">Pagrindinis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">Apie mus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#store">Prekės</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#reviews">Atsiliepimai</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Kontaktai</a>
                        </li>
                    </ul>
                </div>
            </nav>                      
        <div class="mt-4" id="cart-info"><i class="fas fa-shopping-cart"></i> Krepšelis</div>
        </div>
    </header>
<!--         banner-->
    <div class="row">
        <div class="col banner">
          <div id="demo-slider" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                  <div class="carousel-item item-1 active" data-interval="2000">
                    <div class="carousel-caption mb-5 text-center">
                      <a href="#" class="btn btn-lg mb-5 text-uppercase banner-btn">Naujienos</a>
                    </div>
                  </div>
                  <div class="carousel-item item-2" data-interval="2000">
                    <div class="carousel-caption mb-5 text-center">
                      <a href="#" class="btn btn-lg mb-5 text-uppercase banner-btn">Naujienos</a>
                    </div>
                  </div>
                  <div class="carousel-item item-3" data-interval="2000">
                    <div class="carousel-caption mb-5 text-center">
                      <a href="#" class="btn btn-lg mb-5 text-uppercase banner-btn">Naujienos</a>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#demo-slider" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#demo-slider" role="button" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
<!--        end of banner-->
<!--        cart-->    
    
    <div class="cart" id="cart">
        <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
        ?>
        <div class="cart-item d-flex justify-content-between my-3">
            <img src="img-cart/store_item-bracelet1.jpg" class="img-fluid" id="item-img" alt="prekės">
            <div class="item-info text-center">
                <p id="cart-item-title"><?php echo $value["item_name"]; ?></p>
                <span class="cart-item-price"><?php echo $value["product_price"]; ?></span>
                <span>Eur</span>
            </div>
            <a href="index.php?action=delete&id=<?php echo $value["product_id"]; ?>" id="cart-item-remove" class="cart-item-remove">
              <i class="fas fa-trash"></i>
            </a>
        </div>
        <?php
                        $total = $total + $value["product_price"];
                    }
        ?>
        <div class="cart-total-container d-flex justify-content-around mt-5">
            <h5>Viso</h5>
            <h5><strong id="cart-total"><?php echo number_format($total, 2); ?></strong>Eur</h5>
        </div>
        <?php
                    } else { 
                        echo "Prekių krepšelis šiuo metu tušcias"; 
                    }
                        
        ?>
        <div class="text-center">
            <a href="#" id="clear-cart" class="btn cart-btn">Užsakyti</a>
        </div>
    </div>
    
<!--        end of cart-->    
<!--        title        -->
    
    <div class="title text-center my-5">
        <h1>Apie mus</h1>
        <div class="title-underline"></div>
    </div>
    
<!--       end of title        -->    
<!--        About us        -->
    
    <section id="about">
        <div class="container">
            <h3 class="text-center">Musu komanda</h3>
            <div class="row">
                <div class="col-md-6 my-4">
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>  
                </div>
                
                <div class="col-md-6 about-pictures d-lg-none">
                    <img src="img/small-about-picture.jpg" alt="About us photo" class="small-about-image">
                </div>
                
                <div class="col-md-6 about-pictures d-none d-lg-block">
                    <img src="img/about-picture1.jpg" alt="About us photo" class="img-1 about-image">
                    <img src="img/about-picture2.jpg" alt="About us photo" class="img-2 about-image">
                    <img src="img/about-picture3.jpg" alt="About us photo" class="img-3 about-image">
                    <img src="img/about-picture4.jpg" alt="About us photo" class="img-4 about-image">
                    <img src="img/about-picture5.jpg" alt="About us photo" class="img-5 about-image">
                </div>
            </div>
        </div>
    </section>
<!--       end of About us        -->    
    <!--        title        -->
    
    <div class="title text-center my-5">
        <h1>Prekes</h1>
        <div class="title-underline"></div>
    </div>
    
<!--       end of title        -->    
<!--        store    -->
    
    <section id="store">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto d-flex justify-content-around flex-wrap">                    
                    <a href="#" class="btn filter-btn m-2" data-filter="all">VISI</a>
                    <a href="#" class="btn filter-btn m-2" data-filter="bracelet">APYRANKĖS</a>
                    <a href="#" class="btn filter-btn m-2" data-filter="earings">AUSKARAI</a>
                    <a href="#" class="btn filter-btn m-2" data-filter="rings">ŽIEDAI</a>
                </div>
            </div>
            <div class="row grid projects">

            <?php
            $query = "SELECT * FROM product ORDER BY id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                <div class="col-sm-6 col-lg-4 my-3 store-item bracelet" data-item="bracelet">
                    <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
                        <div class="img-container">
                            <img src="img/<?php echo $row["image"]; ?>" class="img-fluid project-image">
                        </div>
                        <h5 class="my-2 text-center"><?php echo $row["pname"]; ?></h5>
                        <div class="d-flex justify-content-around">
                            <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                            <input type="submit" name="add" class="btn btn-outline-primary my-3" value="Įdėti į krepšelį">
                            <h5 class="my-3"><?php echo $row["price"]; ?> Eur</h5>
                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                        </div>
                    </form>
                </div>
                <?php
                }
            }
        ?> 
            </div>
        </div>
       
        
    </section>
    
<!--    end of store    -->
    
<!--        title        -->
    
    <div class="title text-center my-5">
        <h1>Atsiliepimai</h1>
        <div class="title-underline"></div>
    </div>
    
<!--       end of title        -->    
    
<!--        Reviews    -->
    
    <section id="reviews">
        <div class="container">
            <div class="row">
<!--                single card-->
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="card">
                        <img src="img/store_item-ring2.jpg" alt="earing" class="card-img-top">
                        <div class="card-body text-center customer-card">
                            <img src="img/reviews%20img.jpg" class="rounded-circle customer-img" alt="customer img">
                            <div class="card-title">
                                <h5 class="customer-name text-capitalize">Customer</h5>
                            </div>
                            <p class="customer-quote text-left mx-auto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa,praesentium</p>
                            <span class="customer-icon">
                                <i class="fas fa-quote-left"></i>
                            </span>
                        </div>
                    </div>
                </div>
<!--                end of single card-->
<!--                single card-->
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="card">
                        <img src="img/store_item-bracelet2.jpg" alt="earing" class="card-img-top">
                        <div class="card-body text-center customer-card">
                            <img src="img/reviews%20img.jpg" class="rounded-circle customer-img" alt="customer img">
                            <div class="card-title">
                                <h5 class="customer-name text-capitalize">Customer</h5>
                            </div>
                            <p class="customer-quote text-left mx-auto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa,praesentium amet consectetur adipisicing.</p>
                            <span class="customer-icon">
                                <i class="fas fa-quote-left"></i>
                            </span>
                        </div>
                    </div>
                </div>
<!--                end of single card-->
<!--                single card-->
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="card">
                        <img src="img/store_item-earings1.jpg" alt="earing" class="card-img-top">
                        <div class="card-body text-center customer-card">
                            <img src="img/reviews%20img.jpg" class="rounded-circle customer-img" alt="customer img">
                            <div class="card-title">
                                <h5 class="customer-name text-capitalize">Customer</h5>
                            </div>
                            <p class="customer-quote text-left mx-auto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa,praesentium. Lorem ipsum dolor sit, ame</p>
                            <span class="customer-icon">
                                <i class="fas fa-quote-left"></i>
                            </span>
                        </div>
                    </div>
                </div>
<!--                end of single card-->
<!--                single card-->
                <div class="col-sm-6 col-md-4 col-lg-3 my-2">
                    <div class="card">
                        <img src="img/store_item-earings2.jpg" alt="earing" class="card-img-top">
                        <div class="card-body text-center customer-card">
                            <img src="img/reviews%20img.jpg" class="rounded-circle customer-img" alt="customer img">
                            <div class="card-title">
                                <h5 class="customer-name">Customer</h5>
                            </div>
                            <p class="customer-quote text-left mx-auto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa,praesentium</p>
                            <span class="customer-icon">
                                <i class="fas fa-quote-left"></i>
                            </span>
                        </div>
                    </div>
                </div>
<!--                end of single card-->
            </div>
        </div>
    </section>
    
<!--    end of Reviews    -->
    
<!--        title        -->
    
    <div class="title text-center my-5">
        <h1>Kontaktai</h1>
        <div class="title-underline"></div>
    </div>
    
<!--       end of title        -->
    
<!--    Footer    -->
    <section id="contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 footer-left">
                    <div class="row">
                        <div class="col-md-6">
                        <h5>Kontaktai</h5>
                            <div class="contact-icon">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <a href="tel:+37061234567"><i class="fas fa-phone-alt"></i></a>
                                    </div>
                                    <div class="contact-icon-text col-xs-6">
                                        <p>Skambinkite:</p>
                                        <p><a href="tel:+37061234567">Tel +370 612 34567</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-icon">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <a href="mailto:zemaitisvirginijus@gmail.com"><i class="far fa-envelope"></i></a>
                                    </div>
                                    <div class="contact-icon-text col-xs-6">
                                        <p>Rašykite:</p>
                                        <p><a href="mailto:zemaitisvirginijus@gmail.com">info@companyname.com</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-icon">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-icon-text col-xs-6">
                                        <p>Adresas:</p>
                                        <p>Ulonų g. 5, Vilnius</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <h5>Pagalba</h5>
                        <ul class="help-text">
                            <li><a href="#">Apmokėjimas</a></li>
                            <li><a href="#">Pristatymas</a></li>
                            <li><a href="#">Kaip pirkti</a></li>
                            <li><a href="#">Privatumo politika</a></li>
                        </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 footer-right">
                    <h5>Reikia pagalbos?</h5>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="form-group">
                          <input type="text" name="vardas" class="form-control" placeholder="Jūsų vardas..">
                        </div>
                        <div class="form-group">
                          <input type="email" name="email" class="form-control" placeholder="Jūsų el. paštas..">
                        </div>
                        <textarea class="form-control" name="message" rows="3" placeholder="Jūsų žinutė.."></textarea>
                        <button name="submit" type="submit" class="btn btn-default mt-3">Siųsti</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
<!--    end of Footer    -->
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/js.js"></script>
</body>
</html>
