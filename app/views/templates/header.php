<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link href="images/logo/favicon.png" rel="icon">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-info">
<div class="container">
  <a class="navbar-brand" href="<?= BASEURL; ?>"><font color ="white">MVC</font></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?= BASEURL; ?>"><font color ="white">Home</font> <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?= BASEURL; ?>/casing"><font color ="white">Case</font></a>
      <a class="nav-item nav-link" href="<?= BASEURL; ?>/mahasiswa"><font color ="white">Pelanggan</font></a>
      <a class="nav-item nav-link" href="<?= BASEURL; ?>/casing/faq"><font color ="white">FAQ</font></a>
      <a class="nav-item nav-link" href="<?= BASEURL; ?>/about"><font color ="white">About</font></a>

    </div>
  </div>

<!-- <div class="pull-right">
<nav class="navbar navbar-light bg">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Cari Case" aria-label="Search">
    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav> -->
</div>

</nav>