<?php
/* @var $this yii\web\View */

$auth = isset($_GET['authorized']);

?>

<script type="text/javascript">
		$(document).ready(function(){
			$('#hslider').skdslider({delay:5000, animationSpeed: 2000,showNextPrev:true,showPlayButton:true,autoSlide:true,animationType:'fading'});
//			jQuery('#demo2').skdslider({delay:5000, animationSpeed: 1000,showNextPrev:true,showPlayButton:false,autoSlide:true,animationType:'sliding'});
//			jQuery('#demo3').skdslider({delay:5000, animationSpeed: 2000,showNextPrev:true,showPlayButton:true,autoSlide:true,animationType:'fading'});
			
			$('#responsive').change(function(){
			  $('#responsive_wrapper').width($(this).val());
			});
			
		});
</script>

    <ul id="hslider" class="slides">
		<li>
		<img src="/assets-public/slides/1.jpg" />
		<!--Slider Description example-->
		 <div class="slide-desc">
				<h2>Slider Title 1</h2>
				<p>Demo description here. Demo description here. Demo description here. Demo description here. Demo description here. <a class="more" href="#">more</a></p>
		  </div>
		</li>
		<li><img src="/assets-public/slides/2.jpg" />
		   <div class="slide-desc">
				<h2>Slider Title 2</h2>
				<p>Demo description here. Demo description here. Demo description here. Demo description here. Demo description here. <a class="more" href="#">more</a></p>
		  </div>
		</li>
		<li><img src="/assets-public/slides/3.jpeg" />
		<!--NO Description Here-->
		</li>
		<li><img src="/assets-public/slides/4.jpg" />
		  <div class="slide-desc">
				<h2>Slider Title 4</h2>
				<p>Demo description here. Demo description here. Demo description here. Demo description here. Demo description here. <a class="more" href="#">more</a></p>
		  </div>
		</li>
		<li><img src="/assets-public/slides/5.jpg" /></li>
		<li><img src="/assets-public/slides/6.jpg" />
		  <div class="slide-desc">
				<h2>Slider Title 6</h2>
				<p>Demo description here. Demo description here. Demo description here. Demo description here. Demo description here. <a class="more" href="#">more</a></p>
		  </div>
		</li>
	</ul>

<?php if($auth): ?>

    <div class="map-wrapper">
        <div class="map">
           <!-- <div id="map" class="map-inner"></div> /.map-inner -->

            <div class="container">
                <div class="row">

                    <!-- SEARCH FORM -->
                    <?= $this->render('//search-form') ?>
                    <!-- SEARCH FORM -->

                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.map -->
    </div><!-- /.map-wrapper -->

