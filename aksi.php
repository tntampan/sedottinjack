    <?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database_name = "formulir_layanan";

    $db = mysqli_connect($hostname, $username, $password, $database_name);

    if($db->connect_error) {
        echo "koneksi rusak";
        die("error!");
    }

    ?>

    