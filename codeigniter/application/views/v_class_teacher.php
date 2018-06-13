<!DOCTYPE html>

<html>
<head>
    <title>CalifyMe</title>
    <link rel="stylesheet" type="text/css" href="califyTemplate.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css"
          integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>

</head>

<body>

<!-- navbar -->
<nav class="navbar fixed-top navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">CalifyMe</a>
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-2x"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" ardropdown-menu-rightia-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Change password</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo site_url('c_login/redirect')?>">Logout</a>
            </div>
        </div>
    </div>
</nav>

<!-- grid -->
<div class="gridsystem">
    <div class="container">
        <div class="title-box">
            <h2 class="text-inline">Class
                <div class="float-right">
                    <button type="button" class="btn btn-primary btn-dark">
                        <i class="fas fa-cog fa-2x"></i>
                    </button>
                    <button type="button" class="btn btn-primary btn-dark">
                        <i class="fas fa-trash-alt fa-2x"></i>
                    </button>
                </div>
            </h2>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-12">
                <a href="#" class="stylelink">
                    <div class="card h-100 text-center">
                        <div class="card-header h-100">
                            <h5 class="card-title text-align">Create Class</h5>
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-plus">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                        </div>
                </a>
                <div class="card-body">
                    <div class="float-right">
                        <button type="button" class="btn btn-primary btn-dark">
                            <i class="fas fa-cog"></i>
                        </button>
                        <button type="button" class="btn btn-primary btn-dark">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="card h-100 text-center">
                <a href="#" class="h-100 stylelink">
                    <div class="card-header h-100">
                        <h5 class="card-title  text-align"><?php echo $class?></h5>
                    </div>
                </a>
                <div class="card-body">
                    <div class="float-right">
                        <button type="button" class="btn btn-primary btn-dark">
                            <i class="fas fa-cog"></i>
                        </button>
                        <button type="button" class="btn btn-primary btn-dark">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="card h-100 text-center">
                <a href="#" class="h-100 stylelink">
                    <div class="card-header h-100">
                        <h5 class="card-title text-align">Class Two</h5>
                    </div>
                </a>
                <div class="card-body">
                    <div class="float-right">
                        <button type="button" class="btn btn-primary btn-dark">
                            <i class="fas fa-cog"></i>
                        </button>
                        <button type="button" class="btn btn-primary btn-dark">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>


<!-- cdn bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>


</body>

</html>
