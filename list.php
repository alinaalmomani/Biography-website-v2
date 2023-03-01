<?php
include "action/config.php";
$message = mysqli_query($con, "SELECT * FROM messages"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Orange Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="icon" type="icon/x-icon" href="icon/orange-logo.svg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/list.css">

</head>

<body>
  <section class="ftco-about ftco-counter img " id="about-section">
    <div class="container-fluid bg-dark p-5">
      <div class="jumbotron ">
        <div class="container">
          <div class="row d-flex">
            <div class="col-md-6 col-lg-5 d-flex">
              <div class="img-about img d-flex align-items-stretch">
                <div class="overlay"></div>
                <div class="img d-flex align-self-stretch align-items-center"
                  style="background-image:url(images/about-1.jpg);">
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-7 pl-lg-5 py-5">
              <div class="row justify-content-start pb-3">
                <div class="col-md-12 heading-section ftco-animate">
                  <span class="subheading">From the Coding Academy</span>
                  <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">Thank You </h2>
                  <p>A small river named Duden flows by their place and supplies it with the necessary
                    regelialia. It is a paradisematic country, in which roasted parts of sentences fly into
                    your mouth.</p>
                </div>
              </div>
              <div class="counter-wrap ftco-animate d-flex mt-md-3">
                <div class="text p-4 pr-5 bg-primary">
                  <p class="mb-0">
                    <span class="number" data-number="100">0</span>
                    <span>Employess</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </section>
  <section class="ftco-section " id="time-section">
    <div class="table-users">
      <div class="header">Users</div>

      <table class="table-striped">
        <thead>
          <tr class="text-center">
            <th>Name</th>
            <th>Message</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($row = mysqli_fetch_assoc($message)) {

            echo '<tr>

            <td>' . $row['full_name'] . '</td>

            <td>' . $row['message'] . '</td>
          </tr>';
          } ?>

        </tbody>
      </table>
    </div>

  </section>



  <footer class="ftco-footer ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Lets talk about</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
              there live the blind texts.</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate"><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
              <li class="ftco-animate"><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
              <li class="ftco-animate"><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-4">
            <h2 class="ftco-heading-2">Links</h2>
            <ul class="list-unstyled">
              <li><a href="#"><i class="fa-solid fa-arrow-right mr-2"></i>Home</a></li>
              <li><a href="#"><i class="fa-solid fa-arrow-right mr-2"></i>About</a></li>
              <li><a href="#"><i class="fa-solid fa-arrow-right mr-2"></i>Services</a></li>
              <li><a href="#"><i class="fa-solid fa-arrow-right mr-2"></i>Projects</a></li>
              <li><a href="#"><i class="fa-solid fa-arrow-right mr-2"></i></span>Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Services</h2>
            <ul class="list-unstyled">
              <li><a href="#"><i class="fa-solid fa-arrow-right mr-2"></i>Web Design</a></li>
              <li><a href="#"><i class="fa-solid fa-arrow-right mr-2"></i>Web Development</a></li>
              <li><a href="#"><i class="fa-solid fa-arrow-right mr-2"></i>Business Strategy</a></li>
              <li><a href="#"><i class="fa-solid fa-arrow-right mr-2"></i>Data Analysis</a></li>
              <li><a href="#"><i class="fa-solid fa-arrow-right mr-2"></i>Graphic Design</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><i class="fa-solid fa-location-dot icon"></i><span class="text">203 Fake St.
                    Mountain
                    View, San Francisco, California, USA</span></li>
                <li><a href="#"><i class="fa-solid fa-phone icon"></i><span class="text">+2 392 3929
                      210</span></a></li>
                <li><a href="#"><i class="fa-solid fa-envelope icon"></i><span class="text"><span class="__cf_email__"
                        data-cfemail="2940474f466950465c5b4d4644484047074a4644">[email&#160;protected]</span></span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" />
    </svg></div>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
    integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
    data-cf-beacon='{"rayId":"79ae2c760b2c9bbc","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.2.0","si":100}'
    crossorigin="anonymous"></script>
</body>

</html>