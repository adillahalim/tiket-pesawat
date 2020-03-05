<?php
require 'functions.php';
$tiket = query("SELECT * FROM tiket");
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title>Tiket</title>
</head>

<body>
    <form class="container" action="/action_page.php" class="needs-validation" novalidate>
        <div class="row w-50 mx-auto">
            <div class="col">
                <div class="alert alert-success col-md-8 mt-3" role="alert">
                    <center>Tiket Berhasil di Pesan</center>
                </div>
                <?php foreach ($tiket as $row) : ?>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <input type="text" class="form-control col-md-7" placeholder="<?= $row["nama"]; ?>">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-chair"></i>
                            </div>
                        </div>
                        <input type="text" class="form-control col-md-7" placeholder="<?= $row["no_kursi"]; ?>">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-train"></i>
                            </div>
                        </div>
                        <input type="text" class="form-control col-md-7" placeholder="<?= $row["subkelas"]; ?>">
                    </div>

                    <div class="form-row">
                        <div class="input-group mb-3 col-md-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="<?= $row["asal"]; ?>">
                        </div>
                        <div class="input-group mb-3 col-md-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="<?= $row["tujuan"]; ?>">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-group mb-3 col-md-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-male"></i>
                                    <i class="fas fa-female"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="<?= $row["dewasa"]; ?>">
                        </div>
                        <div class="input-group mb-3 col-md-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-baby"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="<?= $row["bayi"]; ?>">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-group mb-3 col-md-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="<?= $row["tgl_berangkat"]; ?>">
                        </div>
                        <div class="input-group mb-3 col-md-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-calendar-week"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="<?= $row["tgl_pulang"]; ?>">
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-credit-card"></i>
                            </div>
                        </div>
                        <input type="text" class="form-control col-md-7" placeholder="<?= $row["pembayaran"]; ?>">
                    </div>
                <?php endforeach; ?>

                <a class="btn btn-info col-md-8" href="tampilan.php" role="button">OK</a>
                
            </div>
        </div>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>