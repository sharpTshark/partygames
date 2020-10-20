<?php

    $servername = "localhost";
    $username = "coendenh_partygames";
    $password = "partygames";
    $dbname = "coendenh_partygames";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

?>


<?php


function handlePost($post, $rawip) {
    // ---------------------Theme color---------------------
    global $conn;
    if (isset($post['theme-color'])) {
        $theme = $post['theme-color'];
        $sql = "UPDATE users SET theme='$theme' WHERE ip='$rawip'";
        if(mysqli_query($conn, $sql)){
            header('Location: ./index.php');
        }
    }
// ---------------------New user with Nickname---------------------
    if (!empty($_POST['asign-NickName'])) {
        $nickname = $_POST['asign-NickName'];
        $sql = "INSERT INTO users (name, ip, online, theme, roomid) VALUES ('$nickname', '$rawip', '0', '', '0')";
        if(mysqli_query($conn, $sql)){
            header('Location: ../index.php');
        }
    }
// ---------------------Update user Nickname---------------------
    if (!empty($_POST['update-NickName'])) {
        $nickname = $_POST['update-NickName'];
        $sql = "UPDATE users SET name='$nickname' WHERE ip=$rawip";
        if(mysqli_query($conn, $sql)){
            header('Location: ../index.php');
        }
    }
// ---------------------Create Room---------------------
    if (isset($_POST['create-room'])) {
        $roomname = $_POST['create-room'];
        $sql = "INSERT INTO rooms (roomname) VALUES ('$roomname')";

        if(mysqli_query($conn, $sql)){
            $sql1 = "SELECT * FROM rooms WHERE roomname='$roomname'";
            $result = mysqli_query($conn, $sql1);

            if(mysqli_num_rows($result) > 0)  {
                while($row = mysqli_fetch_assoc($result)) {
                header('Location: ../room.php?id=' . $row['id'] . '&roomname=' . $row['roomname']);
                }
            } 
        } else {echo 'werkt niett';}
    }
// ---------------------JOin a Room---------------------
    if (isset($_POST['join-room'])) {
        $roomid = $_POST['join-room'];
        $sql = "SELECT * FROM rooms WHERE id='$roomid'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 1)  {
            echo 'ROOM GEVONDEN';
            while($row = mysqli_fetch_assoc($result)) {
            header('Location: ../room.php?id=' . $row['id'] . '&roomname=' . $row['roomname']);
            }
        } else {
            echo '<h1>Room not found</h1>';
            header( "refresh:1;url=../joinroom.php" );
        }
    }
}

// ---------------------check if room exists---------------------

function checkRoom() {
    global $conn;
    $roomname = $_GET['roomname'];
    $sql = "SELECT * FROM rooms WHERE roomname='$roomname'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) < 1)  {
        header('Location: index.php');
    }
}

// ---------------------asigned games to the room---------------------

// function gameName($_GET) {
//     global $conn;
//     $roomid = $_GET['id'];
//     $sql = "SELECT * FROM rooms WHERE roomname='$roomname'";
//     $result = mysqli_query($conn, $sql);
//     if(mysqli_num_rows($result) < 1)  {
//         header('Location: index.php');
//     }
// }


// ---------------------Theme color---------------------
// ---------------------Theme color---------------------
// ---------------------Theme color---------------------
// ---------------------Theme color---------------------
// ---------------------Theme color---------------------
// ---------------------Theme color---------------------
// ---------------------Theme color---------------------


// ---------------------Check if user is new or not---------------------
function checkUser($rawip, $url) {
    global $conn;
    $sql = "SELECT * FROM users WHERE ip='$rawip'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) < 1)  {
        header('Location: login.php');
    }
}

?>