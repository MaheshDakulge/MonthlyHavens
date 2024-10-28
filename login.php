<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="author" content="Untree.co">
      <link rel="shortcut icon" href="favicon.png">
      <meta name="description" content="" />
      <meta name="keywords" content="bootstrap, bootstrap4" />
      <title>Login Form Design | CodeLab</title>
      <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link href="css/tiny-slider.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <title>MonthlyHavens</title>
        <link href="login.css" rel="stylesheet" >
   </head>
   <body>
            <!-- Start Header/Navigation -->
        <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

            <div class="container">
                <a class="navbar-brand" href="index.html">MonthlyHavens</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsFurni">
                    <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                        <li class="nav-item ">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li><a class="nav-link">Shop</a></li>
                        <li><a class="nav-link" href="about.html">About us</a></li>
                        <li><a class="nav-link">Services</a></li>
                        <li><a class="nav-link">Blog</a></li>
                        <li><a class="nav-link" href="contact.html">Contact us</a></li>
                    </ul>

                    <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                        <li><a class="nav-link" href="login.html"><img src="images/user.svg"></a></li>
                        <li><a class="nav-link" ><img src="images/cart.svg"></a></li>
                    </ul>
                </div>
            </div>
                
        </nav>
        <!-- End Header/Navigation -->

        <!-- Start Hero Section -->
            <br></br>
        
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <div class="wrapper">
            <div class="title-text">
              <div class="title login">Login Form</div>
              <div class="title signup">Signup Form</div>
            </div>
            <div class="form-container">
              <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">Signup</label>
                <div class="slider-tab"></div>
              </div>
              <div class="form-inner">
                <!-- login page start -->
                <form action="receive_log.php" method="POST" class="login">
                  <div class="field">
                    <input type="text" name="email_log" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                    <input type="password" name="password_log" placeholder="Password" required>
                  </div>
                  <div class="pass-link"><a href="#">Forgot password?</a></div>
                  <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" name="submit_log">
                  </div>
                  <div class="signup-link">Not a member? <a href="">Signup now</a></div>
                </form>

                <!-- sign up page start -->
                <form action="receive_sup.php" class="signup" method="POST">
                  <div class="field">
                    <input type="text" name="email_sup" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                    <input type="password" id="pass" name="pass_sup" placeholder="Password" required>
                  </div>
                  <div class="field">
                    <input type="password" id="repass" onkeyup="checkPass()"  placeholder="Confirm password" required>
                    <p id="error"></p>
                    <br>3
                  </div>
                  <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" name="submit">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <br></br>
          <br></br>
          <br></br>
          <br></br>
      <br></br>
      <!-- End Hero Section -->
      
      <!-- Start Footer Section -->
        <footer class="footer-section">
            <div class="container relative">

                <div class="sofa-img">
                    <img src="images/sofa.png" alt="Image" class="img-fluid">
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="subscription-form">
                            <h3 class="d-flex align-items-center"><span class="me-1"><img src="images/envelope-outline.svg" alt="Image" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

                            <form action="#" class="row g-3">
                                <div class="col-auto">
                                    <input type="text" class="form-control" placeholder="Enter your name">
                                </div>
                                <div class="col-auto">
                                    <input type="email" class="form-control" placeholder="Enter your email">
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-primary">
                                        <span class="fa fa-paper-plane"></span>
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <div class="row g-5 mb-5">
                    <div class="col-lg-4">
                        <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">MonthlyHavens</a></div>
                        <p class="mb-4">MonthlyHavens offer top-quality furniture, appliances, and electronics on rent in your city at a budget monthly price. It’s cheaper to rent what your home needs from us, instead of spending a huge amount purchasing it from a store. We provide great deals and benefits with our rental products.</p>

                        <ul class="list-unstyled custom-social">
                            <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                            <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
                        </ul>
                    </div>

                    <div class="col-lg-8">
                        <div class="row links-wrap">
                            <div class="col-6 col-sm-6 col-md-3">
                                <ul class="list-unstyled">
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact us</a></li>
                                </ul>
                            </div>

                            <div class="col-6 col-sm-6 col-md-3">
                                <ul class="list-unstyled">
                                    <li><a href="#">Support</a></li>
                                    <li><a href="#">Knowledge base</a></li>
                                    <li><a href="#">Live chat</a></li>
                                </ul>
                            </div>

                            <div class="col-6 col-sm-6 col-md-3">
                                <ul class="list-unstyled">
                                    <li><a href="#">Jobs</a></li>
                                    <li><a href="#">Our team</a></li>
                                    <li><a href="#">Leadership</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>

                            <div class="col-6 col-sm-6 col-md-3">
                                <ul class="list-unstyled">
                                    <li><a href="#">Nordic Chair</a></li>
                                    <li><a href="#">Kruzo Aero</a></li>
                                    <li><a href="#">Ergonomic Chair</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="border-top copyright">
                    <div class="row pt-4">
                        <div class="col-lg-6">
                            <p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by MonthlyHavens<a></a> Distributed By <a hreff="https://themewagon.com">Pawan</a>  <!-- License information: https://untree.co/license/ -->
            </p>
                        </div>

                        <div class="col-lg-6 text-center text-lg-end">
                            <ul class="list-unstyled d-inline-flex ms-auto">
                                <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </footer>
        <!-- End Footer Section --> 


        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/tiny-slider.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/login.js"></script>

        
        <script type="text/javascript">
            function checkPass()
            {
                var pass= document.getElementById("pass").value;
                var repass= document.getElementById("repass").value;
                if(pass==repass)
                {
                    document.getElementById("error").innerHTML="Matached";
                    document.getElementById("error").style.color="green";
                }
                else
                {
                    document.getElementById("error").innerHTML="NOT Matached";
                    document.getElementById("error").style.color="red";
                }
            }
        </script>
   </body>
</html>