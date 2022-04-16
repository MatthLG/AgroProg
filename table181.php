<?php
$dureederepos;
$tempsdesejour;
$nombredegroupe;

echo "<h1>Nombre de parcelles nécessaire pour un pâturage rationnel</h1>";
if(isset($_POST["submit"])){

$dureederepos = $_POST["dureederepos"];
$tempsdesejour = $_POST["tempsdesejour"];
$nombredegroupe = $_POST["nombredegroupe"];

$nombredeparcelle = ($dureederepos/$tempsdesejour)+$nombredegroupe;

	echo $nombredeparcelle;
}

echo"
<form method ='post'>
<div><input type='number' name='dureederepos'> temps de repos
</div><div><input type='number' name='tempsdesejour'> temps de séjour
</div><div><input type='number' name='nombredegroupe'> nombre de groupe
</div><div><input type='submit' name='submit'>
</div>
";