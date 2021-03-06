<?php
/*
    Template Name: Home Page
*/

//CUSTOM FIELDS VARIABLES
// $value = get_field( "text_field" );
//
$homepage_title       = get_field( 'home_page_title' );
$homepage_slogan      = get_field( 'home_page_slogan' );
//
$card_1_title       = get_field( 'card_1_title' );
$card_1_image       = get_field( 'card_1_image' );
$card_1_text      = get_field( 'card_1_text' );
//
$card_2_title       = get_field( 'card_2_title' );
$card_2_image       = get_field( 'card_2_image' );
$card_2_text      = get_field( 'card_2_text' );
//
$card_3_title       = get_field( 'card_3_title' );
$card_3_image       = get_field( 'card_3_image' );
$card_3_text      = get_field( 'card_3_text' );
//
$program_and_events = get_field( 'program_and_events' );
$program_and_events_1 = get_field( 'program_and_events_1' );
$program_and_events_2 = get_field( 'program_and_events_2' );
$program_and_events_3 = get_field( 'program_and_events_3' );
$program_and_events_4 = get_field( 'program_and_events_4' );
$program_and_events_5 = get_field( 'program_and_events_5' );
$program_and_events_calender = get_field( 'program_and_events_calender' );

get_header();
?>

<?php /* include get_template_directory() . './pages/home.php'; */?>
<div class="container-fluid no-gutters">
  <div class="row no-gutters">
    <div class="col-12 no-gutters">
      <div id="cmcmCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
        <ol class="carousel-indicators">
          <li data-target="#cmcmCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#cmcmCarousel" data-slide-to="1"></li>
          <li data-target="#cmcmCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
        	<!--  
        		SLIDE 1  
        	-->
          <div class="carousel-item active">
            <img src="https://images.pexels.com/photos/2014775/pexels-photo-2014775.jpeg?auto=compress&cs=tinysrgb&dpr=1" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1><?php // bloginfo('name') ?></h1>
              <img src="<?php echo $homepage_slogan; ?>" class="card-img-top img-fluid" style="width: 40%" alt="...">            	
            </div>
          </div>
          <!-- 
          	SLIDE 2 
          -->
          <div class="carousel-item">
            <img src="https://images.pexels.com/photos/257030/pexels-photo-257030.jpeg?auto=compress&cs=tinysrgb&dpr=1" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>First slide label</h1>
              <p>Some text</p>
            </div>
          </div>
          <!-- 
          	SLIDE 3 
          -->
          <div class="carousel-item">
            <img src="https://images.pexels.com/photos/636010/pexels-photo-636010.jpeg?auto=compress&cs=tinysrgb&dpr=1" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>First slide label</h1>
              <p>Some text</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#cmcmCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#cmcmCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> 
    </div> 
  </div>
  <div class="container"> 
    <div class="row">      
      <div class="col-12 mt-3">
        <div class="card-deck">
          <!-- ABOUT US  -->
          <div class="card" style="border-radius: 0; border: 0;">
            <img src="<?php echo $card_1_image; ?>" class="pt-3 pl-3 pr-3 card-img-top rounded-circle" alt="...">
            <div class="card-body">
              <h5 class="card-title">
                <?php echo $card_1_title; ?>
              </h5> 
              <p class="card-text"><?php echo $card_1_text; ?></p>             
            </div>            
          </div>
          <!-- OUR VISION  -->
          <div class="card text-center" style="border-radius: 0; border: 0;">
            <div class="card-body">
              <h5 class="card-title">Our God Is Able...</h5>
              <p class="mb-0"><?php // echo $card_2_text; ?></p>
              <!-- <img src="<?php echo $card_2_image; ?>" class="card-img-top img-fluid" alt="...">       -->
              <blockquote class="blockquote">
                <footer class="blockquote-footer">Slogan</footer>
              </blockquote>
            </div>
          </div>
          <!-- OUR HISTORY -->
          <div class="card" style="border-radius: 0; border: 0;">
            <img src="<?php echo $card_3_image; ?>" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $card_3_title; ?></h5>
              <p class="card-text"><?php echo $card_3_text; ?></p>
            </div>            
          </div>
        </div>
      </div>
      <!-- OUR MISSION -->
      <div class="col-12">
        <h4>Our Mission</h4>
        <ul>
          <ol>
            To reach out and enlarge the body of Jesus Christ worldwide, all to the glory of God, and hence, celebrate God's presence in worship and magnify Him- <i>Psalm 34:4; 60:31.</i>
          </ol>
          <ol>
            To communicate His Word through Evangelism - <i>Matthew 28:19-20; Mark 16:16.</i>
          </ol>
          <ol>
            To reach and preach to the world, thereby, educating children of God through discipleship - <i>Luke 14:25-27, 33; Matthew 10:42.</i>
          </ol>
          <ol>
            To make love the cardinal focus in the service of God and mankind - <i>Matthew 23:27-40.</i>
          </ol>
        </ul>
      </div>
      <!-- Program & Events -->
      <div class="col-12 mt-3">
        <h3>Program & Events</h3>
        <div id="programSection">
          <div class="jumbotron jumbotron-fluid">
              <!-- <h1 class="display-4">Hello Solomon!</h1> -->
              <!-- CAROUSEL   -->
              <div id="program_and_events_carosuel" class="carousel slide p-5" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#program_and_events_carosuel" data-slide-to="0" class="active"></li>
                  <li data-target="#program_and_events_carosuel" data-slide-to="1"></li>
                  <li data-target="#program_and_events_carosuel" data-slide-to="2"></li>
                  <li data-target="#program_and_events_carosuel" data-slide-to="3"></li>
                  <li data-target="#program_and_events_carosuel" data-slide-to="4"></li>
                  <li data-target="#program_and_events_carosuel" data-slide-to="5"></li>
                </ol>
                <div class="carousel-inner"> 
                  <div class="carousel-item active">
                    <img src="<?php echo $program_and_events_1; ?>" class="d-block w-100 img-fluid" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="<?php echo $program_and_events_2; ?>" class="d-block w-100 img-fluid" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="<?php echo $program_and_events_3; ?>" class="d-block w-100 img-fluid" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="<?php echo $program_and_events_4; ?>" class="d-block w-100 img-fluid" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="<?php echo $program_and_events_5; ?>" class="d-block w-100 img-fluid" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#program_and_events_carosuel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#program_and_events_carosuel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              <p class="lead"><?php echo $program_and_events; ?></p>          
          </div>
        </div>
      </div>
      <div class="col-12 mt-3">
        <h3>Children & Youth</h3>
        <div class="jumbotron">
            <h1 class="display-4">Hello!</h1>
            <p class="lead"><?php echo $program_and_events; ?></p>
            <hr class="my-4">
            <p><?php echo $program_and_events_calender; ?></p>
            <a class="btn btn-primary btn-lg" href="#" role="button">See more...</a>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col mt-3">
            <h3>Giving</h3>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur ipsam tempora debitis
            </p>
        </div>
        <div class="col mt-3">
            <h3>Connect with us</h3>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <i class="fa fa-2x fa-instagram" aria-hidden="true"></i>
                </li>
                <li class="list-group-item">
                    <i class="fa fa-2x fa-twitter" aria-hidden="true" style="color: lightseagreen;"></i>
                </li>
                <li class="list-group-item">
                    <i class="fa fa-2x fa-facebook" aria-hidden="true" style="color: blue;"></i>
                </li>          
                <li class="list-group-item">
                    <i class="fa fa-2x fa-youtube" aria-hidden="true" style="color: red;"></i>
                </li>   
            </ul>
        </div>
    </div>

    <div class="row">
      <div class="col mt-3">
      <h3>Watch Us</h3>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
        </div>  
        <hr class="my-4">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
        </div>        
      </div>
      <div class="col mt-5">
        <img src="https://images.pexels.com/photos/3758104/pexels-photo-3758104.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="img-fluid p-5">
      </div>      
    </div>
    
    <div class="row">
      <div class="col-8 mt-3">
        <h3>Contact Us</h3>
          <form>
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label for="exampleFormControlInput1">First Name:</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
              </div>
              <div class="col-6 mt-3">
                <div class="form-group">
                  <label for="exampleFormControlInput1">Last Name</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Email address</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Example textarea</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
          </form>
      </div>
      <div class="col-4 col-sm mt-2">
        <h3>Address</h3>
        <address>
          <strong>Twitter, Inc.</strong><br />
          1355 Market St, Suite 900<br />
          San Francisco, CA 94103<br />
          <abbr title="Phone">P:</abbr> (123) 456-7890
        </address>
      </div>
    </div>
  </div>
</div>
	
<?php
get_footer();
