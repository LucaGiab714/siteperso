<?php
$content=\file_get_contents('data/Compétences.yaml');
$data=yaml_parse($content);
echo "<div class='c1'>";
foreach($data as $competences){
        echo "<h2>".$competences['domaine']."</h2>";
        foreach($competences['items'] as $items){
            echo "<p>".$items['nom']."</p>";
            echo "<div class='progress-bar blue'>".$items['niveau']."</div>";
        }  
}
?>