<?php else: ?>

    <div class="map-wrapper">
        <div class="map">
           <!-- <div id="map" class="map-inner"></div> /.map-inner -->

            <div class="container">
                <div class="row">

                    <!-- SEARCH FORM -->
                    <?= $this->render('//search-form') ?>
                    <!-- SEARCH FORM -->

                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.map -->
    </div><!-- /.map-wrapper -->

    <div class="container">
        <div id="main">

        </div><!-- /.main -->
    </div><!-- /.container -->
            <section id="our-services" class="block">
            <div class="container">
                <header class="section-title"><h2>Our Services</h2></header>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="feature-box equal-height">
                            <figure class="icon"><i class="fa fa-folder"></i></figure>
                            <aside class="description">
                                <header><h3>Уникальный выбор-мест</h3></header>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                <a href="properties-listing.html" class="link-arrow">Read More</a>
                            </aside>
                        </div><!-- /.feature-box -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="feature-box equal-height">
                            <figure class="icon"><i class="fa fa-users"></i></figure>
                            <aside class="description">
                                <header><h3>Лучшие условия аренды</h3></header>
                                <p>Aliquam gravida magna et fringilla convallis. Pellentesque habitant morbi </p>
                                <a href="agents-listing.html" class="link-arrow">Read More</a>
                            </aside>
                        </div><!-- /.feature-box -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="feature-box equal-height">
                            <figure class="icon"><i class="fa fa-money"></i></figure>
                            <aside class="description">
                                <header><h3>Невероятная цена</h3></header>
                                <p>Phasellus non viverra tortor, id auctor leo. Suspendisse id nibh placerat</p>
                                <a href="#" class="link-arrow">Read More</a>
                            </aside>
                        </div><!-- /.feature-box -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /#our-services -->
            <section id="price-drop" class="block">
            <div class="container">
                <header class="section-title">
                    <h2>Новые Объекты</h2>
                    <!-- <a href="properties-listing.html" class="link-arrow">All Properties</a> -->
                </header>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="property">
                            <a href="property-detail.html">
                                <div class="property-image">
                                    <img alt="" src="assets-public/img/properties/property-06.jpg">
                                </div>
                                <div class="overlay">
                                    <div class="info">
                                        <div class="tag price">$ 2000</div>
                                        <h3>Цена</h3>
                                        <!-- <figure>Golden Valley, MN 55427</figure> -->
                                    </div>
                                    <ul class="additional-info">
                                        <li>
                                            <header>Area:</header>
                                            <figure>240m<sup>2</sup></figure>
                                        </li>
                                        <li>
                                            <header>Beds:</header>
                                            <figure>2</figure>
                                        </li>
                                        <li>
                                            <header>Baths:</header>
                                            <figure>2</figure>
                                        </li>
                                        <li>
                                            <header>Garages:</header>
                                            <figure>0</figure>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div><!-- /.property -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="property">
                            <a href="property-detail.html">
                                <div class="property-image">
                                    <img alt="" src="assets-public/img/properties/property-04.jpg">
                                </div>
                                <div class="overlay">
                                    <div class="info">
                                        <div class="tag price">$ 2000</div>
                                        <h3>Цена </h3>
                                        <!-- <figure>Doral, FL 33178 </figure> -->
                                    </div>
                                    <ul class="additional-info">
                                        <li>
                                            <header>Area:</header>
                                            <figure>240m<sup>2</sup></figure>
                                        </li>
                                        <li>
                                            <header>Beds:</header>
                                            <figure>3</figure>
                                        </li>
                                        <li>
                                            <header>Baths:</header>
                                            <figure>1</figure>
                                        </li>
                                        <li>
                                            <header>Garages:</header>
                                            <figure>1</figure>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div><!-- /.property -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="property">
                            <a href="property-detail.html">
                                <div class="property-image">
                                    <img alt="" src="assets-public/img/properties/property-07.jpg">
                                </div>
                                <div class="overlay">
                                    <div class="info">
                                        <div class="tag price">$ 2000</div>
                                        <h3>Цена </h3>
                                        <!-- <figure>Glenwood, MN 56334</figure> -->
                                    </div>
                                    <ul class="additional-info">
                                        <li>
                                            <header>Area:</header>
                                            <figure>240m<sup>2</sup></figure>
                                        </li>
                                        <li>
                                            <header>Beds:</header>
                                            <figure>3</figure>
                                        </li>
                                        <li>
                                            <header>Baths:</header>
                                            <figure>1</figure>
                                        </li>
                                        <li>
                                            <header>Garages:</header>
                                            <figure>1</figure>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div><!-- /.property -->
                    </div><!-- /.col-md-3 -->
                    <div style="padding-left:0px !important;padding-right:0px !important;" class="col-md-3 col-sm-6">
                        <div class="property">
                            <a href="#">
                                <div class="property-image">
                                    <img alt="" src="assets-public/img/properties/property-04.jpg">
                                </div>
                                <div class="overlay">
                                    <div class="info">
                                        <div class="tag price">$ 2000</div>
                                        <h3>Цена </h3>
                                        <!-- <figure>Doral, FL 33178 </figure> -->
                                    </div>
                                    <ul class="additional-info">
                                        <li>
                                            <header>Area:</header>
                                            <figure>240m<sup>2</sup></figure>
                                        </li>
                                        <li>
                                            <header>Beds:</header>
                                            <figure>3</figure>
                                        </li>
                                        <li>
                                            <header>Baths:</header>
                                            <figure>1</figure>
                                        </li>
                                        <li>
                                            <header>Garages:</header>
                                            <figure>1</figure>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div><!-- /.property -->
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row-->
            </div><!-- /.container -->
        </section><!-- /#price-drop -->
<?php endif; ?>





