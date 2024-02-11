<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $description ?>">
    <meta name="keywords" content="<?php echo $keywords ?>">
    <title><?php echo $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="scale_styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/slate/bootstrap.min.css" />

    
</head>
<body>
<div class="container-fluid">
    <div class="row" id="header"> <!--Header-->
        <div class="col-sm-4" id="logodiv"><!---Logo-->
            <a href="index.html"><img src="layout_images/headerFooter/flag-of-italy.png" alt="Logo" class="center"
                                      id="header-logo"></a>
        </div>
        <div class="col-sm-8">
            <div class="row" id="title"> <!---Name-->
                <h1 class="header-title">Amici Ristorante</h1>
            </div>
            <div class="row" id="title-underline">
                <img src="layout_images/headerFooter/underline-title.png" id="underline" alt="">
            </div>

            <div class="row" id="navigation"> <!---Navbar-->
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link" href="../crud/index.php">Create data</a>
                                <a class="nav-link" href="../crud/read.php">Read data</a>
                                <a class="nav-link" href="../hongqian_tasks/ex1.php">Exercise 11</a>
                                <a class="nav-link" href="../hongqian_tasks/ex2.php">Exercise 2</a>
                                <a class="nav-link" href="../hongqian_tasks/ex3.php">Exercise 3</a>
                                <a class="nav-link" href="../hongqian_tasks/ex4.php">Exercise 4</a>
                                <a class="nav-link" href="https://github.com/hongqian-li/web-programming-project">Exercise 5</a>
                                <a class="nav-link" href="">Exercise 6</a>
                                <a class="nav-link" href="">Exercise 7</a>
                            </div>

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <hr> <!--Line Break-->