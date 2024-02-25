<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">

    <title>Step Connect</title>

    <style>
        /* Tambahkan CSS untuk efek hover pada card artikel */
        .card:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
        }

        /* Tambahkan CSS untuk menyoroti langkah aktif */
        .step-indicator {
            font-size: 24px;
            color: #ddd;
            background-color: #333;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
        }

        .active {
            color: #fff;
            background-color: #007bff;
        }

        /* Tambahkan CSS untuk pemisah angka */
        .step-separator {
            font-size: 24px;
            color: #333;
            margin-right: 10px;
        }

        /* Tambahkan CSS untuk menempatkan gambar di bawah angka */
        .step-content {
            text-align: center;
        }

        .step-content img {
            margin-top: 15px;
            max-width: 100%;
            height: auto;
        }

        /* Tambahkan CSS untuk daftar langkah */
        .step-list {
    text-align: left;
    margin-top: 15px;
    margin-left: auto;
    margin-right: auto;
    max-width: 400px; /* Lebar maksimum untuk layar yang lebih besar */
}

.step-list ul {
    padding: 0;
    list-style-type: decimal;
}

.step-list li {
    margin-bottom: 10px;
}

/* Media Query untuk layar kecil (contoh: handphone) */
@media (max-width: 576px) {
    .step-list {
        max-width: 90%; /* Mengurangi lebar maksimum untuk perangkat seluler */
    }
}
    </style>
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

    <!-- Modal for Login -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- User selection buttons (initially hidden) -->
                    <div id="loginOptions" style="display: none;">
                        <button class="btn btn-primary" onclick="window.location.href='/login-user'">Login as User</button>
                        <button class="btn btn-success" onclick="window.location.href='/login-admin'">Login as Admin</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="main-content mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- <h1 class="display-4">Main Logo</h1> -->
                </div>
                <div class="col-md-6 text-end">
                    <!-- Ganti link berikut dengan rute yang sesuai -->
                    <!-- <a href="<?= site_url('/step-connect'); ?>" class="btn btn-success">Connect</a> -->
                </div>
            </div>

            <!-- Langkah 1 -->
            <div class="row mt-4" id="step1">
                <div class="col-md-12 step-content">
                    <span class="step-indicator active">1</span>
                    <span class="step-indicator">2</span>
                    <span class="step-indicator">3</span>
                    <span class="step-indicator">4</span>
                    <img src="path/to/step1.jpg" alt="Langkah 1" class="img-fluid">

                    <div class="step-list">
                        <ul>
                            <li>Persiapkan Alat</li>
                            <li>Nyalakan Alat</li>
                            <li>Sambungkan Alat</li>
                            <li>Buang Alat</li>
                        </ul>
                    </div>

                    <button class="btn btn-primary" onclick="nextStep(2)">Next</button>
                </div>
            </div>

            <!-- Langkah 2 -->
            <div class="row mt-4" style="display: none;" id="step2">
                <div class="col-md-12 step-content">
                    <span class="step-indicator">1</span>
                    <span class="step-indicator active">2</span>
                    <span class="step-indicator">3</span>
                    <span class="step-indicator">4</span>
                    <img src="path/to/step2.jpg" alt="Langkah 2" class="img-fluid">
                    <div class="step-list">
                        <ul>
                            <li>knve</li>
                            <li>jbfc jt</li>
                            <li>qpqpqpqpqpqpq</li>
                        </ul>
                    </div>

                    <button class="btn btn-primary" onclick="previousStep(1)">Previous</button>
                    <button class="btn btn-primary" onclick="nextStep(3)">Next</button>
                </div>
            </div>

            <!-- Langkah 3 -->
            <div class="row mt-4" style="display: none;" id="step3">
                <div class="col-md-12 step-content">
                    <span class="step-indicator">1</span>
                    <span class="step-indicator">2</span>
                    <span class="step-indicator active">3</span>
                    <span class="step-indicator">4</span>
                    <img src="path/to/step3.jpg" alt="Langkah 3" class="img-fluid">
                    <div class="step-list">
                        <ul>
                            <li>poewuiebviuwbv</li>
                            <li>z z z z z z z</li>
                            <li>Sjnvebv</li>
                        </ul>
                    </div>

                    <button class="btn btn-primary" onclick="previousStep(2)">Previous</button>
                    <button class="btn btn-primary" onclick="nextStep(4)">Next</button>
                </div>
            </div>

            <!-- Langkah 4 -->
            <div class="row mt-4" style="display: none;" id="step4">
                <div class="col-md-12 step-content">
                    <span class="step-indicator">1</span>
                    <span class="step-indicator">2</span>
                    <span class="step-indicator">3</span>
                    <span class="step-indicator active">4</span>
                    <img src="path/to/step4.jpg" alt="Langkah 4" class="img-fluid">
                    <div class="step-list">
                        <ul>
                            <li>0000000000000</li>
                            <li>Nyalakan Alat</li>
                            <li>mmmmmmmmmmmmmmm</li>
                        </ul>
                    </div>

                    <button class="btn btn-primary" onclick="previousStep(3)">Previous</button>
                    <button class="btn btn-primary" onclick="window.location.href='/hasil-connect'">Connect</button>
                </div>
            </div>

        </div>
    </section>

   <!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Contact Information</h5>
                <p>Address: Your Street, City, Country</p>
                <p>Phone: +1 (123) 456-7890</p>
            </div>
            <div class="col-md-4">
                <h5>Privacy</h5>
                <p><a href="/privacy-policy">Privacy Policy</a></p>
            </div>
            <div class="col-md-4">
                <h5>Follow Us</h5>
                <div class="social-icons">
                    <a href="#" target="_blank" class="text-white"><i class="fab fa-facebook"></i></a>
                    <a href="#" target="_blank" class="text-white"><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank" class="text-white"><i class="fab fa-instagram"></i></a>
                    <!-- Tambahkan ikon media sosial sesuai kebutuhan -->
                </div>
            </div>
        </div>
        <p>&copy; 2024 Your Company</p>
    </div>
