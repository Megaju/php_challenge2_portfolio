<?php include('header.php'); ?>
   
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
        <h2 class="main">Projets</h2>
        <div class="grid">
            <!-- bloc -->
            <figure class="tile-effect">
                <a href="page.php">    
                    <img src="img/img-test-1.jpg" alt="" />
                    <figcaption>
                        <h2>Titre de test<span>Bold</span></h2>
                        <p>Description rapide du tile... mais on va faire long pour voir jusqu'où ça tiens. En fait j'veux qu'ça pète pour voir. . . Bon bah en fait ça pète pas.</p>
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
    
    <?php include('footer.php'); ?>