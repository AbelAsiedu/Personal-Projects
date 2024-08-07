<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plastic Pollution Campaign</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="scripts.js"></script>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <div class="brand">
                    <a href="index.php">Plastic Pollution Campaign</a>
                </div>
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn">About</a>
                        <div class="dropdown-content">
                            <a href="strategy.php">Strategy</a>
                            <a href="campaigns.php">Campaigns</a>
                        </div>
                    </li>
                    <li><a href="help.php">Help</a></li>
                    <li><a href="latest.php">Latest</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
                <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </div>
        </nav>
    </header>

    <div class="popup" id="signupPopup">
        <form action="register.php" method="POST">
            <h2>Sign Up Now</h2>
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Sign Up Now</button>
        </form>
    </div>

    <section class="intro">
        <div class="container">
            <h1>Welcome to Plastic Pollution Campaign</h1>
            <p>Join us in our mission to combat plastic pollution and save the environment.</p>
            <button id="signupButton">Sign Up Now</button>
        </div>
    </section>

    <section class="twitter-feed">
        <div class="container">
            <h2>Our Twitter Feed</h2>
            <!-- Embed Twitter Feed Here -->
            <a class="twitter-timeline" href="https://twitter.com/TwitterDev">Tweets by TwitterDev</a> 
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </section>

    <section class="slider">
        <div class="container">
            <div class="slide active">
                <img src="images/slide 1.jpg" alt="Slide 1">
                <p>Caption for slide 1</p>
            </div>
            <div class="slide">
                <img src="images/slide 2.jpg" alt="Slide 2">
                <p>Caption for slide 2</p>
            </div>
            <div class="slide">
                <img src="images/slide3.jpg" alt="Slide 3">
                <p>Caption for slide 3</p>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="social-media">
                <a href="https://www.facebook.com" target="_blank">Facebook</a>
                <a href="https://www.twitter.com" target="_blank">Twitter</a>
                <a href="https://www.instagram.com" target="_blank">Instagram</a>
            </div>
            <div class="footer-links">
                <a href="privacy.php">Privacy</a>
                <a href="copyright.php">Copyright</a>
                <a href="cookies.php">Cookies</a>
            </div>
        </div>
    </footer>

    <div id="cookieConsent">
        <div class="container">
            <p>This website uses cookies to ensure you get the best experience. <a href="cookies.php">Learn more</a></p>
            <button id="acceptCookies">Accept</button>
        </div>
    </div>
</body>
</html>
