<?php
$content=\file_get_contents('data/Accueil.yaml');
$data=yaml_parse($content);
echo "<div class='ac1'>";
    echo "<div>";
        echo "<h1>".$data['nom']."</h1>";
        echo "<h2>".$data['accroche']."</h2>";
    echo "</div>";
    echo "<img src='./images/vegeta.jfif' class='image'>";
echo "</div>";

?>