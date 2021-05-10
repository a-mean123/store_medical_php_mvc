<p>L'ordonnace  a bien été créé</p>
<?php
$ref_ordonnance = $u->getRef_ordonnance(); 
echo "<p> l 'ordonnance <a href='index.php?controller=ordonance&action=read&ref_ordonnance=$ref_ordonnance'> $ref_ordonnance </a> </p>" ;
$date_ordonance = $u->getDate_ordonnance(); 
echo "<p> l'ordonnance <a href='index.php?controller=getDate_ordonnance&action=read&date_ordonnance=$date_ordonnance'> $date_ordonnance </a> </p>" ;

$contenu = $u->getPrenom(); 
echo "<p> l'ordonnance <a href='index.php?controller=contenu&action=read&contenu=$contenu'> $contenu </a> </p>" ;

?>