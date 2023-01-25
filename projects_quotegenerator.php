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
<div class="container-fluid my-5">
    <div class="container-sm text-white my-4">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-3">
                <h4 class="fw-normal">Programmeertalen</h4>
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>Javascript</li>
                </ul>
            </div>
            <div class="col-3">
                <h4 class="fw-normal">Functionaliteiten</h4>
                <ul>
                    <li>Genereert een random quote</li>
                </ul>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <div class="quote_block container-md">
        <div class="button">
            <a>&#8635; Nieuwe quote</a>
        </div>
        <div class="quote"></div>
        <div class="person"></div>
    </div>
</div>
<script type="text/javascript" src="js/quotegenerator.js"></script>
</body>
</html>