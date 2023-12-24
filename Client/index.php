<!DOCTYPE html>
<html lang="zxx">

<head>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}



.aa{
    font-size: 15px;
}

p{
    border: 5px double red;
    padding: 12px 16px;
    
}

</style>


    </head>

    <body>
        <!-- Loader-->
        <!-- Loader end-->
        <!-- ==========================-->
        <!-- MOBILE MENU-->
        <!-- ==========================-->
        
           <?php
           include('header.php');
           ?>
            <div class="main-slider main-slider-2">
                <div class="slider-pro" id="main-slider" data-slider-width="100%" data-slider-height="700px" data-slider-arrows="true" data-slider-buttons="false">
                    <div class="sp-slides">
                        <!-- Slide 1-->
                        <div class="sp-slide">
                            <img src="images/car1.jpg" alt="slider" width="100%" />
                            <div class="main-slider__wrap sp-layer" data-width="40%" data-position="centerLeft" data-horizontal="0" data-show-transition="left" data-hide-transition="left" data-show-duration="2000" data-show-delay="1200" data-hide-delay="400">
                                <div class="main-slider__title">Hector<span class="main-slider__title-number text-primary"></span>series<span class="main-slider__label">model 2021</span>
                                </div>
                                <div class="main-slider__price"><span class="main-slider__price-currency">$</span><span class="main-slider__price-number">375</span><span class="main-slider__price-inner"><span class="main-slider__price-title">Monthly</span><span class="main-slider__price-subtitle">Lowest Markup</span></span>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 2-->
                        <div class="sp-slide">
                            <img src="images/car2.jpg" alt="slider" width="100%" />
                            <div class="main-slider__wrap sp-layer" data-width="40%" data-position="centerLeft" data-horizontal="0" data-show-transition="left" data-hide-transition="left" data-show-duration="2000" data-show-delay="1200" data-hide-delay="400">
                                <div class="main-slider__title">Hector Plus<span class="main-slider__title-number text-primary"></span>series<span class="main-slider__label">model 2020</span>
                                </div>
                                <div class="main-slider__price"><span class="main-slider__price-currency">$</span><span class="main-slider__price-number">375</span><span class="main-slider__price-inner"><span class="main-slider__price-title">Monthly</span><span class="main-slider__price-subtitle">Lowest Markup</span></span>
                            </div>

                            <div class="sp-slide">
                            <img src="images/car3.jpg" alt="slider" width="100%" />
                            <div class="main-slider__wrap sp-layer" data-width="40%" data-position="centerLeft" data-horizontal="0" data-show-transition="left" data-hide-transition="left" data-show-duration="2000" data-show-delay="1200" data-hide-delay="400">
                                <div class="main-slider__title">MG ZS EV<span class="main-slider__title-number text-primary"></span>series<span class="main-slider__label">model 2021</span>
                                </div>
                                <div class="main-slider__price"><span class="main-slider__price-currency">$</span><span class="main-slider__price-number">375</span><span class="main-slider__price-inner"><span class="main-slider__price-title">Monthly</span><span class="main-slider__price-subtitle">Lowest Markup</span></span>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
            <!-- end .main-slider-->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-advantages-1">
                            <section class="b-advantages-1">
                                <h3 class="b-advantages-1__title">Largest Dealership of Cars</h3>
                                <div class="b-advantages-1__info">MG Motor is nisi aliquip ex consequat duis velit esse cillum dolore fugiat nulla pariatur excepteur sint occaecat.</div><span class="ui-decor-2"></span>
                            </section>
                            <!-- end .b-advantages-->
                            <section class="b-advantages-1 active">
                                <h3 class="b-advantages-1__title">We Offers Lower Cars Prices</h3>
                                <div class="b-advantages-1__info">MG Motor is nisi aliquip ex consequat duis velit esse cillum dolore fugiat nulla pariatur excepteur sint occaecat.</div><span class="ui-decor-2"></span>
                            </section>
                            <!-- end .b-advantages-->
                            <section class="b-advantages-1">
                                <h3 class="b-advantages-1__title">Multipoint Safety Checks</h3>
                                <div class="b-advantages-1__info">MG Motor is nisi aliquip ex consequat duis velit esse cillum dolore fugiat nulla pariatur excepteur sint occaecat.</div><span class="ui-decor-2"></span>
                            </section>
                            <!-- end .b-advantages-->
                        </div>
                        <!-- end .section-advantages-1-->
                    </div>
                </div>
            </div>
            <section class="section-filter">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="text-center">
                                <h2 class="ui-title-block">Find Your Dream Car</h2>
                                
                                <div class="ui-decor"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <form class="b-filter">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="b-filter-type">

                                         <div class="b-filter-type__item">
                                         <input class="b-filter-type__input" id="typeSuv" name="type-car" type="radio" value="" />
                                        <span class="aa"><br><a href="booking.php">
                                            <p><img class="img-responsive" src="images\carbook.png" alt="Book Car"/></p>Book Car</a></br></span>
                                        </label> 
                                    </div>

                                <div class="b-filter-type__item"> 
                                        
                                   <input class="b-filter-type__input" id="typeCoupe" name="type-car" type="radio" value="" checked="checked" />
                                        
                                        <span class="aa"><br><a href="testdrive.php">
                                            <p><img class="img-responsive" src="images/testdrive.png" alt="Book A Test Drive"/>
                                        </p>Book a Testdrive</a></br></span>
                                        </label> 
                                    </div> 

                                    <div class="b-filter-type__item"> 
                                        
                                         <input class="b-filter-type__input" id="typeCoupe" name="type-car" type="radio" value="" checked="checked" />
                                        
                                        <span class="aa"><br><a href="brochure.php">
                                            <p><img class="img-responsive" src="images/Brochure.png" alt="Brochure"/></p>
                                        Brochure</a></br></span>
                                        </label> 
                                    </div> 
 

                                   <div class="b-filter-type__item">
                                        
                                       <input class="b-filter-type__input" id="typeSedan" name="type-car" type="radio" value="" />
                                        <span class="aa"><br><a href="cardetail.php">
                                            <p><img class="img-responsive" src="images/cardetail.png" alt="Car Detail"/></p>Car Detail</a></br></span>
                                        </label> 
                                    </div> 
                                   

                                   <div class="b-filter-type__item">

                                       
                                        <input class="b-filter-type__input" id="typePickup" name="type-car" type="radio" value=""/>
                                        <span class="aa"><br><a href="waiting.php"><p><img class="img-responsive" src="images/wt.png" alt="Waiting Time"/></p>Book Service</a></br></span>
                                        </label> 
                                    </div> 
  
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                                   </form>
                <!-- end .b-filter-->
            </section>
            <!-- end .section-filter-->
            <!-- end .section-default-->
                            <!-- end .b-banner-->
                        </div>
                    </div>
                </div>
            </div>
            
                                </div>
                                <!-- end .carousel-reviews-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end .section-reviews-->
                                     
            <!-- end .section-default-->
    </body>
</html>
<?php
include('footer.php');
?>