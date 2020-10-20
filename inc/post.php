<style>
    body {
        background-color: black;
    }

    h1 {
        margin-left: auto;
        margin-right: auto;
        max-width: 300px;
        color: white;
    }
</style>

<?php

require 'conn.php';
require 'ip.php';
require '../functions/functions.php';

if (isset($_POST)) {
    handlePost($_POST, $rawip);
}




?>