<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
 $acesso = 2;
 $html = "";
    if ($acesso == 1) {
        
    } else {
        $html .= "Acesso Usuario comum <br>";
        $html .= "<a href='google.com'>Google</a>";
        echo $html;
    }

?>