<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">

    <title>CustomBuilt.com</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">CustomBuilt.</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="Product.php">Products</a></li>
                    <li><a href="About.php">About</a></li>
                    <li><a href="Contact.php">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                        <li>
                        <form class="navbar-form" method="GET" action="">
                            <input type="text" name="search" class="form-control" placeholder="Search...">
                        </form>
                    </li>
                    </li>
                </ul>
                <form class="navbar-form navbar-right" method="post">
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Sign in</button>
                </form>
            </div>
            <!--/.navbar-collapse -->
        </div>
    </div>

    <div class="jumbotron">
        <div class="container">
            <?php 
                $welcomeMessage = 'PC Build Experience Simplified For All.';
                $webInfo = 'Whether you are a beginner or a veteran looking to build a PC, look no further.
                Here at CustomBuilt. we aim to provide a memorable experience for all when it comes to building 
                their PC.';
            ?>

            <h1><?php echo $welcomeMessage ?></h1>

            <p><?php echo $webInfo ?></p>

            <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h2>Trending Builds</h2>

                <p> </p>

                <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Completed Builds</h2>

                <p></p>

                <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Budget Builds</h2>

                <p></p>

                <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
            </div>
        </div>

        <hr>

        <footer>
            <p>&copy; CustomBuilt.com</p>
        </footer>
    </div>
    <!-- /container -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    
    <?php
        include 'DBconfig.php';
    ?>


</body>
</html>
