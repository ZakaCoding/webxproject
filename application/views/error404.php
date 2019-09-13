<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Halaman tidak ditemukan</title>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Bimbel Bee Star</title>

  <!-- CSS  -->
  <link href="<?php echo base_url() ?>assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url() ?>assets/css/materialize-icons.css" type="text/css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <!-- Your custom styles (optional) -->
    <link href="<?php echo base_url() ?>assets/css/tambahan.css" rel="stylesheet">
    <style>
        .img-responsive{
            max-height: 200px;
            display: block;
        }
        .container{
            padding:10%;
        }
    </style>
</head>
</head>
<body>
    <?php $this->load->view('components/navbar.php') ?>
    <div class ="container">
    <center>
    <h4>Oop's maaf halaman yang Anda <br>cari tidak ditemukan</h4>
    <img src="<?php echo base_url() ?>assets/img/404.png" class="img-responsive" alt="">
    <button class="btn btn-danger"  onclick="javascript:history.back()"><i class="fa fa-arrow-left"></i>Kembali</button>
    </center>
    </div>

</body>
</html>