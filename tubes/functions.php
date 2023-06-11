<?php
$conn = mysqli_connect('localhost', 'root', '', 'tubes_database');

session_start();

function query($data) {
    global $conn;
    
    $result = mysqli_query($conn,$data) or die(mysqli_error($conn));
    $rows = [];

    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
        return $rows;

}

function add_news($data) {
    global $conn;

    $judul = htmlspecialchars($data["judul"], ENT_QUOTES);
    $kategori = $data["kategori"];
    $deskripsi = htmlspecialchars($data["deskripsi"], ENT_QUOTES);

    $foto = upload_news();
    
    $upload = "INSERT INTO `news_tubes` 
                    (`id`, `foto`, `judul`, `kategori`, `deskripsi`) 
                    VALUES 
                    (NULL, '$foto', '$judul', '$kategori', '$deskripsi')";
    
    mysqli_query($conn, $upload)or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function upload_news() {
    global $conn;

    $nameImage = $_FILES['foto']['name'];
    $size = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    $ekstensionImageValid = ['jpg', 'jpeg', 'png'];
    $ekstensionImage = explode('.', $nameImage);
    $ekstensionImage = strtolower(end($ekstensionImage));

    if(!in_array($ekstensionImage, $ekstensionImageValid)){
        echo "
            <script>
                alert('Gambar yang anda Upload tidak valid');
            </script>";
        return false;
    }

    $newNameImage = uniqid();
    $newNameImage .= '.';
    $newNameImage .= $ekstensionImage;

    move_uploaded_file($tmpName, 'img/' . $newNameImage);
    return $newNameImage;
}

function delete($id) {
    global $conn;

    mysqli_query($conn, "DELETE FROM `news_tubes` WHERE `news_tubes`.`id` = $id")or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


function registrasi($data) {
    global $conn;

    $username = strtolower(stripcslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);

    $password = password_hash($password, PASSWORD_DEFAULT);

    $register = "INSERT INTO `login` 
                            (`username`, `password`, `level`) 
                            VALUES 
                            ('$username', '$password', 'user')";

    mysqli_query($conn, $register)or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);

}

function login($data)
{
    $_SESSION['roles'] = $role;
}

function edit($data)
{
    global $conn;
    $id = $data['id'];
    $new = query("SELECT * FROM news_tubes WHERE id = '$id'")[0];
    
    $judul = htmlspecialchars($data["judul"], ENT_QUOTES);
    $kategori = $data["kategori"];
    $deskripsi = htmlspecialchars($data["deskripsi"], ENT_QUOTES);
    
    if(!$_FILES['foto']['error'] == 4){
        $foto = upload_news();
    } else {
        $foto = $new['foto'];
    }
    
    $upload = "UPDATE news_tubes SET
                `judul`     = '{$judul}',
                `foto`      = '{$foto}',
                `kategori`  = '{$kategori}',
                `deskripsi` = '{$deskripsi}'
                WHERE `id`  = '{$id}'";
    
    mysqli_query($conn, $upload)or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);   
}




?>