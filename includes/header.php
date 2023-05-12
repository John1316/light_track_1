        <!-- Navbar Area Start -->
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="home.php" class="logo">
                    <img src="assetss/img/logo.png"alt="logo" height="455px" width="100px">
                </a>
            </div>
        
            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="home.php">
                            <img src="assetss/img/logo.png" alt="logo" class="img-fluid"  height="400px" width="300px">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <?php if(isset($_SESSION['user_id'])){ ?> 

                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="index.php" class="nav-link ">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="about.php" class="nav-link">About</a>
                                </li>     
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">services</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="events.php" class="nav-link">events</a>
                                            </li>
                                        
                                            <li class="nav-item">
                                                <a href="resg-adv.php" class="nav-link">advisor consultent</a>
                                            
                                            </li>
                                        
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">Paths</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="majors.php" class="nav-link">Career path</a>
                                        </li>
                                    <!-- <li class="nav-item">
                                            <a href="blog-details.html" class="nav-link">Job titles</a>
                                        </li>-->
                                        <li class="nav-item">
                                            <a href="faculty.php" class="nav-link">Faculty path</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.php" class="nav-link">Contact Us</a>
                                </li>

                                </li>
                                
                            </ul>


                            <div class="other-option">
                                
                                <!-- <a><?= $_SESSION['first_name'] ?></a>
                                <a><?= $_SESSION['last_name'] ?></a>
                                <a href="logout.php"  class="signup-btn">Logout</a> -->
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle"><?= $_SESSION['first_name']?> <?= $_SESSION['last_name']?>  </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="logout.php" class="nav-link">Profile</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="logout.php" class="nav-link">Logout</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <?php }elseif(isset($_SESSION['advisor_id'])){ ?> 
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="dashboard.php" class="nav-link ">Dashboard</a>
                                </li>
                                
                            </ul>
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="my-requests.php" class="nav-link ">My requests</a>
                                </li>
                                
                            </ul>
                            <div class="other-option">
                                <a><?= $_SESSION['name'] ?></a>
                                <a href="logout.php"  class="signup-btn">Logout</a>
                                <!-- <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle"><?= $_SESSION['name'] ?></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="logout.php" class="nav-link">Logout</a>
                                        </li>
                                    </ul>
                                </li> -->
                            </div>
                            <?php }else{  ?>
                                <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="index.php" class="nav-link ">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="about.php" class="nav-link">About</a>
                                </li>     
                                <li class="nav-item">
                                    <a href="sign-up.php" class="nav-link dropdown-toggle">services</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="sign-up.php" class="nav-link">Events</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="sign-up.php" class="nav-link">advisor consultent</a>
                                            </li>
                                        
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="sign-up.php" class="nav-link dropdown-toggle">Paths</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="sign-up.php" class="nav-link">Career path</a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a href="blog-details.html" class="nav-link">Job titles</a>
                                        </li> -->
                                        <li class="nav-item">
                                            <a href="sign-up.php" class="nav-link">Faculty path</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="sign-up.php" class="nav-link">Contact Us</a>
                                </li>
                            </ul>
                            <div class="other-option">
                                <a href="sign-up.php" class="signup-btn">Sign Up</a>
                                <a href="sign-in.php" class="signin-btn">Sign In</a>
                            </div>

<?php } ?>
                        </div>
                 </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar Area End -->