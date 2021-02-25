<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LSP LATIHAN</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/font/glyphicons-halflings-regular.ttf">

  </head>
  <body>

    <div class="container">
      <h1>LSP LATIHAN</h1>
      <hr>
    </div>

<!-- KONTEN UTAMA -->
    <div class="container">
      <h2>Edit User</h2>
      <div class="row">
        <form action="<?=base_url()?>index.php/home/updatedata" method="post" enctype="multipart/form-data">
          <label>Nama</label><br>
          <input type="text" name="name" value="<?=$data->name?>"><br><br>
          <label>Alamat</label><br>
          <textarea name="alamat" rows="8" cols="80"><?=$data->alamat?></textarea><br><br>
          <label>foto</label><br>
          <input type="file" name="fotopost"><br><br>

          <!-- file lama -->
          <input type="hidden" name="filelama" value="<?=$data->foto?>">
          <!-- ID -->
          <input type="hidden" name="id" value="<?=$data->id?>">

          <input type="submit" name="submit" value="Ubah" class="btn btn-default">
        </form>

      </div>
    </div>
<!-- END KONTEN UTAMA -->

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
