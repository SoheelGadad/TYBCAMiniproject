<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>catring services</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <header>
        <!--Nav bar-->
        <?php
    include('nav/nav.php')
  ?>
    </header>

    <hr>
    <section class="mainphoto"></section>
    <div class="body_name">
        <h2>Bon Appetit Caterers</h2>
        <p>
        <h5>we take all types of catering order</h5>
        </p>
        <input type="button" class="button1" onclick="parent.location='menu.php'" value="View menu">
    </div><br>

    <div class="container">
        <div class="our_Services" id="Services">
            <div class="lable">
                <h2>Catering Service Categories</h2>
            </div>
            <hr>
            <br>
            <div class="Services_menu">
                <a target="_blank" href="">
                    <img src="image/10.jpg" alt="Cinque Terre">
                </a>
                <center><input type="button" class="services_button" onclick="parent.location='menu.php'"
                        value="View menu"></center>
                <div class="desc">Wedding</div>
            </div>
            <div class="Services_menu">
                <a target="_blank" href="">
                    <img src="image/2.jpg" alt="Cinque Terre">
                </a>
                <center><input type="button" class="services_button" onclick="parent.location='menu.php'"
                        value="View menu"></center>
                <div class=" desc">Birthday
                </div>
            </div>
            <div class="Services_menu">
                <a target="_blank" href="">
                    <img src="image/8.jpg" alt="Cinque Terre">
                </a>
                <center><input type="button" class="services_button" onclick="parent.location='menu.php'"
                        value="View menu""></center>
  <div class=" desc">Other Celebration
            </div>

        </div>
    </div>
    <br>
    <div class="gallery">
        <h1>Snaps Of Our Services</h1>
    </div>
    <hr>
    <br>
    <div class="mySlides">
        <div class="numbertext">1 / 6</div>
        <img src="image/3.jpg" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">2 / 6</div>
        <img src="image/4.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 6</div>
        <img src="image/6.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <div class="numbertext">4 / 6</div>
        <img src="image/9.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <div class="numbertext">5 / 6</div>
        <img src="image/11.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <div class="numbertext">6 / 6</div>
        <img src="image/10.jpg" style="width:100%">
    </div>

    <!--<a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a> -->

    <div class="caption-container">
        <p id="caption"></p>
    </div>

    <div class="row">
        <div class="column">
            <img class="demo cursor" src="image/3.jpg" style="width:100%" onclick="currentSlide(1)" alt="">
        </div>
        <div class="column">
            <img class="demo cursor" src="image/4.jpg" style="width:100%" onclick="currentSlide(2)" alt="">
        </div>
        <div class="column">
            <img class="demo cursor" src="image/6.jpg" style="width:100%" onclick="currentSlide(3)" alt="">
        </div>
        <div class="column">
            <img class="demo cursor" src="image/9.jpg" style="width:100%" onclick="currentSlide(4)" alt="">
        </div>
        <div class="column">
            <img class="demo cursor" src="image/11.jpg" style="width:100%" onclick="currentSlide(5)" alt="">
        </div>
        <div class="column">
            <img class="demo cursor" src="image/10.jpg" style="width:100%" onclick="currentSlide(6)" alt="">
        </div>
    </div><br><br>
    <div class="about_story">
        <div class="left">
            <h2>Bon Appetit caterers</h2>
            <h1>Story</h1>
            <p>
                We created just simple bridge between you and Bon Appetit caterer “The Bon Appetit Caterers” and you got
                the Boom on your event.
                Bon Appetit caterers is the place where you can reach the best Caterers around you, Interact with them,
                Request for Quote for your events and choose
                which one best suit to your budget that too at no cost.<br>
                <!--<input type="button" name="read_more" onclick="" value="Read more">-->
                <a href="Aboutus.html">
                    <button>Read more</button>
                </a>
            </p>
        </div>
        <div class="right">
            <img src="image/1.jpg" />
        </div>
    </div>
    </div>
    <br><br>
    <!-- get in touch page-->
    <div class="container_gettouch">
        <section class="intouch_img"></section>
        <div class="intouch_p">
            <b>PLAN YOUR NEXT EVENT WITH US</b>
            <p> Sit Back and enjoy The perfect Host!</p><br>
            <button class="btn" onclick="parent.location='contact.php'">GET IN TOUCH</button>
        </div>
    </div>
    <section class="social_icon">
        <div class="social">
            <p>Stay Connected On Our Social Media</p><br>
            <ul>
                <li class="instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li class="whatsapp"><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            </ul>
        </div>
    </section>
    <!-- Footer-->
    <?php
include('footer/footer.php')
?>
    <script async src="https://cse.google.com/cse.js?cx=a5e035bd305274b7f">
    </script>
    <script src="index.js"></script>
</body>

</html>