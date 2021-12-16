<?php
$content=\file_get_contents('data/Compétences.yaml');
$data=yaml_parse($content);
echo "<div class='c1'>";

echo "<h3>".$data['Domaines']."</h3>";
echo "<h3>".$data['Items pour chaque domaine']."</h3>";
?>