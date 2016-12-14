<!--Navbar-->
<nav class="navbar navbar-fixed-top navbar-dark bg-primary">

  <!--Content for large and medium screens-->
  <div class="container">
    <!--Collapse button-->
    <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="fa fa-bars white-text"></i></a>
    <!--Navbar Brand-->
    <a class="brand white-text" href="<?php echo site_url('/') ?>"><?php echo $app_name; ?></a>
    <div class="navbar-desktop">
      <ul class="nav navbar-nav pull-right">
        <?php if ($this->session->userdata('id')) { ?>
          <li class="nav-item ">
              <a class="nav-link white-text" href="#"><i class="icon-globe"></i> Channel</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle white-text" id="dropDownAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="icon-command"></i>  Profile</a>
            <div class="dropdown-menu dropdown-default" aria-labbeledby="dropDownAccount" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
              <a href="#" class="dropdown-item"><i class="icon-head"></i> Account</a>
              <a href="#" class="dropdown-item"><i class="icon-cog"></i> Setting</a>
              <a href="<?php echo site_url('home/logout'); ?>" class="dropdown-item"><i class="icon-outbox"></i> Logout</a>
            </div>
          </li>

        <?php }else { ?>
            <li class="nav-item ">
              <a class="nav-link white-text" href="#">Channel</span></a>
            </li>
            <li class="nav-item">
                <a href="<?php echo site_url('login'); ?>" class="nav-link white-text">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link white-text" href="<?php echo site_url('register'); ?>">Register</a>
            </li>
        <?php } ?>
      </ul>
      <!--Search form-->
      <form class="form-inline form-search">
          <i class="fa fa-search icon-search"></i>
          <input class="form-control form-search-nav text-center white-text"  type="search" placeholder="Search">
      </form>
    </div>

  <!-- Content for mobile devices-->
  <div class="navbar-mobile">

    <ul class="side-nav collapsible collapsible-accordion black-text" id="mobile-menu">
        <li class="nav-item ">
            <a class="nav-link" href="#"><?php echo $app_name; ?> <span class="sr-only">(current)</span></a>
        </li>

        <?php if ($this->session->userdata('id')) { ?>
          <li class="nav-item ">
              <a class="nav-link " href="#"><i class="fa fa-comments"></i> Channel</span></a>
          </li>
          <li class="nav-item"><a class="collapsible-header nav-link black-text waves-effect arrow-r"><i class="fa fa-user-circle-o"></i> Account<i class="fa fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                  <ul>
                      <li><a href="#" class="waves-effect black-text"><i class="fa fa-user"></i> Profile</a>
                      </li>
                      <li><a href="#" class="waves-effect black-text"><i class="fa fa-gear"></i> Setting</a>
                      </li>
                      <li><a href="<?php echo site_url('home/logout') ?>" class="waves-effect black-text"><i class="fa fa-sign-out black-text"> Logout</i></a>
                      </li>
                  </ul>
              </div>
          </li>
        <?php }else { ?>
            <li class="nav-item ">
              <a class="nav-link black-text" href="#"><i class="fa fa-comments"></i> Channel</span></a>
            </li>
            <li class="nav-item">
                <a href="<?php echo site_url('login'); ?>" class="nav-link black-text"><i class="fa fa-sign-in"></i> Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link black-text" href="<?php echo site_url('register'); ?>"><i class="fa fa-send"></i> Register</a>
            </li>
        <?php } ?>
    </ul>
  </div>
  </div>
</nav>
<!--/.Navbar-->
