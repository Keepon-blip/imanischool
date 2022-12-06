<?php
require_once('logics/dbconnection.php');
require_once('logics/process.php');
require_once('logics/process-contact.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Saira+Condensed:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
    <title>Imani School of music</title>
</head>
<body>
<div class="menu__bar">
            <img src="http://divingteamdiani.com/wp-content/uploads/2022/11/IMANI-LOGO1024_1.jpg" alt="..." height="50px" style="margin-left: 119px;">
            <!-- <img src="img/ilogo.jpg" alt="..." height="50px"> -->

            <h1 class="logo">IMANI<span>SCHOOL</span></h1>

            <ul style="align-items: self-end; margin-left: 800px;">
                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>HOME</a></1i>
                <li><a href="#"><i class="fa fa" aria-hidden="true"></i>ABOUT</a></li>
                <li><a href="#">SERVICES<i class="fas fa-caret-down"></i></a>
                <div class="dropdown__menu">
                    <ul>
                        <li><a href="#">pricing</a></li>
                        <li><a href="#">pricing</a></li>
                        <li><a href="#">pricing</a></li>
                        <li><a href="#">pricing</a></li>
                    </ul>
                </div></li>
                <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>CONTACT</a></li>
               <li>
                <button type="button" class="btn " >GET STARTED</button>

               </li>   
        </div>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <form action="book.php" method="POST">
                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" placeholder="Full Name" name="name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="tel" class="form-control" placeholder="Phone Number" name="phonenumber">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <input type="email" class="form-control" placeholder="E-mail Address" name="email">
                                </div>
                                <div class="col-lg-6">
                                    <input type="number" class="form-control" placeholder="Age" name="age">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <select class="form-select" aria-label="Select Instrument" name="lesson">
                                        <option selected>Choose A Lesson</option>
                                        <option value="Saxophone">Saxophone</option>
                                        <option value="Piano">Piano</option>
                                        <option value="Guitar">Guitar</option>
                                        <option value="Drum">Drum</option>
                                        <option value="Music">Music Lessons</option>
                                        <option value="DJ">DJ Lessons</option>
                                        <option value="Vocal Lesson">Vocal Lessons</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <select class="form-select" aria-label="Select Instrument" name="date">
                                        <option selected>Select Time</option>
                                        <option value="Saxophone">Morning</option>
                                        <option value="Piano">Afternoon</option>
                                        <option value="Drum">Evening</option>
                                    </select>
                                </div>
                            </div>
                        </div>  
                </div>
                <div class="card-footer text-right m-3">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="book_class">Submit</button>
                        </div>
                    </form>
            </div>
            </div>

  <section class="contactUs container-fluid" style="background-color:#062730">
    <h2 class="display-4 text-center m-lg-5 text-white">Contact Us</h2>
    <div class="row">
      <div id="input" class="contactUsStyle col-6">
        <form action="index.php" method="POST">
          <div class="row text-white">
            <div class="form-group col-6">
              <label for="enterFirstName">First Name</label>
              <input type="text" class="form-control" id="enterFirstName" name="firstname">
            </div>
            <div class="form-group col-6">
              <label for="enterLastName">Last Name</label>
              <input type="text" class="form-control" id="enterLastName" name="lastname">
            </div>
          </div>
          <div class="row text-white">
            <div class="form-group col-6">
              <label for="enterYourEmail">Email</label>
              <input type="email" class="form-control" id="enterYourEmail" name="email">
            </div>
            <div class="form-group col-6">
              <label for="enterPhoneNumber">Phone</label>
              <input type="text" class="form-control" id="enterPhoneNumber" name="phonenumber">
            </div>
          </div>
          <div class="form-group text-white">
            <label for="enterYourMessage">Your Message</label>
            <textarea class="form-control" id="enterYourMessage" name="message" cols="30" rows="10"></textarea>
          </div>
          <button class="btn" name="sub_message">Submit</button>
        </form>
      </div>
      <div id="map" class="col-6">
        <div class="mapouter">
          <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas"
              src="https://maps.google.com/maps?q=imani%20school%20of%20music&t=k&z=13&ie=UTF8&iwloc=&output=embed"
              frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
              href="https://123movies-to.org"></a><br>
            <style>
              .mapouter {
                position: relative;
                text-align: right;
                height: 500px;
                width: 600px;
              }
            </style><a href="https://www.embedgooglemap.net">google map for website</a>
            <style>
              .gmap_canvas {
                overflow: hidden;
                background: none !important;
                height: 500px;
                width: 600px;
              }
            </style>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="content">
        <div class="top">
    <div class="logo-details">
        <img src="http://divingteamdiani.com/wp-content/uploads/2022/11/IMANI-LOGO1024_1.jpg" alt="..." height="50px" style="margin-left: 119px;">
    <h1 class="logo">Imani<span>School</span></h1>
        </div>
        <div class="media-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
            <div class="link-boxes">
                <ul class="box">
                    <li class="link_name">company</li>
                    <li><a href="#">home</a></li>
                    <li><a href="#">contact</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">get started</a></li>
                </ul>
                <ul class="box">
                    <li class="link_name">Account</li>
                    <li><a href="#">home</a></li>
                    <li><a href="#">contact</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">get started</a></li>
                </ul>
                <ul class="box">
                    <li class="link_name">Services</li>
                    <li><a href="#">home</a></li>
                    <li><a href="#">contact</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">get started</a></li>
                </ul>
                <ul class="box">
                    <li class="link_name">Classes</li>
                    <li><a href="#">home</a></li>
                    <li><a href="#">contact</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">get started</a></li>
                </ul>
                <ul class="box">
                    <li class="link_name">company</li>
                    <li><a href="#">home</a></li>
                    <li><a href="#">contact</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">get started</a></li>
                </ul>
                <ul class="box input-box">
                    <li class="link_name">Getstarted</li>
                    <li><input type="text" placeholder="Enter your email"></li>
                    <li><a href="#"><input type="button" value="GET STARTED"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bottom-details">
        <div class="bottom_text">
            <span class="copyright_text">copyright &#169; 2022 <a href="#">imanischool.</a>All rights reserved</span>
        <span class="policy_terms">
            <a href="#">privacy policy</a>
            <a href="#">terms & conditions</a>
        </span>
        </div>
    </div>
</footer>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>


    <script type="text/javascript">
        function imgslider(anything){
            document.querySelector('.img1').src = anything;
        }
    </script>
    <script src="https://kit.fontawesome.com/3ae508335b.js" crossorigin="anonymous"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.bundle.js"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
</body>
</html>