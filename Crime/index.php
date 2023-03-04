<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crime Report</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/index2.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

    <!-- custom js file link  -->
    <script src="js/index2.js" defer></script>
</head>

<body>
    <!-- header section starts  -->

    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>

        <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo" style="color:cyan">
            Crime Reports
        </a>

        <nav class="navbar">
            <a data-aos="zoom-in-left" data-aos-delay="300" href="#home">home</a>
            <a data-aos="zoom-in-left" data-aos-delay="450" href="#about">about</a>
            <!-- <a data-aos="zoom-in-left" data-aos-delay="600" href="#destination">destination</a> -->
            <a data-aos="zoom-in-left" data-aos-delay="750" href="#services">services</a>
            <!-- <a data-aos="zoom-in-left" data-aos-delay="900" href="#gallery">gallery</a> -->
            <!-- <a data-aos="zoom-in-left" data-aos-delay="1150" href="#blogs">blogs</a> -->
        </nav>
        

            <div class="dropdown">
                <button class="dropbtn" data-aos="zoom-in-left" data-aos-delay="1300" href="#book-form"
                class="btn dropDown">Login</button>
                <div class="dropdown-content">
                    <a href="html/finalAdmin/adminPHP/index.php" target="_blank">Admin</a>
                    <a href="html/PoliceHtml/policeLoginPage.php" target="_blank">Police</a>
                    <a href="html/userHTML/userLogin.php" target="_blank">User</a>
                </div>
            </div> >
    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">
        <div class="content">
            <!-- <span data-aos="fade-up" data-aos-delay="150">Lorem ipsum dolor sit.</span> -->
            <h3 data-aos="fade-up" data-aos-delay="300">Crime reporting</h3>
            <p data-aos="fade-up" data-aos-delay="450">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus quia illum quod perspiciatis
                harum in possimus? Totam consequuntur officia quia?
            </p>
            <a data-aos="fade-up" data-aos-delay="600" href="#" class="btn">Explore More</a>
        </div>
    </section>

    <!-- home section ends -->

    <!-- booking form section starts  -->

    <section class="book-form" id="book-form">
        <center>
            <h1 data-aos="zoom-in" data-aos-delay="150" style="color:cyan">Technical Issue Report here</h1>
        </center>
        <br>
        <form action="">
            <div data-aos="zoom-in" data-aos-delay="150" class="inputBox">
                <span>Name</span>
                <input type="text" placeholder="Enter your name" value="" />
            </div>
            <div data-aos="zoom-in" data-aos-delay="300" class="inputBox">
                <span>Email</span>
                <input type="email" value="" placeholder="Enter your email" />
            </div>
            <div data-aos="zoom-in" data-aos-delay="450" class="inputBox">
                <span>Contact</span>
                <input type="phone" placeholder="Enter your contact" value="" />
            </div>
            <input data-aos="zoom-in" data-aos-delay="600" type="submit" value="Submit" class="btn" />
        </form>
    </section>

    <!-- booking form section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">
        <div class="video-container" data-aos="fade-right" data-aos-delay="300">
            <img src="images/backgroundImage2.jpg" id="reportwhy">
        </div>
        </div>

        <div class="content" data-aos="fade-left" data-aos-delay="600">
            <span>Why to Report Crime?</span>
            <h3>Lorem ipsum dolor sit amet.</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde fugit repellat error deserunt nam aperiam
                odit libero quos provident. Nostrum?
            </p>
            <a href="#" class="btn">read more</a>
        </div>
    </section>


    <section class="services" id="services">
        <div class="heading">
            <h1 style="color:cyan">Our services</h1>
            <!-- <h1>countless expericences</h1> -->
        </div>

        <div class="box-container">
            <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                <!-- <i class="fa fa-glasses"></i> -->
                <h3>View criminal</h3>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.
                </p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
                <!-- <i class="fa fa-triangle-exclamation"></i> -->
                <h3>Report Problem</h3>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.
                </p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
                <!-- <i class="fas fa-utensils"></i> -->
                <h3>Permission Request</h3>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.
                </p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="600">
                <!-- <i class="fas fa-hotel"></i> -->
                <h3>Problem</h3>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.
                </p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="750">
                <!-- <i class="fas fa-wallet"></i> -->
                <h3>Contact Police</h3>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.
                </p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="900">
                <!-- <i class="fas fa-headset"></i> -->
                <h3>24/7 support</h3>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.
                </p>
            </div>
        </div>
    </section>

    <!-- review section starts  -->

    <section class="review">
        <div class="content" data-aos="fade-right" data-aos-delay="300">
            <span>testimonials</span>
            <h3>review of the User</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda laudantium corporis fugiat quae unde
                perspiciatis similique ab modi enim consequatur aperiam cumque distinctio facilis sit, debitis possimus
                asperiores non harum.
            </p>
        </div>

        <div class="box-container" data-aos="fade-left" data-aos-delay="600">
            <div class="box">
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, ratione.
                </p>
                <div class="user">
                    <img src="images/pic-1.png" alt="" />
                    <div class="info">
                        <h3>john deo</h3>
                        <span>designer</span>
                    </div>
                </div>
            </div>
            <div class="box">
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, ratione.
                </p>
                <div class="user">
                    <img src="images/pic-2.png" alt="" />
                    <div class="info">
                        <h3>john deo</h3>
                        <span>designer</span>
                    </div>
                </div>
            </div>
            <div class="box">
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, ratione.
                </p>
                <div class="user">
                    <img src="images/pic-3.png" alt="" />
                    <div class="info">
                        <h3>john deo</h3>
                        <span>designer</span>
                    </div>
                </div>
            </div>
            <div class="box">
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, ratione.
                </p>
                <div class="user">
                    <img src="images/pic-4.png" alt="" />
                    <div class="info">
                        <h3>john deo</h3>
                        <span>designer</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

 

    <div class="banner">
        <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
            <span>Let's unite and try to stop crime</span>
            <h3>Report it </h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptatum praesentium amet quibusdam
                quam officia suscipit odio.
            </p>
            <!-- <a href="#book-form" class="btn">book now</a> -->
        </div>
    </div>



    <!-- footer section starts  -->

    <section class="footer">
        <div class="box-container">
            <div class="box" data-aos="fade-up" data-aos-delay="150">
                <a href="#" class="logo">
                    <i class="fas fa-paper-plane"></i>Crime Reporting
                </a>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, ad?
                </p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="300">
                <h3>quick links</h3>
                <a href="#home" class="links">
                    <i class="fas fa-arrow-right"></i> home
                </a>
                <a href="#about" class="links">
                    <i class="fas fa-arrow-right"></i> about
                </a>
                <a href="#services" class="links">
                    <i class="fas fa-arrow-right"></i> services
                </a>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="450">
                <h3>contact info</h3>
                <p><i class="fas fa-map"></i> mumbai, india</p>
                <p><i class="fas fa-phone"></i> +123-456-7890</p>
                <p><i class="fas fa-envelope"></i> muskanaherwar30@gmail.com</p>
                <p><i class="fas fa-clock"></i> 24/7</p>
            </div>

            
        </div>
    </section>

    <div class="credit">
        created by <span>Muskan Aherwar</span> | all rights reserved!
    </div>

    <!-- footer section ends -->

    <script src="js/index2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
    AOS.init({
        duration: 800,
        offset: 150,
    });
    </script>
</body>

</html>