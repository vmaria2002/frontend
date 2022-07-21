<?php
error_reporting(0);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
$mail = new PHPMailer(true);
$output = '';

if (isset($_POST['submit'])) {
  $name = $_POST['firstName'] . " " . $_POST['lastName'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $checked = $_POST['newsletter'];
  $contact = $_POST['contact'];
  $fileport = $_FILES['formFile']['tmp_name'];
  $filename = $_FILES['formFile']['name'];

  if ($checked == true) {
    $newsletter = "Subscribed";
  } elseif ($checked == false) {
    $newsletter = "Unsubscribed";
  }

  if ($contact == "1") {
    $how = "Email";
  } elseif ($contact == "2") {
    $how = "Phone";
  } elseif ($contact == "3") {
    $how = "Message";
  }


  try {
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'in-v3.mailjet.com';
    $mail->SMTPAuth = true;
    $mail->Username = '748d4851fe0c554f2ead0478f5c41e70';
    $mail->Password = 'cf5232c2ebb48ea4686f7f4db6f2423a';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;


    $mail->setFrom('maria.vasilache02@gmail.com');

    $mail->addAddress('maria.vasilache02@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Form Submission';
    $mail->Body = "<p>Name : $name <br>Email : $email <br>Message : $message<br>Newsletter: $newsletter<br>Contact method: $how </p>";
    $mail->addAttachment($fileport, $filename);

    $result = $mail->send();
    $output = '<div class="alert alert-success">
                  <p>Thank you for contacting us! Well get back to you soon!</p>
                </div>';
  } catch (Exception $e) {
    $output = '<div class="alert alert-danger">
                  <p>' . $e->getMessage() . '</p>
                </div>';
  }
}

?>

<!doctype html>
<html lang="en">

<head>
  <title>D&P Communications</title>
  <link rel="icon" type="image/x-icon" href="/Imagini/LogoMic.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/aos.css">
</head>

</html>
</head>

<body>

  <nav class="navbar navbar-expand-lg" id="paginastart">
    <div class="container">
      <a href="#paginastart" target="_blank"><img class="img-fluid" src="Imagini/Logo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse navbarNavDropdown" style="justify-content:end;">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Locations
              <i class="fa-solid fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Link 1</a></li>
              <li><a class="dropdown-item" href="#">Link 2</a></li>
              <li><a class="dropdown-item" href="#">Link 3</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Support
              <i class="fa-solid fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Link 1</a></li>
              <li><a class="dropdown-item" href="#">Link 2</a></li>
              <li><a class="dropdown-item" href="#">Link 3</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Corporate
              <i class="fa-solid fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Link 1</a></li>
              <li><a class="dropdown-item" href="#">Link 2</a></li>
              <li><a class="dropdown-item" href="#">Link 3</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Contact
              <i class="fa-solid fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#formularul" target="_blank">Form</a></li>
              <li><a class="dropdown-item" href="#">Link 2</a></li>
              <li><a class="dropdown-item" href="#">Link 3</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <nav class="navbar2 navbar-expand-lg navbar-light bg-light1">
    <div class="container">
      <div class="spatiu">
        <div class="collapse navbar-collapse navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-dark1" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Residential
                <i class="fa-solid fa-angle-down"></i>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Link 1</a></li>
                <li><a class="dropdown-item" href="#">Link 2</a></li>
                <li><a class="dropdown-item" href="#">Link 3</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-dark1" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Business
                <i class="fa-solid fa-angle-down"></i>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Link 1</a></li>
                <li><a class="dropdown-item" href="#">Link 2</a></li>
                <li><a class="dropdown-item" href="#">Link 3</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark1" href="#">Service Area</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark1" href="#">Success Stories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark1" href="#paginastart">Get Started</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark1 font-weight-bold" href="#">Call Us 800-311-7340</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <div class="slide1" style="background-image:url('Imagini/Background1.png'); background-size: 100%; background-repeat:no-repeat;" id="ps">
    <div class="container">
      <h3 class="font line-space" data-aos="fade-up">WELCOME TO D & P COMMUNICATIONS</h3>

      <div class="row">
        <div class="col-xl">
          <h1 class="subt line-sp margin text-white" data-aos="fade-up">Connecting You to What Matters</h1>
        </div>
        <div class="col-xl">
          <p class="text lines text-struct1 margin" data-aos="fade-up">D & P Communications serves residents and
            businesses with a full suite of communication & technology services, including high-speed Internet,
            video entertainment, phone systems, and network management.
          </p>
        </div>

      </div>
      <div class="marginebutton">
        <div class="row marginbutton">
          <div class="col-md text-center background">
            <a href="tel:800-311-7340" class="text-white textdec"><img class="img-padding" src="Imagini/Call.png" alt="call"> Call
              800-311-7340</a>
          </div>
          <div class="col-md text-center background">
            <a href="#paginastart" class="text-white textdec"><img class="img-padding" src="Imagini/Get Started.png" alt="get-started">
              Get
              Started</a>
          </div>
          <div class="col-md text-center background">
            <a href="#paginastart" class="text-white textdec"><img class="img-padding" src="Imagini/Live Chat.png" alt="live-chat">Live
              Chat</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="slide2" style="background-image: url(Imagini/Background2.png);background-color: #161616; width: 100%;background-repeat: no-repeat;background-position: center;">
    <div class=" paddingbutton" style=" padding-top: 50px;">
      <div class="container" style=" padding-top: 25px;">
        <h3 class="col-md-7" style="  font-size: 15px;
  color: red; " data-aos="fade-up">FIBER OPTICS</h3>
        <h1 class="col-md-7" style="  font-size: 30px;
  color: white;
  margin-top: 30px;" >Enjoy the Most Advanced Technology Available with Fiber Optics</h1>
        <h1 class="text lines text-slide2 col-md-6" data-aos="fade-up">We are continuously expanding and maintaining thousands of miles of
          fiber optic cabeling woven together by a grid of dozens of points of presence and data centers housing smart
          carrier grade switches and routers, connecting the communities we serve to each other and to people and
          places around the globe. We are connected to the Internet backbone at multiple peering points in Chicago,
          Southfield, and Toledo.
</h1>
        <!-- fluid: is responsive -->
        <img class="img-fluid img2-style" src="Imagini/Img2.png">
      </div>
    </div>
  </div>

  <div class="slide3" style="background-color: #161616;">
    <div class="container" data-aos="fade-up">
      <div class="style3" style="  position: relative;
  top: 100px;">
        <img class="img3-style"style="width: 100%;" src="Imagini/ImgCasa.png">
        <div class="padding">
          <h3 class="col-md-7" style="font-size: 15px;
  color: red; ">HOMES SERVED</h3>
          <div1 class="text-dark col-md-12" style="font-size: 10px;
  color: black;
  margin-top: 30px;">Serving Over 50,000 Residential Users. We are happy to serve over 9,000 homes and 20,000
            residents  with Internet, video entertainment, and phone services. This includes residents in the towns of Lenawee
            and Western Monroe counties, as well as remote residences and farms throughout the area. We currently
            offer up to 500 Mbps Internet download speeds in the towns and up to 50 Mbps Internet download speeds in
            remote areas. For video entertainment, we offer many options for every budget and viewing style.
        </div>
      </div>
    </div>
  </div>


  <div class="slide4" style="text-align: center;">
    <div class="container" >
      <h3 class="style4" style=" margin-top: 120px; font-size: 15px;
  color: red;" data-aos="fade-up">LOCAL BUSINESSES SERVED</h3>

      <h1 class="text-dark" style="  font-size: 30px;
  color: black;
  margin-top: 30px;">Serving Over 1,300 Businesses</h1>
      <p class="lines text-dark text text-slide4" data-aos="fade-up">We are proud to serve over 1,300 commercial entities in
        the local area, including small-to-large businesses, hospital systems, K-12 school districts, higher
        education,
        non-profits, manufacturing and municipalities including:
      </p>
      <div class="swiper" style="width: 100%;height: 100%; filter: grayscale(1);
  opacity: 0.5;">
        <div class="swiper-wrapper">
          <div class="swiper-slide  imagineamea"><img src="Imagini/Promedica Logo.png"></div>
          <div class="swiper-slide imagineamea"><img src="Imagini/Promedica Logo.png"></div>
          <div class="swiper-slide imagineamea"><img src="Imagini/Promedica Logo.png"></div>
          <div class="swiper-slide imagineamea"><img src="Imagini/Promedica Logo.png"></div>
          <div class="swiper-slide imagineamea"><img src="Imagini/Promedica Logo.png"></div>
          <div class="swiper-slide imagineamea"><img src="Imagini/Promedica Logo.png"></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
          var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 5,
            slidesPerGroup: 1,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
          });
        </script>
      </div>
    </div>
  </div>
  <div class="slide5" style="background-image: url(Imagini/Background5.png);
  width: 100%;
  text-align: center;">
    <div class="container">
      <h3 class="style-title5" style="  font-size: 15px;
  color: red;   padding-top: 120px;
  margin-bottom: 30px;" data-aos="fade-up">COMMUNITY PARTNERS</h3>

      <h1 class="text-dark" style=" font-size: 30px;
  color: white;
  margin-top: 30px;">Conecting to Our Community</h1>

      <p class="lines text-dark text text-struct" data-aos="fade-up">Our community partners are a key element of our brand. D & P
        Communications is honored to work with over 200
        local organizations and associations, including:
      </p>

      <div class="swiper mySwiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img class="img-swiper1" src="Imagini/Goodwill_Industries_Logo.png"></div>
          <div class="swiper-slide"><img class="img-swiper2" src="Imagini/lenaweelogo.png"></div>
          <div class="swiper-slide"><img class="img-swiper3" src="Imagini/The_Salvation_Army.png"></div>
          <div class="swiper-slide"><img class="img-swiper4" src="Imagini/CIS_Petersburg.png"></div>
          <div class="swiper-slide"><img class="img-swiper5" src="Imagini/MDA_logo.png"></div>
          <div class="swiper-slide"><img class="img-swiper6" src="Imagini/Habitat_for_humanity.png"></div>
          <div class="swiper-slide"><img class="img-swiper7" src="Imagini/ACLClogo.png"></div>
          <div class="swiper-slide"><img class="img-swiper1" src="Imagini/Goodwill_Industries_Logo.png"></div>
          <div class="swiper-slide"><img class="img-swiper2" src="Imagini/lenaweelogo.png"></div>
          <div class="swiper-slide"><img class="img-swiper3" src="Imagini/The_Salvation_Army.png"></div>
          <div class="swiper-slide"><img class="img-swiper4" src="Imagini/CIS_Petersburg.png"></div>
          <div class="swiper-slide"><img class="img-swiper5" src="Imagini/MDA_logo.png"></div>
          <div class="swiper-slide"><img class="img-swiper6" src="Imagini/Habitat_for_humanity.png"></div>
          <div class="swiper-slide"><img class="img-swiper7" src="Imagini/ACLClogo.png"></div>
        </div>
        <div class="swiper-button-next grayscale"></div>
        <div class="swiper-button-prev grayscale"></div>
      </div>
    </div>
  </div>

  <div class="slide6" style="background-image: url(Imagini/Background6.png);
  background-color: #161616;
  width: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;">
    <div class="container text-center">
      <h3 class="style-title5" style="  font-size: 15px;
  color: red;   padding-top: 50px;" data-aos="fade-up">FIBER OPTICS</h3>

      <h1 class="subtw" style="font-size: 30px;
  color: white;
  margin-top: 30px;   width: 100%;">Bringing You a Faster, More Reliable Network with Fiber Optics</h1>

      <p class="lines text text-struct" data-aos="fade-up">You deserve the highest levels of availability and performance - and we're
        here
        to
        exceed your expectations. Welcome to D & P Communications.
      </p>
      <div class="row">
        <div class="col-md-6 pos-image" data-aos="fade-up">
          <div class="imgl" style=" margin: 20px;">
            <img src="Imagini/Img6.1.png">
            <button class="button1 btn font-weight-bold" type="button">For Homes</button>
          </div>
        </div>
        <div class="col-md-6 pos-image" data-aos="fade-up">
          <div class="imgl" style=" margin: 20px;">
            <img src="Imagini/Img6.2.png">
            <button class="button1 btn font-weight-bold" type="button">For Businesses</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="slide7" style="background-image: url(Imagini/Background7.png);
  background-color: #161616;
  width: 100%;
  background-size: cover;
  background-position: center;">
    <div class="container">
      <div class="text-center">
        <h3 class="style-title7" style="  font-size: 15px;
  color: red;  padding-top: 50px;" data-aos="fade-up">LOCALLY INVESTED</h3>

        <h1 class="subt-width" style="  font-size: 30px;
  color: white;
  margin-top: 30px;    width: 100%;">We're In Your Neighborhood</h1>

        <p class="lines text text-struct" data-aos="fade-up">You deserve the highest levels of availability and performance - and we're
          here
          to exceed your expectations. Welcome to D & P Communications.
        </p>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row mx-auto justify-content-center">
        <div class="text-image7" style="margin-top: 10px;">
          <div class="col-md padding7" style="padding-left: 3px !important;
  padding-right: 3px !important;">
            <img class="imaginheight" src="Imagini/Adrian.png">
            <div class="centered">ADRIAN</div>
          </div>
        </div>
        <div class="text-image7" style="margin-top: 10px;">
          <div class="col-md padding7" style="padding-left: 3px !important;
  padding-right: 3px !important;">
            <img src="Imagini/Blissfield.png">
            <div class="centered">BLISSFIELD</div>
          </div>
        </div>
        <div class="text-image7" style="margin-top: 10px;">
          <div class="col-md padding7" style="padding-left: 3px !important;
  padding-right: 3px !important;">
            <img src="Imagini/Dundee.png">
            <div class="centered">DUNDEE</div>
          </div>
        </div>
        <div class="text-image7" style="margin-top: 10px;">
          <div class="col-md padding7" style="padding-left: 3px !important;
  padding-right: 3px !important;">
            <img src="Imagini/Petersburg.png">
            <div class="centered">PETERSBURG</div>
          </div>
        </div>
        <div class="text-image7" style="margin-top: 10px;">
          <div class="col-md padding7" style="padding-left: 3px !important;
  padding-right: 3px !important;">
            <img src="Imagini/Tecumseh.png">
            <div class="centered">TECUMSEH</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="struct8">
    <div class="container text-center">
      <h3 class="style-title7" style="  font-size: 15px;
  color: red; " data-aos="fade-up">SUCCESS STORIES</h3>
      <h1 class="subt-width1" style="  font-size: 30px;
  color: black;
  margin-top: 30px;">Find Out What People Are Saying About D & P Communications</h1>
      <p class="lines text text-struct text-dark" data-aos="fade-up">Our mission is to serve you. It's all about our community. Find out
        what
        others are saying about their experiences with D & P Communications.
      </p>
      <button class="button1 btn font-weight-bold btn-margin" type="button">Read Testimonials</button>
    </div>

    <div class="container">

      <div class="row g-1">


        <div class="col-12 col-md-6 col-lg-4">

          <div class="card" data-aos="fade-up">
            <img class="card-img-top" src="Imagini/Img8.1.png" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title text-center text-dark margtop line-height" style="  font-size: 30px;
  color: white;
  margin-top: 30px;">"I Can Use Multiple Devices without
                Interruption"</h3>
              <h5 class="line text-center" style="  font-size: 15px;
  color: red; ">Review from Lexi Murray</h5>
              <p class="cardtext1 lines" style="margin-left: 37.5px;
  margin-right: 37.5px;
  font-size: 16.5px;">D & P Communications has been my service provider for several years following
                their buyout of TC3net. They have excellent customer service at their local service locations. They have
                great Internet service, which is reliable and with the new fiber optic lines installed and high DSL, I
                am able to work from home for my clients without interruptions and run multiple devices on my home Wi-Fi
                systems withoyt lag time.
              </p>
              <p class="cardtext1 lines" style="margin-left: 37.5px;
  margin-right: 37.5px;
  font-size: 16.5px;"> The folks at D&P are knowledgeable and very customer service
                orientated. I would recommend their services to anyone new to the area!
              </p>
            </div>
          </div>


          <div class="card" data-aos="fade-up">
            <img class="card-img-top" src="Imagini/Img8.2.png" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title text-center text-dark cardwidth margtop line-height" style="  font-size: 30px;
  color: white;
  margin-top: 30px;">"Wish I'd Switched to D &
                P Sooner"</h3>
              <h5 class="line text-center" style="  font-size: 15px;
  color: red; ">Review from Robert S.</h5>
              <p class="cardtext2 lines" style=" margin-left: 39.5px;
  margin-right: 39.5px;
  font-size: 16.5px;">Fantastic! D&P advertised 110 MBPS download. I am getting - through
                my router 107 MBPS. Upload speed is 23 MBPS. Can't argue with that can you? Compare to Frontier DSL
                which was 3.5 MBPS download (they promised 10 I think) and 0.25 MBPS upload. Pathetic! They started out
                with at about 8.5 MBPS and then after a couple weeks I was lucky to hit 4 MBPS! This was after they
                begged for me to stay with them! Well finally I switched. I wish I would have done it sooner! D&P came
                out, installed the equipment quickly an efficiently. The installer was knowledgeable and professional.
                They arrived around the time they said they would - a little earlier actually. I'm so happy! I'll update
                later if anything changes but, freak'n awesome so far...
              </p>
            </div>
          </div>

          <div class="card" data-aos="fade-up">
            <img class="card-img-top" src="Imagini/Img8.3.png" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title" style="  font-size: 30px;
  color: white;
  margin-top: 30px;" text-center text-dark cardwidth margtop line-height">"Great Reliable Service"
              </h3>
              <h5 class="line text-center" style="  font-size: 15px;
  color: red; ">Review from Kevon Binder</h5>
              <p class="cardtext3 lines" style=" margin-left: 37px;
  margin-right: 37px;
  font-size: 16.5px;">We have D & P for our home in Blissfield. Great reliable service! Also have a
                business account in Tecumseh for symmetrical fiber, and it's been almost 100% without interruption. The
                one time we slowed speed for a couple hours, we were warned 48hrs in advance. Great company!
              </p>
            </div>
          </div>
        </div>


        <div class="col-12 col-md-6 col-lg-4">


          <div class="card" data-aos="fade-up">
            <img class="card-img-top" src="Imagini/Img8.2.png" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title text-center text-dark cardwidth margtop line-height" style="  font-size: 30px;
  color: white;
  margin-top: 30px;">"Wish I'd Switched to D &
                P Sooner"</h3>
              <h5 class="line text-center" style="  font-size: 15px;
  color: red; ">Review from Robert S.</h5>
              <p class="cardtext2 lines" style=" margin-left: 39.5px;
  margin-right: 39.5px;
  font-size: 16.5px;">Fantastic! D&P advertised 110 MBPS download. I am getting - through
                my router 107 MBPS. Upload speed is 23 MBPS. Can't argue with that can you? Compare to Frontier DSL
                which was 3.5 MBPS download (they promised 10 I think) and 0.25 MBPS upload. Pathetic! They started out
                with at about 8.5 MBPS and then after a couple weeks I was lucky to hit 4 MBPS! This was after they
                begged for me to stay with them! Well finally I switched. I wish I would have done it sooner! D&P came
                out, installed the equipment quickly an efficiently. The installer was knowledgeable and professional.
                They arrived around the time they said they would - a little earlier actually. I'm so happy! I'll update
                later if anything changes but, freak'n awesome so far...
              </p>
            </div>
          </div>

          <div class="card" data-aos="fade-up">
            <img class="card-img-top" src="Imagini/Img8.3.png" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title text-center text-dark cardwidth margtop line-height" style="  font-size: 30px;
  color: white;
  margin-top: 30px;">"Great Reliable Service"
              </h3>
              <h5 class="line text-center" style="  font-size: 15px;
  color: red; ">Review from Kevon Binder</h5>
              <p class="cardtext3 lines" style=" margin-left: 37px;
  margin-right: 37px;
  font-size: 16.5px;">We have D & P for our home in Blissfield. Great reliable service! Also have a
                business account in Tecumseh for symmetrical fiber, and it's been almost 100% without interruption. The
                one time we slowed speed for a couple hours, we were warned 48hrs in advance. Great company!
              </p>
            </div>
          </div>


          <div class="card" data-aos="fade-up">
            <img class="card-img-top" src="Imagini/Img8.1.png" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title text-center text-dark margtop line-height" style="  font-size: 30px;
  color: white;
  margin-top: 30px;">"I Can Use Multiple Devices without
                Interruption"</h3>
              <h5 class="line text-center" style="  font-size: 15px;
  color: red; ">Review from Lexi Murray</h5>
              <p class="cardtext1 lines"style="margin-left: 37.5px;
  margin-right: 37.5px;
  font-size: 16.5px;">D & P Communications has been my service provider for several years following
                their buyout of TC3net. They have excellent customer service at their local service locations. They have
                great Internet service, which is reliable and with the new fiber optic lines installed and high DSL, I
                am able to work from home for my clients without interruptions and run multiple devices on my home Wi-Fi
                systems withoyt lag time.
              </p>
              <p class="cardtext1 lines"style="margin-left: 37.5px;
  margin-right: 37.5px;
  font-size: 16.5px;">The folks at D&P are knowledgeable and very customer service
                orientated. I would recommend their services to anyone new to the area!
              </p>
            </div>
          </div>
        </div>




        <div class="col-12 col-md-6 col-lg-4">
          <div class="card" data-aos="fade-up">
            <img class="card-img-top" src="Imagini/Img8.3.png" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title text-center text-dark cardwidth margtop line-height" style=" font-size: 30px;
  color: white;
  margin-top: 30px;">"Great Reliable Service"
              </h3>
              <h5 class="line text-center" style="  font-size: 15px;
  color: red; ">Review from Kevon Binder</h5>
              <p class="cardtext3 lines" style=" margin-left: 37px;
  margin-right: 37px;
  font-size: 16.5px;">We have D & P for our home in Blissfield. Great reliable service! Also have a
                business account in Tecumseh for symmetrical fiber, and it's been almost 100% without interruption. The
                one time we slowed speed for a couple hours, we were warned 48hrs in advance. Great company!
              </p>
            </div>
          </div>


          <div class="card" data-aos="fade-up">
            <img class="card-img-top" src="Imagini/Img8.1.png" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title text-center text-dark margtop line-height" style="  font-size: 30px;
  color: white;
  margin-top: 30px;">"I Can Use Multiple Devices without
                Interruption"</h3>
              <h5 class="line text-center" style="  font-size: 15px;
  color: red; ">Review from Lexi Murray</h5>
              <p class="cardtext1 lines"style="margin-left: 37.5px;
  margin-right: 37.5px;
  font-size: 16.5px;">D & P Communications has been my service provider for several years following
                their buyout of TC3net. They have excellent customer service at their local service locations. They have
                great Internet service, which is reliable and with the new fiber optic lines installed and high DSL, I
                am able to work from home for my clients without interruptions and run multiple devices on my home Wi-Fi
                systems withoyt lag time.
              </p>
              <p class="cardtext1 lines"style="margin-left: 37.5px;
  margin-right: 37.5px;
  font-size: 16.5px;">The folks at D&P are knowledgeable and very customer service
                orientated. I would recommend their services to anyone new to the area!
              </p>
            </div>
          </div>



          <div class="card" data-aos="fade-up">
            <img class="card-img-top" src="Imagini/Img8.2.png" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title text-center text-dark cardwidth margtop line-height" style="  font-size: 30px;
  color: white;
  margin-top: 30px;">"Wish I'd Switched to D &
                P Sooner"</h3>
              <h5 class="line text-center" style="  font-size: 15px;
  color: red; ">Review from Robert S.</h5>
              <p class="cardtext2 lines"style=" margin-left: 39.5px;
  margin-right: 39.5px;
  font-size: 16.5px;">Fantastic! D&P advertised 110 MBPS download. I am getting - through
                my router 107 MBPS. Upload speed is 23 MBPS. Can't argue with that can you? Compare to Frontier DSL
                which was 3.5 MBPS download (they promised 10 I think) and 0.25 MBPS upload. Pathetic! They started out
                with at about 8.5 MBPS and then after a couple weeks I was lucky to hit 4 MBPS! This was after they
                begged for me to stay with them! Well finally I switched. I wish I would have done it sooner! D&P came
                out, installed the equipment quickly an efficiently. The installer was knowledgeable and professional.
                They arrived around the time they said they would - a little earlier actually. I'm so happy! I'll update
                later if anything changes but, freak'n awesome so far...
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <div class="style9">
    <div class="container" data-aos="fade-up">
      <div class="style3">
        <img class="img3-style" src="Imagini/Background9.png">
        <div class="padding">
          <h3 class="text-dark" style="font-size: 30px;
  color: white;
  margin-top: 30px;">How May We Help You?</h3>
          <div class="row margin-top">
            <div class="col-md-6">
              <p><a class="color" href="#" role="button">Check Availability</a></p>
              <p><a class="color" href="#" role="button">Service Outages</a></p>
              <p><a class="color" href="#ps" role="button">Get Started</a></p>
              <p><a class="color" href="#" role="button">Help Center</a></p>
            </div>
            <div class="col-md-6">
              <p><a class="color" href="#" role="button"> News </a></p>
              <p><a class="color" href="#" role="button"> Careers at D & P </a></p>
              <p><a class="color" href="#" role="button"> Locations </a></p>
              <p><a class="color" href="#" role="button"> Customer Service </a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

  <footer>
    <div class="footer" style=" background-image: url(Imagini/Background10.png);
  background-color: #161616;
  width: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;">
      <div class="container">
        <div class="row marginbutton1" style="padding-top: 200px;
  padding-bottom: 50px;">
          <div class="col-md text-center background">
            <a href="tel:800-311-7340" class="text-white textdec"><img class="img-padding" src="Imagini/Call.png" alt="call"> Call
              800-311-7340</a>
          </div>
          <div class="col-md text-center background">
            <a href="ps" class="text-white textdec"><img class="img-padding" src="Imagini/Get Started.png" alt="get-started">
              Get
              Started</a>
          </div>
          <div class="col-md text-center background">
            <a href="#paginastart" class="text-white textdec"><img class="img-padding" src="Imagini/Live Chat.png" alt="live-chat">Live
              Chat</a>
          </div>
        </div>
      </div>
      <div class="firstofall head pb-5" id="formularul">
        <div class="primer container py-5">
          <div class="card" data-aos="fade-up">
            <div class="card-body">
              <h1 class="font-weight-light text-center py-4">Contact Us</h1>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <form enctype="multipart/form-data" action="#" method="POST">
                    <div class="form-row">
                      <div class="form-group">
                        <?= $output; ?>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                        <label for="firstName">First name</label>
                        <input type="text" id="firstName" name="firstName" class="form-control" placeholder="First name" required>
                      </div>
                      <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                        <label for="lastName">Last name</label>
                        <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Last name" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12">
                        <label for="email">Email</label>
                        <input type="Email" id="email" name="email" class="form-control" placeholder="Email" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12">
                        <label for="phone">Phone number</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone number" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" rows="5" class="form-control" placeholder="Write Your Message" required></textarea>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="newsletter" name="newsletter">
                          <label class="form-check-label" for="newsletter">
                            Do you want to subscribe to our newsletter?
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12">
                        <label for="contact">How do you want to be contacted?</label>
                        <select id="contact" name="contact" class="form-select form-control">
                          <option value="1">Email</option>
                          <option value="2">Phone</option>
                          <option value="3">Message</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12">
                        <label for="formFile" class="form-label">Please attach your CV / resume in PDF format</label>
                        <input type="file" name="formFile" id="formFile" onchange="return fileValidation()" accept="application/pdf,application/vnd.ms-excel" class="form-control" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12">
                        <button type="submit" name="submit" value="Send" class="btn btn-danger btn-block" id="sendBtn">Send message!</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="container p-5 pb-0">
        <div class="row textalgncenter">
          <div class="col-md margright text-center">
            <a href="#paginastart" target="_blank"><img class="padlogo1" style="padding-bottom: 30px;" src="Imagini/Img1Footer.png" alt="call"></a>
            <p><img class="padlogo2" src="Imagini/Img2Footer.png" alt="call"></p>
            <p>
              <img class="padlogo3" src="Imagini/Img3Footer.png" alt="call">
              <img class="padlogo3" src="Imagini/Img4Footer.png" alt="call">
            </p>
          </div>
          <div class="col-md mt-4 ml-3">
            <h5 class=" mb-4 font-weight-bold text-white">
              Residential
            </h5>
            <p class="marginbottom">
              <a href="#" class="colortext">Bundles</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Internet</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">TV</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Phone</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Rural Internet</a>
            </p>
            <h5 class=" mb-4 font-weight-bold text-white mt-5">
              Contact
            </h5>
            <p class="marginbottom">
              <a href="#" class="colortext">Customer Service</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Advertise with Us</a>
            </p>
          </div>

          <div class="col-md mt-4 ml-3">
            <h5 class="mb-4 font-weight-bold text-white">Business</h5>
            <p class="marginbottom">
              <a href="#" class="colortext">SMB Solutions</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Large-to-Enterprise Solutions</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Business Internet</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Business TV</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Business Phone</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Managed IT</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Phone Systems</a>
            </p>
          </div>

          <div class="col-md mt-4 ml-3">
            <h5 class=" mb-4 font-weight-bold text-white">
              Support
            </h5>
            <p class="marginbottom">
              <a href="#" class="colortext">Help Center</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Availability</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Service Outages</a>
            </p>
            <h5 class=" mb-4 font-weight-bold text-white mt-5">
              Corporate
            </h5>
            <p class="marginbottom">
              <a href="#" class="colortext">Company</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Careers</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Policy Center</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">News (Blog)</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Management Team</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Board of Directors</a>
            </p>
          </div>
          <div class="col-md mt-4 ml-3">
            <h5 class="mb-4 font-weight-bold text-white">Locations</h5>
            <p class="marginbottom">
              <a href="#" class="colortext">Adrian</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Blissfield</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Dundee</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Petersburg</a>
            </p>
            <p class="marginbottom">
              <a href="#" class="colortext">Tecumseh</a>
            </p>
          </div>
          <div class="col-md mt-4 ml-3">
            <a href="#paginastart" class="mb-4 font-weight-bold text-white">Get Started</a>
            <h5 class="mb-4 font-weight-bold text-white">Service Area</h5>
            <a href="#!" role="button"><img class="" src="Imagini/YTLogo.png"></img></a>
            <a href="#!" role="button"><img class="" src="Imagini/inlogo.png"></img></a>
            <a href="#!" role="button"><img class="" src="Imagini/TwitterLogo.png"></img></a>
            <a href="#!" role="button"><img class="" src="Imagini/FBLogo.png"></img></a>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="text-center p-3 border-top border-dark">
          <p class="colortext1">© 2019 D & P Communications. All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </footer>
  <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/java.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/cc5b02c2a0.js"></script>
  <script>
    AOS.init();
  </script>



  <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      // Add smooth scrolling to all links
      $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 5000, function() {

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    });
  </script>
</body>
</html>