<div class="slideshow" id="slideshow">
    <ol class="slides">
        <li class="current">
            <div class="description">
                <h2>Tilted Content Slideshow</h2>
                <p>This slider, as seen on the landing page of the <a href="http://www.thefwa.com/">FWA</a>, plays with 3D perspective and performs some interesting animations on the right-hand side images.</p>
            </div>
            <div class="tiltview col">
                <a href="http://grovemade.com/"><img src="img/img-test-1.jpg" /></a>
                <a href="https://tsovet.com/"><img src="img/img-test-2.jpg" /></a>
            </div>
        </li>
        <li>
            <div class="description">
                <h2>CSS Animations</h2>
                <p>We are using 12 different animations for showing and hiding the items of a slide. The animations are defined by randomly adding data-attributes called <code>data-effect-in</code> and <code>data-effect-out</code> for every slide. </p>
            </div>
            <div class="tiltview row">
                <a href="http://pexcil.com/"><img src="img/img-test-3.jpg" /></a>
                <a href="http://foodsense.is/"><img src="img/img-test-4.jpg" /></a>
            </div>
        </li>
        <li>
            <div class="description">
                <h2>Tilted Items</h2>
                <p>The perspective view is achieved by adding a perspective value to the slide list item and tilting a division that contains the two screenshots.</p>
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
			new TiltSlider( document.getElementById( 'slideshow' ) );
		</script>
    
</div>