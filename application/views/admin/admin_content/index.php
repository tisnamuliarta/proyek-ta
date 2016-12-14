
<div class="row">
   <div class="col-sm-6 col-lg-3">
       <div class="card card-inverse card-primary">
           <div class="card-block pb-0">
               <div class="btn-group float-xs-right">
                   <button type="button" class="btn btn-transparent active dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <i class="icon-settings"></i>
                   </button>
                   <div class="dropdown-menu dropdown-menu-right">
                       <a class="dropdown-item" href="#">Action</a>
                       <a class="dropdown-item" href="#">Another action</a>
                       <a class="dropdown-item" href="#">Something else here</a>
                   </div>
               </div>
               <h4 class="mb-0">9.823</h4>
               <p>Members online</p>
           </div>
           <div class="chart-wrapper px-1" style="height:70px;">
               <canvas id="card-chart1" class="chart" height="70"></canvas>
           </div>
       </div>
   </div>
   <!--/col-->

   <div class="col-sm-6 col-lg-3">
       <div class="card card-inverse card-info">
           <div class="card-block pb-0">
               <button type="button" class="btn btn-transparent active p-0 float-xs-right">
                   <i class="icon-location-pin"></i>
               </button>
               <h4 class="mb-0">9.823</h4>
               <p>Members online</p>
           </div>
           <div class="chart-wrapper px-1" style="height:70px;">
               <canvas id="card-chart2" class="chart" height="70"></canvas>
           </div>
       </div>
   </div>
   <!--/col-->

   <div class="col-sm-6 col-lg-3">
       <div class="card card-inverse card-warning">
           <div class="card-block pb-0">
               <div class="btn-group float-xs-right">
                   <button type="button" class="btn btn-transparent active dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <i class="icon-settings"></i>
                   </button>
                   <div class="dropdown-menu dropdown-menu-right">
                       <a class="dropdown-item" href="#">Action</a>
                       <a class="dropdown-item" href="#">Another action</a>
                       <a class="dropdown-item" href="#">Something else here</a>
                   </div>
               </div>
               <h4 class="mb-0">9.823</h4>
               <p>Members online</p>
           </div>
           <div class="chart-wrapper" style="height:70px;">
               <canvas id="card-chart3" class="chart" height="70"></canvas>
           </div>
       </div>
   </div>
   <!--/col-->

   <div class="col-sm-6 col-lg-3">
       <div class="card card-inverse card-danger">
           <div class="card-block pb-0">
               <div class="btn-group float-xs-right">
                   <button type="button" class="btn btn-transparent active dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <i class="icon-settings"></i>
                   </button>
                   <div class="dropdown-menu dropdown-menu-right">
                       <a class="dropdown-item" href="#">Action</a>
                       <a class="dropdown-item" href="#">Another action</a>
                       <a class="dropdown-item" href="#">Something else here</a>
                   </div>
               </div>
               <h4 class="mb-0">9.823</h4>
               <p>Members online</p>
           </div>
           <div class="chart-wrapper px-1" style="height:70px;">
               <canvas id="card-chart4" class="chart" height="70"></canvas>
           </div>
       </div>
   </div>
   <!--/col-->

</div>
<!--/row-->

