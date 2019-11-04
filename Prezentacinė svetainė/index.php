<?php
    if(isset ($_POST['submit'])) {
   
    $vardas = trim($_POST['vardas']); 
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

        if(!empty($vardas) && !empty($email)){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $from = "$email";
                $to = "zemaitisvirginijus@gmail.com";
                $subject = "Nauja zinute";
                $tekstas = htmlspecialchars($message);
                $zinute = 'Jums parašė: ' . $vardas . ', iš el. pašto: ' . $email;
                $tekstas1 = 'Parašė Jums žinutę: ' .$tekstas;
                mail($to, $subject, $zinute, $tekstas1);
                 echo "";
    
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Gothic+A1&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css?v=1" />
    <title></title>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script type="text/javascript">

</script>
</head>

<body>
<!--  Navigacija  -->
    <section id="pagrindinis">
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="#pagrindinis">Pagrindinis</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#paslaugos">Paslaugos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#projektai">Projektai</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#kontaktai">Kontaktai</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
<!--  END. Navigacija  -->
<!--  Carousel  -->
    
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="7000">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                
                <div class="carousel-item active" style="background-image: url(img/carousel_img1.jpg); background-size: cover;">
                    <div class="carousel-caption text-center">
                      <h5>Interjero koncepcijos kūrimas</h5>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                
                <div class="carousel-item" style="background-image: url(img/carousel_img2.jpg); background-size: cover;">
                    <div class="carousel-caption text-center">
                      <h5>Interjero koncepcijos kūrimas</h5>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                
                <div class="carousel-item" style="background-image: url(img/carousel_img3.jpg); background-size: cover;">
                    <div class="carousel-caption text-center">
                      <h5>Interjero koncepcijos kūrimas</h5>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
<!--  END. Carousel  --> 
<!-- END. Section Pagrindinis -->
    </section> 
    
    <section id="paslaugos">
        <div class="pavadinimas">
            <h1>Paslaugos</h1>
        </div>
        <div class="container">
            <div class="row">
                
                <div class="showcase-left col-md-4 text-center">
                    <img src="img/paslaugos1.jpeg">
                    <h3>Paslauga</h3>
                    <p>Eiusmod noster sint aliquip nisi e non se eruditionem. Consequat quo minim. 
                        Voluptate eram mandaremus deserunt si arbitror sunt sunt aut varias qui anim de 
                        expetendis ex cupidatat et tempor</p>
                </div>
                
                <div class="showcase-top col-md-4 text-center">
                    <img src="img/paslaugos1.jpeg">
                    <h3>Paslauga</h3>
                    <p>Eiusmod noster sint aliquip nisi e non se eruditionem. Consequat quo minim. 
                        Voluptate eram mandaremus deserunt si arbitror sunt sunt aut varias qui anim de 
                        expetendis ex cupidatat et tempor</p>
                </div>
                
                <div class="showcase-right col-md-4 text-center">
                    <img src="img/paslaugos1.jpeg">
                    <h3>Paslauga</h3>
                    <p>Eiusmod noster sint aliquip nisi e non se eruditionem. Consequat quo minim. 
                        Voluptate eram mandaremus deserunt si arbitror sunt sunt aut varias qui anim de 
                        expetendis ex cupidatat et tempor</p>
                </div>
                
                <div class="showcase-left col-md-4 text-center">
                    <img src="img/paslaugos1.jpeg">
                    <h3>Paslauga</h3>
                    <p>Eiusmod noster sint aliquip nisi e non se eruditionem. Consequat quo minim. 
                        Voluptate eram mandaremus deserunt si arbitror sunt sunt aut varias qui anim de 
                        expetendis ex cupidatat et tempor</p>
                </div>
                
                <div class="showcase-top col-md-4 text-center">
                    <img src="img/paslaugos1.jpeg">
                    <h3>Paslauga</h3>
                    <p>Eiusmod noster sint aliquip nisi e non se eruditionem. Consequat quo minim. 
                        Voluptate eram mandaremus deserunt si arbitror sunt sunt aut varias qui anim de 
                        expetendis ex cupidatat et tempor</p>
                </div>
                
                <div class="showcase-right col-md-4 text-center">
                    <img src="img/paslaugos1.jpeg">
                    <h3>Paslauga</h3>
                    <p>Eiusmod noster sint aliquip nisi e non se eruditionem. Consequat quo minim. 
                        Voluptate eram mandaremus deserunt si arbitror sunt sunt aut varias qui anim de 
                        expetendis ex cupidatat et tempor</p>
                </div>
                 
            </div>
        </div>
    </section>
    <button type="button" class="btn btn-primary uzsakymo-mygtukas" id="myBtn" data-toggle="modal" data-target="#myModal">
    Užsisakyk čia!!
  </button>
    <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog .modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Užsakymo forma</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-sm-6">
                        <form>
                            <div class="form-group">
                                <label for="username">Vardas:</label>
                                <input class="form-control input-lg" placeholder="Iveskite savo varda" type="text" id="inputUserName" />
                            </div>
                            <div class="form-group">
                                <label for="username">Dominanti paslauga:</label>
                                <select class="form-control input-sm" id="inputUserName" name="paslauga">
                                <option value="paslauga1">Paslauga1</option>
                                <option value="paslauga2">Paslauga2</option>
                                <option value="paslauga3">Paslauga3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="username">Būsto paskirtis:</label>
                                <select class="form-control" id="inputUserName" name="paskirtis">
                                <option value="namas">Namas</option>
                                <option value="butas">Butas</option>
                                <option value="komercines patalpos">Komercinės patalpos</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="username">Kaina:</label>
                                <select class="form-control" id="inputUserName" name="kaina (Eur)">
                                <option value="namas">0-500</option>
                                <option value="butas">501-1000</option>
                                <option value="komercines patalpos">1001 ir daugiau</option>
                                </select>
                            </div>
                            <div class="form-group">
                            <label for="komentaras">Komentaras:</label>
                            <textarea class="form-control" id="inputUserName" name="subject" placeholder="Jusu komentaras.."></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-success" id="register_modal">Užsakyti</button>
        </div>
        
      </div>
    </div>
  </div>
    <section id="projektai" class="projektai">
        <div class="pavadinimas">
            <h1>Projektai</h1>
        </div>
        <div class="container px-0">
            <div class="showcase-left row align-items-center">
                <div class="col-md-6 order-2 order-md-1">
                    <a href="projektai.php">
                        <img src="img/project1.jpg" class="img-fluid ml-3">
                    </a>
                </div>
                <div class="col-md-6 text-center order-1 order-md-2">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8">
                            <a href="projektai.php"><h3>Projektas1</h3></a>
                            <p>Ipsum quamquam despicationes. Ab velit comprehenderit, id minim velit elit 
                                quamquam, laboris varias ubi mentitum domesticarum, anim ullamco de malis fore. 
                                Iudicem eruditionem ut aliquip ubi sed minim cernantur probant, ea an quae 
                                offendit, ea qui familiaritatem. A eram legam nulla voluptate, minim fabulas eu 
                                eiusmod, nam sunt senserit eruditionem ea ubi iis sint quibusdam. Cillum admodum 
                                pariatur.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="showcase-paslaugos-right row align-items-center projektas_margin_top">
                <div class="col-md-6 text-center order-1 order-md-1">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8">
                            <a href="projektai1.php"><h3>Projektas2</h3></a>
                            <p>Ipsum quamquam despicationes. Ab velit comprehenderit, id minim velit elit 
                                quamquam, laboris varias ubi mentitum domesticarum, anim ullamco de malis fore. 
                                Iudicem eruditionem ut aliquip ubi sed minim cernantur probant, ea an quae 
                                offendit, ea qui familiaritatem. A eram legam nulla voluptate, minim fabulas eu 
                                eiusmod, nam sunt senserit eruditionem ea ubi iis sint quibusdam. Cillum admodum 
                                pariatur.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-2 order-md-2">
                    <a href="projektai1.php">
                        <img src="img/project2.jpg" class="img-fluid ml-3">
                    </a>
                </div>
            </div>
            
            <div class="showcase-left row align-items-center">
                <div class="col-md-6 order-2 order-md-1">
                    <a href="projektai.php">
                        <img src="img/project3.jpg" class="img-fluid ml-3">
                    </a>
                </div>
                <div class="col-md-6 text-center order-1 order-md-2 projektas_margin_top">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8">
                            <a href="projektai.php"><h3>Projektas3</h3></a>
                            <p>Ipsum quamquam despicationes. Ab velit comprehenderit, id minim velit elit 
                                quamquam, laboris varias ubi mentitum domesticarum, anim ullamco de malis fore. 
                                Iudicem eruditionem ut aliquip ubi sed minim cernantur probant, ea an quae 
                                offendit, ea qui familiaritatem. A eram legam nulla voluptate, minim fabulas eu 
                                eiusmod, nam sunt senserit eruditionem ea ubi iis sint quibusdam. Cillum admodum 
                                pariatur.</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <section id="kontaktai" class="kontaktai">
        <div class="pavadinimas">
            <h1>Kontaktai</h1>
        </div>
        <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-5">
            <form class="form-horizontal" role="form" method="post" action="index.php">
                    <div class="form-group">
                            <input type="text" class="form-control" id="name" name="vardas" placeholder="Įveskite savo vardą.." value="" required>
                    </div>
                    <div class="form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Įveskite savo el. paštą.." value="" required>
                    </div>
                    <div class="form-group">
                            <textarea class="form-control" rows="4" name="message" placeholder="Jūsų žinutė.."></textarea>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input id="submit" name="submit" type="submit" value="Siųsti" class="btn btn-primary">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2"></div>
                    </div>
                </form> 
          </div>
          <div class="text-center col-md-7 col-sm-7">
              <h3>Susisiekite su mumis!!</h3>
              <p><b>Telefonu:</b> +37061234567</p>
              <p><b>El. paštu:</b> Vardaspavarde@gmail.com</p>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <p class="text-center">Interjero dizainas Copyright &copy; 2017</p>
    </footer>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
            document.getElementById("myBtn").style.display = "block";
          } else {
            document.getElementById("myBtn").style.display = "none";
          }
        }

    </script>
    <script>
        
     
       
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script type="text/javascript" src="js/myjs.js?v=1"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
