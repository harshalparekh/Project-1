<?php include("index.php"); ?>


<?php
// $insert = false;
if($_POST['submit'])
{
   // Collecting post variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
}
?>        

<!-- Started on 03Aug 2022 by Harshal Parekh -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My awesome food store</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main-wrapper">
        <div class="nav-background">
            <div class="mobile-logo">
                <img src="/Users/harshalparekh/Desktop/untitled folder 2/projects/project1/sprites/logo.svg" alt="">
            </div>
            <div class="mobile-nav">
                <div class="cart">
                    <div class="flex items-center">
                        <img src="/Users/harshalparekh/Desktop/untitled folder 2/projects/project1/sprites/cart-dark.svg" alt="">
                        <a href="#">0 Items - ($0.00)</a>
                    </div>
                </div>
                <div class="nav-top">
                    <ul>
                        <li>
                            <a href="file:///Users/harshalparekh/Desktop/untitled%20folder%202/projects/project1/index.html#">Home</a>
                        </li>
                        <li>
                            <a href="#">About us</a>
                        </li>
                        <li>
                            <a href="#">Products</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                        <li>
                            <a href="#">Shop</a>
                        </li>
                        <li>
                            <a href="#">Services</a>
                        </li>
                        <li>
                            <a href="#">Contact us</a>
                        </li>
                        <li>
                            <a href="#">Log in</a>
                        </li>
                        <li>
                            <a href="#">Register</a>
                        </li>
                    </ul>
                </div>
                <div class="contact flex items-center">
                    <img src="/Users/harshalparekh/Desktop/untitled folder 2/projects/project1/sprites/phone.svg" alt="">
                    <div>
                        <h5>Call us: (+1) 123 456 789</h5>
                        <h6>E-mail : support@freshmeal.com</h6>
                    </div>
                </div>
                <div class="time flex items-center">
                    <img src="/Users/harshalparekh/Desktop/untitled folder 2/projects/project1/sprites/clock.svg" alt="">
                    <div>
                        <h5>Working Hours:</h5>
                        <h6>Mon - Sat (8.00am - 12.00am)</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-content-wrapper">
            <div class="nav-trigger">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-bar-chart">
                    <line x1="12" y1="20" x2="12" y2="10"/>
                    <line x1="18" y1="20" x2="18" y2="4"/>
                    <line x1="6" y1="20" x2="6" y2="16"/>
                </svg>
            </div>
            <div class="site-content">
                <header class="topbar">
                    <div class="container flex justify-between items-center">
                        <div class="icons">
                            <a href="https://www.facebook.com/harsshalparekh"><img
                                    src="/Users/harshalparekh/Desktop/untitled folder 2/projects/project1/sprites/facebook.svg"
                                    alt=""></a>
                            <a href="https://twitter.com/harshalparekh_"><img
                                    src="/Users/harshalparekh/Desktop/untitled folder 2/projects/project1/sprites/twitter.svg"
                                    alt=""></a>
                            <a href="https://harshalparekh.in"><img
                                    src="/Users/harshalparekh/Desktop/untitled folder 2/projects/project1/sprites/google.svg"
                                    alt=""></a>
                            <a href="https://www.instagram.com/harshalparekh_/"><img
                                    src="/Users/harshalparekh/Desktop/untitled folder 2/projects/project1/sprites/instagram.svg"
                                    alt=""></a>
                            <a href="#"><img
                                    src="/Users/harshalparekh/Desktop/untitled folder 2/projects/project1/sprites/search.svg"
                                    alt=""></a>
                        </div>
                        <div class="auth flex items-center">
                            <div>
                                <img src="/Users/harshalparekh/Desktop/untitled folder 2/projects/project1/sprites/user-icon.svg"
                                    alt="">
                                <a href="#">Log in</a>
                            </div>
                            <span class="divider">|</span>
                            <div>
                                <img src="/Users/harshalparekh/Desktop/untitled folder 2/projects/project1/sprites/edit.svg"
                                    alt="">
                                <a href="#">Register Now</a>
                            </div>
                            <span class="divider">|</span>
                            <div>
                                <img src="/Users/harshalparekh/Desktop/untitled folder 2/projects/project1/sprites/cart.svg"
                                    alt="">
                                <a href="#">0 Items - ($0.00)</a>
                            </div>
                        </div>
                    </div>
                </header>

                <nav>
                    <div class="top">
                        <div class="container flex justify-between">
                            <div class="contact flex items-center">
                                <img src="/Users/harshalparekh/Desktop/untitled folder 2/projects/project1/sprites/phone.svg" alt="">
                                <div>
                                    <h5>Call US: (+1) 123 456 789</h5>
                                    <h6>E-mail : support@freshmeal.com</h6>
                                </div>
                            </div>
                            <div class="branding">
                                <img src="/Users/harshalparekh/Desktop/untitled folder 2/projects/project1/sprites/logo.svg" alt="">
                            </div>
                            <div class="time flex items-center">
                                <img src="/Users/harshalparekh/Desktop/untitled folder 2/projects/project1/sprites/clock.svg" alt="">
                                <div>
                                    <h5>Working Hours:</h5>
                                    <h6>Mon - Sun (11.00am - 11.00pm)</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <pseudo></pseudo>
                    <div class="navbar magic-shadow">
                        <div class="container flex justify-center">
                            <a href="file:///Users/harshalparekh/Desktop/untitled%20folder%202/projects/project1/index.html#" class="active">Home</a>
                            <a href="file:///Users/harshalparekh/Desktop/untitled%20folder%202/projects/project1/aboutus.html">About us</a>
                            <!-- <a href="#">Products</a> -->
                            <a href="file:///Users/harshalparekh/Desktop/untitled%20folder%202/projects/project1/blog.html">Blog</a>
                            <a href="file:///Users/harshalparekh/Desktop/untitled%20folder%202/projects/project1/shop.html">Shop</a>
                            <a href="file:///Users/harshalparekh/Desktop/untitled%20folder%202/projects/project1/services.html">Services</a>
                            <a href="file:///Users/harshalparekh/Desktop/untitled%20folder%202/projects/project1/galarry.html">Gallery</a>
                            <a href="file:///Users/harshalparekh/Desktop/untitled%20folder%202/projects/project1/contactus.html">Contact us</a>
                        </div>
                    </div>
                </nav>

                <br><br>

                <div class="container11">
                    <div style="text-align:center">
                      <h2>Contact Us</h2>
                      <p>Swing by for a cup of coffee, or leave us a message:</p>
                    </div>
                    <div class="row11">
                      <div class="column11">
                        <img src="../project1/sprites/cu1.jpg" style="width:100%">
                      </div>
                      <div class="column11">
                        <form action="#" method="POST">
                          <label for="fname">Full Name</label>
                          <input type="text" id="fname" name="fullname" placeholder="Your name..">
                          <label for="email">Email</label>
                          <input type="text" id="email" name="email" placeholder="Your Email address..">
                          <label for="country">Country</label>
                          <select id="country" name="country">
                            <option value="australia">New Zealand</option>
                            <option value="canada">Canada</option>
                            <option value="usa">USA</option>
                          </select>
                          <label for="subject">Subject</label>
                          <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                          <input type="submit" value="Register" name="submit">      <!--////////////////////////////////////////////////////////////////////////-->
                        </form>
                      </div>
                    </div>
                  </div>

                <section class="subscribe">
                    <div class="container flex items-center">
                        <div>
                            <img src="/Users/harshalparekh/Desktop/untitled folder 2/projects/project1/sprites/rasberry.png"
                                alt="">
                        </div>
                        <div>
                            <h1>Subscribe to your newsletter</h1>
                            <p>Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many
                                web sites
                                still in their infancy.</p>
                            <div class="input-wrap">
                                <input type="email" placeholder="email@freshmeal.com">
                                <button>Subscribe</button>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="contact-us flex">
                    <div class="contact-info-wrapper">
                        <h1 class="section-heading">Contact us</h1>
                        <div class="contact-info">
                            <div>
                                <div>
                                    <img src="/Users/harshalparekh/Desktop/untitled folder 2/projects/project1/sprites/phone-2.svg"
                                        alt="">
                                    <div>
                                        <span>Call us:</span>
                                        <span>(+84) 123 456 789</span>
                                    </div>
                                </div>
                                <div>
                                    <img src="/Users/harshalparekh/Desktop/untitled folder 2/projects/project1/sprites/bag-2.svg"
                                        alt="">
                                    <div>
                                        <span>E-mail ::</span>
                                        <span>support@freshmeal.com</span>
                                    </div>
                                </div>
                                <div>
                                    <img src="/Users/harshalparekh/Desktop/untitled folder 2/projects/project1/sprites/clock-2.svg"
                                        alt="">
                                    <div>
                                        <span>Working Hours:</span>
                                        <span>Mon - Sat (8.00am - 12.00am)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d206253.45012861438!2d-115.31508258571672!3d36.124918453865035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80beb782a4f57dd1%3A0x3accd5e6d5b379a3!2sLas%20Vegas%2C%20NV%2C%20USA!5e0!3m2!1sen!2sru!4v1580850940897!5m2!1sen!2sru"
                            width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </section>

                <footer>
                    <div class="container">
                        <div class="box">
                            <h3>About us</h3>
                            <p>It was popularised in the 1960 with the release of Latest sheets containing Lorem Ipsum
                                passage.</p>
                            <button class="btn btn-secondary">Read More</button>
                        </div>
                        <div class="box">
                            <h3>Quik Links</h3>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">About us</a>
                                </li>
                                <li>
                                    <a href="#">Products</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                <li>
                                    <a href="#">Services</a>
                                </li>
                                <li>
                                    <a href="#">Gallery</a>
                                </li>
                                <li>
                                    <a href="#">Contact us</a>
                                </li>

                            </ul>
                        </div>
                        <div class="box">
                            <h3>Follow Us</h3>
                            <div>
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/harsshalparekh">
                                            <img src="/Users/harshalparekh/Desktop/untitled folder 2/projects/project1/sprites/facebook.svg"
                                                alt="">
                                            <span>Facebook</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/harshalparekh_">
                                            <img src="/Users/harshalparekh/Desktop/untitled folder 2/projects/project1/sprites/twitter.svg"
                                                alt="">
                                            <span>Twitter</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.harshalparekh.in">
                                            <img src="/Users/harshalparekh/Desktop/untitled folder 2/projects/project1/sprites/google.svg"
                                                alt="">
                                            <span>Google </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/harshalparekh_/">
                                            <img src="/Users/harshalparekh/Desktop/untitled folder 2/projects/project1/sprites/instagram.svg"
                                                alt="">
                                            <span>Instagram</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="box instagram-api">
                            <h3>Instagram</h3>
                            <div class="post-wrap">
                                <div>
                                    <img src="/Users/harshalparekh/Desktop/untitled folder 2/projects/project1/sprites/food-table.jpg"
                                        alt="">
                                </div>
                                <div>
                                    <img src="/Users/harshalparekh/Desktop/untitled folder 2/projects/project1/sprites/food-table.jpg"
                                        alt="">
                                </div>
                                <div>
                                    <img src="/Users/harshalparekh/Desktop/untitled folder 2/projects/project1/sprites/food-table.jpg"
                                        alt="">
                                </div>
                                <div>
                                    <img src="/Users/harshalparekh/Desktop/untitled folder 2/projects/project1/sprites/food-table.jpg"
                                        alt="">
                                </div>
                                <div>
                                    <img src="/Users/harshalparekh/Desktop/untitled folder 2/projects/project1/sprites/food-table.jpg"
                                        alt="">
                                </div>
                                <div>
                                    <img src="/Users/harshalparekh/Desktop/untitled folder 2/projects/project1/sprites/food-table.jpg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>





    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="script.js"></script>
</body>

</html>


