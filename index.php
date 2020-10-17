<?php
    require 'inc/header.php';
    require 'inc/navbar.php';
?>


<div class="container">
    
    
    <div class="front-page-text"><br>
        <img src="img/banner.png" alt="" width="350px" height="100px">
        <!-- <h1>PARTYGAMES</h1> -->
        <h4>Here you can have some real fun with your online friends by playing some little tournaments.</h4>
        <h4>this web app allows you to organise easily your own tournament.</h4>
        <h4>It knows every game so there is unlimited fun and posibility so you never done playing tournaments.</h4>
        <h4>if it does'nt you can simply add it in the settings.</h4>
    </div>
    <div class="top-tile-text">
        <h4>Get started below by joining or rather host a room.</h4>
    </div>
    <div class="tile-row">
        <a href="">
            <div class="tile-col">
                <h1>
                    JOIN
                </h1>

                <i class="fas fa-user-plus fa-7x" ></i>
            </div>
        </a>

        <a href="">
            <div class="tile-col">
                <h1>
                    HOST
                </h1>

                <i class="fas fa-server fa-7x"></i>
            </div>
        </a>


        
        <a href="settings.php">
            <div class="tile-col">
                <h1>
                    SETTINGS
                </h1>
            
                <i class="fas fa-sliders-h fa-7x" ></i>
            </div>
        </a>
    </div>

</div>

<?php
    require 'inc/footer.php';
?>