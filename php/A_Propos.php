<?php
$content=\file_get_contents('data/A_Propos.yaml');
$data=yaml_parse($content);
echo "<div class='ap1'>";
echo "<h2>".$data['accroche']."</h2>";
echo "<h3>".$data['presentation']."</h3>";
echo "<h3>".$data['activitees']."</h3>";
echo "<h3>".$data['passions']."</h3>";
echo "<img src=".$data['photo']."></img>";
echo "</div>";
?>