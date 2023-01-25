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
    <div class="container-md">
        <h3 class="image-carrousel-title">Image carrousel</h3>
        <div class="carrousel">
            <img src="img/nature1.jpg" alt="nature 1" class="carrousel-image active">
            <img src="img/nature2.jpg" alt="nature 2" class="carrousel-image">
            <img src="img/nature3.jpg" alt="nature 3" class="carrousel-image">
            <img src="img/nature4.jpg" alt="nature 4" class="carrousel-image">
        </div>
        <div class="previous_next">
            <a class="previous">&#8617; Previous</a>
            <a class="next">Next &#8618;</a>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/image_slider.js"></script>
</body>
</html>