<?php require 'partials/head.php'; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-10 offset-1">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-3">Welkom</h1>
                    <p class="lead">ADSD 2018 2019</p>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-10 offset-1">
                <?php
                foreach ($results as $items) {
                    foreach ($items as $item => $value) {
                        if ($item == 'fname') {
                            echo "<li class='list-group-item'>" . ucfirst($value) . " </li>";
                        }
                    }
                }

                ?>
            </ul>
        </div><!-- End div - user -->
        <hr>
        <div class="col-10 offset-1">

        </div><!-- End div - class Player-->
    </div> <!-- End div row -->
</div> <!-- End container -->
<?php require 'partials/foot.php'; ?>