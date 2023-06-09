<?php
require('../functions.php');

$id = $_GET["id"];

if(delete($id) > 0) {
    echo "
        <script>
            alert('Berhasil terhapus');
            document.location.href= 'admin.php';
        </script>";
} else {
    echo "
        <script>
            alert('Berhasil terhapus');
            document.location.href= 'admin.php';
        </script>";
}


?>