<div class="card">
   <div class="card-block">
       <div class="row">
           <div class="col-xs-5">
               <h4 class="card-title">Traffic</h4>
               <div class="small text-muted" style="margin-top:-10px;">November 2015</div>
           </div>
           <div class="col-xs-7">
               <div class="btn-toolbar float-xs-right" role="toolbar" aria-label="Toolbar with button groups">
                   <div class="btn-group" data-toggle="buttons" aria-label="First group">
                       <label class="btn btn-outline-secondary">
                           <input type="radio" name="options" id="option1">Day
                       </label>
                       <label class="btn btn-outline-secondary active">
                           <input type="radio" name="options" id="option2" checked="">Month
                       </label>
                       <label class="btn btn-outline-secondary">
                           <input type="radio" name="options" id="option3">Year
                       </label>
                   </div>
                   <div class="btn-group hidden-sm-down" role="group" aria-label="Second group">
                       <button type="button" class="btn btn-primary"><i class="icon-cloud-download"></i>
                       </button>
                   </div>
               </div>
           </div>
       </div>
       <div class="chart-wrapper" style="height:300px;margin-top:40px;">
           <canvas id="main-chart" height="300"></canvas>
       </div>
   </div>
   <div class="card-footer">
       <ul>
           <li>
               <div class="text-muted">Visits</div>
               <strong>29.703 Users (40%)</strong>
               <progress class="progress progress-xs progress-success" value="40" max="100">40%</progress>
           </li>
           <li class="hidden-sm-down">
               <div class="text-muted">Unique</div>
               <strong>24.093 Unique Users (20%)</strong>
               <progress class="progress progress-xs progress-info" value="20" max="100">20%</progress>
           </li>
           <li>
               <div class="text-muted">Pageviews</div>
               <strong>78.706 Views (60%)</strong>
               <progress class="progress progress-xs progress-warning" value="60" max="100">60%</progress>
           </li>
           <li class="hidden-sm-down">
               <div class="text-muted">New Users</div>
               <strong>22.123 Users (80%)</strong>
               <progress class="progress progress-xs progress-danger" value="80" max="100">80%</progress>
           </li>
           <li class="hidden-sm-down">
               <div class="text-muted">Bounce Rate</div>
               <strong>40.15%</strong>
               <progress class="progress progress-xs progress-primary" value="40" max="100">40%</progress>
           </li>
       </ul>
   </div>
</div>
<!--/.card-->

<div class="row">
   <div class="col-sm-6 col-lg-3">
       <div class="social-box facebook">
           <i class="fa fa-facebook"></i>
           <div class="chart-wrapper">
               <canvas id="social-box-chart-1" height="90"></canvas>
           </div>
           <ul>
               <li>
                   <strong>89k</strong>
                   <span>friends</span>
               </li>
               <li>
                   <strong>459</strong>
                   <span>feeds</span>
               </li>
           </ul>
       </div>
       <!--/.social-box-->
   </div>
   <!--/.col-->

   <div class="col-sm-6 col-lg-3">
       <div class="social-box twitter">
           <i class="fa fa-twitter"></i>
           <div class="chart-wrapper">
               <canvas id="social-box-chart-2" height="90"></canvas>
           </div>
           <ul>
               <li>
                   <strong>973k</strong>
                   <span>followers</span>
               </li>
               <li>
                   <strong>1.792</strong>
                   <span>tweets</span>
               </li>
           </ul>
       </div>
       <!--/.social-box-->
   </div>
   <!--/.col-->

   <div class="col-sm-6 col-lg-3">

       <div class="social-box linkedin">
           <i class="fa fa-linkedin"></i>
           <div class="chart-wrapper">
               <canvas id="social-box-chart-3" height="90"></canvas>
           </div>
           <ul>
               <li>
                   <strong>500+</strong>
                   <span>contacts</span>
               </li>
               <li>
                   <strong>292</strong>
                   <span>feeds</span>
               </li>
           </ul>
       </div>
       <!--/.social-box-->
   </div>
   <!--/.col-->

   <div class="col-sm-6 col-lg-3">
       <div class="social-box google-plus">
           <i class="fa fa-google-plus"></i>
           <div class="chart-wrapper">
               <canvas id="social-box-chart-4" height="90"></canvas>
           </div>
           <ul>
               <li>
                   <strong>894</strong>
                   <span>followers</span>
               </li>
               <li>
                   <strong>92</strong>
                   <span>circles</span>
               </li>
           </ul>
       </div>
       <!--/.social-box-->
   </div>
   <!--/.col-->
</div>
<!--/.row-->
