<?php 
$host = 'localhost';
$db = 'student';
$user = 'root';
$password = 'root';

$conn = mysqli_connect($host, $user, $password, $db);
if (!$conn){
	echo "connection failed";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cryptocurrency Website Design</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
</head>

<body>
    <div class="container">
        <nav>
            <img src="image/logo.svg" class="logo" width="250px">
            <ul>
                <li><a href="#">|</a></li>
                <li><a href="register/register.php" class="con1">Register</a></li>
                <li><a href="#" class="con1"><a href="Login\login.php">Login</a></li>
            </ul>
        </nav>
        <div class="row">
            <div data-aos="fade-right" data-aos-duration="3000" class="col1">
                <h1>Discover The Largest<br>Digital <span>Crypto</span><br>Currency</h1><br>
                <p>Exchange 100+ crypto currencies with 20+ fiat<br>
                    currencies using Crypto circle<br>with greate Experience.</p>
                <a href="Login/login.php" class="btn">Explore More</a>
            </div>
            <div class="col2">
                <div class="coin" data-aos="zoom-in-right" data-aos-duration="2500">
                    <img src="image/bitcoin-910307.svg">
                    <div>
                        <h3><b>$<span id="bitcoin"></span></b></h3>
                        <p>Bitcoin</p>
                    </div>
                </div>
                <div class="coin2" data-aos="zoom-in-up" data-aos-duration="2500">
                    <div>
                        <h3><b>10 Most Popular</b></h3>
                        <p>Cryptocurrency Exchanged</p>
                    </div>
                </div>
                <div class="coin3" data-aos="zoom-in-left" data-aos-duration="2500">
                    <div>
                        <h3><b><?php 
                        $sql = "select * from project";
                        if($result=mysqli_query($conn,$sql))
                        {
                            $usercount = mysqli_num_rows($result);
                        }
                        echo $usercount;?></td></b></h3>
                        <p>Active Customers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cointainer1">
        <div class="goldenbitcoin">
            <img src="image/goldenbtc.png" data-aos="zoom-in-up" data-aos-duration="2500">
            <div data-aos="zoom-in-left" data-aos-duration="2500" class="ccol1">
                <h1>Recieve Payment In<br> <span>Shortest </span>amount of time</h1><br>
                <h2>And Join Us For More Features</h2>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="fcontainer">
            <div class="row">
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                    <li><a href="aboutus/aboutus.html">Contact us</a></li>
                        <li><a href="privacypolicy/privacypolicy.html">Privacy Policy</a></li>
                        <li><a href="faq/faq.html">FAQ's</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Product</h4>
                    <ul>
                    <li><a href="Login/login.php">Crypto API Login</a></li>
                        <li><a href="home/homepage.php">Exchange</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Support</h4>
                    <ul>
                    
                        <li><a href="Login/login.php">Customers Support</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Social</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/crypto_circle2023/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/shreel-faldu-616a68241/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>
</body>
<!-- Add this line to include AOS library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

<!-- Your existing jQuery script -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    AOS.init();
    
    var btc = document.getElementById("bitcoin");

    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd",
        "method": "GET",
        "headers": {}
    }

    $.ajax(settings).done(function (response){
        console.log("API Response:", response);
        btc.innerHTML = response.bitcoin.usd;   
    });
</script>

</html>