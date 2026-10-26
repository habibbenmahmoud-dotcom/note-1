<?php
function Moyenne (array $tab) : float
{
    return array_sum($tab)/count($tab);
}
function affichenote(array $tab): void 
{
    foreach ($tab as $cle => $valeur)
    {
        echo "$cle:$valeur<br>";
    }
}
function etuAdmis (array $tab, int $seuil): array
{
    return array_filter ($tab, fn($valeur) => $valeur >= $seuil);
}
function notetriées (array $tab): array 
{
    rsort($tab);
    return $tab;
}
function ajouter1(array $tab): array
{
    return array_map (fn($valeur) => $valeur + 1, $tab);
}
function affichertab (string $titre, array $tab):void 
{
    echo "<h3>$titre</h3><br>";
    echo "<pre>";
    print_r($tab);
    echo "</pre>";
}
?>