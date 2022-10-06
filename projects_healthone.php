<!DOCTYPE html>
<html lang="nl">
<?php
include_once ("template/head.php");
?>
<body>
<?php
include_once ("template/nav.php");
?>
<div class="healthone container-fluid my-5">
    <div class="row">
        <div class="col-md-3 text-end">
            <h1 class="text-white display-4">Health <span class="text-danger">One</span></h1>
        </div>
        <div class="col-md-9"></div>
    </div>
    <div class="container-sm text-white my-4">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-3">
                <h4 class="fw-normal">Programmeertalen</h4>
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>Bootstrap 5</li>
                    <li>PHP</li>
                    <li>Databases</li>
                </ul>
            </div>
            <div class="col-3">
                <h4 class="fw-normal">Functionaliteiten</h4>
                <ul>
                    <li>Registreren</li>
                    <li>Inloggen</li>
                    <li>Profiel aanpassen</li>
                    <li>Wachtwoord aanpassen</li>
                    <li>Review schrijven</li>
                </ul>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <div class="container-md">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators text-dark">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/healthone/healthone.jpg" class="d-block w-100" alt="start healthone">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/healthone/healthone_categories.jpg" class="d-block w-100" alt="categorieën">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/healthone/healthone_reviews.jpg" class="d-block w-100" alt="reviews">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/healthone/healthone_reviews.jpg" class="d-block w-100" alt="reviews">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/healthone/healthone_reviews.jpg" class="d-block w-100" alt="reviews">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/healthone/healthone_reviews.jpg" class="d-block w-100" alt="reviews">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/healthone/healthone_reviews.jpg" class="d-block w-100" alt="reviews">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/healthone/healthone_reviews.jpg" class="d-block w-100" alt="reviews">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span <i class="bi bi-arrow-left-short fs-1 text-dark" aria-hidden="true"></i></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span <i class="bi bi-arrow-right-short fs-1 text-dark" aria-hidden="true"></i></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
</body>
</html>