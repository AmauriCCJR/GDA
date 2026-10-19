<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <?php include 'includes/head.php'; ?>
  <link rel="stylesheet" href="<?= base_url('assets/css/loading.css') ?>">
</head>

<body class="gda-loading-screen" data-destino="<?= base_url('/') ?>">

  <img src="<?= base_url('assets/img/logo.png') ?>" alt="GDA" class="gda-loading-logo">

  <div class="gda-orbit-ring" id="gdaRing">
    <div class="gda-orb"></div>
    <div class="gda-orb"></div>
    <div class="gda-orb"></div>
    <div class="gda-orb"></div>
    <div class="gda-orb"></div>
    <div class="gda-orb"></div>
    <div class="gda-orb"></div>
    <div class="gda-orb"></div>
  </div>

  <script src="<?= base_url('assets/js/loading.js') ?>"></script>
</body>

</html>