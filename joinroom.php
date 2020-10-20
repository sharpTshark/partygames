<?php

require 'header.php';

?>

<div class="container">
    <div class="joinroom-wrapper">
        <h1>Join Room</h1>

        <hr>
        <br>


        <form action="inc/post.php" method="POST">
            <input type="text" name="join-room" id="" placeholder="Room ID...">
            <input type="submit" value="Join Room">
        </form>

        <hr>
    </div>
</div>

<?php

    require 'footer.php';

?>