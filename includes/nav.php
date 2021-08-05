<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?= isset($title)?$title:'' ?></title>
    <script src="assets/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/owlcarousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/owlcarousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="assets/images/logo.png" class="img-fluid" alt="Logo" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <svg width="1.3em" color="#fff" height="1.3em" viewBox="0 0 16 16" class="bi bi-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>
            <div class="collapse text-center text-lg-left navbar-collapse" id="navbarSupportedContent">
                <?php
                $php_self_exp = explode("/",$_SERVER['PHP_SELF']);
                $page_name = end($php_self_exp);
                if ($page_name=='index.php' or $page_name=='pro.php' or $page_name=='sub_details.php' or $page_name=='category.php' or $page_name=='profile.php'){
                    ?>
                    <ul class="navbar-nav left_side mr-auto">
                        <li class="nav-item">
                            <a class="nav-link <?= $page_name=='index.php'?'active':'' ?> <?= $page_name=='category.php'?'active':'' ?>" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $page_name=='pro.php'?'active':'' ?>" href="pro.php">Pro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Global Companies</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav dashb_nav_right right_side ml-auto">
                        <li class="nav-item">
                            <a href="#toearn" class="nav-link"> To Earn </a>
                        </li>
                        <li class="nav-item">
                            <a href="#tobuy" class="nav-link active_tree text-capitalize"> to Buy </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="icon">
                                    <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-chat-left-dots" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v11.586l2-2A2 2 0 0 1 4.414 11H14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item mx-1">
                            <a href="" class="nav-link">
                                <img src="assets/images/img.png" alt="" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Cindy’s Office</a>
                        </li>
                    </ul>
                    <?php
                }elseif ($page_name='messages.php' or $page_name=='monetize.php'){
                    $end_ofurl = end($php_self_exp);
                    ?>
                    <ul class="navbar-nav dashb_nav_left left_side mr-auto">
                        <li class="nav-item">
                            <a class="nav-link <?= $end_ofurl=='monetize.php'?'active':'' ?>" href="monetize.php">Monetize</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $end_ofurl=='messages.php'?'active':'' ?>" href="messages.php">Chat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile.php">Profile</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav dashb_nav_right right_side ml-auto">
                        <li class="nav-item">
                            <a href="#messege" class="nav-link active_tree"> To Earn </a>
                        </li>
                        <li class="nav-item">
                            <a href="#messege" class="nav-link"> to Buy </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <img src="assets/images/img.png" alt="" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Cindy’s Office</a>
                        </li>
                    </ul>
                    <?php
                }
                ?>
            </div>
        </div>
    </nav>