<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body <?php body_class(); ?>>
    <header>

    </header>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">
            <h3 class="logoText"><span class="logoBlack">Diet</span><span class="logoBlue">bux</span></h3>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: flex-end;">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Plans</a>
                        <!-- <a class="nav-link active" aria-current="page" href="#">Plans</a> -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Calculator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nutritionist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sign up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Ar
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade dietCal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row calRow">
                        <div class="col-md-7 calColLeft">
                            <div class="prtInputGrp">
                                <label>Gender</label>
                                <div class="inputGrp">
                                    <button class="active" style="margin-right: 5px;">Male</button>
                                    <button style="margin-left: 5px;">Female</button>
                                </div>
                            </div>
                            <div class="prtInputGrp">
                                <label>Age</label>
                                <div class="inputGrp">
                                    <input placeholder="Yrs" />
                                </div>
                            </div>
                            <div class="prtInputGrp">
                                <label>Height</label>
                                <div class="inputGrp">
                                    <input placeholder="CM" />
                                </div>
                            </div>
                            <div class="prtInputGrp">
                                <label>Weight</label>
                                <div class="inputGrp">
                                    <input placeholder="KG" />
                                </div>
                            </div>
                            <div class="prtInputGrp">
                                <label>Physical <br /> Activity</label>
                                <div class="inputGrpCol">
                                    <button class="active">Yes, I frequently exercise per week</button>
                                    <button>No, I rarely exercise per week</button>
                                </div>
                            </div>
                            <div class="prtInputGrp">
                                <label>Diet Goal</label>
                                <div class="inputGrpCol">
                                    <button class="active">Loss Weight</button>
                                    <button>Gain Muscles</button>
                                    <button>Maintain Weight</button>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-5 calColRight">
                            <h3>BMR </h3>
                            <p>Loading...</p>

                            <h3>Recommended Kcal.</h3>
                            <p>Loading...</p>

                            <h3>Recommended Plan</h3>
                            <p> x3 Meals Per Day</p>
                            <p> x3 Meals Per Day</p>
                            <p> x3 Meals Per Day</p>
                            <hr style="color:#fff;opacity:1;" />
                            <div class="totalKWD">
                                <h3>149.00 KWD</h3>
                                <p>Per Month</p>
                            </div>
                            <div class="CTABtn">
                                <button class="whiteBtn">Customize Plan</button>
                                <button class="orangeBtn">Subscribe now</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div id="content">