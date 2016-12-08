<!--Navbar-->
<nav class="navbar navbar-fixed-top navbar-dark bg-primary">
  
  <!--Content for large and medium screens-->
  <div class="container">
    <!--Collapse button-->
    <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="fa fa-bars white-text"></i></a>
    <!--Navbar Brand-->
    <a class="brand white-text" href="#">Navbar</a>
    <div class="navbar-desktop">
      <ul class="nav navbar-nav pull-right">
        <?php if ($this->session->userdata('id')) { ?>
          <li class="nav-item active">
              <a class="nav-link white-text" href="#">Channel</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link white-text" href="#">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link white-text" href="<?php echo site_url('home/logout'); ?>">Logout</a>
          </li>
        <?php }else { ?>
            <li class="nav-item active">
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
      <form class="form-inline pull-xs-right">
          <input class="form-control" type="text" placeholder="Search">
      </form>
    </div>

  <!-- Content for mobile devices-->
  <div class="navbar-mobile">
      <ul class="side-nav" id="mobile-menu">
          <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">About</a>
          </li>
      </ul>
  </div>
  </div>
</nav>
<!--/.Navbar-->