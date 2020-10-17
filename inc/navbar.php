<?php

require 'inc/conn.php';
include 'inc/ip.php';

?>

<style>
    :root {
        --blue: #bada03;
        --dgray: #272727;
        --black: #121212;
        
    

<?php

$sql = "SELECT * FROM users WHERE ip='$rawip'";
$result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) == 1) {
        while($row = mysqli_fetch_assoc($result)) {
            
?>
        --pricolor: <?php 
        if ($row["theme"] == "") {echo '#fbc01a';} else {
            echo $row["theme"];}}
        }
        
        ?>;
        
        }
</style>


        <div class="nav-block-open"><a id="user-name" href="settings.php?action=NameSetting"> <?php

        $sql = "SELECT * FROM users WHERE ip='$rawip'";
        $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) == 1) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo $row["name"] . '</a>';
                    }
                } else {
                    echo 'Register here!</a>';
                }
            ?>
            <a id="top-icon" href="index.php"><i class="fas fa-home"></i></a>
            <a style="margin: -8px 0px;" id="top-icon" href=""><i class="far fa-envelope"></i></a>
        </div>

    <nav>
        <div class="block-wrapper"></div>
            <div class="nav-block-space">
                <a>space</a>
            </div>
            <div class="nav-block">
                <a href="index.php">TOURNAMENT</a><i id="nav-icon" class="fas fa-trophy"></i>
            </div>
            <div class="nav-block">
                <a href="friendlist.php">FRIENDS</a><i id="nav-icon" class="fas fa-users"></i>
            </div>
            <div class="nav-block">
                <a href="records.php">RECORDS</a><i style="font-size: 20px;" id="nav-icon" class="fas fa-award"></i>
            </div>
            <div class="nav-block">
                <a href="settings.php">SETTINGS</a><i id="nav-icon" class="fas fa-cog"></i>
            </div>
            <div class="nav-block">
                <a href="aboutus.php">ABOUT US</a><i id="nav-icon" class="fas fa-align-center"></i>
            </div>
            <div class="nav-block-space">
                <a>space</a>
            </div>
        </div>
    </nav>
