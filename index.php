<?php
include 'action/config.php';
session_start();
$sql = "SELECT * FROM messages WHERE 	approved='1' ORDER BY RAND ( )  
LIMIT 64  ";
$result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Thierry Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="refresh" content="1800">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="icon" type="icon/x-icon" href="icon/orange-logo.svg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar  ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html"><img src="icon/orange-logo.svg" width="50" height="50" /></a>
      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars"></i> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav nav mr-5 pr-5 ">
          <li class="nav-item"><a href="#toyou-section" class="nav-link"><span>To You</span></a></li>
          <li class="nav-item"><a href="#time-section" class="nav-link"><span>Milestones</span></a></li>
          <li class="nav-item"><a href="#Gallery-section" class="nav-link"><span>Gallery</span></a></li>
          <li class="nav-item"><a href="#message-section" class="nav-link"><span>From Us</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <section id="toyou-section" class="hero">
    <div class="home-slider  owl-carousel">
      <div class="slider-item ">
        <div class="overlay"></div>
        <div class="container">
          <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
            <div class="one-third order-md-last img " style="background-image:url(images/013.jpg); background-position: top ;">
              <div class="overlay"></div>
            </div>
            <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <div class="text">
                <h1 class="mb-4 mt-3"><span>Thierry Marigny</span></h1>
                <h2 class="mb-4">CEO of <span>OrangeJo</span></h2>
                <p></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slider-item">
        <div class="overlay"></div>
        <div class="container">
          <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
            <div class="one-third order-md-last img" style="background-image:url(images/014.jpg); background-position: top ;">
              <div class="overlay"></div>
            </div>
            <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <div class="text">
                <h1 class="mb-4 mt-3"> <span>Thierry Marigny</span></h1>
                <h2 class="mb-4">CEO of <span>OrangeJo</span></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-about ftco-counter img ftco-section" id="about-section">
    <div class="container">
      <div class="row d-flex">
        <div class="col-md-6 col-lg-5 d-flex">
          <div class="img-about img d-flex align-items-stretch">
            <div class="overlay"></div>
            <div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/011.jpg);">
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-7 pl-lg-5 py-5">
          <div class="row justify-content-start pb-3">
            <div class="col-md-12 heading-section ftco-animate">
              <span class="subheading">To You</span>
              <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">Dear Thierry,
              </h2>
              <p>You have simply made the Coding Academy a dream come true. And for that, we are ever grateful. It is
                your vision that
                shall put us on a continued mission to better the lives of Jordanian Youth. Thanks to you, we shall
                stand united and
                determined to empower our youth in every corner of our beloved Jordan.
                You have firmly rooted our belief in the capabilities of Jordanians and that shall always be the core
                essence of our
                dear to heart Coding Academy.
                Here we are reaping the fruits of our success with more tha 500 students enjoying an astounding 80% job
                market access. And
                this is only the beginning.
                Allow us to present this humble tribute to the great achievement that you have coded.
                <br>
                <br>
              <figcaption class="blockquote-footer">
                <cite title="Source Title">Coding Academy by Orange</cite>
              </figcaption>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class=" ftco-section " id="time-section">
    <div class="container">
      <div class="row justify-content-center pb-5">
        <div class="col-md-12 heading-section text-center ftco-animate">
          <h2 class="mb-4">Milestones</h2>
        </div>
      </div>
      <div class="timeline ">
        <div class=" co container-left ">
          <div class="date">2018</div>
          <div class="card w-100">
            <div class="card-body ">
              <h5 class="card-title"><span class="fontorange"> 2018</span> Accomplishments</h5>
              <div class="card-text ">
                <p>
                <ul>
                  <li>Promoting digital skills among the youth of Jordan, Orange Jordan launched the
                    Orange Community
                    Digital Centers
                    umbrella covering the Kingdom</li>
                  <li>Reaching the top, Orange Jordan ranked first in Jordan and sixth regionally in
                    providing digital
                    services through
                    mobile phones.</li>
                  <span class="moretext-2018 ">
                    <li>BIG by Orange summit which brought together 200 entrepreneurs from Jordan, Orange
                      FAB from
                      countries around the world,
                      and investors from various sectors. This comprehensive step was to enhance the
                      entrepreneurship
                      ecosystem locally.</li>
                    <li>Massive expansion in terms of coverage; Orange Jordan expanded its networks in
                      governorates, and
                      its fiber network to
                      more than 300,000 buildings in record time.</li>
                    <li>
                      His Majesty King Abdullah II honored Orange Jordan's CEO, Thierry Marigny at the
                      King Abdullah II
                      Award for Excellence
                      ceremony, in recognition of the company's efforts to support excellence.
                    </li>
                  </span>
                </ul>
                </p>
              </div>
            </div>
            <div class="card-footer read_more_2018 btn btn-primary">
              Read More
            </div>
          </div>
        </div>
        <div class=" co container-right">
          <div class="date">2019</div>
          <div class="card w-100">
            <div class="card-body ">
              <h5 class="card-title"><span class="fontorange"> 2019</span> Accomplishments</h5>
              <p class="card-text ">
              <p>
              <ul>
                <li>Orange Data Center became the first data center in Jordan to be awarded the prominent «Tier III»
                  certificate.</li>
                <li>Digital transformation of operations such as Orange Jordan to be first operator in Jordan to use AI
                  in Chatbot,
                  provide an e-SIM service, and a wide range of services dedicated to businesses (B2B).</li>
                <span class="moretext-2019">
                  <li>Increasing showrooms to 63 across the Kingdom, 13 of which are smart shops.

                  </li>
                  <li>Enabling easier services and inquiries and saving time through the fully updated “My Orange” App,
                    used by more than
                    300,000 customers.</li>
                  <li>
                    Inaugurating the Orange Coding Academy, the first of its kind in the Middle East.
                  </li>
                  <li>Embracing “Training for Employment” across Orange digital centers in 14 locations and
                    entrepreneurial programs that
                    have helped 37 startups since its launch in 2015.</li>
                  <li>
                    The official inauguration of the mega 3 Orange Solar Farms with a total capacity of 37 MW.
                  </li>
                  <li>Ensuring inclusion of persons with disabilities by introducing sign language at Orange shops and
                    launching the
                    “Differently Abled, Definitely Enabled” umbrella.</li>

                  <li>Raising awareness of the responsible use of technology in Jordan by launching “The Gift” campaign.
                  </li>
                  <li>Aiming to increase the company’s efficiency and enhance customers’ relations, the company
                    inaugurated new customer
                    service call centerin abdaly and karak.</li>
                  <li>Proving its commitment to excellence, Orange Jordan won 3 ISO certificates for occupational health
                    and safety
                    management systems, environmental management system standards, and private data centers free of
                    internal environmental
                    pollution.</li>
                  <li>
                    Maintaining an exemplary work environment, by obtaining the Top Employer Award for the fourth
                    consecutive year.
                  </li>
                  <li>Pursuing its mission to promote digital culture, Orange Jordan and the Ministry of Youth
                    inaugurated three Orange
                    Community Digital Centers in Balqa, Kofranja and Aqaba , Under the Patronage of the royal court
                    chief, Yousef Al Issawi.</li>
                  <li>The first telecom company in Jordan and the second in the Kingdom to receive the Recognized for
                    Excellence (R4E)
                    certificate from King Abdullah II Center for Excellence (KACE)</li>
                </span>
              </ul>
              </p>
              </p>
            </div>
            <button class="card-footer read_more_2019 btn btn-primary">
              Read More
            </button>
          </div>
        </div>
        <div class=" co container-left">
          <div class="date">2020</div>
          <div class="card w-100">
            <div class="card-body ">
              <h5 class="card-title"><span class="fontorange"> 2020</span> Accomplishments</h5>
              <p class="card-text ">
              <p>
              <ul>
                <li>As a responsible digital leader, we supported Jordan during the Covid pandemic by donating JOD 1.26
                  million and
                  offered free browsing of the official school education platform “Darsak”, and free data bundles for
                  all government
                  universities’ students.</li>
                <li>Seamless transition to working from home during lockdown, while ensuring business continuity, and
                  service delivery.</li>
                <span class="moretext-2020">
                  <li>To expand our digital programs by implementing the Innovation Space project, we received a grant
                    from the European
                    Union, and launched Orange Digital Center (ODC) under the partnership between Orange Foundation
                    Jordan and GIZ.</li>
                  <li>Towards enhancing and expanding our coverage, we introduced the latest technology and biggest
                    27000 KM fiber optic
                    network in the Kingdom.</li>
                  <li>
                    Launching Orange Money e-wallet.
                  </li>
                  <li>
                    My Orange users reached more than 660,000 users.
                  </li>
                  <li>In line with our environmental responsibility, Orange Jordan’s Solar Farm project covered more
                    than 60% of the
                    company’s energy needs.</li>
                  <li>Launching the environmental campaign, “Committed to Preserving Our World”.</li>
                  <li>Launching the first Mobile FabLab in Jordan with Shamal Start to provide youth in governorates
                    with digital
                    fabrications skills.</li>
                  <li>Recognized as one of the as one of the first companies to apply international certificate
                    standards in the kingdom, by
                    obtaining the Customer Operations Performance Centre’s certificate (COPC).
                  </li>
                </span>
              </ul>
              </p>
              </p>
            </div>
            <div class="card-footer read_more_2020 btn btn-primary">
              Read More
            </div>
          </div>
        </div>
        <div class=" co container-right">
          <div class="date">2021</div>
          <div class="card w-100">
            <div class="card-body ">
              <h5 class="card-title"><span class="fontorange"> 2021</span> Accomplishments</h5>
              <p class="card-text ">
              <p>
              <ul>
                <li>Launched the Smart Life solutions for security, ease, saving time, and energy efficiency.</li>
                <li>In line with our focus on automation and new technologies, we developed more use cases for RPA
                  (Robot Process
                  Automation), Chatbots, and Big Data/AI.</li>
                <span class="moretext-2021">
                  <li>After only a year of its launch, Orange Money achieved an increase of 78% to reach more than
                    381,000 registered
                    customers.</li>
                  <li>To enhance our digital channels, we adopted a large-scale omnichannel transformation by
                    redeveloping our main digital
                    assets (portal, e-shop, and My Orange and Orange Money applications).</li>
                  <li>
                    Extending the global group’s social reach, we established the Orange Jordan Foundation.
                  </li>
                  <li>Supporting vaccination campaigns in Jordan, we established the COVID Vaccination Station at the
                    Orange Digital
                    Village, Amman.</li>
                  <li>Bridging the digital divide for more than 3,000 young males and females through the Orange
                    Community Digital Centers.</li>
                  <li>Continuous expansion led to our social responsibility programs reaching a total of 50 locations in
                    Jordan.</li>
                  <li>To support AI-based startups, we launched the “Orange AI Startup Incubator” in partnership with
                    the Innovative
                    Startups and SMEs Fund and Princess Sumaya University for Technology.</li>
                  <li>Moving ahead in our environmental commitment, our Solar Farms reduced the company’s energy costs
                    by around 65%, and
                    the carbon emissions from our operations by more than 100%</li>
                  <li>Orange Jordan signs the women’s empowerment principles to enhance its contribution to economic
                    growth</li>
                  <li>Orange Jordan inaugurated the first “Wi-Fi Campus” to ensure the best customers’ experiences.</li>
                </span>
              </ul>
              </p>
              </p>
            </div>
            <div class="card-footer read_more_2021 btn btn-primary">
              Read More
            </div>
          </div>
        </div>
        <div class=" co container-left">
          <div class="date">2022</div>
          <div class="card w-100">
            <div class="card-body ">
              <h5 class="card-title"><span class="fontorange"> 2022</span> Accomplishments</h5>
              <p class="card-text ">
              <p>
              <ul>
                <li>A historic agreement with TRC to introduce 5G network</li>
                <li>Conducting the first of its kind in Jordan 5G pilot experience in Orange Boulevard shop - Al Abdali.
                </li>
                <span class="moretext-2022">
                  <li>To promote innovation for all, Orange launched the 5G Lab, the first of its kind in Jordan.</li>
                  <li>Inaugurating the Orange Innovation Hub as part of the Innovation Space project.</li>
                  <li>
                    Aqaba and Irbid Orange digital villages launch.
                  </li>
                  <li>Launching a new concept with the jood app for an integrated digital experience.</li>
                  <li>In less than 3 years, Orange Money became the biggest PSP in the Kingdom, with more than 730,000
                    e-wallets.</li>
                  <li>In another great milestone, Orange Money became the first Jordanian mobile wallet in metaverse.
                  </li>
                  <li>Orange Fixed internet - Fiber became the fastest internet in Jordan for 2022 according to
                    SpeedChecker.</li>
                  <li>Within our growing regional role, Telecom Egypt and Orange Jordan signed a collaboration agreement
                    to serve the Iraqi
                    market.</li>
                  <li>Introducing new concepts to prepare youth for the job market by launching the free e-learning
                    platform, Orange Coursat
                    and the giglancing program.</li>
                  <li>Launching the Studio, the first of its kind in Jordan, to support Orange employees and content
                    creators with a
                    fully-equipped, advanced studio.</li>
                  <li>Remarkable growth for our free programs across Jordan, as Orange Digital programs cover 53
                    locations.</li>
                  <ul>
                    <li> Achieving our target of expanding our programs 100% in partnership EU in our joint project,
                      Innovation space, having
                      149% of graduating students from our target.</li>
                    <li> While we exceeded our target, having 166% trained and 103% got employment opportunities through
                      our joint project with
                      GIZ</li>
                    <li> Our footprint in digital training encompasses:</li>
                    <ul>
                      <li> 4 BIG by Orange startups’ growth accelerators</li>
                      <li> 6 Entrepreneurship Incubators, one of which is AI focused</li>
                      <li> 1 Innovation Hub</li>
                      <li> 26 Orange Community Digital Centers</li>
                      <li> 6 Orange FabLabs</li>
                      <li> 6 Coding Academies and 1 coding school</li>
                      <li> Orange Coursat, a free online training platform</li>
                    </ul>
                  </ul>
                  <li>Implementing part of Orange Forest in Jerash, under the National Afforestation Project.</li>
                </span>
              </ul>
              </p>
              </p>
            </div>
            <div class="card-footer read_more_2022 btn btn-primary">
              Read More
            </div>
          </div>
        </div>
        <div class="co container-right">
          <div class="date">2023</div>
          <div class="card w-100">
            <div class="card-body ">
              <h5 class="card-title"><span class="fontorange"> 2023</span> Accomplishments</h5>
              <p class="card-text ">
              <ul>
                <li>As a continuation of its first 5G pilot in the Kingdom, Orange Jordan holds a new 5G pilot
                  experience at the
                  Innovation Hub.</li>
                <li>In a testament for the company’s commitment to excellence, Orange Jordan received the Recognized for
                  Excellence
                  certificate for the second time, with a higher rating of 5 stars.</li>
                <span class="moretext-2023">
                  <li>Championing entrepreneurship as one of the company’s CSR pillars with the graduation of the 9th
                    season of BIG by
                    Orange and onboarding the 10th season.
                  </li>
                </span>
              </ul>
              </p>
            </div>
            <div class="card-footer read_more_2023 btn btn-primary">
              Read More
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section ftco-project" id="Gallery-section">
    <div class="container">
      <div class="row justify-content-center pb-5">
        <div class="col-md-12 heading-section text-center ftco-animate">
          <span class="subheading">BEST MOMENTS</span>
          <h2 class="mb-4">Gallery</h2>
        </div>
      </div>
      <div class="row">
        <ul class="year__controls text-center">
          <li data-filter=".eighteen"><span>2018</span></li>
          <li data-filter=".nineteen"><span>2019</span></li>
          <li data-filter=".twenty"><span>2020</span></li>
          <li data-filter=".twenty-one"><span>2021</span></li>
          <li data-filter=".twenty-two"><span>2022</span></li>
          <li class="active" data-filter=" .twenty-three"><span>2023</span></li>
        </ul>
      </div>
      <div class="year__filter">
        <div class="row mix eighteen">
          <div class="col-md-8">
            <div class="project img ftco-animate img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/039.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">Big Summit</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/077.jpg);">
                  <div class="overlay"></div>
                  <div class="text text-center p-4">
                    <h3><a href="#">During a session at the MENA ICT FORUM</a></h3>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/017.jpg)">
                  <div class=" overlay"></div>
                  <div class="text text-center p-4">
                    <h3><a href="#">Fiber</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/018.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">Fiber</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/038.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">King Abdullah II Award for Excellence ceremony</a></h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row mix eighteen">
          <div class="col-md-8">
            <div class="project img ftco-animate img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/060.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">King Abdullah II Award for Excellence ceremony</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/007.jpg);">
                  <div class="overlay"></div>
                  <div class="text text-center p-4">
                    <h3><a href="#">اقوى نت للموبايل والبيت</a></h3>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/041.jpg);">
                  <div class="overlay"></div>
                  <div class="text text-center p-4">
                    <h3><a href="#">تطلق مراكز Orange الرقمية في (7)محافظات المملكة</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mix nineteen">
          <div class="col-md-4">
            <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/008.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">Coding academy</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/072.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">Customer Service Call Center</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="project img ftco-animate img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/068.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">Customer Service Call Center</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/069.jpg);">
                  <div class="overlay"></div>
                  <div class="text text-center p-4">
                    <h3><a href="#">Customer Service Call Center</a></h3>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/070.jpg);">
                  <div class="overlay"></div>
                  <div class="text text-center p-4">
                    <h3><a href="#">Customer Service Call Center</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/056.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">Data Center</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/016.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">E-Sim</a></h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row mix nineteen">
          <div class="col-md-8">
            <div class="project img ftco-animate img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/059.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">EFQM</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/050.jpg);">
                  <div class="overlay"></div>
                  <div class="text text-center p-4">
                    <h3><a href="#">Inaugurates Three New Centers Under its Digital Umbrella</a></h3>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/003.jpg);">
                  <div class="overlay"></div>
                  <div class="text text-center p-4">
                    <h3><a href="#">ISO</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/005.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">Shops</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/051.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">Shops</a></h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row mix nineteen">
          <div class="col-md-8">
            <div class="project img ftco-animate img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/025.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">Signbook</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/026.jpg);">
                  <div class="overlay"></div>
                  <div class="text text-center p-4">
                    <h3><a href="#">Solar Farm</a></h3>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/052.jpg);">
                  <div class="overlay"></div>
                  <div class="text text-center p-4">
                    <h3><a href="#">Solar Farm</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/073.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">Solar Farm</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/054.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">Solar Farm</a></h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row mix nineteen">
          <div class="col-md-8">
            <div class="project img ftco-animate img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/057.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">Solar Farm</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/048.jpg);">
                  <div class="overlay"></div>
                  <div class="text text-center p-4">
                    <h3><a href="#">The Gift</a></h3>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/007.jpg);">
                  <div class="overlay"></div>
                  <div class="text text-center p-4">
                    <h3><a href="#">Top Employer Award</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mix twenty">
          <div class="col-md-4">
            <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/076.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">COPC</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/055.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">EU</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="project img ftco-animate img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/058.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">EU</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/047.jpg);">
                  <div class="overlay"></div>
                  <div class="text text-center p-4">
                    <h3><a href="#">Mobile Fablab</a></h3>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/049.jpg);">
                  <div class="overlay"></div>
                  <div class="text text-center p-4">
                    <h3><a href="#">Orange Money</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="row mix twenty-one">
          <div class="col-md-8">
            <div class="project img ftco-animate img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/031.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">Corona</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/032.jpg);">
                  <div class="overlay"></div>
                  <div class="text text-center p-4">
                    <h3><a href="#">Corona</a></h3>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/000.jpg);">
                  <div class="overlay"></div>
                  <div class="text text-center p-4">
                    <h3><a href="#">COVID Vaccination Station</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/001.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">COVID Vaccination Station</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/002.jpeg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">COVID Vaccination Station</a></h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row mix twenty-one">
          <div class="col-md-8">
            <div class="project img ftco-animate img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/022.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">COVID Vaccination Station</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/037.jpg);">
                  <div class="overlay"></div>
                  <div class="text text-center p-4">
                    <h3><a href="#">Enhance Our Digital Channels</a></h3>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/023.jpg);">
                  <div class="overlay"></div>
                  <div class="text text-center p-4">
                    <h3><a href="#">Irbid Visit</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/027.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">ODC</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/042.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">ODC</a></h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row mix twenty-one">
          <div class="col-md-8">
            <div class="project img ftco-animate img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/053.jpg)">
              <div class=" overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">ODC</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/035.jpg);">
                  <div class="overlay"></div>
                  <div class="text text-center p-4">
                    <h3><a href="#">Orange Foundation</a></h3>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/033.jpg);">
                  <div class="overlay"></div>
                  <div class="text text-center p-4">
                    <h3><a href="#">Orange Money</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/006.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">
                    <h3><a href="#">Orange Money</a></h3>
                  </a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/074.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">SIGNS THE WOMEN’S EMPOWERMENT PRINCIPLES-WEPs</a></h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row mix twenty-one">
          <div class="col-md-8">
            <div class="project img ftco-animate img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/034.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">WiFi Campus</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/024.jpg);">
                  <div class="overlay"></div>
                  <div class="text text-center p-4">
                    <h3><a href="#">Smart Life</a></h3>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/029.jpg);">
                  <div class="overlay"></div>
                  <div class="text text-center p-4">
                    <h3><a href="#">Smart Life</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="row mix twenty-two">
          <div class="col-md-8">
            <div class="project img ftco-animate img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/075.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">5G Pilot</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/046.jpg);">
                  <div class="overlay"></div>
                  <div class="text text-center p-4">
                    <h3><a href="#">Achieving our Target of Expanding our Programs</a></h3>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/020.jpg);">
                  <div class="overlay"></div>
                  <div class="text text-center p-4">
                    <h3><a href="#">Giglancing</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/071.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">Jood</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/004.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">5G Lab</a></h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row mix twenty-two">
          <div class="col-md-8">
            <div class="project img ftco-animate img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/044.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">ODV Aqaba</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/040.jpg);">
                  <div class="overlay"></div>
                  <div class="text text-center p-4">
                    <h3><a href="#">ODV Irbid</a></h3>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/043.jpg);">
                  <div class="overlay"></div>
                  <div class="text text-center p-4">
                    <h3><a href="#">Orange Coursat</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/066.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">SpeedChecker</a></h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row mix twenty-three">
          <div class="col-md-12">
            <div class="project img ftco-animate img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/019.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">EFQM</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section contact-section ftco-no-pb" id="message-section">
    <div class="container">
      <div class="row justify-content-center mb-3 pb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <span class="subheading">Messages From Us</span>
          <h2 class="mb-4"> Send a Message to Thierry</h2>
        </div>
      </div>
      <div class="row no-gutters block-9">
        <div class="col-md-6 d-flex ">
          <div class="img d-flex" style="background-image: url(images/012.jpg);"></div>
        </div>
        <div class="col-md-6  d-flex order-md-last">
          <form action="action/message.php" method="post" class="bg-light p-4 p-md-5 contact-form" enctype="multipart/form-data">
            <div class="form-group">
              <?php
              if (isset($_SESSION['info'])) {

                echo '<div class="alert alert-warning text-center">';

                echo $_SESSION['info'];

                echo '</div>';
                unset($_SESSION['info']);
              }
              ?>
            </div>
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required>
            </div>
            <div class="form-group">
              <input type="Email" name="email" class="form-control" placeholder="Your Email" required>
            </div>
            <div class="form-group">
              <textarea name="Message" cols="30" rows="7" class="form-control" placeholder="Message" maxlength="200" required></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section">
    <div class="container ">
      <div class="container messages-rows">
        <?php
        $count = 0;
        while ($row = mysqli_fetch_assoc($result)) {
          if ($count % 4 == 0) {
            echo '<div class="row mb-5">';
          }
          // Display result data here
          echo '<div class="item col-lg-3 col-md-6 mr-1 mb-2">
          <div class="card shadow">
            <div class="card-body p-0">
              <div class="d-flex align-items-center shadow-sm m-0 p-0">
                <div class="p-3" >
                  <i class="fa-solid fa-envelope-open-text font-orange" ></i>
                </div>
                <h5 class="card-title mb-0 ms-3">' . $row['full_name'] . '</h5>
              </div>
              <p class="mt-3 p-3">' . $row['message'] . '</p>
            </div>
          </div>
        </div>';
          // End the row after every 4 results
          if (($count + 1) % 4 == 0) {
            echo '</div>';
          }
          // Increment count
          $count++;
        } ?>
      </div>
      <div class="container text-center">
        <button class="btn btn-primary" id="load-more-btn">Load More</button>
      </div>
    </div>
  </section>
  <footer class="ftco-footer ftco-section">
    <div class="container">
      <div class="row">
        <div class="ftco-footer-widget text-center">
          <h2 class="ftco-heading-2">Lets Connect</h2>
          <ul class="ftco-footer-social list-unstyled mt-5">
            <li class="ftco-animate"><a href="https://twitter.com/thierrymarigny?lang=en" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
            <li class="ftco-animate"><a href="https://jo.linkedin.com/in/thierry-marigny-43981a" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>

  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>

  <script src="js/mixitup.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>