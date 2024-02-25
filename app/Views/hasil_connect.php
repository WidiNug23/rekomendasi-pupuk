<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">

    <title>Hasil Connect</title>
</head>

<body>

    <!-- Header -->
    <header class="bg-dark text-white text-center py-4">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h1 class="display-4">Your Logo</h1>
                </div>
                <div class="col-6">
                    <!-- Button to trigger modal -->
                    <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <section class="main-content mt-4">
        <div class="container">
            <h2 class="text-center mb-4">Indikator</h2>

            <!-- Tabel dengan nilai n, p, k -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Indikator</th>
                        <th>Nilai</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Ganti nilai n, p, k sesuai kebutuhan -->
                    <?php
                        $nilai_n = 20;
                        $nilai_p = 70;
                        $nilai_k = 100;

                        function tentukanWarna($nilai) {
                            if ($nilai >= 80) {
                                return 'bg-success'; // Hijau
                            } elseif ($nilai >= 60) {
                                return 'bg-warning'; // Kuning
                            } else {
                                return 'bg-danger'; // Merah
                            }
                        }

                        function tentukanStatus($nilai) {
                            if ($nilai >= 80) {
                                return 'bagus';
                            } elseif ($nilai >= 60) {
                                return 'Kurang';
                            } else {
                                return 'Buruk';
                            }
                        }
                    ?>

                    <tr>
                        <td>n</td>
                        <td><?= $nilai_n ?></td>
                        <td>
                            <span class="badge <?= tentukanWarna($nilai_n) ?>"><?= tentukanStatus($nilai_n) ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>p</td>
                        <td><?= $nilai_p ?></td>
                        <td>
                            <span class="badge <?= tentukanWarna($nilai_p) ?>"><?= tentukanStatus($nilai_p) ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>k</td>
                        <td><?= $nilai_k ?></td>
                        <td>
                            <span class="badge <?= tentukanWarna($nilai_k) ?>"><?= tentukanStatus($nilai_k) ?></span>
                        </td>
                    </tr>

                </tbody>
            </table>

            <!-- Tabel Rekomendasi Pupuk -->
            <h2 class="text-center mb-4">Rekomendasi Pupuk</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Pupuk</th>
                        <th>Kadar Pupuk</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        // Fungsi untuk menentukan rekomendasi pupuk
                        function rekomendasiPupuk($nilai_n, $nilai_p, $nilai_k) {
                            // Logika untuk menentukan rekomendasi pupuk berdasarkan NPK
                            // Ganti dengan logika sesuai kebutuhan
                            if ($nilai_n >= 80 && $nilai_p >= 70 && $nilai_k >= 100) {
                                return array("Pupuk Urea", "20kg/h");
                            } else {
                                // Pupuk default jika tidak memenuhi kriteria
                                return array("Pupuk ABC", "15kg/h");
                            }
                            
                        }

                        // Mendapatkan rekomendasi pupuk
                        $rekomendasi = rekomendasiPupuk($nilai_n, $nilai_p, $nilai_k);
                    ?>

                    <tr>
                        <td><?= $rekomendasi[0] ?></td>
                        <td><?= $rekomendasi[1] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; 2024 Your Company</p>
        </div>
    </footer>

    <!-- Bootstrap JS (optional, if you need JavaScript functionality) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>
