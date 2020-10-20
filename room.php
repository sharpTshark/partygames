<?php

require 'header.php';

checkRoom($conn);
?>

<div class="container">
    <div class="room-wrapper">
        <div class="content">
            <div class="room-text">
                <h1><?php echo 'ROOM ID: ' . $_GET['id']; ?></h1>    
            </div>
        </div>

        <hr>

        <div class="content">
            <div class="join-link-wrapper">
                <div class="room-text">
                    <h3>Invite Link: </h3>    
                </div>
                <div class="join-link">
                    <input type="text" disabled value="<?php echo $url . 'room.php?id=' . $_GET['id'] . '&roomname=' . $_GET['roomname']; ?>">
                </div>
            </div>
        </div>

        <div class="content">
            <div class="tournament-wrapper">
                <div class="circle-text-wrapper">
                    <div class="circle-text">
                        <h1> Game naam NR 1 </h1>
                        <h1><div class="circle"></div></h1>
                        <h1> Game naam NR 1</h1>
                    </div>
                    <div class="circle-text">
                        <h1>Game naam NR 2</h1>
                        <h1><div class="circle"></div></h1>
                        <h1>Game naam NR 1</h1>
                    </div>
                    <div class="circle-text">
                        <h1>Game naam NR 3</h1>
                        <h1><div class="circle"></div></h1>
                        <h1>Game naam NR 1</h1>
                    </div>
                    <div class="circle-text">
                        <h1>Game naam NR 4</h1>
                        <h1><div class="circle"></div></h1>
                        <h1>Game naam NR 1</h1>
                    </div>
                    <div class="circle-text">
                        <h1>Game naam NR 5</h1>
                        <h1><div class="circle"></div></h1>
                        <h1>Game naam NR 1</h1>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="content">

            <div class="room-players">
                <div class="column">
                    Player 1
                </div>
                <div class="column">
                    Player 2
                </div>
                <div class="column">
                    Player 3
                </div>
            </div>

            <div class="room-players">
                <div class="column">
                    Player 1
                </div>
                <div class="column">
                    Player 2
                </div>
                <div class="column">
                    Player 3
                </div>
            </div>

            <div class="room-players">
                <div class="column">
                    Player 1
                </div>
                <div class="column">
                    Player 2
                </div>
                <div class="column">
                    Player 3
                </div>
            </div>
        </div>
    </div>
</div>

<?php

    require 'footer.php';

?>