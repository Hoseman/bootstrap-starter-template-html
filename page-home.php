<?php
/* Template Name: Template-CustomHomePage */
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Starter_Theme
 */

get_header();
?>

<!-- Main Carousel  -->

<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
<ol class="carousel-indicators">
    <li data-target="#myCarouseltwo" data-slide-to="1" class="active"></li>
    <li data-target="#myCarouseltwo" data-slide-to="2" ></li>
    <li data-target="#myCarouseltwo" data-slide-to="3" ></li>
</ol>
<div class="carousel-inner">


                <div class="carousel-item active">
                    <img class="first-slide" src="https://via.placeholder.com/2000x700" alt="First slide">

                    <div class="container">
                    <div class="carousel-caption">
                        <h1>My Heading goes in here</h1>
                        <span style="color:#efefef !important;">
                                <p>My sub heading goes in here</p>
                        </span>
                        <p>
                            <a class="btn btn-lg btn-primary" href="#" role="button">
                                FIND OUT MORE
                            </a>
                        </p>
                    </div>
                    </div>
                </div> 


                <div class="carousel-item">
                    <img class="first-slide" src="https://via.placeholder.com/2000x700" alt="First slide">

                    <div class="container">
                    <div class="carousel-caption">
                        <h1>My second Heading goes in here</h1>
                        <span style="color:#efefef !important;">
                                <p>My sub heading goes in here</p>
                        </span>
                        <p>
                            <a class="btn btn-lg btn-primary" href="#" role="button">
                                FIND OUT MORE
                            </a>
                        </p>
                    </div>
                    </div>
                </div> 

                <div class="carousel-item">
                    <img class="first-slide" src="https://via.placeholder.com/2000x700" alt="First slide">

                    <div class="container">
                    <div class="carousel-caption">
                        <h1>My Third Heading goes in here</h1>
                        <span style="color:#efefef !important;">
                                <p>My sub heading goes in here</p>
                        </span>
                        <p>
                            <a class="btn btn-lg btn-primary" href="#" role="button">
                                FIND OUT MORE
                            </a>
                        </p>
                    </div>
                    </div>
                </div> 

</div>
<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
<!-- End Main Carousel  -->

<!-- Welcome -->
<section id="welcome">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12">

            <?php
                while ( have_posts() ) :
                    the_post();
                ?>
                    <h1 class="display-5"><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>   
                <?php
                endwhile; // End of the loop.
                ?>

            </div>
        </div>
    </div>
</section>

<!-- End Welcome -->


<!-- Featurette -->
<section id="featurette">
    

    <div class="container text-center">
        <h1 class="display-5">Upcoming Events</h1>

        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="featurette text-center">
                    <img class="first-slide" src="https://via.placeholder.com/300x200" alt="featurette">
        
                        <h4>My Title Here</h4>
                        <p class="feature-4-description">My description goes in here</p>
                        <a href="#" class="btn btn-primary">Click Here <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>   
            </div>
            <div class="item">
                <div class="featurette text-center">
                    <img class="first-slide" src="https://via.placeholder.com/300x200" alt="featurette">
        
                        <h4>My Title Here</h4>
                        <p class="feature-4-description">My description goes in here</p>
                        <a href="#" class="btn btn-primary">Click Here <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>   

            </div>
            <div class="item">
                <div class="featurette text-center">
                    <img class="first-slide" src="https://via.placeholder.com/300x200" alt="featurette">
        
                        <h4>My Title Here</h4>
                        <p class="feature-4-description">My description goes in here</p>
                        <a href="#" class="btn btn-primary">Click Here <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>   

            </div>
            <div class="item">
                <div class="featurette text-center">
                    <img class="first-slide" src="https://via.placeholder.com/300x200" alt="featurette">
        
                        <h4>My Title Here</h4>
                        <p class="feature-4-description">My description goes in here</p>
                        <a href="#" class="btn btn-primary">Click Here <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>   

            </div>
            <div class="item">
                <div class="featurette text-center">
                    <img class="first-slide" src="https://via.placeholder.com/300x200" alt="featurette">
        
                        <h4>My Title Here</h4>
                        <p class="feature-4-description">My description goes in here</p>
                        <a href="#" class="btn btn-primary">Click Here <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>   

            </div>
            <div class="item">
                <div class="featurette text-center">
                    <img class="first-slide" src="https://via.placeholder.com/300x200" alt="featurette">
        
                        <h4>My Title Here</h4>
                        <p class="feature-4-description">My description goes in here</p>
                        <a href="#" class="btn btn-primary">Click Here <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>   

            </div>
            <div class="item">
                <div class="featurette text-center">
                    <img class="first-slide" src="https://via.placeholder.com/300x200" alt="featurette">
        
                        <h4>My Title Here</h4>
                        <p class="feature-4-description">My description goes in here</p>
                        <a href="#" class="btn btn-primary">Click Here <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>   

            </div>
            <div class="item">
                <div class="featurette text-center">
                    <img class="first-slide" src="https://via.placeholder.com/300x200" alt="featurette">
        
                        <h4>My Title Here</h4>
                        <p class="feature-4-description">My description goes in here</p>
                        <a href="#" class="btn btn-primary">Click Here <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>   

            </div>
        </div>


    </div>
</section>
<!-- End Featurette -->

<!-- Pricing -->
<section id="pricing">
  
  <div class="container text-center">
    <h1 class="display-5">Pricing</h1>
    <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
    <div class="card-deck mb-3 text-center">

      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Free</h4>
        </div>

            <div class="card-body">
            <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
                    <li>10 users included</li>
                    <li>2 GB of storage</li>
                    <li>Email support</li>
                    <li>Help center access</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
            </div>
      </div>

      <div class="card mb-4 shadow-sm">
            <div class="card-header">
            <h4 class="my-0 font-weight-normal">Pro</h4>
            </div>

            <div class="card-body">
                <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>20 users included</li>
                    <li>10 GB of storage</li>
                    <li>Priority email support</li>
                    <li>Help center access</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
            </div>
      </div>

      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Enterprise</h4>
        </div>

        <div class="card-body">
          <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>30 users included</li>
            <li>15 GB of storage</li>
            <li>Phone and email support</li>
            <li>Help center access</li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
        </div>
      </div>

    </div>
    </div>
</section>
<!-- End Pricing-->



<?php
//get_sidebar();
get_footer();
