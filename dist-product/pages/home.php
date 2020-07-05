<div class="container-fluid no-gutters">
  <div class="row no-gutters">
    <div class="col-12 no-gutters">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://images.pexels.com/photos/257030/pexels-photo-257030.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1><?php bloginfo('name') ?></h1>
              <p>Some text</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://images.pexels.com/photos/257030/pexels-photo-257030.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>First slide label</h1>
              <p>Some text</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://images.pexels.com/photos/636010/pexels-photo-636010.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>First slide label</h1>
              <p>Some text</p>
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
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12 mt-3">
        <!-- OUR MISSION -->
        <h1 class="mt-3">
          <blockquote class="blockquote slogan">
            <footer class="blockquote-footer"><i>Our Mission</i></footer>
            <h1 class="mb-0"><?php echo $homepage_slogan; ?></h1>
          </blockquote>
        </h1>
      </div>
      <div class="col-12 mt-3">
        <div class="card-deck">
          <!-- ABOUT US -->
          <div class="card" style="border-radius: 0;">
            <img src="<?php echo $card_1_image; ?>" class="pt-3 pl-3 pr-3 card-img-top rounded-circle" alt="...">
            <div class="card-body">
              <h5 class="card-title">
                <p>
                  <?php echo $card_1_title; ?>
                </p>
              </h5> 
              <p class="card-text"><?php echo $card_1_text; ?></p>             
            </div>            
          </div>
          <!-- OUR VISION -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?php echo $card_2_title; ?></h5>
              <blockquote class="blockquote">
                <p class="mb-0"><?php echo $card_2_text; ?></p>
                <footer class="blockquote-footer">Our vision</footer>
              </blockquote>                                    
            </div>
          </div>
          <!-- OUR HISTORY -->
          <div class="card">
            <img src="<?php echo $card_3_image; ?>" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $card_3_title; ?></h5>
              <p class="card-text"><?php echo $card_3_text; ?></p>
            </div>            
          </div>
        </div>
      </div>
      <div class="col-12 mt-3">
        <h3>Program & Events</h3>
        <div class="jumbotron">
            <h1 class="display-4">Hello!</h1>
            <p class="lead"><?php echo $program_and_events; ?></p>
            <hr class="my-4">
            <p><?php echo $program_and_events_calender; ?></p>
            <a class="btn btn-primary btn-lg" href="#" role="button">See more...</a>
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