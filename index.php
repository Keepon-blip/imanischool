<?php
require_once('logics/dbconnection.php');
require_once('logics/process.php');
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
    <title>Imani School of music</title>
</head>
<body>
    <div class="container-fluid pt-5 landing-sec">
        <div class="landing">
            <div class="landingtext1">
                <h1>Take A Chance</h1><br>
                <h2>Learn an instrument</h2>
                <button class="landingbutton1">Get Started</button>
            </div>
            <div class="landing_img1">
                <img src="img/guitar4.png" alt="guitar" width="400" class="img1">
            </div>
            
        </div>
                <ul class="thumb">
                    <li><img src="img/guitaricon.png" alt="" width="80" onclick="imgslider('img/guitar4.png')"></li>
                    <li><img src="img/drumsicon.png" alt="" width="80" onclick="imgslider('img/drumsets2.png')"></li>
                    <li><img src="img/pianoicon.png" alt="" width="80" onclick="imgslider('img/piano.png')"></li>
                    <li><img src="img/saxicon.png" alt="" width="80" onclick="imgslider('img/sax.png')"></li>
                    <li><img src="img/violinicon.png" alt="" width="80" onclick="imgslider('img/violin.png')"></li>
                </ul>
    </div>
    <div class="container welcome">
        <div class="row">
            <div class="col-lg-6 pt-5">
                <img src="img/imanischool.jpg" alt="" width="500">
            </div>
            <div class="col-lg-6 welcome_txt">
                <h2>Get to know us!</h2><br>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt vero nobis, rem officiis ipsa nesciunt voluptatum veniam quis optio eius aut. Tempore, labore alias dicta mollitia culpa omnis ex</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt vero nobis, rem officiis ipsa nesciunt voluptatum veniam quis optio eius aut. Tempore, labore alias dicta mollitia culpa omnis ex</p>
                <br>
                <button class="btn btn-primary">Learn More</button>
            </div>
        </div>
    </div>
    <div class="container bg-light services">
        <div class="container-fluid text-center mt-5 pt-5">
            <h3>What we offer...</h3>
        </div>
        <div class="container text-center mt-5">
            <div class="row">
                <div class="col-lg-4 col-sm-6 rounded mb-5">
                    <a href="book-drum.html"><img src="img/drumsicon.png" alt="" width="100" class="b-img"></a>
                    <h4>Drum Lessons</h4>
                    <button class="btn btn-primary text-dark" data-bs-toggle="modal" data-bs-target="#drumModal" style="background-color: #FFC64C; border: 1px solid #0C2730;">Book Lessons</button>
                </div>
                <div class="modal fade" id="drumModal" tabindex="-1" aria-labelledby="drumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="drumModalLabel">Book Drum Lessons</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form class="form" action="index.php" method="POST">
                            <div class="modal-body">
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
                                            <option selected>Drum Lessons</option>
                                          </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="date" name="date">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="book_class">Submit</button>
                            </div>
                        </form> 
                      </div>
                    </div>
                  </div>
                <div class="col-lg-4 col-sm-6 rounded mb-5">
                    <a href="book-guitar.html"><img src="img/pianoicon.png" alt="" width="100" class="b-img"></a>
                    <h4>Piano Lessons</h4>
                    <button class="btn btn-primary text-dark" data-bs-toggle="modal" data-bs-target="#pianoModal" style="background-color: #FFC64C; border: 1px solid #0C2730;">Book Lessons</button>
                </div>
                <div class="modal fade" id="pianoModal" tabindex="-1" aria-labelledby="pianoModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="pianoModalLabel">Book Piano Lessons</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form class="form" action="index.php" method="POST">
                            <div class="modal-body">
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
                                        <select class="form-select" aria-label="Select Instrument" name="lesson" disabled>
                                            <option selected>Piano Lessons</option>
                                          </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <select class="form-select" aria-label="Select Instrument" name="name">
                                            <option selected>Select Time</option>
                                            <option value="Saxophone">Morning</option>
                                            <option value="Piano">Afternoon</option>
                                            <option value="Drum">Evening</option>
                                           </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="book_class">Submit</button>
                            </div>
                        </form> 
                      </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 rounded mb-5">
                    <a href="book-guitar.html"><img src="img/guitaricon.png" alt="" width="100" class="b-img"></a>
                    <h4>Guitar Lessons</h4>
                    <button class="btn btn-primary text-dark" data-bs-toggle="modal" data-bs-target="#guitarModal" style="background-color: #FFC64C; border: 1px solid #0C2730;">Book Lessons</button>
                </div>
                <div class="modal fade" id="guitarModal" tabindex="-1" aria-labelledby="guitarModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="guitarModalLabel">Book Guitar Lessons</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form class="form" action="index.php" method="POST">
                            <div class="modal-body">
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
                                        <select class="form-select" aria-label="Select Instrument" name="lesson" disabled>
                                            <option selected>Guitar Lessons</option>
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
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="book_class">Submit</button>
                            </div>
                        </form> 
                      </div>
                    </div>
                  </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 rounded mb-5">
                    <a href="book-sax.html"><img src="img/saxicon.png" alt="" width="100" class="b-img"></a>
                    <h4>Saxophone Lessons</h4>
                    <button class="btn btn-primary text-dark" data-bs-toggle="modal" data-bs-target="#saxModal" style="background-color: #FFC64C; border: 1px solid #0C2730;">Book Lessons</button>
                </div>
                <div class="modal fade" id="saxModal" tabindex="-1" aria-labelledby="saxModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="saxModalLabel">Book Saxophone Lessons</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form class="form" action="index.php" method="POST">
                            <div class="modal-body">
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
                                        <select class="form-select" aria-label="Select Instrument" name="lesson" disabled>
                                            <option selected>Saxophone Lessons</option>
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
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="book_class">Submit</button>
                            </div>
                        </form> 
                      </div>
                    </div>
                  </div>
                <div class="col-lg-4 col-sm-6 rounded mb-5">
                    <a href="book-music.html"><img src="img/music.png" alt="" width="100" class="b-img"></a>
                    <h4>Music Theory & Vocal Lessons</h4>
                    <button class="btn btn-primary text-dark" data-bs-toggle="modal" data-bs-target="#musicModal" style="background-color: #FFC64C; border: 1px solid #0C2730;">Book Lessons</button>
                </div>
                <div class="modal fade" id="musicModal" tabindex="-1" aria-labelledby="musicModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="musicModalLabel">Book Music Lessons</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form class="form" action="index.php" method="POST">
                            <div class="modal-body">
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
                                        <select class="form-select" aria-label="Select Instrument" name="lesson" disabled>
                                            <option selected>Music Lessons</option>
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
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="book_class">Submit</button>
                            </div>
                        </form> 
                      </div>
                    </div>
                  </div>
                <div class="col-lg-4 col-sm-6 rounded mb-5">
                    <a href="book-dj.html"><img src="img/dj.png" alt="" width="150" class="b-img-dj"></a>
                    <h4>DJ Lessons</h4>
                    <button class="btn btn-primary text-dark" data-bs-toggle="modal" data-bs-target="#djModal" style="background-color: #FFC64C; border: 1px solid #0C2730;">Book Lessons</button>
                </div>
                <div class="modal fade" id="djModal" tabindex="-1" aria-labelledby="djModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="djModalLabel">Book DJ Lessons</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form class="form" action="index.php" method="POST">
                            <div class="modal-body">
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
                                        <select class="form-select" aria-label="Select Instrument" name="lesson" disabled>
                                            <option selected>DJ Lessons</option>
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
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="book_class">Submit</button>
                            </div>
                        </form> 
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <section class="sectionSize">
        <div id="chooseLessons" class="d-flex flex-column">
            <div><h2 class="display-2">Book now and learn with us<h2></div>
            <div><p style="font-size:1.1em">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis doloremque laborum fugiat, eligendi vero delectus laboriosam similique<br/>pariatur quasi mollitia adipisci aut nostrum ipsum assumenda voluptate consectetur sed excepturi dolores!</p></div>
            <div class="mt-4 "><button style="font-size: 1em" class="btn buttonStyling px-4 py-2">BOOK A LESSON</button></div> 
        </div>
  </section>
  <section id="recentArticles" style="background-color:#062730">

    <h1 class="display-4 text-center" style="color:#FFC64C">Recent Articles</h1>
    <div class="card-deck row justify-content-around">
        <div class="card" style="width:18em ;">
            <img class="card-img-top" src="C:\Users\hp\Desktop\My Coding Progress\Imani School of music images\imanischoolofmusic_311180348_130210173123970_1344114431243527452_n (2).jpg" alt="">
            <div class="card-body containerText" style="background-color:#062730;color:#FFC64C">
                <h3>Celebration</h3>
                <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, dignissimos ab? Non voluptates voluptatibus
                    illum maxime aspernatur molestias cupiditate facilis! Ut vel quasi repellendus cumque earum totam
                    recusandae, officia culpa!
                </p>
            </div>
        </div>
        <div class="card" style="width:18em ;">
            <img class="card-img-top" src="C:\Users\hp\Desktop\My Coding Progress\Imani School of music images\imanischoolofmusic_311180348_130210173123970_1344114431243527452_n (2).jpg" alt="">
            <div class="card-body containerText" style="background-color:#062730;color:#FFC64C">
                <h3>Celebration</h3>
                <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, dignissimos ab? Non voluptates voluptatibus
                    illum maxime aspernatur molestias cupiditate facilis! Ut vel quasi repellendus cumque earum totam
                    recusandae, officia culpa!
                </p>
            </div>
        </div>
        <!-- <div class="card">
            <img src="C:\Users\hp\Desktop\My Coding Progress\Imani School of music images\imanischoolofmusic_311180348_130210173123970_1344114431243527452_n (2).jpg" alt="">
            <div class="card-body containerText">
                <h3 class="card-img-top">Celebration</h3>
                <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, dignissimos ab? Non voluptates voluptatibus
                    illum maxime aspernatur molestias cupiditate facilis! Ut vel quasi repellendus cumque earum totam
                    recusandae, officia culpa!
                </p>
            </div>
        </div> -->
    </div>
    </div>
    <div id="button" class="p-5 d-flex justify-content-center"><button class="btn buttonStyling text-white">View Articles</button>
    </div>
  </section>
  <section id="Testimonials" class="container-fluid sectionSize pt-5" style="background-color:#FFC64C ;color:#062730; height: 80vh;">
    <div class="text-center">
      <h2 class="display-4" style="background-color:#FFC64C">Testimonials</h2>
    </div>
    <div class="row no-gutters justify-content-center" style="">
      <div class="d-flex flex-column col-3 m-4 rounded" style="background-color:#062730; color:#FFC64C;">
        <div class="d-flex m-4">
          <div> <img
              src="C:\Users\hp\Desktop\My Coding Progress\Imani School of music images\22-224287_computer-icons-user-profile-avatar-caller-id-icon (1).png"
              alt="" height="50px">
          </div>
          <div>
            <div><cite>Andrew Kimani</cite></div>
            <div><cite>Andrew Kimani</cite></div>
          </div>
        </div>
        <div class="m-2">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, vitae laboriosam place
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque perspiciatis quia facilis necessitatibus
            eaque, a fugiat ex mollitia expedita? Quidem voluptates est, sed consectetur saepe aliquam rem neque.
            Provident, impedit.
          </p>
        </div>
      </div>
      <div class="d-flex flex-column col-3 m-4 rounded" style="background-color:#062730; color:#FFC64C;">
        <div class="d-flex m-4">
          <div> <img
              src="C:\Users\hp\Desktop\My Coding Progress\Imani School of music images\22-224287_computer-icons-user-profile-avatar-caller-id-icon (1).png"
              alt="" height="50px">
          </div>
          <div>
            <div><cite>Andrew Kimani</cite></div>
            <div><cite>Andrew Kimani</cite></div>
          </div>
        </div>
        <div class="m-2">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, vitae laboriosam place
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro consectetur corporis vero delectus!
            Accusantium voluptatibus alias laudantium quis quasi ratione facere, officia, nulla nesciunt, architecto non
            quia ut sit? Sunt.
          </p>
        </div>
      </div>
      <div class="d-flex flex-column col-3 m-4 rounded" style="background-color:#062730; color:#FFC64C;">
        <div class="d-flex m-4">
          <div> <img
              src="C:\Users\hp\Desktop\My Coding Progress\Imani School of music images\22-224287_computer-icons-user-profile-avatar-caller-id-icon (1).png"
              alt="" height="50px">
          </div>
          <div>
            <div><cite>Andrew Kimani</cite></div>
            <div><cite>Andrew Kimani</cite></div>
          </div>
        </div>
        <div class="m-2">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, vitae laboriosam place
            lore
          </p>
        </div>
      </div>
    </div>
  </section>
  <section id=someAboutUs class="sectionSize">
    <div id="aboutUs" class="d-flex flex-column">
     <div><h2 class="display-2">A few things about our school<h2></div>
     <div><p style="font-size:1.1em">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis doloremque laborum fugiat, eligendi vero delectus laboriosam similique<br/>pariatur quasi mollitia adipisci aut nostrum ipsum assumenda voluptate consectetur sed excepturi dolores!</p></div>
    <div class="mt-4 "><button style="font-size: 1em" class="btn buttonStyling px-4 py-2">BOOK A LESSON</button></div> 
    </div>
  </section>
  <section class="contactUs container-fluid" style="background-color:#062730">
    <h2 class="display-4 text-center m-lg-5">Contact Us</h2>
    <div class="row">
      <div id="input" class="contactUsStyle col-6">
        <form action="">
          <div class="row">
            <div class="form-group col-6">
              <label for="enterFirstName">First Name</label>
              <input type="text" class="form-control" id="enterFirstName">
            </div>
            <div class="form-group col-6">
              <label for="enterLastName">Last Name</label>
              <input type="text" class="form-control" id="enterLastName">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-6">
              <label for="enterYourEmail">Email</label>
              <input type="email" class="form-control" id="enterYourEmail">
            </div>
            <div class="form-group col-6">
              <label for="enterPhoneNumber">Phone</label>
              <input type="text" class="form-control" id="enterPhoneNumber">
            </div>
          </div>
          <div class="form-group">
            <label for="enterYourMessage">Your Message</label>
            <textarea name="" class="form-control" id="enterYourMessage" cols="30" rows="10"></textarea>
          </div>
          <button class="btn">Submit</button>
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
</body>
</html>