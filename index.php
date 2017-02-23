<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Info -->
    <title>Jebba Needlepoint</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--CSS -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900,100italic,300italic,400italic,700italic,900italic">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="assets/styles/index.css" >
</head>

<body class="landing">

    <!-- Navigation -->
    <nav class="navbar">
        <a href="index.html" class="logo">
            <img src="#" alt="jebba logo">
        </a>
        <div class="links-container">
            <a href="#about" class="navbar-link">About Us</a>
            <a href="#store" class="navbar-link">Find Us</a>
            <a href="#contact" class="navbar-link">Contact Us</a>
        </div>
    </nav>

    <!-- Header Content -->
    <section class="header-content">
        <div class="container" id="head">
            <h1 class="header-title">Jebba Needlepoint</h1>
        </div>
        <div class="graphic"></div>
    </section>

    <!-- Selling Points -->
    <section class="selling-points container clearfix">
        <div class="col-md-4 point">
            <span class="ion-edit" aria-hidden="true"></span>
            <h3 class="point-title">Choose your project</h3>
            <p class="point-description">Our store is home to thousands of canvases, yarns, and threads to bring your project to life. Custom designs are also available. </p>
        </div>
        <div class="col-md-4 point">
            <span class="ion-scissors" aria-hidden="true"></span>
            <h3 class="point-title">Build your skills</h3>
            <p class="point-description">Join one of our group classes or request a private session.</p>
        </div>
        <div class="col-md-4 point">
            <span class="ion-thumbsup" aria-hidden="true"></span>
            <h3 class="point-title">Exceptional service</h3>
            <p class="point-description">We'll make sure your finished project is exactly what you want.</p>
        </div>
    </section>


<!-- calendar grid -->     

    <section class="store-info">
        <div class="container" id="storeinfo">
            <h1>Store Hours</h1>
            <div class="grid-calendar">
                <div class="row seven-cols">
                    <div class="col-sm-1 grid-cell">
                        <span class="day">Sunday</span>
                        <p>Closed</p>    
                    </div>
                    <div class="col-sm-1 grid-cell">
                        <span class="day">Monday</span>
                        <p>Closed</p> 
                    </div>
                    <div class="col-sm-1 grid-cell">
                        <span class="day">Tuesday</span>
                        <p>9AM - 6PM</p>
                    </div>
                    <div class="col-sm-1 grid-cell">
                        <span class="day">Wednesday</span>
                        <p>9AM - 6PM</p>
                    </div>
                    <div class="col-sm-1 grid-cell">
                        <span class="day">Thursday</span>
                        <p>9AM - 6PM</p>
                    </div>
                    <div class="col-sm-1 grid-cell">
                        <span class="day">Friday</span>
                        <p>9AM - 6PM</p>
                    </div>
                    <div class="col-sm-1 grid-cell">
                        <span class="day">Saturday</span>
                        <p>9AM - 6PM</p>
                    </div>
                </div>
            </div>        
        </div>
    </section>


    <section class="contact container clearfix">
        <h3>Find Us</h3>
        <div class="col-md-4 point">
            <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
            <p class="contact-description"><a href="https://www.google.com/maps/place/Jebba+Needlepoint/@33.602608,-117.8730154,15z/data=!4m2!3m1!1s0x0:0x4767fd96a334d3e1">2628 East Coast Highway, Corona Del Mar, CA 92625.</a></p>    
        </div>
        <div class="col-md-4 point">
            <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
            <p class="contact-description">(949)644-7904</p>
        </div>
        <div class="col-md-4 point">
            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
            <p class="contact-description">Email <a href="mailto:dmkli@sbcglobal.net">Jebba</a></p>
        </div>
    </section>

    <div class="iframe">
        <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCk4txlXT3cR_1MMfkZWy6_OMlNvpqg_sg&q=Jebba+Needlepoint" allowfullscreen></iframe>
    </div>

    
    <!-- Contact Form -->
    
    <form class="form-horizontal" role="form" method="post" action="index.php">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                <?php echo "<p class='text-danger'>$errName</p>";?>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                <?php echo "<p class='text-danger'>$errEmail</p>";?>
            </div>
        </div>
        <div class="form-group">
            <label for="message" class="col-sm-2 control-label">Message</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                <?php echo "<p class='text-danger'>$errMessage</p>";?>
            </div>
        </div>
        <div class="form-group">
            <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                <?php echo "<p class='text-danger'>$errHuman</p>";?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <?php echo $result; ?>
            </div>
        </div>
    </form>
    
    
    
    
    

    <footer>
        <div class="container footer">
            <div class="col-md-8">
                <nav class="nav-footer">
                    <div class="links-container">
                        <a href="#about" class="navbar-link">About</a>
                        <a href="#contact" class="navbar-link">Contact</a>
                        <a href="#" class="navbar-link">Privacy Policy</a>
                        <a href="#" class="navbar-link">Terms</a>
                    </div>
                </nav>
            </div>
            <div class="col-md-2">
                <img src="" alt="Jebba"/>
            </div>
            <div class="col-md-2">
                <p>&copy; 2015. Jebba Needlepoint All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    
    
     

        <!-- Scripts -->    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
    <script src="https://use.fontawesome.com/d9fb11b85d.js"></script>
    <script src="scripts/index.php"></script>

</body>
</html>