<!-- jumbotron -->
<div class="container-fluid">
    <div class="jumbotron">
        <div class="container">
            <h1>Hello, world!</h1>
            <p>Communicate like family, Business like a pro</p>
            <p><a class="btn btn-primary" href="#" role="button">Learn more</a></p>
        </div>
    </div>
</div>
<!--Main layout-->
<div class="container">

    <!--Page heading-->
    <div class="row">
        <div class="col-md-12">
            <h1 class="h1-responsive">Popular Channel</h1>
        </div>
    </div>
    <!--/.Page heading-->
    <hr>

    <!--Second row-->
    <div class="row">
      <?php foreach ($channel as $key):  ?>
        <div class="col-md-3">
            <!--Card-->
            <div class="card">

                <!--Card image-->
                <div class="view overlay hm-white-slight">
                    <a href="<?php echo site_url('channel/show/'.$key->slug); ?>">
                      <img src="<?php echo base_url('upload/channel/'.$key->icon); ?>" class="img-fluid" alt="">
                    </a>
                    <a href="#!">
                        <div class="mask"></div>
                    </a>
                </div>
                <!--/.Card image-->

                <!--Card content-->
                <div class="card-block">
                    <!--Title-->
                    <h4 class="card-title"><?php echo $key->name; ?></h4>
                    <!--Text-->
                    <p class="card-text"><?php echo $key->description; ?></p>
                </div>
                <!--/.Card content-->

            </div>
            <!--/.Card-->
        </div>
      <?php endforeach; ?>
        <!--First column-->
        
        <!--/.First column-->
    </div>
    <!--/.Second row-->
    <hr>
</div>