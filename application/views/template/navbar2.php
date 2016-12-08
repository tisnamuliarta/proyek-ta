<!-- Sidebar navigation -->
<ul id="slide-out" class="side-nav fixed custom-scrollbar">

    <!-- Logo -->
    <li>
        <div class="logo-wrapper waves-light">
            <a href="#"><img src="http://mdbootstrap.com/wp-content/uploads/2015/12/mdb-white2.png" class="img-fluid flex-center"></a>
        </div>
    </li>
    <!--/. Logo -->

    <!--Search Form-->
    <li>
        <form class="search-form" role="search">
            <div class="form-group waves-light">
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </form>
    </li>
    <!--/.Search Form-->

    <!-- Side navigation links -->
    <li>
        <ul class="collapsible collapsible-accordion">
            <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-cutlery"></i> Categories<i class="fa fa-angle-down rotate-icon"></i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="#" class="waves-effect">Breakfast</a>
                        </li>
                        <li><a href="#" class="waves-effect">Sandwiches</a>
                        </li>
                        <li><a href="#" class="waves-effect">Lunch</a>
                        </li>
                        <li><a href="#" class="waves-effect">Dessert</a>
                        </li>
                        <li><a href="#" class="waves-effect">Snacks</a>
                        </li>
                        <li><a href="#" class="waves-effect">Soups</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-coffee"></i> Workshops<i class="fa fa-angle-down rotate-icon"></i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="#" class="waves-effect">How it looks?</a>
                        </li>
                        <li><a href="#" class="waves-effect">Cooking workshops</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-thumbs-o-up"></i> Collaboration<i class="fa fa-angle-down rotate-icon"></i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="#" class="waves-effect">My past collaborations</a>
                        </li>
                        <li><a href="#" class="waves-effect">Write me your idea</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-photo"></i> Gallery<i class="fa fa-angle-down rotate-icon"></i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="#" class="waves-effect">Photos</a>
                        </li>
                        <li><a href="#" class="waves-effect">Videos</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-newspaper-o"></i> Publications<i class="fa fa-angle-down rotate-icon"></i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="#" class="waves-effect">Media</a>
                        </li>
                        <li><a href="#" class="waves-effect">Books</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-heart"></i> About<i class="fa fa-angle-down rotate-icon"></i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="#" class="waves-effect">Why this blog?</a>
                        </li>
                        <li><a href="#" class="waves-effect">Something about me</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
    <!--/. Side navigation links -->

</ul>
<!--/. Sidebar navigation -->

<!--Navbar-->
<nav class="navbar navbar-fixed-top scrolling-navbar navbar-dark info-color">

    <!-- SideNav slide-out button -->
    <div class="float-xs-left">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
    </div>

    <!-- Breadcrumb-->
<!--     <div class="breadcrumb-dn">
        <p>Material Design for Bootstrap</p>
    </div>
 -->

    <ul class="nav navbar-nav float-xs-right pull-right">
      <?php  if ($this->session->userdata('id')) {?>

        <li class="nav-item ">
            <a class="nav-link"><i class="fa fa-envelope"></i> <span class="hidden-sm-down">Contact</span></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link"><i class="fa fa-comments-o"></i> <span class="hidden-sm-down">Support</span></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link"><i class="fa fa-user"></i> <span class="hidden-sm-down">Account</span></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Profile</a>
            <div class="dropdown-menu dropdown-primary dd-right" aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <a class="dropdown-item" href="<?php echo site_url('home/logout') ?>">Logout</a>
            </div>
        </li>
        <?php } else {?>
          <li class="nav-item ">
            <a class="nav-link"><i class="fa fa-envelope"></i> <span class="hidden-sm-down">Channel</span></a>
          </li>
          <li class="nav-item ">
              <a href="<?php echo site_url('login'); ?>" class="nav-link"><i class="fa fa-comments-o"></i> <span class="hidden-sm-down">Login</span></a>
          </li>
          <li class="nav-item ">
              <a href="<?php echo site_url('register'); ?>" class="nav-link"><i class="fa fa-comments-o"></i> <span class="hidden-sm-down">Register</span></a>
          </li>
        <?php }?>
    </ul>

</nav>
<!--/.Navbar-->
