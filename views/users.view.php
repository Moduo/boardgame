<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">

    <!-- Title   -->
    <br></br>
    <title>Users</title>

    <!-- CSS Bootstrap   -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="views/style.css">
    <!-- Fontawesome / icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
<?php include "public/nav.php"; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-10 offset-1">
        </div> <!-- End div greeting -->
        <hr>
        <div class="col-10 offset-1">
        </div><!-- End div - user -->
        <hr>
        <div class="col-10 offset-1">
        </div><!-- End div - class Player-->
    </div> <!-- End div row -->
</div> <!-- End container -->
<div class="container-fluid">
    <div class="row">
        <div class="col-10 offset-1">
        </div> <!-- End div greeting -->
        <div class="col-10 offset-1">
            <h4>User register form</h4>
            <fieldset>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Voornaam" name="fname" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Achternaam" name="lname" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Wachtwoord" name="password_1" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Wahtwoord Bevestigen" name="password_2s" aria-describedby="basic-addon1">
                </div>
                <button type="submit" class="btn btn-outline-primary" name="reg_user">Account aanmaken</button>
            </fieldset>
        </div><!-- End div - class Player-->
    </div> <!-- End div row -->
</div> <!-- End container -->
<br></br>
<div class="col-10 offset-1">
    <h4>Users</h4>
</div><!-- End div - user -->
<div class="container-fluid">
    <div class="row">
        <div class="col-10 offset-1">
        </div> <!-- End div greeting -->
        <div class="col-10 offset-1">
<div class="table-responsive-sm">
    <table class="table table-sm">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>

<!-- JavaScript / Popper.js / jQuery all for Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>