<!doctype html>
<html lang="en">
  <head>
    <title>Saint's</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--My css-->
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/landingStyle.css">
</head>
  <body>
      <div class="covid"><p id="covid-txt">STAY HOME SAVE LIVES STOP COVID-9 !! </p></div>
    <nav>
        <ul class="navbar">
            <li><button>SignUp/Login</button></li>
            <li><img src="images/6.png" id="heart"></li>
            <li><img src="images/3.png" id="heart"></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li id="logo">SAINT'S</li>
            <div class="search-container">
  <form action="/action_page.php">
    <input type="text" placeholder="Search.." name="search">
    <button type="submit"><img src="images/search.png" id="search"></button>
  </form>
</div>
        </ul>
    </nav>

    <div class="App">
         
      <div class="first">
          <hr id="hr-first"><h2 id="newin">DINING <br/>ROOM</h2>
      </div>

      <div class="mid">
          <div class="top">
              <h2>LIVING</h2>
          </div>
          <div class="bottom">
              <h2>BATHROOM</h2>
          </div>
      </div>

      <div class="last">
      <hr id="hr-last"> <h2 id="plus">BEDROOM</h2>
      </div>

  </div>

  <div class="Coming-Soon">
      <div class="left">
          <h1 id="header">Saint's Kitchen!</h1>
          <p id="description">
              Welcome to Saint's Kitchen!<br> our new top of the line kichen <br>could be yours in just a short few months<br>
              This collection entails everything from<br> a rustic touch to a modern flair<br>We at Saint's are excited to <br>introduce Saint's Kitchen<br>
              <br>
              Coming to you...
              <h3>November 18 2020!</h3>

          </p>
  </div>
      <div class="right">
          <div class="new"><h4>COMING</h4></div>
          <!--Carousel here-->
          <div id="carouselId" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                  <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselId" data-slide-to="1"></li>
                  <li data-target="#carouselId" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                      <img src="images/10 (1).jpg" id="soon-hero" alt="First slide">
                  </div>
                  <div class="carousel-item">
                      <img src="images/10 (2).jpg" id="soon-hero" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                      <img src="images/10 (3).jpg" id="soon-hero" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                      <img src="images/10.jpg" id="soon-hero" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                      <img src="images/10 (4).jpg" id="soon-hero" alt="Third slide">
                  </div>
              </div>
              <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
          <div class="newer"><h4>SOON</h4></div>
      </div>
      </div>

      <div class="Featured">
          <h3 id="customer-txt">Customer Favourites</h3>
          <div class="features"><img src="images/14 (3).jpg" alt="" id="feature-img"></div>
          <div class="features"><img src="images/14 (1).png" alt="" id="feature-img"></div>
          <div class="features"><img src="images/15 (2).png" alt="" id="feature-img"></div>
          <div class="features"><img src="images/17 (4).jpg" alt="" id="feature-img"></div>
      </div>

      <div class="gallery">
      <div class="row">
  <div class="column">
    <img src="img_nature.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img_snow.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img_mountains.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img_lights.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="img_nature_wide.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="img_snow_wide.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="img_mountains_wide.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="img_lights_wide.jpg" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="img_nature_wide.jpg" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_snow_wide.jpg" style="width:100%" onclick="currentSlide(2)" alt="Snow">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_mountains_wide.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_lights_wide.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
  </div>
</div>
      </div>

      <?php include("inc/footer.php");?>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>