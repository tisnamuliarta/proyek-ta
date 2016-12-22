<!--Navbar-->
<!--<div class="container-fluid">-->
<!--    <div class="overlay-body"></div>-->
<!--</div>-->
<nav class="navbar navbar-fixed-top navbar-dark bg-primary">

    <div class="btn-toggle">
        <span class="icon-menu"></span>
    </div>
  <!--Content for large and medium screens <i class="icon-command"></i> -->
  <div class="container">
    <!--Navbar Brand-->
      <a class="brand white-text" href="<?php echo site_url('/') ?>"><?php echo $app_name; ?></a>
<!--      Display for desktop -->
      <div class="navbar-desktop">
      <ul class="nav navbar-nav pull-right">
        <?php if ($this->session->userdata('id')) { ?>
          <li class="nav-item ">
              <a class="nav-link white-text" href="#"><i class="icon-globe"></i> Channel</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link profile dropdown-toggle white-text" id="dropDownAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                <span class="tiny-profile"><img class="img-responsive" src="<?php echo base_url('profile/'.$this->session->userdata['avatar']) ?>" alt=""></span>
                <?php echo $this->session->userdata['username']; ?>
            </a>
            <div class="dropdown-menu dropdown-default" aria-labbeledby="dropDownAccount" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
              <a href="#" class="dropdown-item"><i class="icon-head"></i> Account</a>
              <a href="#" class="dropdown-item"><i class="icon-cog"></i> Setting</a>
              <a href="<?php echo site_url('home/logout'); ?>" class="dropdown-item"><i class="icon-outbox"></i> Logout</a>
            </div>
          </li>

        <?php }else { ?>
            <li class="nav-item ">
              <a class="nav-link white-text" href="#"><i class="icon-globe"></i> Channel</span></a>
            </li>
            <li class="nav-item">
                <a href="<?php echo site_url('login'); ?>" class="nav-link white-text">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link white-text" href="<?php echo site_url('register'); ?>">Register</a>
            </li>
        <?php } ?>
      </ul>
      <!--Search form-search-nav text-center form-->
      <form class="form-inline form-search">
          <i class="fa fa-search icon-search"></i>
          <input class="form-control search-box "  type="search" name="search" placeholder="Search">
          <button type="reset" class="close-icon"><i class="icon-circle-cross"></i></button>
      </form>
    </div>

<!--      Display for mobile -->
      <div class="navbar-mobile ">
          <div class="close">
              <span class="icon-cross"></span>
          </div>
          <ul class="nav-mobile pull-left">
              <li class="nav-item"><a href="#">Link 1</a></li>
              <li class="nav-item"><a href="#">Link 1</a></li>
              <li class="nav-item"><a href="#">Link 1</a></li>
          </ul>
      </div>
  </div>
</nav>
<!--/.Navbar-->
