<?php
use MVCDTC\Services\Authentication;
use MVCDTC\Services\Services;
$auth = Services::GetInstance()->GetService(Authentication::class);
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Steven Kazmierczak</title>
    <link rel="icon" type="image/svg+xml" href="/body/monkey.svg">
    <?php $this->LoadImports(); ?>
    <link rel="icon" href="/body/favicon.ico" type="image/ico" sizes="16x16">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <script src="/bootstrap/js/bootstrap.min.js"></script>
</head>
<body class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-sticky">
        <div class="container-fluid">
            <img src="/body/monkey.svg" alt="Logo" width="50" height="50" class="d-inline-block me-3 mt-1"/>
            <a class="navbar-brand fw-bold" href="/">Steven Kazmierczak</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 fw-bold" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mvcdtc">MVCDTC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blazor">Blazor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/nfc">NFC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/home/reflection">Reflectie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/home/future">Ontwikkelingsplan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="container">
        <?php $this->LoadRequestedPage(); ?>
    </section>
</body>
</html>
