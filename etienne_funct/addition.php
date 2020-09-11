<?php
    
    function hr() {
        echo "<hr/>" ;
    }
    
    /*
        // Interdiction d'utiliser des fonctions natives de PHP
        
        // Pour chaque exercice, exécuter 3 fois la fonction avec des paramètres différents
        
14h30   1 - Créer une fonction prenant un unique paramètre et affichant son carré
        2 - Créer une fonction prenant 2 paramètres $a et $b et affichant $a à la puissance $b.
        3 - Créer la fonction min() affichant le nombre minimum d'un tableau de nombres
16h00   4 - Créer une fonction reverse() prenant en paramètre une chaine de caractères et affichant l'inverse de cette chaine (exemple : "Bonjour" => "ruojnoB")
    */

    // 1 -
    function carre( $a ) {
        echo ( $a * $a ) . "<br/>" ;
    }
    
    carre( 5 );
    carre( 4 );
    carre( 10 );
    
    hr();
    
    // 2 -
    function puissance( $nombre, $puissance ) {
        $resultat = $nombre ;
        for( $i = 1 ; $i < $puissance ; $i++ ) {
            $resultat *= $nombre ;
        }
        echo $resultat . "<br/>" ;
    }
    
    puissance( 2, 4 );
    puissance( 10, 3 );
    puissance( 5, 3 );
    
    hr();
    
   
    
	// 4 -
	


	function genererChaineAleatoire($longueur = 10)
	{
	$caracteres = 'Bonjour';
	$longueurMax = strlen($caracteres);
	$chaineAleatoire = 'Bonjour';
	for ($i = 0; $i < $longueur; $i++)
	{
	$chaineAleatoire .= $caracteres[rand(0, $longueurMax - 1)];
	}
	return $chaineAleatoire;
	}
	//Utilisation de la fonction
	echo genererChaineAleatoire();
	echo genererChaineAleatoire(7);

?>


