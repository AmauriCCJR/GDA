<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>GDA</title>
<link rel="icon" type="image/x-icon" href="../assets/img/logo.png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
<link rel="stylesheet" href="css/style.css">

<?php 
    $caminho = 'app/helpers/helper.php';
    while (!file_exists($caminho)) {
        $caminho = '../' . $caminho;
    }
    require_once $caminho;
?>