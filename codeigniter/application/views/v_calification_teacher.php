<!DOCTYPE html>
<html>
<script>
    function get_calification()
    {
        return document.getElementById("teacher_calification").value;
    }
</script>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CalifyMe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="califyTemplate1.css">
    <link rel="stylesheet" type="text/css" href="Ver notas profesor.css"/>
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

    .dropdown-toggle color: white

    ;
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
        <a class="navbar-brand" href="<?php echo site_url('c_class_teacher/index/'); echo $id_class ?>">CalifyMe</a>
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true"
               aria-expanded="false">
                <i class="fas fa-user-circle fa-2x"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" ardropdown-menu-rightia-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Change password</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo site_url('c_login/redirect') ?>">Logout</a>
            </div>
        </div>
    </div>
</nav>

<!--Contenido-->
<div class="container2">
    <h2 class="text-inline">
        <?php echo $name_group;?>
        <div class="btn" role="group" style="float: right;">
            <button type="button" class="btn btn-dark" onclick="href.location=''">
                <i class="fas fa-save fa-2x"></i>
            </button>
            <button type="button" class="btn btn-dark">
                <i class="fas fa-cog fa-2x"></i>
            </button>
            <button type="button" class="btn btn-dark">
                <i class="fas fa-trash-alt fa-2x"></i>
            </button>
        </div>
    </h2>


    <form action="c_login.php/verify_login" method="post">
        <div class="row2">
            <div class="col-md-2">
                <h5>Calification:</h5>
            </div>
            <div class="col-md-2">
                <input type="number" name="teacher_calification" class="form-control" id="teacher_calification" size="5"
                       min="0" max="10"value="0">
            </div>
        </div>
    </form>

    <br>
    <br>

    <div Class="ContainerBox">
        <table style="width:100%">
            <tbody class="td">
            <tr>
                <td></td> <!--para pintar los nombres de los estudiantes-->
                <?php foreach ($name_students as $name): ?>
                    <td><?php echo $name ?></td>
                <?php endforeach; ?>
            </tr>
            <?php foreach ($name_students as $name): ?>
                <tr>
                    <td><?php echo $name ?></td>
                    <?php foreach ($califications_between_students[$name] as $calification): ?>
                        <td> <?php echo $calification ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td>Average</td>
                <?php foreach ($average_calification as $average_calification):?>
                <td> <?php echo $average_calification?> </td>
                <?php endforeach; ?>
            </tr>
            </tbody>
        </table>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>

</body>

</html>