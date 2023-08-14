<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Construction</title>
    <!--Awesome Link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <!--Css Link-->
    <link rel="stylesheet" href="css/style.css">
    <!--Swiperjs Link-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>
    <!--Header section Starts-->
    <header class="header">
        <a href="#" class="logo">We<span>Build</span></a>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#projects">Projects</a>
            <a href="#pricing">Pricing</a>
            <a href="#contact">Contact</a>
            <a href="#blogs">Blogs</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="info-btn" class="fas fa-info-circle"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <div id="login-btn" class="fas fa-user"></div>
            <!-- <div id="info-btn" class="fab fa-github"></div> -->
            <a href="https://github.com/JhonnFy" target="_blank">
                <div id="info-btn" class="fab fa-github"></div>
            </a>
        </div>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="Search Here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <form action="" class="login-form">
            <h3>Login Form</h3>
            <input type="email" placeholder="Enter your email" class="box">
            <input type="password" placeholder="Enter your password" class="box">
            <div class="flex">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">Remember me</label>
                <a href="#">¿Forgot Password?</a>
            </div>
            <input type="submit" value="login now" class="btn">
            <p>Don't have an account <a href="#">Create One</a></p>
        </form>
    </header>

    <div class="contact-info">
        <div id="close-contact-info" class="fas fa-times"></div>
        <div class="info">
            <i class="fas fa-phone"></i>
            <h3>Phone Number</h3>
            <p>(031)-123-456</p>
            <p>(+57)310-987-6543</p>
        </div>

        <div class="info">
            <i class="fas fa-envelope"></i>
            <h3>Email Address</h3>
            <p>websitedesing@gmail.com</p>
            <p>constructiondesing@gmail.com</p>
        </div>

        <div class="info">
            <i class="fas fa-map-marker-alt"></i>
            <h3>Office Address</h3>
            <p>Calle 2 No. 9-43</p>
        </div>

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>
    <!--Header section Ends-->


    <!--Home Section Starts-->
    <section class="home" id="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">

                <section class="swiper-slide slide" style="background: url(img/home-slide-1.jpg) no-repeat;">
                    <div class="content">
                        <h3>We Provide Best Services</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam provident obcaecati
                            distinctio laborum nulla consequuntur, et nostrum in veniam a dolorum impedit veritatis
                            tenetur sed nesciunt accusamus, eveniet, temporibus debitis.</p>
                        <a href="#about" class="btn">Get Started</a>
                    </div>
                </section>

                <section class="swiper-slide slide" style="background: url(img/home-slide-2.jpg) no-repeat;">
                    <div class="content">
                        <h3>Making Dream Come To Life</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam provident obcaecati
                            distinctio laborum nulla consequuntur, et nostrum in veniam a dolorum impedit veritatis
                            tenetur sed nesciunt accusamus, eveniet, temporibus debitis.</p>
                        <a href="#about" class="btn">Get Started</a>
                    </div>
                </section>

                <section class="swiper-slide slide" style="background: url(img/home-slide-3.jpg) no-repeat;">
                    <div class="content">
                        <h3>From Concept To Creation</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam provident obcaecati
                            distinctio laborum nulla consequuntur, et nostrum in veniam a dolorum impedit veritatis
                            tenetur sed nesciunt accusamus, eveniet, temporibus debitis.</p>
                        <a href="#about" class="btn">Get Started</a>
                    </div>
                </section>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!--Home Section Ends-->


    <!--Home Section Starts-->
    <section class="about" id="about">
        <h1 class="heading">About Us</h1>

        <div class="row">
            <div class="video">
                <video src="img/about-vid.mp4" loop muted autoplay></video>
            </div>

            <div class="content">
                <h3>We Wild Provide You The Best Work Wich You Dreamt For!</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus quis perferendis voluptates
                    explicabo, minus ex ea eligendi tempore amet? Vel esse quae delectus eum nisi assumenda dicta, est
                    illum enim!</p>
                <a href="#services" class="btn">Read More</a>
            </div>
        </div>

        <div class="box-container">

            <div class="box">
                <h3>10+</h3>
                <p>Years Of Experience</p>
            </div>

            <div class="box">
                <h3>1500+</h3>
                <p>Projects Completed</p>
            </div>

            <div class="box">
                <h3>800+</h3>
                <p>Satiesfied Clients</p>
            </div>

            <div class="box">
                <h3>1500+</h3>
                <p>Active Workers</p>
            </div>
        </div>

    </section>
    <!--Home Section Ends-->


    <!--Home Section Starts-->
    <section class="services" id="services">
        <h1 class="heading">Our Services</h1>
        <div class="box-container">

            <div class="box">
                <img src="img/service-1.png" alt="">
                <h3>Building Construction</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="box">
                <img src="img/service-2.png" alt="">
                <h3>House Renovation</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="box">
                <img src="img/service-3.png" alt="">
                <h3>Architechture Desing</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="box">
                <img src="img/service-4.png" alt="">
                <h3>Material Supply</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="box">
                <img src="img/service-5.png" alt="">
                <h3>Construction Consultant</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="box">
                <img src="img/service-6.png" alt="">
                <h3>Interior Desing</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="box">
                <img src="img/service-7.png" alt="">
                <h3>Building Maintenance</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="box">
                <img src="img/service-8.png" alt="">
                <h3>Building Renovation</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>

        </div>
    </section>
    <!--Home Section Ends-->


    <!--Projects Section Starts-->
    <section class="projects" id="projects">

        <h1 class="heading">Our Projects</h1>
        <div class="box-container">

            <a href="img/project-1.jpg" class="box">
                <div class="image">
                    <img src="img/project-1.jpg" alt="">
                </div>
                <div class="content">
                    <div class="info">
                        <h3>Dream Home</h3>
                        <p>Construction, Desing</p>
                    </div>
                    <i class="fas fa-plus"></i>
                </div>
            </a>

            <a href="img/project-2.jpg" class="box">
                <div class="image">
                    <img src="img/project-2.jpg" alt="">
                </div>
                <div class="content">
                    <div class="info">
                        <h3>Dream Home</h3>
                        <p>Construction, Desing</p>
                    </div>
                    <i class="fas fa-plus"></i>
                </div>
            </a>

            <a href="img/project-3.jpg" class="box">
                <div class="image">
                    <img src="img/project-3.jpg" alt="">
                </div>
                <div class="content">
                    <div class="info">
                        <h3>Dream Home</h3>
                        <p>Construction, Desing</p>
                    </div>
                    <i class="fas fa-plus"></i>
                </div>
            </a>

            <a href="img/project-4.jpg" class="box">
                <div class="image">
                    <img src="img/project-4.jpg" alt="">
                </div>
                <div class="content">
                    <div class="info">
                        <h3>Dream Home</h3>
                        <p>Construction, Desing</p>
                    </div>
                    <i class="fas fa-plus"></i>
                </div>
            </a>

            <a href="img/project-5.jpg" class="box">
                <div class="image">
                    <img src="img/project-5.jpg" alt="">
                </div>
                <div class="content">
                    <div class="info">
                        <h3>Dream Home</h3>
                        <p>Construction, Desing</p>
                    </div>
                    <i class="fas fa-plus"></i>
                </div>
            </a>

            <a href="img/project-6.jpg" class="box">
                <div class="image">
                    <img src="img/project-6.jpg" alt="">
                </div>
                <div class="content">
                    <div class="info">
                        <h3>Dream Home</h3>
                        <p>Construction, Desing</p>
                    </div>
                    <i class="fas fa-plus"></i>
                </div>
            </a>

        </div>
    </section>
    <!--Projects Section Ends-->


    <!--Reviews Section Starts-->
    <section class="reviews">
        <h1 class="heading">Clients Reviews</h1>

        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, deleniti cum! Tenetur ut odit,
                        quas rem, natus repudiandae earum impedit asperiores aspernatur obcaecati similique, maxime
                        ducimus quo? Eaque, debitis repudiandae?</p>
                    <div class="user">
                        <img src="img/pic-1.png" alt="">
                        <div class="info">
                            <h3>JhonnFy</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, deleniti cum! Tenetur ut odit,
                        quas rem, natus repudiandae earum impedit asperiores aspernatur obcaecati similique, maxime
                        ducimus quo? Eaque, debitis repudiandae?</p>
                    <div class="user">
                        <img src="img/pic-2.png" alt="">
                        <div class="info">
                            <h3>User</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, deleniti cum! Tenetur ut odit,
                        quas rem, natus repudiandae earum impedit asperiores aspernatur obcaecati similique, maxime
                        ducimus quo? Eaque, debitis repudiandae?</p>
                    <div class="user">
                        <img src="img/pic-3.png" alt="">
                        <div class="info">
                            <h3>User</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, deleniti cum! Tenetur ut odit,
                        quas rem, natus repudiandae earum impedit asperiores aspernatur obcaecati similique, maxime
                        ducimus quo? Eaque, debitis repudiandae?</p>
                    <div class="user">
                        <img src="img/pic-4.png" alt="">
                        <div class="info">
                            <h3>User</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, deleniti cum! Tenetur ut odit,
                        quas rem, natus repudiandae earum impedit asperiores aspernatur obcaecati similique, maxime
                        ducimus quo? Eaque, debitis repudiandae?</p>
                    <div class="user">
                        <img src="img/pic-5.png" alt="">
                        <div class="info">
                            <h3>User</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, deleniti cum! Tenetur ut odit,
                        quas rem, natus repudiandae earum impedit asperiores aspernatur obcaecati similique, maxime
                        ducimus quo? Eaque, debitis repudiandae?</p>
                    <div class="user">
                        <img src="img/pic-6.png" alt="">
                        <div class="info">
                            <h3>User</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Reviews Section Ends-->


    <!--Pricing Section Stars-->
    <section class="pricing" id="pricing">
        <h1 class="heading">Our Pricing</h1>
        <div class="box-container">

            <div class="box">
                <i class="fas fa-home"></i>
                <h3>Basic Plan</h3>
                <div class="price"><span>$</span>250<span>/Cop</span></div>
                <div class="list">
                    <p>Interior Desing</p>
                    <p>Refurbishment</p>
                    <p>Material Supply</p>
                    <p>Maintenance</p>
                    <p>24/7 Support</p>
                </div>
                <a href="#" class="btn">Choose Plan</a>
            </div>

            <div class="box">
                <i class="fas fa-building"></i>
                <h3>Premium Plan</h3>
                <div class="price"><span>$</span>650<span>/Cop</span></div>
                <div class="list">
                    <p>Interior Desing</p>
                    <p>Refurbishment</p>
                    <p>Material Supply</p>
                    <p>Maintenance</p>
                    <p>24/7 Support</p>
                </div>
                <a href="#" class="btn">Choose Plan</a>
            </div>

            <div class="box">
                <i class="fas fa-city"></i>
                <h3>Ultimate Plan</h3>
                <div class="price"><span>$</span>1250<span>/Cop</span></div>
                <div class="list">
                    <p>Interior Desing</p>
                    <p>Refurbishment</p>
                    <p>Material Supply</p>
                    <p>Maintenance</p>
                    <p>24/7 Support</p>
                </div>
                <a href="#" class="btn">Choose Plan</a>
            </div>

        </div>
    </section>
    <!--Pricing Section Ends-->


    <!--Contact Section Starts-->
    <section class="contact" id="contact">
        <h1 class="heading">Contact Us</h1>

        <div class="row">
            <iframe class="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.1590162744205!2d-74.08234238568652!3d4.565421544088004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f988ae54fb5c3%3A0x6291efdf94f76831!2sPARQUE%20BALCON%20DE%20LA%20CASTA%C3%91A!5e0!3m2!1ses!2sco!4v1642299844763!5m2!1ses!2sco"
                allowfullscreen="" loading="lazy"></iframe>

            <form action="">
                <h3>Get In Touch</h3>
                <input type="text" placeholder="Name" class="box">
                <input type="email" placeholder="Email" class="box">
                <input type="number" placeholder="Phone" class="box">
                <textarea name="" placeholder="Message" class="box" cols="30" rows="10"></textarea>
                <input type="submit" value="Send Message" class="btn">
            </form>

        </div>
    </section>
    <!--Contact Section Ends-->


    <!--Blogs Section Starts-->
    <section class="blogs" id="blogs">
        <h1 class="heading">Our Blogs</h1>
        <div class="swiper blogs-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="img/blog-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Blog Title Goes Here</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                        <a href="#" class="btn">Read More</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="img/blog-2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Blog Title Goes Here</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                        <a href="#" class="btn">Read More</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="img/blog-3.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Blog Title Goes Here</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                        <a href="#" class="btn">Read More</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="img/blog-4.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Blog Title Goes Here</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                        <a href="#" class="btn">Read More</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="img/blog-5.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Blog Title Goes Here</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                        <a href="#" class="btn">Read More</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="img/blog-6.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Blog Title Goes Here</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                        <a href="#" class="btn">Read More</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Blogs Section Ends-->


    <!--Clients Logo Section Starts-->
    <section class="logo-container">
        <div class="swiper logo-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide"><img src="img/client-logo-1.png" alt=""></div>
                <div class="swiper-slide slide"><img src="img/client-logo-2.png" alt=""></div>
                <div class="swiper-slide slide"><img src="img/client-logo-3.png" alt=""></div>
                <div class="swiper-slide slide"><img src="img/client-logo-4.png" alt=""></div>
                <div class="swiper-slide slide"><img src="img/client-logo-5.png" alt=""></div>
                <div class="swiper-slide slide"><img src="img/client-logo-6.png" alt=""></div>
            </div>
        </div>
    </section>
    <!--Clients Logo Section Ends-->


    <!--Footer Section Starts-->
    <section class="footer">
        <div class="links">
            <a class="btn" href="#home">Home</a>
            <a class="btn" href="#about">About</a>
            <a class="btn" href="#services">Services</a>
            <a class="btn" href="#projects">Projects</a>
            <a class="btn" href="#pricing">Pricing</a>
            <a class="btn" href="#contact">Contact</a>
            <a class="btn" href="#blogs">Blogs</a>
        </div>

        <div class="credit">Created By<span>Mr.Developer DIJHONS</span>!All Rights Reserved!</div>
    </section>


    <!--Footer Section Ends-->



    <!--Lightgallery Link-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
    <!--Swiper Link-->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!--Js Link-->
    <script src="js/script.js"></script>
    <!--LightGallery Link-->
    <script>lightGallery(document.querySelector('.projects .box-container'));</script>
</body>

</html>