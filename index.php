<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>JULIEN MALLE - Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Poiret+One" rel="stylesheet">
    <link rel="stylesheet" href="css/slideshow.css">
    <link rel="stylesheet" href="css/page.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="js/modernizr.custom.js"></script>
</head>

<body>
    <header>
        <h1><a href="index.php">Julien Malle <span>- Portfolio</span></a></h1>
        <nav class="top">
            <ul>
                <li><a href="#"><i class="fa fa-file-text"></i> CV</a></li>
                <li><a href="index.php"><i class="fa fa-th-large"></i> Portfolio</a></li>
                <li><a href="https://github.com/Megaju/"><i class="fa fa-github"></i> Github</a></li>
                <li><a href="https://fr.linkedin.com/in/julien-malle-825822112"><i class="fa fa-linkedin-square"></i> Linkedin</a></li>
            </ul>
        </nav>
    </header>
    <div class="bloc-30px"></div>
    <!-- INTEGRATION DU SLIDESHOW -->
    <div class="slideshow" id="slideshow">
        <ol class="slides">
            <li class="current">
                <div class="description">
                    <h2>Projet n1</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis ad rem amet quia, deleniti, unde, consequatur perspiciatis impedit modi consequuntur debitis asperiores libero nostrum, magnam doloribus harum numquam aliquid. Itaque.</p>
                </div>
                <div class="tiltview col">
                    <a href="http://grovemade.com/"><img src="img/img-test-1.jpg" /></a>
                    <a href="https://tsovet.com/"><img src="img/img-test-2.jpg" /></a>
                </div>
            </li>
            <li>
                <div class="description">
                    <h2>Projet n2</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis ad rem amet quia, deleniti, unde, consequatur perspiciatis impedit modi consequuntur debitis asperiores libero nostrum, magnam doloribus harum numquam aliquid. Itaque.</p>
                </div>
                <div class="tiltview row">
                    <a href="http://pexcil.com/"><img src="img/img-test-3.jpg" /></a>
                    <a href="http://foodsense.is/"><img src="img/img-test-4.jpg" /></a>
                </div>
            </li>
            <!--
        <li>
            <div class="description">
                <h2>Projet n3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis ad rem amet quia, deleniti, unde, consequatur perspiciatis impedit modi consequuntur debitis asperiores libero nostrum, magnam doloribus harum numquam aliquid. Itaque.</p>
            </div>
            <div class="tiltview col">
                <a href="http://minimalmonkey.com/"><img src="img/img-test-1.jpg" /></a>
                <a href="http://www.herschelsupply.com/"><img src="img/img-test-2.jpg" /></a>
            </div>
        </li>
         
        <li>
            <div class="description">
                <h2>Column or Row</h2>
                <p>The items in the tilted container are either laid out in a column or in a row. For some directions we need to adjust the animation delays for the items, since we don't want the items to overlap each other when they move in or out.</p>
            </div>
            <div class="tiltview row">
                <a href="http://grovemade.com/"><img src="img/img-test-3.jpg" /></a>
                <a href="https://tsovet.com/"><img src="img/img-test-4.jpg" /></a>
            </div>
        </li>
        
        
        <li>
            <div class="description">
                <h2>Responsiveness</h2>
                <p>For smaller screens, the items on the right hand side will become less opaque and serve as decoration only. The focus will be on the description which will occupy all the width.</p>
            </div>
            <div class="tiltview col">
                <a href="http://pexcil.com/"><img src="img/img-test-1.jpg" /></a>
                <a href="http://foodsense.is/"><img src="img/img-test-2.jpg" /></a>
            </div>
        </li>
        -->
            <li>
                <div class="description">
                    <h2>Navigation</h2>
                    <p>For the "line" navigation we use a little trick to make the clickable area a bit bigger: we add a thick white border to the top and bottom of the span. Since the border is part of the element, it will be part of the clickable zone.</p>
                </div>
                <div class="tiltview row">
                    <a href="http://minimalmonkey.com/"><img src="img/img-test-3.jpg" /></a>
                    <a href="http://www.herschelsupply.com/"><img src="img/img-test-4.jpg" /></a>
                </div>
            </li>
        </ol>
        <script src="js/classie.js"></script>
        <script src="js/tiltSlider.js"></script>
        <script>
            new TiltSlider(document.getElementById('slideshow'));
        </script>
    </div>
    <!--END SLIDESHOW -->
    <section>
        <h2>Projets</h2>
        <div class="grid">
            <!-- bloc -->
            <a href="page.php">
                <figure class="tile-effect"> <img src="img/img-test-1.jpg" alt="" />
                    <figcaption>
                        <h2>Titre de test<span>Bold</span></h2>
                        <p>Description rapide du tile...</p>
                    </figcaption>
            </a>
            </figure>
            <!-- bloc -->
            <figure class="tile-effect"> <img src="img/img-test-2.jpg" alt="" />
                <a href="page.php">
                    <figcaption>
                        <h2>Titre de test<span>Bold</span></h2>
                        <p>Description rapide du tile...</p>
                    </figcaption>
                </a>
            </figure>
            <!-- bloc -->
            <figure class="tile-effect"> <img src="img/img-test-3.jpg" alt="" />
                <a href="page.php">
                    <figcaption>
                        <h2>Titre de test<span>Bold</span></h2>
                        <p>Description rapide du tile...</p>
                    </figcaption>
                </a>
            </figure>
            <!-- bloc -->
            <figure class="tile-effect"> <img src="img/img-test-4.jpg" alt="" />
                <a href="page.php">
                    <figcaption>
                        <h2>Titre de test<span>Bold</span></h2>
                        <p>Description rapide du tile...</p>
                    </figcaption>
                </a>
            </figure>
            <!-- bloc -->
            <figure class="tile-effect"> <img src="img/img-test-1.jpg" alt="" />
                <a href="page.php">
                    <figcaption>
                        <h2>Titre de test<span>Bold</span></h2>
                        <p>Description rapide du tile...</p>
                    </figcaption>
                </a>
            </figure>
            <!-- bloc -->
            <figure class="tile-effect"> <img src="img/img-test-2.jpg" alt="" />
                <a href="page.php">
                    <figcaption>
                        <h2>Titre de test<span>Bold</span></h2>
                        <p>Description rapide du tile...</p>
                    </figcaption>
                </a>
            </figure>
            <!-- bloc -->
            <figure class="tile-effect"> <img src="img/img-test-3.jpg" alt="" />
                <a href="page.php">
                    <figcaption>
                        <h2>Titre de test<span>Bold</span></h2>
                        <p>Description rapide du tile...</p>
                    </figcaption>
                </a>
            </figure>
            <!-- bloc -->
            <figure class="tile-effect"> <img src="img/img-test-4.jpg" alt="" />
                <a href="page.php">
                    <figcaption>
                        <h2>Titre de test<span>Bold</span></h2>
                        <p>Description rapide du tile...</p>
                    </figcaption>
                </a>
            </figure>
        </div>
    </section>
    <footer>
        <p>Site créé par Julien Malle.</p>
    </footer>
</body>

</html>