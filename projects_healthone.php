<!DOCTYPE html>
<html lang="nl">
<?php
include_once ("template/head.php");
?>
<body>
<?php
include_once ("template/nav.php");
include_once ("template/mediabar.php")
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
    <div class="container-md my-5">
        <div id="carouselExampleCaptions" class="carousel slide w-75 mx-auto" data-bs-ride="carousel">
            <div class="carousel-indicators text-dark">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9" aria-label="Slide 10"></button>
            </div>
            <div class="slider carousel-inner">
                <div class="carousel-item active">
                    <img src="img/healthone/healthone.jpg" class="d-block w-100 rounded" alt="start healthone">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75">
                        <p>Dit is de homepagina van HealthOne</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/healthone/healthone_categories.jpg" class="d-block w-100 mh-75 rounded" alt="categorieën">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75">
                        <p>Er zijn vier verschillende categorieën sportapparaten.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/healthone/healthone_reviews.jpg" class="d-block w-100 mh-75 rounded" alt="reviews">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75">
                        <p>Bij elk apparaat staan reviews die geschreven zijn door de bezoekers.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/healthone/healthone_contact.jpg" class="d-block w-100 rounded" alt="contact">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75">
                        <p>Er zijn verschillende manieren op contact op te nemen.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/healthone/healthone_register.jpg" class="d-block w-100 rounded" alt="registreren">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75">
                        <p>Om een account aan te maken, moet je registreren.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/healthone/healthone_login.jpg" class="d-block w-100 rounded" alt="inloggen">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75">
                        <p>Daarna kan je inloggen op de website.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/healthone/healthone_loggedin.jpg" class="d-block w-100 rounded" alt="ingelogd">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75">
                        <p>Als je bent ingelogd, kom je op je eigen homepagina.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/healthone/healthone_change_profile.jpg" class="d-block w-100 rounded" alt="profiel veranderen">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75">
                        <p>Je kan zelf je profiel veranderen.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/healthone/healthone_change_password.jpg" class="d-block w-100 rounded" alt="wachtwoord veranderen">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75">
                        <p>Wachtwoord kan ook veranderd worden.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/healthone/healthone_new_review.jpg" class="d-block w-100 rounded" alt="nieuwe review">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75">
                        <p>Je moet ingelogd zijn om een review te kunnen schrijven.</p>
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