<?php
$data=file_get_contents("data/Experiences.yaml");
$content=yaml_parse($data);
echo "<div class='ex1'>";

echo "<h3>".$data['Posteoccupe']."</h3>";
echo "<h3>".$data['Entreprise']."</h3>";
echo "<h3>".$data['Date']."</h3>";
echo "<h3>".$data['Lieu']."</h3>";
echo "<h3>".$data['Tachesrealisees']."</h3>";

echo "<h3>".$data['Posteoccupe2']."</h3>";
echo "<h3>".$data['Entreprise2']."</h3>";
echo "<h3>".$data['Date2']."</h3>";
echo "<h3>".$data['Lieu2']."</h3>";
echo "<h3>".$data['Tachesrealisees2']."</h3>";

echo "<h3>".$data['Posteoccupe3']."</h3>";
echo "<h3>".$data['Entreprise3']."</h3>";
echo "<h3>".$data['Date3']."</h3>";
echo "<h3>".$data['Lieu3']."</h3>";
echo "<h3>".$data['Tachesrealisees3']."</h3>";
?>