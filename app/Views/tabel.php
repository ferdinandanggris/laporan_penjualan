<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid my-2">
        <div class="card">
            <div class="card-header">
                Venturo - Laporan penjualan tahunan per menu
            </div>
            <div class="card-body">
                <form action="" method="get">
                    <div class="row">
                        <div class="col-md-3">
                            <select class="form-select" name="tahun" id="tahun" aria-label="Default select example">
                                <option selected>Pilih Tahun</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <a href="#" id="submit" name="submit" type="submit" class="btn btn-primary">Tampilkan</a>
                            <a href="http://tes-web.landa.id/intermediate/menu" class="btn btn-primary">JSON Menu</a>
                            <?= '<a href="http://tes-web.landa.id/intermediate/transaksi?tahun=' . $tahun . '" class="btn btn-primary">JSON Transaksi</a>' ?>

                        </div>
                    </div>
                </form>

            </div>


            <table class="table table-dark my-3 table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col" rowspan="2" colspan="2" class="text-center">Menu</th>
                        <th scope="col" colspan="12" class="text-center">Periode Pada <?= $tahun ?></th>
                        <th scope="col" rowspan="2">Total</th>
                    </tr>

                    <tr>
                        <th scope="col" class="text-center">Jan</th>
                        <th scope="col" class="text-center">Feb</th>
                        <th scope="col" class="text-center">Mar</th>
                        <th scope="col" class="text-center">Apr</th>
                        <th scope="col" class="text-center">Mei</th>
                        <th scope="col" class="text-center">Jun</th>
                        <th scope="col" class="text-center">Jul</th>
                        <th scope="col" class="text-center">Ags</th>
                        <th scope="col" class="text-center">Sept</th>
                        <th scope="col" class="text-center">Okt</th>
                        <th scope="col" class="text-center">Nov</th>
                        <th scope="col" class="text-center">Des</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-light">
                        <td colspan="15" class="table-secondary">Makanan</td>
                    </tr>
                    <?php
                    $i = 1;
                    $temp_total = 0;
                    $jan_total = 0;
                    $feb_total = 0;
                    $mar_total = 0;
                    $apr_total = 0;
                    $mei_total = 0;
                    $jun_total = 0;
                    $jul_total = 0;
                    $agu_total = 0;
                    $sep_total = 0;
                    $okt_total = 0;
                    $nov_total = 0;
                    $des_total = 0;
                    foreach ($menu as $mn) :
                        if ($mn["kategori"] == "minuman" && $i > 0) {
                            echo '<tr class="table-light">
                            <td colspan="15" class="table-secondary">Minuman</td>
                        </tr>';
                            $i--;
                        }
                    ?>
                        <tr class="table-light">
                            <td colspan="2"><?= $mn["menu"] ?></td>

                            <?php
                            $temp = 0;
                            $jan = 0;
                            $feb = 0;
                            $mar = 0;
                            $apr = 0;
                            $mei = 0;
                            $jun = 0;
                            $jul = 0;
                            $agu = 0;
                            $sep = 0;
                            $okt = 0;
                            $nov = 0;
                            $des = 0;
                            foreach ($transaksi as $trx) :

                                if (($trx["menu"] == $mn["menu"])) {
                                    $temp = $temp + $trx["total"];
                                }
                                if (($trx["menu"] == $mn["menu"]) && ((int)date("m", strtotime($trx["tanggal"])) == 1)) {
                                    $jan = $jan + $trx["total"];
                                }
                                if (($trx["menu"] == $mn["menu"]) && ((int)date("m", strtotime($trx["tanggal"])) == 2)) {
                                    $feb = $feb + $trx["total"];
                                }
                                if (($trx["menu"] == $mn["menu"]) && ((int)date("m", strtotime($trx["tanggal"])) == 3)) {
                                    $mar = $mar + $trx["total"];
                                }
                                if (($trx["menu"] == $mn["menu"]) && ((int)date("m", strtotime($trx["tanggal"])) == 4)) {
                                    $apr = $apr + $trx["total"];
                                }
                                if (($trx["menu"] == $mn["menu"]) && ((int)date("m", strtotime($trx["tanggal"])) == 5)) {
                                    $mei = $mei + $trx["total"];
                                }
                                if (($trx["menu"] == $mn["menu"]) && ((int)date("m", strtotime($trx["tanggal"])) == 6)) {
                                    $jun = $jun + $trx["total"];
                                }
                                if (($trx["menu"] == $mn["menu"]) && ((int)date("m", strtotime($trx["tanggal"])) == 7)) {
                                    $jul = $jul + $trx["total"];
                                }
                                if (($trx["menu"] == $mn["menu"]) && ((int)date("m", strtotime($trx["tanggal"])) == 8)) {
                                    $agu = $agu + $trx["total"];
                                }
                                if (($trx["menu"] == $mn["menu"]) && ((int)date("m", strtotime($trx["tanggal"])) == 9)) {
                                    $sep = $sep + $trx["total"];
                                }
                                if (($trx["menu"] == $mn["menu"]) && ((int)date("m", strtotime($trx["tanggal"])) == 10)) {
                                    $okt = $okt + $trx["total"];
                                }
                                if (($trx["menu"] == $mn["menu"]) && ((int)date("m", strtotime($trx["tanggal"])) == 11)) {
                                    $nov = $nov + $trx["total"];
                                }
                                if (($trx["menu"] == $mn["menu"]) && ((int)date("m", strtotime($trx["tanggal"])) == 12)) {
                                    $des = $des + $trx["total"];
                                }

                            ?>

                            <?php
                            endforeach;
                            $jan_total = $jan_total + $jan;
                            $feb_total = $feb_total + $feb;
                            $mar_total = $mar_total + $mar;
                            $apr_total = $apr_total + $apr;
                            $mei_total = $mei_total + $mei;
                            $jun_total = $jun_total + $jun;
                            $jul_total = $jul_total + $jul;
                            $agu_total = $agu_total + $agu;
                            $sep_total = $sep_total + $sep;
                            $okt_total = $okt_total + $okt;
                            $nov_total = $nov_total + $nov;
                            $des_total = $des_total + $des;
                            $temp_total = $temp_total + $temp;

                            echo '<td >'  . ($jan == 0 ? '' : $jan) . '</td>';
                            echo '<td >'  . ($feb == 0  ? '' : $feb) . '</td>';
                            echo '<td >'  . ($mar == 0 ? '' : $mar) . '</td>';
                            echo '<td >'  . ($apr == 0 ? '' : $apr) . '</td>';
                            echo '<td >'  . ($mei == 0 ? '' : $mei) . '</td>';
                            echo '<td >'  . ($jun == 0 ? '' : $jun) . '</td>';
                            echo '<td >'  . ($jul == 0 ? '' : $jul) . '</td>';
                            echo '<td >'  . ($agu == 0 ? '' : $agu) . '</td>';
                            echo '<td >'  . ($sep == 0 ? '' : $sep) . '</td>';
                            echo '<td >'  . ($okt == 0 ? '' : $okt) . '</td>';
                            echo '<td >'  . ($nov == 0 ? '' : $nov) . '</td>';
                            echo '<td >'  . ($des == 0 ? '' : $des) . '</td>';
                            echo '<td >'  . $temp  . '</td>';
                            ?>

                        </tr>
                    <?php endforeach;
                    ?>
                    <tr class="table-light">
                        <td colspan="2" class="table-dark">Total</td>
                        <td class="table-dark"><?= $jan_total ?></td>
                        <td class="table-dark"><?= $feb_total ?></td>
                        <td class="table-dark"><?= $mar_total ?></td>
                        <td class="table-dark"><?= $apr_total ?></td>
                        <td class="table-dark"><?= $mei_total ?></td>
                        <td class="table-dark"><?= $jun_total ?></td>
                        <td class="table-dark"><?= $jul_total ?></td>
                        <td class="table-dark"><?= $agu_total ?></td>
                        <td class="table-dark"><?= $sep_total ?></td>
                        <td class="table-dark"><?= $okt_total ?></td>
                        <td class="table-dark"><?= $nov_total ?></td>
                        <td class="table-dark"><?= $des_total ?></td>
                        <td class="table-dark"><?= $temp_total ?></td>
                    </tr>
                </tbody>
            </table>

        </div>




    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>

</html>

<script>
    let submitBtn = document.getElementById('submit');
    submitBtn.addEventListener('click', function() {
        let tahun = $("#tahun").val();
        window.location.href = "http://localhost:8080/?tahun=" + tahun;
    })
</script>