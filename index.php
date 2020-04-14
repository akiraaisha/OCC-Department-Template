<!DOCTYPE html>
<html lang="en">
<head>
    <title>{TITLE NAME}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" sizes="32x32" href="images/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css"/>

    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/form.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/input.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/icon.min.css"/>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/form.min.js"></script>
</head>
<body id="_body">
<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
        <div class="custom-menu">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
                <i class="fa fa-bars"></i>
                <span class="sr-only">Toggle Menu</span>
            </button>
        </div>
        <div class="p-4 pt-5">
            <!--<h1><a href="index.html" class="logo">Splash</a></h1>-->
            <h1><img class="logo" src="images/logo_250px.png" height="150"/></h1>
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"
                       class="dropdown-toggle">Forms</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Form 1</a>
                        </li>
                        <li>
                            <a href="#">Form 2</a>
                        </li>
                        <li>
                            <a href="#">Form 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>

            <div class="mb-5">
                <div class="form-group d-flex">
                    <div class="ui button animated" style="position:absolute;left: 4.5rem;" tabindex="0">
                        <div class="visible content"><a style="font-size: larger">LOGOUT</a></div>
                        <div class="hidden content" onclick="window.location='logout.php';">
                            <i class="times circle icon big"></i>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </nav>

    <!-- Page Content  -->

    <div id="content" class="p-4 p-md-5 pt-5">
        <!--          <div class="topbar"></div>-->
        <div class="top">
            <img class="topbar" src="images/topbar.png" align="right"/>
            <div class="department-name">{Your Department Name}</div>
            <img class="topbar2" src="images/topbarLine.png"/>
            <img class="topbar3" src="images/topbarLine.png"/>
        </div>
        <div class="ui container">
            <form class="ui form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <!--START YOUR CODE BELOW FROM HERE-->
                <!--Uncomment the sample code below to see what happens or just delete it.-->
                <h1 class="">{TITLE} ex: Add Student</h1>
                <!--                <div class="ui segment compact">
                                    <div class="fields ui">
                                        <div class="field">
                                            <label>First Name</label>
                                            <input type="text" placeholder="First Name">
                                        </div>
                                        <div class="field ui">
                                            <label>Middle name</label>
                                            <input type="text" placeholder="Middle Name">
                                        </div>
                                        <div class="field ui">
                                            <label>Last Name</label>
                                            <input type="text" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="ui divider"></div>
                                    <h4>Parents Information</h4>
                                    <div class="fields">
                                        <div class="field">
                                            <label>First Name</label>
                                            <input type="text" placeholder="First Name">
                                        </div>
                                    </div>
                                </div>-->

                <!--END YOUR CODE ABOVE FROM HERE-->
            </form>
        </div>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>