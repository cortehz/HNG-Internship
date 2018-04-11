<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HNG Internship Stage 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
        crossorigin="anonymous">
    <script src="main.js"></script>
    <style>
        body {
            background: #4B4E4F;
        }

        .navbar-brand {
            color: #fff;
            font-family: roboto;
            font-size: 24px;
            font-style: italic;
            font-weight: 600;
        }

        .nav-link {
            color: #fff;
            font-family: roboto;
            font-size: 18px;
            font-weight: 100;
        }

        .hero {
            width: 558px;
            height: 266px;
            background: rgba(255, 252, 252, 0.6);
            border-radius: 40px;
            padding: 2%;
           margin-top: 15%;
           margin-left: 25%;

        }

        .hero span {
            color: #fff;
        }

        .hero h4 {
            color: #243F9E;
            font-weight: 300;
            font-family: roboto;

        }
        .time{
            margin-top: 10%;
            font-size: 32px;
            color: #fff;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">{ DEV }</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section>
        <div class="container">
            <div class="hero row">
                <div class="col">


                    <h4 class="text-center"> Hi, My Name is
                        <span>SAMUEL OMANCHI</span>. Welcome to my HNG Internship Figma Design</h4>

                    <h4 class="text-center time">
                    <?php
date_default_timezone_set("Africa/Nigeria");
echo "The time is " . date("h:i:sa") . " (GMT) ";
?>
                    </h4>
                </div>
            </div>
        </div>
    </section>


</body>

</html>