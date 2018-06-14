<!DOCTYPE html>

<html>
<script>
    var id_group_to_delete;
    var id_class;
    function set(id_c, id_group) {
        id_class = id_c;
        id_group_to_delete = id_group;
    }

    function get_group() {
        return id_group_to_delete;
    }
    function get_class() {
        return id_class;
    }
</script>
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
<style type="text/css">


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


</style>

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
                <a class="dropdown-item" href="#">Logout</a>
            </div>
        </div>
    </div>
</nav>

<!-- grid -->
<div class="gridsystem">
    <div class="container">
        <div class="title-box">
            <h2 class="text-inline"><?php echo $name ?>
                <div class="float-right">
                    <button type="button" class="btn btn-primary btn-dark" data-toggle="modal"
                            data-target="#pubishAllCalificationModal">
                        <i class="fas fa-calendar-check fa-2x"></i>
                    </button>
                    <button type="button" class="btn btn-primary btn-dark" data-toggle="modal"
                            data-target="#deleteAllModal">
                        <i class="fas fa-trash-alt fa-2x"></i>
                    </button>
                </div>
            </h2>
        </div>

        <?php if (!empty($groups)):
            foreach ($groups as $group):
                if ($counter % 3 == 0): ?>
                    <div class="row">
                <?php endif; ?>
                <div class="col-md-4 col-sm-12">
                    <div class="card h-10 text-center">
                        <a href="<?php echo site_url('c_group_student/index/hola') ?>" class="h-10 stylelink">
                            <div class="card-header h-10">
                                <h5 class="card-title  text-align"><?php echo $group['name']; ?></h5>
                            </div>
                        </a>
                        <div class="card-body">
                            <div class="float-right">
                                <button type="button" class="btn btn-primary btn-dark" data-toggle="modal"
                                        data-target="#pubishCalificationModal">
                                    <i class="fas fa-calendar-check "></i>
                                </button>
                                <button type="button" class="btn btn-primary btn-dark" data-toggle="modal"
                                        data-target="#deleteModal" onclick="set(<?php echo $id_class?>,<?php echo $group['id_group']?>)">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if ($counter % 3 == 2): ?>
                </div>
            <?php endif;
                $counter++;
            endforeach;
        endif; ?>
    </div>
</div>


<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this group?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="location.href='<?php echo site_url(); ?>/c_group_teacher/drop_group/'+get_group()+'/'+get_class()">Yes</button>
            </div>
        </div>
    </div>
</div>

<!-- Delete All Modal -->
<div class="modal fade" id="deleteAllModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete all the groups in this
                    class?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="location.href='<?php echo site_url(); ?>/c_group_teacher/drop_all_groups/<?php echo $id_class?>'">Yes</button>
            </div>
        </div>
    </div>
</div>

<!-- Publish calification Modal -->
<div class="modal fade" id="pubishCalificationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to publish the calification for
                    this group?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Yes</button>
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
