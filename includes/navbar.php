<?php session_start(); 
include("../includes/connection.php")
?>
<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<?php $page = basename($_SERVER['PHP_SELF']); ?>

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="../default/index.php" class="logo">
                        <img src="../assets/images/logo/Mariana-Hotel-t.png">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section">
                            <a href="../default/index.php" class="<?php if ($page == 'index.php') : echo 'active';endif; ?>">Home</a>
                        </li>
                        <li>
                            <a href="../default/rooms.php" class="<?php if ($page == 'rooms.php') : echo 'active';endif; ?>">Our Rooms</a>
                        </li>
                        <li>
                            <a href="../default/book-room.php" class="<?php if ($page == 'book-room.php') : echo 'active';endif; ?>">Make Resarvation</a>
                        </li>

                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->

                        <!-- <li>
                            <a href="../default/chefs.php" class="<?php //if ($page == 'chefs.php') : echo 'active';endif; ?>">Chefs</a>
                        </li> -->
                        <li class="submenu">
                            <a href="#">Features</a>
                            <ul>
                                <li class="">
                                    <a href="../default/menu.php" class="<?php if ($page == 'menu.php') : echo 'active';endif; ?>">Our Delicious menu</a>
                                </li>
                                <li><a href="#">Features Page 2</a></li>
                                <li><a href="#">Features Page 3</a></li>
                                <li><a href="#">Features Page 4</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="../default/about.php" class="<?php if ($page == 'about.php') : echo 'active';endif; ?>">About Us</a>
                        </li>
                        <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                        <li>
                            <a href="../default/contact.php" class="<?php if ($page == 'contact.php') : echo 'active';endif; ?>">Contact Us</a>
                        </li>

                        <?php if(isset($_SESSION['email'])){ ?>

                            <li class="submenu">
                                <a href="#"><?php echo $_SESSION['username']; ?></a>
                                <ul>
                                    <li class="">
                                        <a href="../login/logout.php" class="<?php if ($page == 'menu.php') : echo 'active';endif; ?>">Logout</a>
                                    </li>
                                    <!-- <li><a href="#">Features Page 2</a></li> -->
                                </ul>
                            </li>

                        <?php }else{ ?>
                        
                            <li>
                            <a href="../login/index.php" class="<?php if ($page == 'index.php') : echo 'active';endif; ?>">Sign in</a>
                            </li>
                        
                        <?php } ?>
                    </ul>
                    
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->