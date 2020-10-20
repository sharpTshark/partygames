<?php

require 'header.php';

?>

<div class="container">
    <div class="createroom-wrapper">
        <h1>Create Room</h1>

        <hr>
        <br>


        <form action="inc/post.php" method="POST">
            <input type="text" name="create-room" id="" placeholder="RoomName...">
            <input type="submit" value="Create Room">
        </form>
        <hr>
    </div>
</div>

<?php

    require 'footer.php';

?>