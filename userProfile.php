<!DOCTYPE html>
<html>
<head>
    <?php header('Content-Type: text/html; charset=utf-8'); ?>
    <meta charset="UTF-8">

    <title>פרופיל אישי</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="jquery-3.2.1.min.js"></script>
    <script src="custom.js"></script>
</head>
<body>
<?php
session_start();
$first_name=$_SESSION['first_name'];
$last_name=$_SESSION['last_name'];
$email=$_SESSION['email'];

?>
<div class="container">
    <div class="row">
        <div class="col-md-5  toppad  pull-right col-md-offset-3 " style="direction: rtl;"
            <A href="" >ערוך פרופיל</A>

            <A href="" >צא מהחשבון</A>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" style="background-color: white;
    margin-left: 80%;">


            <div class="panel panel-info" style="direction: rtl">
                <div class="panel-heading">
                    <h3 class="panel-title">שם</h3>
                </div>
                <div class="panel-body">
                    <div class="row">


                        <div class=" col-md-9 col-lg-9 ">
                            <table class="table table-user-information">
                                <tbody>
                                <tr>
                                    <td>שם פרטי:</td>
                                    <td><?php echo $first_name ?></td>
                                </tr>
                                <tr>
                                    <td>שם משפחה:</td>
                                    <td><?php echo $last_name ?></td>
                                </tr>

                                <tr>
                                <tr>
                                    <td>טלפון:</td>
                                    <td>?</td>
                                </tr>

                                <tr>
                                    <td>מייל:</td>
                                    <td><a><?php echo $email ?></a></td>


                                </tbody>
                            </table>
                            <br>

                            <a href="#" class="btn btn-primary">קבע תור</a>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                    <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                </div>

            </div>
        </div>
    </div>
</div>
</body>
<style>
    body{
        background-image: url(photos/2.jpg);
        background-size: 100%;
    }
    .user-row {
        margin-bottom: 14px;
    }

    .user-row:last-child {
        margin-bottom: 0;
    }

    .dropdown-user {
        margin: 13px 0;
        padding: 5px;
        height: 100%;
    }

    .dropdown-user:hover {
        cursor: pointer;
    }

    .table-user-information > tbody > tr {
        border-top: 1px solid rgb(221, 221, 221);
    }

    .table-user-information > tbody > tr:first-child {
        border-top: 0;
    }


    .table-user-information > tbody > tr > td {
        border-top: 0;
    }
    .toppad
    {margin-top:20px;
    }

</style>