<?php
require('../functions.php');

$news = query("SELECT * FROM news_tubes");
if(empty($_SESSION)) {
  header('Location: ../'); exit;
}
if($_SESSION['level'] != 'admin'){
  header("Location: ../user/user.php"); 
}





if(isset($_POST["upload"])) {
  // var_dump($_POST);
  // var_dump($_FILES); die();
  if(add_news($_POST) > 0){
    echo "
        <script>
            alert('Succes');
            document.location.href = 'admin.php';
        </script>";
  }
}

$kategori = query("SELECT * FROM kategori");

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>admin Template</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
 
    <style>
    body{
	
    font-family: 'Quicksand', sans-serif;
}

.wrapper{
	width:100%;
	height: 100%;
}
.navbar{
	margin-bottom: 0;
}
.sidebar{
	width: 100%;
	height: 100%;
	background: #293949;
	position: absolute;
	z-index: 100;
}
ul{
	padding: 0;
	margin-left: -40px;
}
ul li{
	list-style: none;
	border-bottom: 1px solid rgba(255, 255, 255, 0.5); 
}
ul li a{
	text-decoration: none;
	color: #aeb2b7;
	display: block;
	padding: 19px 0px 18px 25px;
	transition: all 200ms ease-in;
}
ul li a:hover{
	text-decoration: none;
	color: #1abc9c;
}
ul li a:visited{
	text-decoration: none;
	color: #fff;
}
li li a span{
	display: inline-block;
}
ul ul{
	display: none;
	margin:0px;
}
ul li a .fa-angle-down{
	margin-right: 10px;
}

.inner p {
  text-align: center;
}

/*apabila lebar min 768px*/
@media(min-width: 768px) {
	.sidebar{
		width: 240px;
	}
	.content{
		margin-left: 250px;
	}
	.inner{
		padding: 15px;
	}

  @media print {
    .logout, .dashboard {
      display: none;
    }

  }
}

</style>

  </head>
  <body>
    <div class="wrapper">
      <nav class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Tribun Unpas</a>
        </div>
      </nav>
      <aside class="sidebar">
        <menu>
          <ul class="menu-content">
            <li ><a href="#" ><i class="fa fa-home"></i> Dashboard</a></li>
            <li ><a href="../logout.php" ><i class="fa fa-sign-out"></i> <span>Log out</span></a></li>
          </ul>
        </menu>
      </aside>
      <section class="content">
        <div class="inner">
        <form action="" method="post" enctype="multipart/form-data">
            <table class="table" id="myTable">
            <thead>
              <tr>
                <th scope="col">NO</th>
                <th scope="col">Foto</th>
                <th scope="col">Judul</th>
                <th scope="col">Kategori</th>
                <th scope="col">Dekripsi</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; foreach($news as $new) : ?>
              <tr>
                <th scope="row"><?= $i++ ?></th>
                <td>
                  <img src="img/<?= $new["foto"]; ?>" style="width: 100%;">
                </td>
                <td><?= $new["judul"]; ?></td>
                <td><?= $new["kategori"]; ?></td>
                <td><?= substr(html_entity_decode($new["deskripsi"]), 0, 100); ?></td>

                <td style= "display:flex;" class="aksi">

                  <a href="delete.php?id=<?= $new["id"] ?>" class= "btn btn-warning btn-sm confirm">HAPUS</a> | 
                  <a href="ubah.php?id=<?= $new["id"]; ?>" class= "btn btn-danger btn-sm">UBAH</a>
            
                </td>
              </tr>
              <?php endforeach ; ?>
              
              
              <tr>
                  <th scope="row">#</th>
                  <td>
                    <input class="form-control" type="file" name="foto" id="formFile" style="max-width: 250px;">
                  </td>
                  <td>
                    <input type="text" name="judul" id="judul" placeholder="Masukkan Judul">
                  </td>
                  <td>
                    <select name="kategori" id="kategori">
                      <?php foreach($kategori as $k) :?>
                      <option value="<?= $k['id_kategori'] ?>"><?= $k['nama_kategori'] ?></option>
                      <?php endforeach; ?>
                    </select>
                  </td>
                  <td>
                    <input type="text" name="deskripsi" id="deskripsi" placeholder="Masukkan Deskripsi">
                  </td>
                  <td>
                  <button type="submit" name="upload" id="upload" class="btn btn-primary">Upload</button>
                  </td>
              </tr>
              
            </tbody>
          </table>
          </form>
        </div>
      </section>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function () {
          $('#myTable').DataTable();
      });
    </script>
  
    </body>
</html>
