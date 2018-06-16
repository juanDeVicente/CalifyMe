<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CalifyMe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="C:\Users\pabli\Downloads\OneDrive_1_9-5-2018\logo.png">
    <link rel="stylesheet" type="text/css" href="califyTemplate1.css">
    <link rel="stylesheet" type="text/css" href="Ver notas profesor.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
</head>
<style type="text/css">
    .h1 {
        font-size: 12px;
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

    .td {
        border: 0px solid black;
        padding: 15px;
        text-align: center;
    }

    .rotateText {
        transform: rotate(-90deg);
    }

    .ContainerBox {
        border-radius: 20px 20px 20px 20px;
        -moz-border-radius: 20px 20px 20px 20px;
        -webkit-border-radius: 20px 20px 20px 20px;
        border: 2px solid #F38747;
        padding: -3px;
    }


    .h1 {
        font-size: 12px;
    }

    .first {
        margin-top: 7em;
    }

    .rows {
        margin-top: 4em;
    }

    .fas {
        color: white;
    }

    .dropdown-toggle color: white;
    }

    .cuadro {
        border: 1px solid grey;
        width: 100%;
        height: 100%;
        padding-top: 30%;
    }

    .container2 {
        padding-top: 8%;
        margin-right: 10%;
        margin-left: 10%;
        vertical-align: middle;
    }

    .img-fluid {
        display: block;
        width: 20%;
        height: 20%;
        padding-top: 8%;
        margin-right: auto;
        margin-left: auto;
    }

    .title {
        text-align: center;
        font-family: 'Nunito';
        font-size: 20px;
        padding-bottom: 8%;
    }

    .form-control:focus {
        border-color: #F38747 !important;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgb(243, 135, 71) !important;
    }

    select.decorated option:hover {
        box-shadow: 0 0 10px 100px #F38747 inset !important;
    }

    .btn-primary,
    .btn-primary:active,
    .btn-primary:visited,
    .btn-primary:focus {
        background-color: rgb(255, 152, 0) !important;
        border-color: rgb(255, 152, 0) !important;

    }

    .btn-dark:hover,
    .btn-primary:hover {
        background-color: rgba(255, 152, 0, 0.8) !important;
        border-color: rgba(255, 152, 0, 0.8) !important;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 152, 0, 0.8) !important;
    }

    .btn-dark,
    .btn-dark:hover,
    .btn-dark:active,
    .btn-dark:visited,
    .btn-dark:focus {
        background-color: rgb(255, 152, 0) !important;
        border-color: rgb(255, 152, 0) !important;
    }

    /* vietnamese */

    @font-face {
        font-family: 'Nunito';
        font-style: normal;
        font-weight: 400;
        src: local('Nunito Regular'), local('Nunito-Regular'), url(https://fonts.gstatic.com/s/nunito/v9/XRXV3I6Li01BKofIOuaBXso.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */

    @font-face {
        font-family: 'Nunito';
        font-style: normal;
        font-weight: 400;
        src: local('Nunito Regular'), local('Nunito-Regular'), url(https://fonts.gstatic.com/s/nunito/v9/XRXV3I6Li01BKofIO-aBXso.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */

    @font-face {
        font-family: 'Nunito';
        font-style: normal;
        font-weight: 400;
        src: local('Nunito Regular'), local('Nunito-Regular'), url(https://fonts.gstatic.com/s/nunito/v9/XRXV3I6Li01BKofINeaB.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */

    @font-face {
        font-family: 'Quattrocento';
        font-style: normal;
        font-weight: 400;
        src: local('Quattrocento'), url(https://fonts.gstatic.com/s/quattrocento/v9/OZpEg_xvsDZQL_LKIF7q4jP3zWj6T4g.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */

    @font-face {
        font-family: 'Quattrocento';
        font-style: normal;
        font-weight: 400;
        src: local('Quattrocento'), url(https://fonts.gstatic.com/s/quattrocento/v9/OZpEg_xvsDZQL_LKIF7q4jP3w2j6.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
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

    .row2 {
        margin-top: 6%;
    }
</style>

<body>

    <!-- navbar -->
    <nav class="navbar fixed-top navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">CalifyMe</a>
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
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

    <!--Contenido-->
    <div class="gridsystem">
        <div class="container">
            <div class="title-box">
                <h2 class="text-inline">
                    <?php echo $name_group;?>
                    <div class="btn" role="group" style="float: right;">
                        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#saveCalificationModal">
                            <i class="fas fa-save fa-2x"></i>
                        </button>
                    </div>
                </h2>
                <h3 class="text-inline"> Group calification:
                    <?php echo $group_calification; ?> </h3>
                <h4 class="text-inline"> You have
                    <?php echo $total_points; ?> to distribute </h4>
            </div>
            <?php foreach ($students as $student): ?>
            <?php if ($counter % 3 == 0): ?>
            <div class="row">
                <?php endif; ?>
                <div class="col-md-6">
                    <h5>Calification for
                        <?php echo $student; ?>
                    </h5>
                </div>
                <div class="col-md-2">
                    <input type="number" name="teacher_calification" class="form-control" id="teacher_calification" size="5" min="0" max="10">
                </div>
                <div class="col-md-4"></div>
            </div>
            <?php if ($counter % 3 == 2): ?>
        </div>
        <?php endif; ?>
        <?php $counter++; ?>
        <?php endforeach; ?>
    </div>



    <!-- Save Modal -->
    <div class="modal fade" id="saveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to save this califications?</h5>
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
    <!-- Save Modal -->
    <?php if ($points_asigned > $total_points): ?>
    <div class="modal fade" id="saveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to save this califications?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>You have asigned more points than you are allowed. </h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Change califications</button>
                </div>
            </div>
        </div>
    </div>
    <?php elseif ($points_asigned > $total_points): ?>
    <div class="modal fade" id="saveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to save this califications?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>You have asigned less points than you are allowed. Continue anyways? </h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Yes</button>
                </div>
            </div>
        </div>
    </div>
    <?php else : ?>
    <div class="modal fade" id="saveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to save this califications?</h5>
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
<?php endif; ?>