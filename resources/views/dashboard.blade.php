<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Agency</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: 'Poppins', sans-serif;
            background: #f5f7fb;
        }

        .hero{
            min-height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.6),
            rgba(0,0,0,0.6)),
            url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=2071&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            color: white;
            display: flex;
            align-items: center;
        }

        .service-card{
            transition: 0.3s;
            border-radius: 20px;
        }

        .service-card:hover{
            transform: translateY(-10px);
        }

        .stats-box{
            border-radius: 20px;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
    <div class="container">

        <a class="navbar-brand fw-bold" href="#">
            Marketingo
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Services
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        About
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Contact
                    </a>
                </li>

            </ul>

        </div>

    </div>
</nav>

<!-- HERO -->
<section class="hero">

    <div class="container text-center">

        <h1 class="display-2 fw-bold">
            Professional Manpower Support For Event & Brand Activation
        </h1>

        <p class="lead mt-4">
            Eksekusi yang luar biasa dimulai dari talenta yang luar biasa
        </p>


    </div>

</section>

<!-- SERVICES -->
<!-- SERVICES -->
<section class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold display-4">
                Ruang Lingkup Pekerjaan
            </h2>

            <div class="mx-auto bg-danger rounded mt-3"
            style="width:120px;height:4px;"></div>

        </div>

        <div class="row justify-content-center">

            <!-- USHER -->
            <div class="col-lg-3 col-md-6 mb-4">

                <div class="card border-0 shadow-lg rounded-4 text-center p-4 service-card h-100">

                    <img src="https://i.pravatar.cc/300?img=12"
                    class="rounded-circle mx-auto mb-3 border border-4 border-danger"
                    width="170"
                    height="170"
                    style="object-fit:cover;">

                    <h4 class="fw-bold">
                        USHER
                    </h4>

                    <p class="text-muted small mt-2">
                        Mengelola registrasi dan welcoming tamu serta membantu kenyamanan pengunjung selama event berlangsung.
                    </p>

                </div>

            </div>

            <!-- SPG -->
            <div class="col-lg-3 col-md-6 mb-4">

                <div class="card border-0 shadow-lg rounded-4 text-center p-4 service-card h-100">

                    <img src="https://i.pravatar.cc/300?img=32"
                    class="rounded-circle mx-auto mb-3 border border-4 border-danger"
                    width="170"
                    height="170"
                    style="object-fit:cover;">

                    <h4 class="fw-bold">
                        SPG
                    </h4>

                    <p class="text-muted small mt-2">
                        Mempromosikan produk secara langsung dan menjelaskan product knowledge kepada customer.
                    </p>

                </div>

            </div>

            <!-- SPB -->
            <div class="col-lg-3 col-md-6 mb-4">

                <div class="card border-0 shadow-lg rounded-4 text-center p-4 service-card h-100">

                    <img src="https://i.pravatar.cc/300?img=15"
                    class="rounded-circle mx-auto mb-3 border border-4 border-danger"
                    width="170"
                    height="170"
                    style="object-fit:cover;">

                    <h4 class="fw-bold">
                        SPB
                    </h4>

                    <p class="text-muted small mt-2">
                        Mendukung aktivitas promosi dan membantu operasional event di lapangan.
                    </p>

                </div>

            </div>

            <!-- TEAM LEADER -->
            <div class="col-lg-3 col-md-6 mb-4">

                <div class="card border-0 shadow-lg rounded-4 text-center p-4 service-card h-100">

                    <img src="https://i.pravatar.cc/300?img=18"
                    class="rounded-circle mx-auto mb-3 border border-4 border-danger"
                    width="170"
                    height="170"
                    style="object-fit:cover;">

                    <h4 class="fw-bold">
                        TEAM LEADER
                    </h4>

                    <p class="text-muted small mt-2">
                        Koordinasi tim, briefing, monitoring event dan reporting kegiatan secara profesional.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>
             <!-- STATS -->
<section class="py-5">

    <div class="container">

        <div class="row text-center">

            <div class="col-md-4 mb-4">

                <div class="bg-white shadow p-5 stats-box">

                    <h1 class="fw-bold text-primary">
                        150+
                    </h1>

                    <p class="text-muted">
                        Clients
                    </p>

                </div>

            </div>

            <div class="col-md-4 mb-4">

                <div class="bg-white shadow p-5 stats-box">

                    <h1 class="fw-bold text-success">
                        300+
                    </h1>

                    <p class="text-muted">
                        Projects
                    </p>

                </div>

            </div>

            <div class="col-md-4 mb-4">

                <div class="bg-white shadow p-5 stats-box">

                    <h1 class="fw-bold text-danger">
                        24/7
                    </h1>

                    <p class="text-muted">
                        Support
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-4">

    <p class="mb-0">
        © 2026 Marketingo Agency. All Rights Reserved.
    </p>

</footer>

<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>