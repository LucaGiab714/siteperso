<?php
$content=\file_get_contents('data/Formation.yaml');
$data=yaml_parse($content);
echo "<div class='f1'>";
    echo "<div>";
        echo "<h3>".$data['namforma']."</h3>";
        echo "<h3>".$data['etablissement']."</h3>";
        echo "<h3>".$data['datedeb']."</h3>";
        echo "<h3>".$data['datefin']."</h3>";
        echo "<h3>".$data['lieu']."</h3>";
        echo "<h3>".$data['contenu']."</h3>";

        echo "<h3>".$data['namforma2']."</h3>";
        echo "<h3>".$data['etablissement2']."</h3>";
        echo "<h3>".$data['datedeb2']."</h3>";
        echo "<h3>".$data['datefin2']."</h3>";
        echo "<h3>".$data['lieu2']."</h3>";
        echo "<h3>".$data['contenu2']."</h3>";
    echo "</div>";

    ?>