<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&family=Merriweather&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="icon" href="images/ChefHat.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/index.js"></script>
    <link href="css/index.css" rel="stylesheet">

    <title>Bake The Code</title>
</head>

<body>

    <?php
    include "includes/navigation.php";
    ?>
    <div class="container-fluid">


        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1 class="text-center my-3" id="heading"></h1>
            </div>
            <div class="col-md-3"></div>
        </div>


        <!-- Carousal Part -->
        <div class="row">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/carousal/imageC1.png" class="d-block w-100 carousalProp" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/carousal/imageC3.jpg" class="d-block w-100 carousalProp" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/carousal/imageC3.jpg" class="d-block w-100 carousalProp" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


        <!-- Main body starts here  -->
        <div class="row contentInSite my-3">
            <div class="col-md-6">
                <p class="contentInSite">
                <h3 class="mb-3">Welcome to Bake the Code</h3>
                Coding can be frustrating at times. But trust me, once you get the hang of it, you rock! It all starts with a simple "Hello World!" and the journey never stops until you become a dev. Come forth! Let's bake some delicious codes!
                </p>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4 p-2 whatsNewSection">
                What's New! <br>
                <ol>
                    <?php
                    include_once "includes/dbconfig.php";

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<li>" . $row["Update Log"] . "</li>";
                    }
                    ?>
                </ol>
            </div>
            <div class="col-md-1"></div>
        </div>


        <!-- Featured Components  -->
        <div class="row mt-5">
            <h3 class="text-center text-light">Choose a category to visit</h3>
        </div>

        <div class="row mt-1">
            <!-- Keep adding new col-md-4 for more images -->
            <div class="col-md-4 imgIcon" id="basic-c"><img src="images/index/BasicC.png" class="img-fluid imgProperty" onclick="transfer('1')"></div>
            <div class="col-md-4 imgIcon" id="dsa-c"><img src="images/index/DSAC.png" class="img-fluid imgProperty" onclick="transfer('2')"></div>
            <div class="col-md-4 imgIcon" id="code-snippets"><img src="images/index/CodeSnippets.png" class="img-fluid imgProperty" onclick="transfer('3')"></div>

        </div>

        <!-- Random Horizontal Line to separate the feedback section from categories -->
        <div class="row mt-5">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <hr class="lineHorizontal">
            </div>
            <div class="col-md-2"></div>
        </div>


        
        <!-- Suggestion/Feedback Section -->
        <div class="row">
            <div class="col-md-6">
                <h5 class="text-light mt-5 mb-3">Have Suggestions/Feedbacks</h5><br>
                <form method="post" action="submitFeed.php">
                    <div class="mb-3">
                        <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Email Id" name='emailId'>
                        <div id="emailHelpSection" class="form-text">Don't worry, we won't share your email id</div>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="4" placeholder="Suggestion/Feedback" style="resize:none" name='suggestion'></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger" onclick="alert('Feedback/Suggestion submitted successfully!')">Submit</button>
                </form>
            </div>
            <div class="col-md-6 d-flex justify-content-center mt-2">
                <img src="images/index/BTC Logo 2.png" class="img-fluid mt-5" style="width:256px; height:256px;">
            </div>
        </div>



        <!-- Footer Section-->
        <div class="row mt-5">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <hr class="lineHorizontal">
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <h5 class="text-center text-light">Follow us on</h5>
        </div>

        <!-- Delete data-toggle part after Social Media has been established -->
        <div class="row my-3">
            <div class="col-md-2"></div>
            <div class="col-md-2 d-flex justify-content-center my-3">
                <img src="images/index/fb.png" class="img-fluid socials" data-toggle="popover" title="Coming Soon!" data-placement="bottom">
            </div>
            <div class="col-md-2 d-flex justify-content-center my-3">
                <img src="images/index/insta.png" class="img-fluid socials" data-toggle="popover" title="Coming Soon!" data-placement="bottom">
            </div>
            <div class="col-md-2 d-flex justify-content-center my-3">
                <img src="images/index/github.png" class="img-fluid socials" data-toggle="popover" title="Coming Soon!" data-placement="bottom">
            </div>
            <div class="col-md-2 d-flex justify-content-center my-3">
                <img src="images/index/linkedin.png" class="img-fluid socials" data-toggle="popover" title="Coming Soon!" data-placement="bottom">
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="row my-5">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <p id="quote" class="d-flex justify-content-center"></p>
                <p id="author" class="d-flex justify-content-end"></p>
            </div>
            <div class="col-md-3"></div>
        </div>

    </div>

    <?php
    include "includes/footerSection.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>