<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" />
    <title></title>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="index.php">Pagrindinis</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php#paslaugos">Paslaugos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php#projektai">Projektai</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php#kontaktai">Kontaktai</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
<!--  END. Navigacija  -->
        <section id="projekto1_galerija">
            <div class="pavadinimas_galerija">
                <h1>Projektas1</h1>
            </div>
            
            <div class="container my-2">
                <div class="row galerija">
                    
                    <div class="col-10 mx-auto col-sm-6 col-lg-3">
                        <div class="nuotrauka">
                            <a data-fancybox="gallery" href="img/project1.jpg"><img src="img/project1.jpg" class="img-thumbnail item-img" alt="Projektas"></a>
                        </div>
                    </div>

                    <div class="col-10 mx-auto col-sm-6 col-lg-3">
                        <div class="nuotrauka">
                            <a data-fancybox="gallery" href="img/project2.jpg"><img src="img/project2.jpg" class="img-thumbnail item-img" alt="Projektas"></a>
                        </div>
                    </div>
                    
                    <div class="col-10 mx-auto col-sm-6 col-lg-3">
                        <div class="nuotrauka">
                            <a data-fancybox="gallery" href="img/project3.jpg"><img src="img/project3.jpg" class="img-thumbnail item-img" alt="Projektas"></a>
                        </div>
                    </div>
                    
                    <div class="col-10 mx-auto col-sm-6 col-lg-3">
                        <div class="nuotrauka">
                            <a data-fancybox="gallery" href="img/project1.jpg"><img src="img/project1.jpg" class="img-thumbnail item-img" alt="Projektas"></a>
                        </div>
                    </div>

                    <div class="col-10 mx-auto col-sm-6 col-lg-3">
                        <div class="nuotrauka">
                            <a data-fancybox="gallery" href="img/project2.jpg"><img src="img/project2.jpg" class="img-thumbnail item-img" alt="Projektas"></a>
                        </div>
                    </div>
                    
                    <div class="col-10 mx-auto col-sm-6 col-lg-3">
                        <div class="nuotrauka">
                            <a data-fancybox="gallery" href="img/project3.jpg"><img src="img/project3.jpg" class="img-thumbnail item-img" alt="Projektas"></a>
                        </div>
                    </div>
                    
                    <div class="col-10 mx-auto col-sm-6 col-lg-3">
                        <div class="nuotrauka">
                            <a data-fancybox="gallery" href="img/project1.jpg"><img src="img/project1.jpg" class="img-thumbnail item-img" alt="Projektas"></a>
                        </div>
                    </div>
                    
                    <div class="col-10 mx-auto col-sm-6 col-lg-3">
                        <div class="nuotrauka">
                            <a data-fancybox="gallery" href="img/project2.jpg"><img src="img/project2.jpg" class="img-thumbnail item-img" alt="Projektas"></a>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        <footer>
            <p class="text-center">Interjero dizainas Copyright &copy; 2017</p>
        </footer>
        <script>
            window.sr = ScrollReveal();
            sr.reveal('.navbar', {
              duration: 2000,
              origin:'bottom'
            });
            sr.reveal('.pavadinimas_galerija', {
              duration: 2000,
              origin:'top',
              distance:'300px'
            });
        </script>
    
    
    
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/jquery.fancybox.min.js"></script>
</body>
</html>
