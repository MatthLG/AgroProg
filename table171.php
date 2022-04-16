<?php

class Animal {
	
	public $nom ;
	public $conversion ;
	public $nombre ;
	
	public function __construct ($nom, $conversion){
		
		$this->nom = $nom;
		$this->conversion = $conversion;
		$this->nombre=0; 
		
	}
	
	public function getNombre($nombre) {
		
		$this->nombre = $nombre;
	}
	
	
} 












$a1 = new Animal("chevaux de moins de 3 ans", 0.75);
$a2 = new Animal("chevaux de plus de 3 ans", 1.35);
$a3 = new Animal("bovins de moins de 1 an", 0.12);
$a4 = new Animal("bovins de 1 à 2 ans", 0.7);
$a5 = new Animal("taureaux", 1.4);
$a6 = new Animal("boeufs de trait", 1.2);
$a7 = new Animal("boeufs à l'engrais", 1);
$a8 = new Animal("génisses pleines de plus de 2 ans", 1);
$a9 = new Animal("vaches à lait", 1);
$b1 = new Animal("porcelet de moins de 8 semaines", 0.02);
$b2 = new Animal("jeunes porcs de moins de 6 mois", 0.1);
$b3 = new Animal("porcs à l'engrais de plus de 6 mois", 0.25);
$b4 = new Animal("truies ou verrats", 0.3);
$b5 = new Animal("brebis avec son tout jeune agneau", 0.1);
$b6 = new Animal("béliers", 0.1);
$b7 = new Animal("Moutons", 0.1);
$b8 = new Animal("agneaux", 0.05);






echo "<h1>conversion en UGB</h1>";	 
		 
$myvars =  array( "a1","a2", "a3","a4","a5","a6","a7","a8","a9","b1","b2","b3","b4","b5","b6","b7","b8"	);
	if(isset($_POST["submit"])){
		
		$cumul=0.0;
		for ($i = 0; $i <= 16 ; $i++) {
        $myvar = $myvars[$i];
		if (isset($_POST[$myvar])) $$myvar->nombre=$_POST[$myvar];
		$cumul += (float)$$myvar->nombre*(float)$$myvar->conversion;
		if ($i == 16) break;
		}
	    echo 'Vous avez ';
		echo $cumul;
		echo 'ugb';
	}
		
echo "<FORM method='post' >";

for ($i = 0; $i <= 16 ; $i++) {
    $myvar = $myvars[$i];
	echo"<DIV><INPUT type='number' name='"; 
	
	echo $myvar; 
	
	echo"' value='";
	echo $$myvar->nombre; 
	echo"'> ";
	echo 	$$myvar->nom;
	echo"</DIV>";
	
    if ($i == 16) {
		echo "<DIV><button type='submit' name='submit'>Soumettre le troupeau</DIV>";
		echo"</FORM>";	
		break;
    }	
}