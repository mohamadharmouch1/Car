<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>

    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Link File CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav>
            <img src="img/car-logo.png" class="logo" alt="">
            <div class="menu">
                <a href="index.php">Home</a>
                <a href="about.php">About Car</a>
                <a href="contactus.php">Contact</a>
            </div>

            <div class="social">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </nav>
    </header>
    
    <div class="hero">

        <div class="text">
            <h4>Powerful, Fun and</h4>
            <h1>Fierce to <br> <span>Drive</span></h1>
            <p>Real Poise, Real Power, Real Perfomance.</p>
            <a href="login.php" class="btn">book a test ride</a>
        </div>
    </div>

    <script>
        let heroBg = document.querySelector('.hero');

        setInterval(() => {
            heroBg.style.backgroundImage = "url(image/img/bg-light.jpg)"
            
            setTimeout(() => {
                heroBg.style.backgroundImage = "url(image/img/bg.jpg)"
            }, 1000);
        }, 2200);
    </script>
</body>
</html>