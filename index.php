<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathizz | Mathematics Quizz</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

</head>

<header>
    <div id="top-nav" class="top-nav">
        <div class="logo"><a href="#">Mathizz</a></div>
        <ul class="links">
            <li><a href="#home">Home</a></li>
            <li><a href="#library">Learning Library</a></li>
            <li><a href="#rank">Rank</a></li>
            <li><a href="#footer">Contact Us</a></li>
        </ul>
        <a href="#" class="sign_in_btn">Sign In</a>
    </div>
    <script src="script.js"></script>
</header>

<body>
    <main>
        <section id='home'>
            <div class="container">
                <div class='row'>
                    <h1>Explore & Learn Consistently</h1>
                </div>
            </div>
            <a href="#library" class="start_btn">Get Started</a>
        </section>

        <section id='library'>
            <div class="library-content">
                <div class="title">
                    <h1>Learning Library</h1>
                </div>
                <div class="row">
                    <div class="column">
                        <img src="images/Addition.png" width="80%">
                        <a href="addition_detail.php"><button class="start-btn">Play Now</button></a>
                    </div>
                    <div class="column">
                        <img src="images/Subtraction.png" width="80%">
                        <a href="subtraction_detail.php"><button class="start-btn">Play Now</button></a>
                    </div>
                    <div class="column">
                        <img src="images/Multiplication.png" width="80%">
                        <a href="multiplication_detail.php"><button class="start-btn">Play Now</button></a>
                    </div>
                </div>
            </div>
        </section>

        <section id='rank' style="text-align:center; margin-top:100px; justify-content: center;">
            <div class="rank-content" style="margin-top:60px;">
                <div class="rank-title">
                    <h1>Rank</h1>
                    <p style="color:#ffff;">You can easily manage your business with a powerful tools</p>
                </div>
                <div class="rank-row">
                    <div class="rank-column">
                        <div class="rank1-start-btn">
                            <h2>Salsa</h2>
                            <a href="#" class="description-rank-btn">1st</a>
                        </div>
                        <div class="rank2-start-btn">
                            <h2>Keylia</h2>
                            <a href="#" class="description-rank-btn">2nd</a>
                        </div>
                        <div class="rank3-start-btn">
                            <h2>Mely</h2>
                            <a href="#" class="description-rank-btn">3rd</a>
                        </div>
                        <div class="rank-start-btn">
                            <h2>Wilm</h2>
                        </div>
                        <div class="rank-start-btn">
                            <h2>Emy</h2>
                        </div>
                    </div>
                </div>
        </section>

        <section class="footer" id="footer" style="justify-content: center;">
            <div class="box-container" style="justify-content: center;">
                <div class="box">
                    <h3>Quick Links</h3>
                    <a href="#home" class="links">Home</a>
                    <a href="#library" class="links">Library</a>
                    <a href="#rank" class="links">Rank</a>
                    <a href="#footer" class="links">Contact Us</a>
                </div>
            </div>
        </section>

    </main>
    <script>
        var header = $('top-nav');
        var range = 200;
        $(window).on('scroll', function() {
            var scrollTop = $(this).scrollTop(),
                height = header.outerHeight(),
                offset = height / 2,
                calc = 1 - (scrollTop - offset + range) / range;
            header.css({
                'opacity': calc
            });
            if (calc > '1') {
                header.css({
                    'opacity': 1
                });
            } else if (calc < '0') {
                header.css({
                    'opacity': 0
                });
            }
        });
    </script>
</body>

</html>