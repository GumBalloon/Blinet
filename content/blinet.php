<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">Bli.net</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <a class="nav-item nav-link" aria-current="page" href="#">Home</a>
                <a class="nav-item nav-link" href="#">What We Do</a>
                <a class="nav-item nav-link" href="#">Facility</a>
                <a class="nav-item nav-link" href="#">About</a>
                <a class="nav-item btn btn-orange btn-br-radius" href="#">Get Started</a>
            </ul>
        </div>
    </div>
</nav>

<!-- Master Title -->
<div class="jumbotron transparent p-5 mb-4">
    <div class="container py-5">
        <h1 class="display-5 fw-bold master">Blinet</h1>
        <p class="col-md-6 fs-4 sub-master">An <span>Internet Cafe</span> where you can book here and billing up your balance to save up your time here</p>
    </div>
</div>

<!-- Home Content -->
<section class="home-page py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="public/img/cool-internet-cafe.jpg" alt="home" class="rounded float-start">
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>