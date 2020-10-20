<?php

require 'header.php';

?>
    <!-- // -------------Change nickname------------- -->

    <div class="container">
        <div class="settings-container">
            <h1>settings</h1> 
            
            
            <hr>
            
            
            <div class="asign-change-name-wrapper">
                <h3>Change Nickname</h3> 
                <form id="changeNickName" action="inc/post.php" method="post">
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
                        <form action="inc/post.php" method="POST">
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
                        <form action="inc/post.php" method="POST">
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
                        <form action="inc/post.php" method="POST">
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

            <h3>Game Settings</h3>
            <div class="add-game-wrapper">
                <form action="inc/post.php" method="post">

                    <div class="add-game-row">
                        <input type="text" name="gameName" id="settings-gameName" placeholder="Game Name">
                        <input type="text" name="gameModeName" id="settings-gameModeName" placeholder="game Mode Name">
                            <select name="win-type" id="win-type">
                                <option value="">unset</option>
                                <option value="win-lose">Win or lose</option>
                                <option value="highest-score-winner">Highest score to win</option>
                                <option value="lowest-score-winner">Lowest score to win</option>
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

        </div>
    </div>


<?php

    require 'footer.php';

?>