<?php
require_once 'config.php';
require_once 'function.php';
afficherNotes($notes);
$moyenne = Moyenne($notes);
echo "<h3>La moyenne : $moyenne</h3>";
afficherTableau("Les étudiants admis :", etudiantsAdmis($notes, $seuilAdmission));
afficherTableau("Les notes triées :", notesTriees($notes));
afficherTableau("Plus un à toutes les notes des étudiants :", ajouterUn($notes));
?>