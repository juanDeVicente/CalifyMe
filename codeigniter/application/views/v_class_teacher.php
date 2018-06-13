<!DOCTYPE html>

<html>

<head>
    <title>CalifyMe</title>
    <link rel="stylesheet" type="text/css" href="califyTemplate.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css"
          integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg"
          crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>

</head>
<style type="text/css">
    .h1 {
        font-size: 400;
    }

    .fas {
        color: white;
    }

    .dropdown-toggle {
        color: white;
    }

    .gridsystem {
        margin-top: 7em;
    }

    .row {
        margin-top: 4em;
    }

    .text-align {
        padding-top: 20%;
    }

    .stylelink {
        color: rgb(35, 35, 35) !important;
        background-color: rgb(255, 152, 0) !important;

    }

    .stylelink:hover {
        color: rgba(35, 35, 35 0.8) !important;
        text-decoration: none;
        background-color: rgba(255, 152, 0, 0.8) !important;
    }

    .title {
        text-align: center;
        font-family: 'Nunito';
        font-size: 18px;
        padding-bottom: 8%;
    }

    .form-control:focus {
        border-color: rgb(255, 152, 0) !important;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgb(255, 152, 0) !important;
    }

    .btn-primary,
    .btn-primary:active,
    .btn-primary:visited,
    .btn-primary:focus {
        background-color: rgb(255, 152, 0) !important;
        border-color: rgb(255, 152, 0) !important;

    }

    .btn-primary:hover {
        background-color: rgba(255, 152, 0, 0.8) !important;
        border-color: rgba(255, 152, 0, 0.8) !important;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 152, 0, 0.8) !important;
    }

    .submit {
        margin-left: 93%;
        margin-top: 4%;
    }

    .limiter {
        width: 100%;
        margin: 0 auto;

    }

    .container-login100 {
        width: 100%;
        min-height: 75vh;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        padding: 15px;
        padding-bottom: 8%;

        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .wrap-login100 {
        width: 390px;
        background: #fff;
        border-radius: 10px;
        position: relative;
    }
</style>

<body>

<!-- navbar -->
<nav class="navbar fixed-top navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">CalifyMe</a>
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true"
               aria-expanded="false">
                <i class="fas fa-user-circle fa-2x"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" ardropdown-menu-rightia-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Change password</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Logout</a>
            </div>
        </div>
    </div>
</nav>

<!-- grid -->
<div class="gridsystem">
    <div class="container">
        <div class="title-box">
            <h2 class="text-inline">My Class
            </h2>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-12">
                <a data-toggle="modal" data-target="#newClassModal" class="stylelink">
                    <div class="card h-100 text-center">
                        <div class="card-header h-100">
                            <h5 class="card-title text-align">Create Class</h5>
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                        </div>
                        </a>
                <div class="card-body"> </div>
            </div>
        </div>

            <?php if (!empty($classes)): ?>
                <?php foreach ($classes as $class): ?>
                    <?php if ($counter % 3 == 0): ?>
                        <div class="row">
                    <?php endif; ?>
                    <div class="col-md-4 col-sm-12">
                        <div class="card h-10 text-center">
                            <a href="<?php echo site_url('c_group_student/index/hola') ?>" class="h-10 stylelink">
                                <div class="card-header h-10">
                                    <h5 class="card-title  text-align"><?php echo $class['name']; ?></h5>
                                    <h1><?php echo $class['grade']; ?></h1>
                                </div>
                            </a>
                            <div class="card-body">
                                <div class="float-right">
                                    <button type="button" class="btn btn-primary btn-dark" data-toggle="modal"
                                            data-target="#pubishCalificationModal">
                                        <i class="fas fa-calendar-check "></i>
                                    </button>
                                    <button type="button" class="btn btn-primary btn-dark" data-toggle="modal"
                                            data-target="#deleteModal">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if ($counter % 3 == 2 ): ?>
                        </div>
                    <?php endif; ?>
                    <?php $counter++; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
</div>
        <!-- Delete Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this class?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" onClick="c_class_teacher.php/drop_class">Yes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Publish calification Modal -->
        <div class="modal fade" id="pubishCalificationModal" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to publish the
                            califications for this class?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                            <span aria-hidden="true">&times;</span>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" >Yes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="newClassModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">New Class</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="InputClassName">Class Name</label>
                                            <input type="text" name="className" class="form-control" id="InputClassName"
                                                   size="50">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <select id="inputGrade" class="form-control">
                                                    <option selected>Grade</option>
                                                    <?php foreach ($grades as $grade): ?>
                                                        <option> <?php echo $grade ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
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