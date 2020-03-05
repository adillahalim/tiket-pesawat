<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("location: login.php");
    exit;
}


require 'functions.php';

if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "
            <script>
            alert('tiket berhasil dipesan!');
            document.location.href = 'tampilan.php';
            </script>
        ";
    } else {
        echo " <script>
        alert('tiket gagal dipesan!');
        document.location.href = 'tampilan.php';
        </script>";
    }
}
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

    <title>Pemesanan Tiket</title>
</head>

<body>

    <!--header-->
    <nav class="navbar navbar-expand-lg navbar-light mb-3" style="background-color: #00CED1;">
        <a class="navbar-brand" href="tampilan.php">
            <img src="img/logoo.jpg" width="55" height="35" class="d-inline-block align-top" alt="">
            PT. Kereta Kuda <i class="fas fa-horse-head"></i>
        </a>
        <div class="row w-25 mx-auto"><B>FORM PEMESANAN TIKET</B></div>
        <?php
        echo date('l, j-M-Y');
        echo "<br/>";
        ?>
    </nav>
    <!--akhir navbar-->

    <form class="container" action=" " method="post" class="needs-validation" novalidate>
        <div class="row w-50 mx-auto">
            <div class="p-3 mb-2 bg-info mt-3 mb-5">
                <div class="col">
                    <div class="form-group mt-2">
                        <i class="fas fa-user"></i>
                        <label for="name">Nama</label>
                        <input type="text" class="form-control col-md-12" id="uname" placeholder="Masukkan Nama Anda" name="name" required>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <i class="fas fa-map-marker-alt"></i>
                            <label for="inputState">Asal</label>
                            <select type="inputState" class="form-control " name="asal" required>
                                <option>Gambir(jkt)</option>
                                <option>Bandung</option>
                                <option>Yogyakarta</option>
                                <option>Surabaya</option>
                                <option>Tegal</option>
                                <option>Cirebon</option>
                                <option>Semarang</option>
                                <option>Malang</option>
                                <option>Solo</option>
                                <option>Tasikmalaya</option>
                                <option>Purwakarta</option>
                                <option>Jambi</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <i class="fas fa-paper-plane"></i>
                            <label for="inputState">Tujuan</label>
                            <select type="inputState" class="form-control " name="tujuan" required>
                                <option>Bandung</option>
                                <option>Gambir(jkt)</option>
                                <option>Surabaya</option>
                                <option>Yogyakarta</option>
                                <option>Tegal</option>
                                <option>Cirebon</option>
                                <option>Semarang</option>
                                <option>Malang</option>
                                <option>Solo</option>
                                <option>Tasikmalaya</option>
                                <option>Purwakarta</option>
                                <option>Jambi</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <i class="fas fa-male"></i>
                            <i class="fas fa-female"></i>
                            <label for="dewasa">Dewasa</label>
                            <input type="number" class="form-control  col-md-12" id="dewasa" placeholder="0" name="dewasa" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group col-md-6">
                            <i class="fas fa-baby"></i>
                            <label for="bayi">Bayi</label>
                            <input type="number" class="form-control  col-md-12" id="bayi" placeholder="0" name="bayi" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <i class="fas fa-calendar-alt"></i>
                            <label for="tgl">Tanggal Berangkat</label>
                            <input type="date" class="form-control  col-md-12" id="tgl" placeholder="" name="tglbrngkt" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group col-md-6">
                            <i class="fas fa-calendar-week"></i>
                            <label for="tgl">Tanggal Pulang</label>
                            <input type="date" class="form-control  col-md-12" id="tgl" placeholder="" name="tglpulang" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-money-check-alt"></i>
                        <label for="pembayaran">Pembayaran</label>
                        <select type="pembayaran" class="form-control col-md-12" name="pembayaran" required>
                            <option>Transfer(ATM/SMS Banking/Bank teller)</option>
                            <option>ATM(BNI/BCA/BRI/MANDIRI)</option>
                            <option>Kartu Kredit(Visa/Mastercard)</option>
                            <option>Internet Banking</option>
                            <option>Indomaret</option>
                            <option>Alfamart</option>
                        </select>
                    </div>

                    <button class="btn btn-warning col-md-10 mt-2 mb-2 ml-5" type="submit" name="submit">Pesan</button>

                </div>
            </div>
        </div>
    </form>


    <!-- footer -->
    <footer class="bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p class="text-light">
                        <center>Copyright &#169; PT. Kereta Kuda <i class="fas fa-horse-head"></i>
                    </p>
                    <h3>Contact us</h3>
                    <a href="" class="text-light"><i class="fab fa-whatsapp"></i> 081382832158</a> |
                    <a href="https://instagram.com/reejaaditya_?igshid=10h5s4cjzdjrt" class="text-light"><i class="fab fa-instagram"></i> @reejaaditya_</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Akhir footer -->


    <script>
        // Disable form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html