<?php 

?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ADMIN</title>
    <link rel="stylesheet" href="Action/css/bootstrap.css">
    <link rel="stylesheet" href="Action/Font-Awesome-4.css">
    <link rel="stylesheet" href="admin_css.css">
    <script src="Action/js/bootstrap.js"></script>
    <script src="Action/jquery.min.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
     <script>
                $(document).ready(function {
                    $(".media1").hide();
                })
                    </script>
<body>

    <section class="container-fluid">
        <div class="row">
            <div class="media1 left-panel col-md-2" style="background:#272c33;">
                <ul class="navbar-light text-light side-nav" style="padding:0px;">

                    <div class="form-inline">
                        <a class="small m-3 float-right font-weight-bold text-warning fa fa-hand-o-left" style="font-size:35px;margin-bottom: 10px;"></a>

                        <a class="mb-4 mt-5"><i class="ml-1 mr-5 fa fa-dashboard" style="font-size:25px;"></i> <span class="hid"><b>Dashboard</b></span></a>
                    </div>
                    <hr>
                   
                    <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
                </ul>
            </div>
           
            <div class="media2 col-10 right-panel">
                <div class="">
                    <div class="jumbotron">
                        <h1 class="display-4">Hello, world!</h1>
                        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                        <hr class="my-4">
                        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                        <!--<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>-->
                        <div class="content">
                            <div class="row">
                                <div class="col">
                                    <div class="card-body pb-0 bg-primary">
                                        <div class="dropdown float-right">
                                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-cog"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <div class="dropdown-menu-content">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="mb-0">
                                            <span class="count">10468</span>
                                        </h4>
                                        <p class="text-light">Members online</p>

                                        <div class="chart-wrapper px-0" style="height:70px;" height="70"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px none; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe>
                                            <canvas id="widgetChart1" height="70" style="display: block; width: 226px; height: 70px;" width="226"></canvas>
                                        </div>

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body pb-0 bg-primary">
                                        <div class="dropdown float-right">
                                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-cog"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <div class="dropdown-menu-content">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="mb-0">
                                            <span class="count">10468</span>
                                        </h4>
                                        <p class="text-light">Members online</p>

                                        <div class="chart-wrapper px-0" style="height:70px;" height="70"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px none; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe>
                                            <canvas id="widgetChart1" height="70" style="display: block; width: 226px; height: 70px;" width="226"></canvas>
                                        </div>

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body pb-0 bg-primary">
                                        <div class="dropdown float-right">
                                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-cog"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <div class="dropdown-menu-content">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="mb-0">
                                            <span class="count">10468</span>
                                        </h4>
                                        <p class="text-light">Members online</p>

                                        <div class="chart-wrapper px-0" style="height:70px;" height="70"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px none; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe>
                                            <canvas id="widgetChart1" height="70" style="display: block; width: 226px; height: 70px;" width="226"></canvas>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
