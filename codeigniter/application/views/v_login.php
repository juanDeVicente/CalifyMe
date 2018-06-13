<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
    <title>CalifyMe</title>
    <link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\CodeIgniter-3.1.8\css\califyTemplate1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css"
          integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
</head>
<style type="text/css">
    .h1 {
        font-size: 12px;
    }

    .row > div {

        align-items: center;
        align-content: center;
        text-align: center;
        vertical-align: middle;
        width: 100%;
        height: 18em;
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

    .dropdown-toggle
    color: white

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
    .btn-primary:hover,
    .btn-primary:active,
    .btn-primary:visited,
    .btn-primary:focus {
        background-color: #F38747 !important;
        border-color: #F38747 !important;
        margin-top: 8% !important;
        margin-left: 80%
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
</style>

<body>
<?php echo form_open('c_login/verify_login'); ?>
<div class="limiter">
    <img src="images/logo.jpg" class="img-fluid" alt="CalifyMe logo">
    <div class="container-login100">
        <div class="wrap-login100 p-t-50 p-b-90">
            <form action="c_login.php/verify_login" method="post">
                <div class=title>CalifyMe</div>
                <div class="form-group">
                    <h5>Email</h5>
                    <p><input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"
                              size="50" placeholder="Email"></p>
                </div>
                <div class="form-group">
                    <h5>Password</h5>
                    <p><input type="password" name="password" class="form-control" id="password" size="50"
                              placeholder="Password"></p>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <div>
                    <a href="#">Forgot your password? </a>
                </div>
                <input type="submit" class="btn btn-primary" value="Login"/>
            </form>
        </div>
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