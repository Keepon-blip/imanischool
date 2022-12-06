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
    <div class="container serv-s-intro pt-4 ps-5">
        <h3>Classes</h3>
        <div class="line"></div>
        <h1>Saxophone Lessons</h1>
    </div>
    <div class="container b-drum">
        <div class="row mt-5">
            <div class="col-lg-6 p-5">
                <img src="img/bsax.jpg" alt="" width="500" class="book-drum-img">
            </div>
            <div class="col-lg-6 text-white p-5 rounded" style="background-color: #0C2730;    filter: drop-shadow(10px 10px 10px rgba(0, 0, 0, 0.6));">
                <h3>Saxophone Lessons</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam at libero voluptatum amet placeat repellat id, impedit adipisci ad esse.</p>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident aut tempora, veritatis magni error explicabo ipsam odit adipisci vel eius.</p>
                <button class="btn btn-primary text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #FFC64C; border: 1px solid #0C2730;">Book Lessons</button>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Book Saxophone Lessons</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="form" action="book-sax.php" method="POST">
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
                                        <option selected>Saxophone Lessons</option>
                                      </select>
                                </div>
                                <div class="col-lg-6">
                                    <select class="form-select" aria-label="Select Time" name="date">
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
    <script src="https://kit.fontawesome.com/3ae508335b.js" crossorigin="anonymous"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.bundle.js"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>