<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">

    <!-- Bootstrap Icons CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-rpS7w7ON0eCz9yUJpUpU3vfRD2T7dRAyEMtX7fERW/hDSpJ5tWBCjU1dFqFW9LcX"
        crossorigin="anonymous"></script>

    <title>Landing Page</title>

    <style>
        /* Tambahkan CSS untuk efek hover pada card artikel */
        .card:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
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

    <!-- Banner Slide Show -->
<section class="banner">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card bg-primary text-white" style="background-image: url('path/to/slide1.jpg');">
                    <div class="card-body">
                        <h5 class="card-title">Slide 1</h5>
                        <p class="card-text">Content of Slide 1.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card bg-info text-white" style="background-image: url('path/to/slide2.jpg');">
                    <div class="card-body">
                        <h5 class="card-title">Slide 2</h5>
                        <p class="card-text">Content of Slide 2.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card bg-success text-white" style="background-image: url('path/to/slide3.jpg');">
                    <div class="card-body">
                        <h5 class="card-title">Slide 3</h5>
                        <p class="card-text">Content of Slide 3.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card bg-info text-white" style="background-image: url('path/to/slide4.jpg');">
                    <div class="card-body">
                        <h5 class="card-title">Slide 4</h5>
                        <p class="card-text">Content of Slide 4.</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>


    <!-- Main Content -->
    <section class="main-content mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="display-4">Main Logo</h1>
                </div>
                <div class="col-md-6 text-end">
                <!-- Ganti link berikut dengan rute yang sesuai -->
                <a href="<?= site_url('/step-connect'); ?>" class="btn btn-success">Connect</a>
            </div>
            </div>

            <!-- Articles -->
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Article 1</h5>
                            <p class="card-text">Content of Article 1.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Article 2</h5>
                            <p class="card-text">Content of Article 2.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Article 3</h5>
                            <p class="card-text">Content of Article 3.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Article 1</h5>
                            <p class="card-text">Content of Article 1.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Article 2</h5>
                            <p class="card-text">Content of Article 2.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Article 3</h5>
                            <p class="card-text">Content of Article 3.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Add more articles as needed -->
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

    <!-- Custom Script for Carousel Autoplay -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var myCarousel = new bootstrap.Carousel(document.getElementById('carouselExampleControls'), {
                interval: 3000, // Set the interval to 3 seconds
                wrap: true // Set to true to allow continuous sliding
            });

            // Custom script to show login options when modal is shown
            document.getElementById('loginModal').addEventListener('shown.bs.modal', function () {
                document.getElementById('loginOptions').style.display = 'block';
            });
        });
    </script>

</body>

</html>
