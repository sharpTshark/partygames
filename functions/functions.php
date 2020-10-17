<?php

function handlePost($post) {

    if (isset($post['theme-color'])) {
        var_dump($post['theme-color']);
        $theme = $post['theme-color'];
        $sql = "UPDATE users SET theme='$theme' WHERE ip=$rawip";
        if(mysqli_query($conn, $sql)){
            echo "Records were updated successfully."; ?>
            <meta http-equiv="refresh" content="0.1;url=<?php echo $url ?>" /> <?php    
        }
    }
}
?>