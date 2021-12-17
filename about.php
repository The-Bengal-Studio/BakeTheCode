<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>About | Bake The Code</title>
    <link rel="stylesheet" href="css/about.css">
    <link rel="icon" href="images/ChefHat.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&family=Merriweather&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500&family=Dosis:wght@500&family=Merriweather&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@600&family=Barlow:wght@500&family=Dosis:wght@500&family=Merriweather&family=Play&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>

    <?php
    include "includes/navigation.php"
    ?>
    <div class="container-fluid">
        <div class="row">
            <h1 class="text-center mt-3">ABOUT US</h1>
        </div>
        <div class="row">
            <div class="col-md-4 d-flex justify-content-center mt-5 mb-5 mx-auto">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="images/about/Rituraj.jpg" class="img-fluid img-thumbnail">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-3">Rituraj Paul</h3>
                            <h5 class="shortInfo">Lead Developer</h5>
                            <p class="longInfo mt-3 mx-4">Other than coding random stuffs, I am into video games. Minecraft being on top of my priority list! Apart from that, I have a <a href="https://www.youtube.com/c/CheezePie963" target="_BLANK" class="infoLink">Youtube Channel</a>. Also, I love to drink milk and smash Billy. Dani will be proud XD!</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4 d-flex justify-content-center mt-5 mb-5 mx-auto">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="images/about/Debanjan.jpeg" class="img-fluid img-thumbnail">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-3">Debanjan Acharya</h3>
                            <h5 class="shortInfo">Programmer</h5>
                            <p class="longInfo mt-3 mx-4">My hobby is to know more about technologies and currently I am learning to code in C and C++ along with web dev. I hope I could contribute more to the world of technologies.</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4 d-flex justify-content-center mt-5 mb-5 mx-auto">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="images/about/Sayantan.jpeg" class="img-fluid img-thumbnail">
                        </div>
                        <div class="flip-card-back">
                            <h3 class="mt-3">Sayantan Kar</h3>
                            <h5 class="shortInfo">Full Stack Developer</h5>
                            <p class="longInfo mt-3 mx-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus voluptatibus laboriosam quia nesciunt nostrum consectetur enim vitae voluptates quasi officia autem exercitationem, iure, aut nisi veniam maxime nam voluptate recusandae.</p>
                        </div>
                    </div>
                </div>
            </div>


            
        </div>

        <p class="abt">
            <span style="color: #39FF14">Bake The Code</span> is a free to use, user friendly and open source website developed by three <span style="color:cyan">B.Tech 2nd year students of Electronics and Communication(ECE) Department</span> from <span style="color:cyan">Netaji Subhash Engineering College</span>. It doesn't matter whether you are just starting out or you are a dev already. This site is designed for all kinds of programmers and will surely act as a one stop solution to almost all your problems. Happy coding!
        </p>

        <?php
        include "includes/footerSection.php";
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>