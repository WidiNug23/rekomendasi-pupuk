<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Splash Screen</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-dark text-white text-center">
    <div class="container py-5">
        <h1>Splash Screen</h1>
    </div>

    <!-- Bootstrap JS (optional, if you need JavaScript functionality) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kJ3e9RcYhu0zZZeFkZaA6Jph/jc64r7HO4Jo8rnYp6I+iq1tF9lPv9b/SKkWahh1" crossorigin="anonymous"></script>

    <!-- JavaScript untuk menunda selama 5 detik dan mengarahkan ke halaman utama -->
    <script>
        setTimeout(function(){
            window.location.href = "<?php echo site_url('/landing-page'); ?>";
        }, 5000); // 5000 milliseconds = 5 detik
    </script>
</body>
</html>
