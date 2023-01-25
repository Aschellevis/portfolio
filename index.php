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
    <div class="container-fluid main">
        <div class="container-md py-5">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/anouska.jpg" alt="Anouska" class="mx-auto d-block">
                </div>
                <div class="col-md-8">
                    <p>
                        Welkom!<br>
                        Mijn naam is Anouska Schellevis.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="line"><hr></div>
    <div class="container-fluid main my-5">
        <div class="container-md">
            <div class="row">
                <div class="col-md-6 mx-auto py-5 w-75">
                    <a href="projects.php"><h1 class="text-center">Projecten</h1></a>
                </div>
            </div>
        </div>
    </div>
    <div class="line"><hr></div>
    <div class="container-fluid main">
        <div class="container-md">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="cv col-md-4 shadow-lg py-4 rounded">
                    <a href="cv.php"><h1 class="text-center">CV</h1></a>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
    <div class="line"><hr></div>
</body>
</html>
