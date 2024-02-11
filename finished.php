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
        <section class='finished' style="text-align:center; margin-top:100px; justify-content: center;">
            <div class="finished-content" style="margin-top:60px;">
                <div class="finished-title">
                    <h1>Congrats!</h1>
                    <p style="color:#ffff;">You can finished your work, you did great job!</p>
                </div>
                <div class="finished-row">
                    <div class="right-answer-btn">
                        <div class="rank1-start-btn" style="background-color: #FFC60B;">
                            <h2 style="color:ffff">Right Answer: 2</h2>
                        </div>
                        <div class="wrong-answer-btn" style="background-color: #F32F43; color:#ffff">   
                            <h2>Wrong Aswer: 0</h2>
                        </div>
                        <div class="score-btn" style="margin-top: 20px;">
                            <h2>Total Score: 100</h2>
                        </div>
                    </div>
                </div>
                <a href="index.php" class="back-btn" style="background-color: #5250f3; padding: 10px 10px 10px; border-radius: 20px; color: #ffff; margin-top: 80px;">Go to Home</a>

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