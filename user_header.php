<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>user</title>

<!--

Breezed Template

https://templatemo.com/tm-543-breezed

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="static/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="static/assets/css/font-awesome.css">

    <link rel="stylesheet" href="static/assets/css/templatemo-breezed.css">

    <link rel="stylesheet" href="static/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="static/assets/css/lightbox.css">

    </head>
    
    <body>
    
   <?php include 'connection.php' ?>
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="turf_home" class="logo">
                            User
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        	<ul class="nav">
                            <li class="scroll-to-section"><a href="user_home.php">User Home</a></li>
                            <li class="submenu">
                                <a href="javascript:;">View</a>
                                <ul>
                                    <li><a href="user_view_category.php">Category</a></li>
                                    <li><a href="user_send_complaints.php">Complaint</a></li>
                                    <li><a href="user_view_booking.php">Your Booking</a></li>
                                    
                                </ul>
                            </li>

                             <li class="submenu">
                                <a href="javascript:;">Match Request</a>
                                <ul>
                                    <li><a href="user_view_opponer_request.php">Opponent Request</a></li>
                                    <li><a href="user_view_my_match.php">My Request</a></li>
                                    
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="user_view_gallery.php">View Gallery</a></li>
                        <!--     <li class="scroll-to-section"><a href="turf_chat_with_users">Chat</a></li> -->
                            <li class="scroll-to-section"><a href="login.php">Logout</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->