<?php
    require 'header.php';
?>

    <div class="container">
        <div class="settings-container">

<?php

// -------------check send to page by purpose-------------
if (empty($_GET)) {
    // --------------check login true/false--------------
    $sql = "SELECT * FROM users WHERE ip='$rawip'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) < 1)  { ?>
<!-- // --------------asign nickname | no name asigned to this ip-------------- -->
        <div class="asign-change-name-wrapper">
            <h1>Assign a nickname</h1><h5 id="alert-text"><i id="alert-icon" class="fas fa-exclamation-circle"></i> You have not asigned you nickname yet*</h5>
            <form action="settings.php" method="post">
                <input type="text" name="asign-NickName" placeholder="Nickname">
                <input type="submit" value="Asign">
            </form>
            
        </div>
        <hr>
        <?php 

    } else { ?>
    <!-- // -------------if name is asigned to this ip | show all settings------------- -->
        <!-- // -------------update nickname setting------------- -->    
            <h1>settings</h1> 
            <hr>
            <div class="asign-change-name-wrapper">
                <h3>Change Nickname</h3> 
                <form id="changeNickName" action="settings.php" method="post">
                    <input type="text" name="update-NickName" placeholder="Nickname"><br>
                    <input type="submit" value="Change">
                </form>
            </div>
            <hr>

    <!-- // -------------Theme color picker------------- -->
        <div class="theme-settings">
            <h3>Theme's</h3>
            <div class="theme-color-picker-wrapper">
                <div class="theme-box">
                    <form action="settings.php" method="POST">
                        <button type="submit" name="theme-color" value=""><h5>YELLOW</h5>
                            <div class="preview-menu yellow">
                                <div class="preview-menu-icon"><i id="nav-icon" class="fas fa-trophy"></i></div>
                                <div class="preview-menu-icon"><i id="nav-icon" class="fas fa-users"></i></div>
                                <div class="preview-menu-icon"><i style="font-size: 20px;" id="nav-icon" class="fas fa-award"></i></div>
                                <div class="preview-menu-icon"><i id="nav-icon" class="fas fa-cog"></i></div>
                                <div class="preview-menu-icon"><i id="nav-icon" class="fas fa-align-center"></i></div>
                            </div>
                        </button>
                    </form>
                </div>
                
                <div class="theme-box">
                    <form action="settings.php" method="POST">
                        <button type="submit" name="theme-color" value="red"><h5>RED</h5>
                            <div class="preview-menu red">
                                <div class="preview-menu-icon"><i id="nav-icon" class="fas fa-trophy"></i></div>
                                <div class="preview-menu-icon"><i id="nav-icon" class="fas fa-users"></i></div>
                                <div class="preview-menu-icon"><i style="font-size: 20px;" id="nav-icon" class="fas fa-award"></i></div>
                                <div class="preview-menu-icon"><i id="nav-icon" class="fas fa-cog"></i></div>
                                <div class="preview-menu-icon"><i id="nav-icon" class="fas fa-align-center"></i></div>
                            </div>
                        </button>
                    </form>
                </div>
                
                <div class="theme-box">
                    <form action="settings.php" method="POST">
                        <button type="submit" name="theme-color" value="pink"><h5>Pink</h5>
                            <div class="preview-menu pink" >
                                <div class="preview-menu-icon"><i id="nav-icon" class="fas fa-trophy"></i></div>
                                <div class="preview-menu-icon"><i id="nav-icon" class="fas fa-users"></i></div>
                                <div class="preview-menu-icon"><i style="font-size: 20px;" id="nav-icon" class="fas fa-award"></i></div>
                                <div class="preview-menu-icon"><i id="nav-icon" class="fas fa-cog"></i></div>
                                <div class="preview-menu-icon"><i id="nav-icon" class="fas fa-align-center"></i></div>
                            </div>
                        </button>
                    </form>
                </div>
            </div>
        </div>

            <hr>

    <!-- // -------------game setting------------- -->
        <!-- // -------------add game------------- -->    
            <h3>Game Settings</h3>
            <div class="add-game-wrapper">
                <form action="settings.php" method="post">
                    <div class="add-game-row">
                        <input type="text" name="gameName" id="settings-gameName" placeholder="Game Name">
                        <input type="text" name="gameModeName" id="settings-gameModeName" placeholder="game Mode Name">
                            <select name="win-type" id="win-type">
                                <option value="">unset</option>
                                <option value="win-lose">Win or lose</option>
                                <option value="highest-score-winner">Highest score to win</option>
                                <option value="lowest-score-winner">Lowest score to win</option>
                                <option value="1-winner">1 winner</option>
                                <option value="1-winner">1 winner</option>
                                <option value="1-winner">1 winner</option>
                            </select>
                    </div>

                    <div class="add-game-row">
                        <input type="number" name="min-players" id="settings-min-players" placeholder="Min Players">
                        <input type="number" name="max-players" id="settings-max-players" placeholder="Max Players">
                        <input type="number" name="time-every-game" id="settings-time-every-game" placeholder="Time">
                    </div>
                    <input type="submit" value="Create Game"><!-- ---------------submit--------------- -->

                </form>
            </div>
            <hr>

            <?php
            }
} else {
        
        ?> 

        <?php
// -------------------------- -->
if ($_GET["action"] == 'NameSetting') {  
        $sql = "SELECT * FROM users WHERE ip='$rawip'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) < 1)  { ?>
            <h1>Set a Nickname!</h1>
            <div class="asign-change-name-wrapper">
                <div class="asign-change-name-wrapper">
                    <form action="settings.php" method="post">
                        <input type="text" name="asign-NickName" placeholder="Nickname">
                        <input type="submit" value="Change">
                    </form>
                </div>
            </div>
        <?php

        } else { ?>
            <meta http-equiv="refresh" content="0.1;url=<?php echo $url . '/profile.php' ?>" /> <?php
        }
}
                

        }


if (!empty($_POST)) {
        if (!empty($_POST['asign-NickName'])) {
            $nickname = $_POST['asign-NickName'];
            $sql = "INSERT INTO users (name, ip, online, theme) VALUES ('$nickname', '$rawip', '0', '')";
            if(mysqli_query($conn, $sql)){ ?>
                <meta http-equiv="refresh" content="0.1;url=<?php echo $url ?>" />
            <?php
            } else {
                echo "<a style='color: red;'>Something went wrong, try again.</a>";
            }
        }

        if (!empty($_POST['update-NickName'])) {
            $nickname = $_POST['update-NickName'];
            $sql = "UPDATE users SET name='$nickname' WHERE ip=$rawip";
            if(mysqli_query($conn, $sql)){
                echo "Records were updated successfully."; ?>
                <meta http-equiv="refresh" content="0.1;url=<?php echo $url ?>" /> <?php    
            } else {
                echo "Something went wrong, try again.";
            }

        }   
}   ?>

            </div>
        </div>
    </div>
<?php
        if (isset($_POST['theme-color'])) {
            $theme = $_POST['theme-color'];
            $sql = "UPDATE users SET theme='$theme' WHERE ip=$rawip";
            if(mysqli_query($conn, $sql)){
                echo "Records were updated successfully."; ?>
                <meta http-equiv="refresh" content="0.1;url=<?php echo $url ?>" /> <?php    
            }
        }

    require 'footer.php';

?>