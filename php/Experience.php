<?php
$contenuuu=file_get_contents('data/Experiences.yaml');
$xp=yaml_parse($contenuuu);

foreach ($xp as $cle) {
    echo "<div class='job'> j'ai travaillé dans le domaine de ".$cle['Posteoccupe']."<br>";
    echo "de ". $cle['Date']."<br>";
    echo "ma fonction etait: ". $cle['Tachesrealisees']."<br> </div> <br> <br>";
}
?>