</footer>

    <!-- Bootstrap JS (optional, if you need JavaScript functionality) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Tambahkan script ini pada bagian head setelah Bootstrap CSS -->
<script>
    function nextStep(step) {
        // Sembunyikan langkah sebelumnya
        document.getElementById('step' + (step - 1)).style.display = 'none';

        // Tampilkan langkah berikutnya atau redirect ke halaman hasil_connect.php jika sudah langkah terakhir
        if (step <= 4) {
            document.getElementById('step' + step).style.display = 'block';
        } else {
            // Jika langkah terakhir, redirect ke halaman hasil_connect.php
            window.location.href = 'hasil_connect.php';
            return; // Tambahkan return untuk menghentikan eksekusi langkah berikutnya
        }

        // Hapus kelas 'active' dari semua langkah
        for (let i = 1; i <= 4; i++) {
            document.getElementById('step' + i + '-indicator').classList.remove('active');
        }

        // Tambahkan kelas 'active' ke langkah yang sesuai
        document.getElementById('step' + step + '-indicator').classList.add('active');
    }
</script>


<script>
    // Fungsi untuk menampilkan langkah sebelumnya
    function previousStep(step) {
        // Sembunyikan langkah sebelumnya
        document.getElementById('step' + (step + 1)).style.display = 'none';

        // Tampilkan langkah sebelumnya atau restart jika sudah langkah pertama
        if (step >= 1) {
            document.getElementById('step' + step).style.display = 'block';
        } else {
            // Jika langkah pertama, kembalikan ke langkah terakhir
            document.getElementById('step4').style.display = 'block';
        }

        // Hapus kelas 'active' dari semua langkah
        for (let i = 1; i <= 4; i++) {
            document.getElementById('step' + i + '-indicator').classList.remove('active');
        }

        // Tambahkan kelas 'active' ke langkah yang sesuai
        document.getElementById('step' + step + '-indicator').classList.add('active');
    }
</script>

</body>

</html>
