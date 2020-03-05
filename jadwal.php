<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("location: login.php");
    exit;
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

    <title>Jadwal Kereta</title>
</head>

<body>

    <!--header-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info mb-1">
        <a class="navbar-brand text-dark" href="tampilan.php">
            <img src="img/logoo.jpg" width="55" height="35" class="d-inline-block align-top" alt="">
            PT. Kereta Kuda <i class="fas fa-horse-head"></i>
        </a>
        <div class="row w-25 mx-auto"><B class="text-dark"> JADWAL KERETA API</B></div>
        <?php 
        echo date('l, j-M-Y');
        echo "<br/>";
        ?>
    </nav>
    <!--akhir navbar-->


    <div class="p-3 mb-1 bg-info text-white">
        <div class="container mt-3">
            <div class="p-3 mb-2 bg-white text-dark">
                <table class="table table-bordered">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col" colspan="2">
                                <center>Stasiun</center>
                            </th>
                            <th scope="col">
                                <center>Berangkat</center>
                            </th>
                            <th scope="col">
                                <center>Sampai</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Gambir</td>
                            <td>Bandung</td>
                            <td>14.10</td>
                            <td>14.25</td>
                        </tr>
                        <tr class="table-secondary">
                            <td>Bandung</td>
                            <td>Gambir</td>
                            <td>14.48</td>
                            <td>14.52</td>
                        </tr>
                        <tr>
                            <td>Yogyakarta</td>
                            <td>Surabaya</td>
                            <td>15.50</td>
                            <td>16.00</td>
                        </tr>
                        <tr class="table-secondary">
                            <td>Surbaya</td>
                            <td>Yogyakarta</td>
                            <td>16.24</td>
                            <td>17.00</td>
                        </tr>
                        <tr>
                            <td>tegal</td>
                            <td>cirebon</td>
                            <td>17.36</td>
                            <td>17.40</td>
                        </tr>
                        <tr class="table-secondary">
                            <td>cirebon</td>
                            <td>tegal</td>
                            <td>18.02</td>
                            <td>18.05</td>
                        </tr>
                        <tr>
                            <td>semarang</td>
                            <td>malang</td>
                            <td>18.40</td>
                            <td>18.50</td>
                        </tr>
                        <tr class="table-secondary">
                            <td>malang</td>
                            <td>semarang</td>
                            <td>19.30</td>
                            <td>19.38</td>
                        </tr>
                        <tr>
                            <td>solo</td>
                            <td>tasikmalaya</td>
                            <td>20.53</td>
                            <td>20.58</td>
                        </tr>
                        <tr class="table-secondary">
                            <td>tasikmalaya</td>
                            <td>solo</td>
                            <td>21.46</td>
                            <td>22.00</td>
                        </tr>
                        <tr>
                            <td>Purwokerto</td>
                            <td>Jambi</td>
                            <td>00.30</td>
                            <td>00.38</td>
                        </tr>
                        <tr class="table-secondary">
                            <td>Jambi</td>
                            <td>Purwokerto</td>
                            <td>02.34</td>
                            <td>02.42</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="bg-info text-dark">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p class="text-dark">
                        <center>Copyright &#169; PT. Kereta Kuda <i class="fas fa-horse-head"></i>
                    </p>
                    <h3>Contact us</h3>
                    <a href="" class="text-dark"><i class="fab fa-whatsapp"></i> 081382832158</a> |
                    <a href="https://instagram.com/reejaaditya_?igshid=10h5s4cjzdjrt" class="text-dark"><i class="fab fa-instagram"></i> @reejaaditya_</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Akhir footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>